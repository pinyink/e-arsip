<script type="text/javascript">
   
  var table;
  var save_method;
  var form_modal = '<form action="#" id="form_add" class="form-horizontal"><input type="hidden" value="" name="inputIdPriv"/><div class="form-body"><div class="form-group"><label class="control-label col-md-3 col-sm-3 col-xs-3">Name Privilages</label><div class="col-md-7 col-sm-7 col-xs-7"><input name="inputDescPriv" placeholder="Name Privilages" class="form-control" type="text"></div></div></div><div class="form-body"><div class="form-group"><label class="control-label col-md-3 col-sm-3 col-xs-3">Description more</label><div class="col-md-7 col-sm-7 col-xs-7"><textarea class="form-control" name="inputDescPrivMore"></textarea></div></div></div></form>';
  var form_setting = '<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"></div></div>';
  var content = '';

  $(document).ready(function() {
   
    //datatables
    table = $('#table').DataTable({ 
 
        "processing": false, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo base_url('admin/priv/ajax_list')?>",
            "type": "POST"
        },
 
        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],
 
    });
   
  });

  function reload_table()
  {
    table.ajax.reload(null, false);
  }

  function add()
  {
    save_method = 'add';
    // $('#form_add')[0].reset();
    $('#modal_form').empty();
    $('#modal_form').html(form_modal);
    $('#modal_add .modal-title').text('Add Data Privilages');
    $('#modal_add').modal('show'); // show bootstrap modal
  }

  function back()
  {
    $('#box_body_content').html(content);
    $('#box_footer_content').empty();
  }

  function edit(id)
  {
    save_method = 'edit';
    // $('#form_add')[0].reset();
    $.ajax({
      url : "<?php echo base_url('admin/priv/ajax_edit/')?>"+id,
      type: "GET",
      dataType: "JSON",
      success: function(data)
      {
        $('#modal_form').empty();
        $('#modal_form').html(form_modal);
        $('[name="inputIdPriv"]').val(data.result.id_priv);
        $('[name="inputDescPriv"]').val(data.result.desc_priv);
        $('[name="inputDescPrivMore"]').val(data.result.desc_priv_more);
        $('#modal_add .modal-title').text('Edit Privilages');
        $('#modal_add').modal('show'); // show bootstrap modal
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
          notification('Error loading from ajax !!!');
      }
    });
  }

  function setting(id)
  {
    window.location.replace("<?php echo base_url('admin/priv/permission/')?>"+id);
  }

  function save()
  {
    var url;
    if(save_method == 'add')
    {
      url = "<?php echo base_url('admin/priv/add_priv')?>";
    }
    else if(save_method == 'edit')
    {
      url = "<?php echo base_url('admin/priv/update')?>";
    }
     // ajax adding data to database
     if ( !$('[name="inputDescPriv"]').val()) {
      notify('warning', 'notification', 'Data Must Be Set First');
     }
     else{
      $.ajax({
        url : url,
        type: "POST",
        data: $('#form_add').serialize(),
        dataType: "JSON",
        success: function(data)
        {
          // if add success
          $('#modal_add').modal('hide');
          notify(data.status, data.status, data.ket)
          reload_table();
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
          $('#modal_add').modal('hide');
          notify('error', 'error', 'saving data error');
          // $.notify("Saving Error", "warn");
        }
      });
     }
  }

  $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
    checkboxClass: 'icheckbox_flat-green',
    radioClass   : 'iradio_flat-green'
  })
  </script>