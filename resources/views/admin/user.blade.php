@extends('layouts.appAdmin')

@section('content')

<div class="content-wrapper" ng-app="AdminApp">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      User Management
      <small>advanced management</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">User</a></li>
      <li class="active">All</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
        <p>
       <button data-toggle="modal"  data-target="#addNewCourse" class="btn_margin btn pull-right btn-success" >Add new user</button>
       <br><br><br>
       </p>
      </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Hover Data Table</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body" ng-controller="TablesDataController">
            <table datatable="ng" class="table table-bordered table-hover" >
              <thead>
              <tr>
                <th>No.</th>
                <th>Firstname</th>
                <th>Email</th>
                <th>Level</th>
              </tr>
              </thead>
              <tbody>

              <tr ng-repeat="user in users" >

                <td><a  href="{{ url('/admin/user/edit')}}/<%user.id%>"><%$index%></a></td>
                <td><%user.firstname%></td>
                <td><%user.lastname%></td>
                <td><%user.icon%></td>
              </tr>
              </tbody>
              <tfoot>
              </tfoot>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->

   <div class="modal fade" ng-controller="ActionSectionController" id="addNewCourse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Add New Course</h4>
                  </div>
                  <div class="modal-body">  
                    <form role="form" ng-controller="CreateUserController">
                      <div class="box-body">
                        <div class="form-group" ng-class="{'has-error': msg.name}">
                          <label for="email">Name</label>
                          <input type="text" class="form-control" ng-model="name" placeholder="Enter name">
                          <span class="help-block"><%msg.name[0]%></span>
                        </div>
                        <div class="form-group" ng-class="{'has-error': msg.name}">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" ng-model="email" placeholder="Enter email">
                          <span class="help-block"><%msg.email[0]%></span>
                        </div>
                        <div class="form-group" ng-class="{'has-error': msg.password}">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" ng-model="password" placeholder="Password">
                          <span class="help-block"><%msg.password[0]%></span>
                        </div>
                        <div class="form-group" ng-class="{'has-error': msg.repassword}">
                          <label for="exampleInputPassword1">Password Again</label>
                          <input type="password" class="form-control" ng-model="repassword" placeholder="Re-Enter Password">
                          <span class="help-block"><%msg.repassword%></span>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> Admin
                          </label>
                        </div>
                      </div>
                      <!-- /.box-body -->

                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary" ng-click="save()">Submit</button>
                      </div>
                    </form>
                  
              </div>
          </div>
      </div>
    </div>
</div>

@endsection

@section('script')
@endsection
