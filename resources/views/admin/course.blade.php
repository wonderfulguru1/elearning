@extends('layouts.appAdmin')

@section('content')

<div class="content-wrapper" ng-app="AdminApp">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Course Management
      <small>advanced management</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Course</a></li>
      <li class="active">All Course</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content" ng-controller="CourseListController">
      <div class="row">
        <p>
       <button ng-hide="course.length == 0"  data-toggle="modal"  data-target="#addNewCourse" class="btn_margin btn pull-right btn-success" >Add new course</button>
       <br><br><br>
       </p>
      </div>
    <!-- /.row -->
    <div class="row" ng-controller="CourseListController">
      <div ng-show="course.length == 0" class="text-center">
        <h2 class="text-center" > No courses added yet please as a course</h2>
        <button   data-toggle="modal"  data-target="#addNewCourse" class="btn_margin btn  btn-success" >Add new course</button>
      </div>
       <div class="col-md-3" ng-repeat="course in course" ng-hide="course.length == 0">
          <!-- DIRECT CHAT WARNING -->
          <div class="box box-warning direct-chat direct-chat-warning">
            <div class="box-header with-border">
              <h3 class="headtext box-title">Lectural: <%course.owner_count.name%></h3>            
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Conversations are loaded here -->
              <div class="thumbnail" style="height:345px;">
                <div style="height:140px; display: block; width:100%;overflow:hidden;">
                  <img  class="col-md-12"   src="/image/<%course.src%>" alt="User Avatar">
                </div>
                  <h3 class="widget-user-username  text-center"><%course.name%></h3>
                  <ul class="nav nav-stacked">
                    <li><a href="#">Sections <span class="pull-right badge bg-blue"><%course.section_count%></span></a></li>
                    <li><a href="#">Register Students <span class="pull-right badge bg-aqua"><%course.user_count%></span></a></li>
                  </ul>
                   <p style="padding: 15px;"><%course.about  | limitTo: 100  %> <%course.about.length > 20 ? '...' : ''%></p>
              </div>
               <div class="box-footer">
                <div class="input-group">
                   <button ng-click="publish(course)" class="btn_margin btn btn-sm btn-success" ng-class="{'btn-warning':course.statusText=='unPublish','btn-success':course.statusText=='Publish'}"><%course.statusText%></button>
                  <button class="btn_margin btn btn-sm btn-danger" ng-click="deleteCourse(course.id)">
                    <i class="material-icons f18 mdl-color-text--red-400">Delete</i>
                  </button>
                   <button ng-click="openUsers(course.id)" class="btn_margin btn btn-sm btn-success" >View participants</button>
                   <button ng-click="openEditPage(course.id)" class="btn_margin btn btn-sm  btn-success" >   View course</button>
                </div>
            </div>
            </div>
          </div>
          <!--/.direct-chat -->
        </div>
      </div>
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
                    <form role="form" ng-controller="CourseAddController">
                      <div class="box-body">
                        <div class="form-group" ng-class="{'has-error': msg.name}">
                          <label for="email">Name</label>
                          <input type="text" class="form-control" ng-model="name" placeholder="Enter name">
                          <span class="help-block"><%msg.name[0]%></span>
                        </div>
                        <div class="form-group">
                        <label>Subtitle</label>
                        <textarea class="form-control" rows="3" ng-model="about" placeholder="Enter ..."></textarea>
                      </div>
                      <div class="form-group">
                      <label>Course Image</label>
                            <input class="mdl-textfield__input ng-valid ng-touched ng-dirty ng-valid-pattern ng-valid-min-size ng-valid-max-size ng-valid-validate-fn ng-valid-max-height ng-valid-min-height ng-valid-max-width ng-valid-min-width ng-valid-ratio ng-valid-max-duration ng-valid-min-duration ng-valid-validate-async-fn ng-valid-parse" id="upload-with-form" type="file" ngf-select ng-model="file"  name="file" accept="image/*">
                            <img ngf-thumbnail="file" style="width: 100%;">
                        </div>
                      <!-- /.box-body -->

                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary" ng-click="addCourse()">Submit</button>
                      </div>
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
