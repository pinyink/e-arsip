  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Setting User
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">setting</a></li>
        <li class="active">users</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">

        </div>
      </div>

      <!-- SELECT2 EXAMPLE -->
      <div id="box_user" class="box box-info">
        <div class="box-header with-border">
          <div>
            <button class="btn btn-sm btn-default btn-flat" onclick="reload_table()" data-toggle="tooltip" data-placement="top" title="refresh"><i class="fa fa-refresh"></i></button>
            <button class="btn btn-sm btn-info btn-flat" onclick="add()" data-toggle="tooltip" data-placement="top" title="add"><i class="fa fa-plus"></i></button>
            <button class="btn btn-sm btn-primary btn-flat" onclick="setting_status()" data-toggle="tooltip" data-placement="top" title="setting status user"><i class="fa fa-gear"></i></button>
          </div>
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <table id="table" class="table table-bordered table-striped text-center" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>username</th>
                          <th>privilages</th>
                          <th>created</th>
                          <th>Status</th>
                          <th></th>
                      </tr>
                  </thead>
                  <tbody>
                  </tbody>
              </table>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
      </div>
      <!-- /.box -->

      <!-- box user status setting -->
      <div id="box_user_status" class="box box-success fade">
        <div class="box-header with-border">
          <div>
            <button class="btn btn-sm btn-flat" onclick="back()" data-toggle="tooltip" data-placement="top" title="back"><i class="fa fa-backward"></i></button>
            <button class="btn btn-sm btn-flat" onclick="reload_table_status()" data-toggle="tooltip" data-placement="top" title="reload"><i class="fa fa-refresh"></i></button>
            <button class="btn btn-sm btn-info btn-flat" onclick="add_status()" data-toggle="tooltip" data-placement="top" title="add new status"><i class="fa fa-plus"></i></button>
          </div>
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <table id="table_user_status" class="table table-bordered table-striped text-center" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Id</th>
                          <th>Desc</th>
                          <th>Color</th>
                          <th>Allow to Login</th>
                          <th></th>
                      </tr>
                  </thead>
                  <tbody>
                  </tbody>
              </table>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <div class="box-footer"></div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Bootstrap modal -->
  <div class="modal fade" id="modal_add" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-purple">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Book Form</h3>
        </div>
        <div class="modal-body form">
         <form action="#" id="form_add" class="form-horizontal">
            <input type="hidden" value="" name="id_user"/>
            <input type="hidden" value="" name="username2"/>
            <div class="form-body">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-3">Username</label>
                <div class="col-md-7 col-sm-7 col-xs-7">
                  <input name="username" placeholder="Username" class="form-control" type="text">
                </div>
              </div>
            </div>
            <div class="form-body">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-3">Password</label>
                <div class="col-md-7 col-sm-7 col-xs-7">
                  <input name="password" placeholder="password" class="form-control" type="password">
                </div>
              </div>
            </div>
            <div class="form-body">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-3">privilage</label>
                <div class="col-md-7 col-sm-7 col-xs-7">
                  <select class="form-control" name="priv" required>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-body">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-3">Status</label>
                <div class="col-md-7 col-sm-7 col-xs-7">
                  <select class="form-control" name="status" required>
                  </select>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!-- End Bootstrap modal -->

  <!-- Bootstrap modal -->
  <div class="modal fade" id="modal_reset" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-purple">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Book Form</h3>
        </div>
        <div class="modal-body form">
         <form action="#" id="form_reset" class="form-horizontal">
            <input type="hidden" value="" name="id_user"/>
            <div class="form-body">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-3">New Password</label>
                <div class="col-md-7 col-sm-7 col-xs-7">
                  <input name="new" placeholder="password" class="form-control" type="password">
                </div>
              </div>
            </div>
            <div class="form-body">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-3">Retype Password</label>
                <div class="col-md-7 col-sm-7 col-xs-7">
                  <input name="retype" placeholder="password" class="form-control" type="password">
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" id="btnSave" onclick="save_reset()" class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
    <!-- End Bootstrap modal -->

  <!-- Bootstrap modal -->
  <div class="modal fade" id="modal_user_status" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-purple">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Book Form</h3>
        </div>
        <div class="modal-body form">
         <form action="#" id="form_status" class="form-horizontal">
            <input type="hidden" value="" name="id_user_status"/>
            <div class="form-body">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-3">ID</label>
                <div class="col-md-7 col-sm-7 col-xs-7">
                  <input name="id_status" placeholder="ID" class="form-control" type="text">
                </div>
              </div>
            </div>
            <div class="form-body">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-3">Desc</label>
                <div class="col-md-7 col-sm-7 col-xs-7">
                  <input name="desc_status" placeholder="Desc Status" class="form-control" type="text">
                </div>
              </div>
            </div>
            <div class="form-body">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-3">Color</label>
                <div class="col-md-7 col-sm-7 col-xs-7">
                  <div class="input-group my-colorpicker2">
                    <input name="color_status" placeholder="Choose Color" class="form-control" type="text">
                    <div class="input-group-addon">
                      <i id="color_review"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-body">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-3">Allow to Login</label>
                <div class="col-md-7 col-sm-7 col-xs-7">
                  <select class="form-control" name="alto" required>
                  </select>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!-- End Bootstrap modal -->