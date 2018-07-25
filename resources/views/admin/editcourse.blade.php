@extends('layouts.appAdmin') @section('content')
<div class="content-wrapper" ng-app="AdminApp">
    <div ng-controller="CourseEditController" ng-init="init({{$id}})">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
    Data Tables
      <small>advanced tables</small>
    </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Tables</a></li>
                <li class="active">Data tables</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <img class="profile-user-img img-responsive img-circle" ng-src="/image/<%course.src%>" alt="User profile picture">
                            <h3 class="profile-username text-center">Lectural: <%course.owner_count.name%></h3>
                            <p class="text-muted text-center" style="font-weight: bold"><%course.name%></p>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Sections</b> <a class="pull-right"><%course.section_count%> </a>
                                </li>
                                <li class="list-group-item">
                                    <b>Register users</b> <a class="pull-right"><%course.user_count%> </a>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                    <!-- About Me Box -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Course Summary</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <strong><i class="fa fa-book margin-r-5"></i> <%course.name%></strong>
                            <p class="text-muted">
                               <%course.about%>
                            </p>
                            <hr>
                            <!-- <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
                            <p class="text-muted">Malibu, California</p>
                            <hr>
                            <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
                            <p>
                                <span class="label label-danger">UI Design</span>
                                <span class="label label-success">Coding</span>
                                <span class="label label-info">Javascript</span>
                                <span class="label label-warning">PHP</span>
                                <span class="label label-primary">Node.js</span>
                            </p>
                            <hr>
                            <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p> -->
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                           <li class="active"><a href="#timeline" data-toggle="tab">Add / Edit setions and content</a></li>
                           <li ><a href="#activity" data-toggle="tab">Edit Course Details</a></li>                           
                       <!--      <li><a href="#settings" data-toggle="tab">Quiz</a></li> -->
                        </ul>
                        <div class="tab-content">
                            <div class=" tab-pane" id="activity">
                                <div class="post">
                                    <form role="form">
                                        <div class="box-body">
                                            <div class="form-group" ng-class="{'has-error': msg.name}">
                                                <label for="email">Name</label>
                                                <input type="text" class="form-control" ng-model="name" placeholder="Enter name">
                                            </div>
                                            <div class="form-group">
                                                <label>Subtitle</label>
                                                <textarea class="form-control" rows="3" ng-model="about" placeholder="Enter ..."></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <div text-angular ng-model="description"></div>
                                            </div>
                                            <div class="form-group">
                                                <label>Course Image</label>
                                                <input class="mdl-textfield__input ng-valid ng-touched ng-dirty ng-valid-pattern ng-valid-min-size ng-valid-max-size ng-valid-validate-fn ng-valid-max-height ng-valid-min-height ng-valid-max-width ng-valid-min-width ng-valid-ratio ng-valid-max-duration ng-valid-min-duration ng-valid-validate-async-fn ng-valid-parse" id="upload-with-form" type="file" ngf-select ng-model="file" name="file" accept="image/*">
                                                <img ngf-thumbnail="file">
                                            </div>
                                            <!-- /.box-body -->
                                            <div class="box-footer">
                                                <button type="submit" class="btn btn-primary" ng-click="save(course.id)">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="active tab-pane" id="timeline"   ng-controller="CourseItemController" ng-init="init({{$id}},{{$pagetypesession}})">

                                <div class="modal fade" ng-controller="ActionSectionController" id="addNewContent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                  <h4 class="modal-title" id="myModalLabel">Add Content</h4>
                                              </div>
                                              <div class="modal-body">  
                                                <form ng-controller="AddSectionController">
                                                    <div class="box-body">
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" ng-model="sectionName" class="form-control" placeholder="Enter Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                            <input type="text" ng-model="objective" class="form-control" placeholder="Enter Description">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" ng-model="sectionid" class="form-control" style="display: none">
                                                        </div>
                                                    </div>
                                                    <!-- /.box-body -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary" ng-click="addSection()">Save changes</button>
                                                    </div>
                                                </form>
                                              
                                          </div>
                                      </div>
                                  </div>
                                </div>


                                <div class="modal fade" ng-controller="ActionSectionController" id="addNewSession" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                  <h4 class="modal-title" id="myModalLabel">Add Section</h4>
                                              </div>
                                              <div class="modal-body">  
                                                <form ng-controller="AddSectionController">
                                                    <div class="box-body">
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" ng-model="sectionName" class="form-control" placeholder="Enter Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                            <input type="text" ng-model="objective" class="form-control" placeholder="Enter Description">
                                                        </div>
                                                        <div class="form-group">
                                                              <input type="text" ng-model="sectionid" class="form-control"  value="<%course.id%>" style="display: none">
                                                        </div>
                                                    </div>
                                                    <!-- /.box-body -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary" ng-click="addSection()">Save changes</button>
                                                    </div>
                                                </form>
                                              
                                          </div>
                                      </div>
                                  </div>
                                </div>
                                <div class="modal fade" ng-controller="ActionSectionController" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Edit Section</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" ng-model="title" class="form-control" placeholder="Enter title">
                                                </div>
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <input type="text" ng-model="description" class="form-control" placeholder="Enter description">
                                                </div>
                                                <div class="form-group">
                                                    <button class="btn btn-block btn-danger" ng-click="deleteSection()">Delete Section</button>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" ng-click="saveTitle()">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="editModal<%subsection.id%>" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title"><%action%> <span ng-show="pass"><%type%></span> <%subsection.title%> Lecture</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div ng-show="pass">
                                                    <div ng-show="content">
                                                        <div class="m-b-10">
                                                            <form name="uploadVideo" class="m-b-10" ng-controller="VideoUploadController">
                                                                <div class="form-group">
                                                                    <label for="exampleInputFile">Plese select your video file.</label>
                                                                    <input ng-model="file" ngf-select name="file" ngf-max-size="2000MB" type="file" id="exampleInputFile">
                                                                    <p class="help-block" ng-show="progress">
                                                                        <%percent%> %</p>
                                                                </div>
                                                                <div class="m-10">
                                                                    <video ngf-src="file" controls>
                                                                    </video>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary" ng-click="upload(subsection.id,'#editModal'+subsection.id)">Save changes</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div ng-hide="content">
                                                        <div text-angular ng-model="subsection.article"></div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary" ng-click="saveArticle('#editModal'+subsection.id)">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div ng-hide="pass">
                                                    <div class="row">
                                                        <div class="col-md-4 col-centered">
                                                            <a class="btn btn-app" ng-click="addVideo()">
                                                                <i class="fa fa-edit"></i> Video
                                                              </a>
                                                        </div>
                                                        <div class="col-md-4 col-centered">
                                                            <a class="btn btn-app" ng-click="addArticle()">
                                                                <i class="fa fa-edit"></i> Article
                                                              </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a class="btn btn-app" href="{{url('/admin/course/section')}}/<%subsection.id%>">
                                                                  <i class="fa fa-edit"></i> Section
                                                              </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                       
                                        <div class="box box-success">
                                            <div class="box-header with-border">
                                                <h3 class="box-title">Edit Curriculum</h3>

                                                <div class="box-tools pull-right">
                                                  <button  type="button" class="pull-right btn bg-navy btn-flat margin" data-toggle="modal"  data-target="#addNewSession">Add New Session</button>
                                                </div>
                                                <!-- /.box-tools -->
                                            </div>
                                            <br><br>
                                            <!-- /.box-header -->
                                            <div class="box-body">
                                                <div class="panel panel-success" ng-repeat="section in courseData.section">
                                                    <!-- Default panel contents -->
                                                    <div class="panel-heading" ><strong>Section <%$index+1%> - <%section.title%></strong>
                                                         <button  type="button" class=" btn btn-sm bg-yellow btn-flat margin" data-toggle="modal" ng-click="senddata(section)" data-target="#myModal">
                                                          <i class="fa fa-fw fa-plus-circle"></i> Edit section
                                                        </button>

                                                       <button  type="button" class=" btn btn-sm bg-green btn-flat margin" data-toggle="modal"  data-target="#addNewContent" ng-click="sendSectionID(section)"><i class="fa fa-fw fa-plus-circle"></i> Add new content title</button>
                                                    </div>

                                                    <ul class="list-group">
                                                        <li class="list-group-item" ng-model="section.section" data-jqyoui-options="{revert: 'invalid'}" jqyoui-droppable="{index: <%$index%>,onDrop: onDragCus(section.section)}" jqyoui-draggable="{animate:true, index: <%$index%>, insertInline: true}" data-drag="true" data-drop="true" ng-repeat="subsection in section.section" ng-controller="SectionController">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-md-10">
                                                                    Lecture : <span data-toggle="modal" ng-click="senddata(subsection)" data-target="#myModal">
                                                  <%subsection.title%> </a>
                                                </br> <%type%>
                                                  </div>
                                                  <div class="col-xs-12 col-md-2">

                                                   <div class="btn-group" ng-show="haveContent">
                                            <button type="button" class="btn " ng-click="publishContent()" ng-class="{'btn-warning':isPublish=='Unpublish','btn-success':isPublish=='Publish'}"><%isPublish%></button>
                                            <button type="button" class="btn dropdown-toggle" ng-class="{'btn-warning':isPublish=='Unpublish','btn-success':isPublish=='Publish'}" data-toggle="dropdown">
                                              <span class="caret"></span>
                                                                    <span class="sr-only">Toggle Dropdown</span>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li><a href="#" type="button" data-toggle="modal" ng-click="openModal()" data-target="#editModal<%subsection.id%>">Edit</a></li>
                                                                    </ul>
                                                                </div>
                                                                <a ng-show="type=='Section'" href="{{url('/admin/course/section')}}/<%section.id%>">
                                                                    <button class="btn btn-block btn-success">Next Section</button>
                                                                </a>
                                                                <button ng-show="type=='Please Add'" type="button" class="btn btn-block btn-success" data-toggle="modal" ng-click="openModal()" data-target="#editModal<%subsection.id%>">Add content</button>
                                                            </div>
                                                </div>
                                                <!-- Modal -->
                                                <div class="modal fade" id="editModal<%subsection.id%>" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                <h4 class="modal-title"><%action%> <span ng-show="pass"><%type%></span> <%subsection.title%> Lecture</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div ng-show="pass">
                                                                    <div ng-show="content">
                                                                        <div class="m-b-10">
                                                                            <form name="uploadVideo" class="m-b-10" ng-controller="VideoUploadController">
                                                                                <div class="form-group">
                                                                                    <label for="exampleInputFile">Plese select your video file.</label>
                                                                                    <input ng-model="file" ngf-select name="file" ngf-max-size="2000MB" type="file" id="exampleInputFile">
                                                                                    <p class="help-block" ng-show="progress">
                                                                                        <%percent%> %</p>
                                                                                </div>
                                                                                <div class="m-10">
                                                                                    <video ngf-src="file" controls>
                                                                                    </video>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                                    <button type="button" class="btn btn-primary" ng-click="upload(subsection.id,'#editModal'+subsection.id)">Save changes</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                    <div ng-hide="content">
                                                                        <div text-angular ng-model="subsection.article"></div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                            <button type="button" class="btn btn-primary" ng-click="saveArticle('#editModal'+subsection.id)">Save changes</button>
                                                                        </div>
                                                                    </div>
                                                                    <div ng-show="contentYoutube">
                                                                       <div class="form-group">
                                                                            <label>Name</label>
                                                                            <input type="text" ng-model="subsection.youtubevideo" class="form-control" placeholder="Enter youtube video url">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Description</label>
                                                                            <input type="text" ng-model="subsection.youtubevideodesc" class="form-control" placeholder="Enter youtube video  description">
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                            <button type="button" class="btn btn-primary" ng-click="saveYoutube('#editModal'+subsection.id)">Save changes</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div ng-hide="pass">
                                                                    <div class="row">
                                                                        <div class="col-md-3 col-centered">
                                                                            <a class="btn btn-app" ng-click="addVideo()">
                                                                              <i class="fa fa-edit"></i> Video
                                                                            </a>
                                                                        </div>
                                                                         <div class="col-md-3 col-centered">
                                                                                <a class="btn btn-app" ng-click="addYoutube()">
                                                                                  <i class="fa fa-edit"></i> Add youtube video
                                                                                </a>
                                                                            </div>
                                                                        <div class="col-md-3 col-centered">
                                                                            <a class="btn btn-app" ng-click="addArticle()">
                                                                              <i class="fa fa-edit"></i> Article
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a class="btn btn-app" href="{{url('/admin/course/section')}}/<%subsection.id%>">
                                                                                <i class="fa fa-edit"></i> Section
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                        <!-- /.box -->
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="settings">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputName" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputExperience" class="col-sm-2 control-label">Experience</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputSkills" class="col-sm-2 control-label">Skills</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
</div>
</div>
@endsection @section('script') @endsection