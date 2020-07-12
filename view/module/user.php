<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      User Management
      <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="dashboard"><i class="fa fa-dashboard"></i> Home</a></li>

      <li class="active">User Management</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <button class="btn btn-primary"
         data-toggle="modal" data-target="#modalAddUser">Add User</button>
         <!-- /.ini bootstrap modal untuk add user -->

      </div>
      <div class="box-body">
        <!-- here we will write the table of all users; -->
        <table class="table table-bordered table-striped">
          <!-- the table classes are from the plugin -->
          <thead>
            <tr>
              <th>#</th>
              <th>Full Name</th>
              <th>username</th>
              <th>Picture</th>
              <th>Role</th>
              <th>Status</th>
              <th>Last login</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>User Admin</td>
              <td>admin</td>
              <td><img src="view\img\user\default\anon_icon.png"
                    class="img-thumbnail" width="40px"></td>
              <td>admin</td>
              <td><button class="btn btn-success btn-xs">Activate</button></td>
              <td>2020-07-11 23:05:22</td>
              <td>
                <div class="btn-group">
                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
              </td>
            </tr>
            <tr>
              <td>1</td>
              <td>User Admin</td>
              <td>admin</td>
              <td><img src="view\img\user\default\anon_icon.png"
                    class="img-thumbnail" width="40px"></td>
              <td>admin</td>
              <td><button class="btn btn-danger btn-xs">Deactivate</button></td>
              <td>2020-07-11 23:05:22</td>
              <td>
                <div class="btn-group">
                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
      <!-- <div class="box-footer">
        Footer
      </div> -->
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- this is the modal pop ups; -->
<!-- Modal -->
<div id="modalAddUser" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
