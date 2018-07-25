angular.module("AdminApp").controller('SectionController', function($http, $scope, config,$window) {

    $scope.contentType = function() {
      console.log($scope.subsection);
        if ($scope.subsection.content != undefined) {
          $scope.haveContent = true;
          $scope.articleContent = true;
          $scope.subsection.article = $scope.subsection.content.article;
            return "Content";
        } else if ($scope.subsection.video != undefined) {
          $scope.videoContent = true;
          $scope.subsection.fileUrl = "/learning/video/"+$scope.subsection.video.path;
          $scope.haveContent = true;
            return "Video";
        } else if ($scope.subsection.section == undefined) {
          $scope.haveContent = false;
            return "Please Add";
        } else if ($scope.subsection.section.length > 0) {
          $scope.haveContent = false;
            return "Section";
        }
        console.log("ff");
        $scope.haveContent = false;
        return "Please Add";
    };

    /*
     * save order when user drag tab
     *
     */
    $scope.onDragCus = function(item) {
        item.forEach(function(v, k) {
            if (v.order != k) {
                send = {
                    method: 'PUT',
                    url: config.url + "section/" + item[k].id,
                    params: {
                        order: k
                    }
                };
                $http(send).success(function(response) {

                });
            }
        });
    };

    $scope.type = $scope.contentType();
    if ($scope.type == 'Section') {
    }

    $scope.isPublish = ($scope.subsection.status)? 'Unpublish':'Publish';
    $scope.publishContent = function() {
      var send = {
          method: 'PUT',
          url: config.url+"section/" + $scope.subsection.id,
          params: {
              status: Number(!$scope.subsection.status)
          }
      };
      $http(send).success(function(response) {
          $scope.subsection.status = !$scope.subsection.status;
          $scope.isPublish = ($scope.subsection.status)? 'Unpublish':'Publish';
      });
    };

    $scope.saveArticle = function(modal) {
      if($scope.subsection.content==undefined) {
        send = {
            method: 'GET',
            url: config.url+"content/create",
            params: {
                article: $scope.subsection.article,
                section_id: $scope.subsection.id
            }
        };
      }
      else {
        send = {
            method: 'PUT',
            url: config.url+"content/" + $scope.subsection.content.id,
            data: {
                article: $scope.subsection.article,
            }
        };
      }
        $http(send).success(function(response) {
          if($scope.subsection.content==undefined) $scope.subsection.content = response.success;
          else $scope.subsection.content.article = $scope.subsection.article;
          $scope.type = "Content";
          $scope.subsection.haveContent = true;
          angular.element(modal).modal('hide');
          $window.location.reload();
        });
    };


    $scope.saveYoutube = function(modal) {
      if($scope.subsection.content==undefined) {
        send = {
            method: 'GET',
            url: config.url+"youtube/upload",
            params: {
                path: $scope.subsection.youtubevideo,
                section_id: $scope.subsection.id
            }
        };
      }
      else {
        send = {
            method: 'PUT',
            url: config.url+"youtube/upload/" + $scope.subsection.content.id,
            data: {
                path: $scope.subsection.youtubevideo,
            }
        };
      }
        $http(send).success(function(response) {
          if($scope.subsection.content==undefined) $scope.subsection.content = response.success;
          else $scope.subsection.content.youtubevideo = $scope.subsection.youtubevideo;
          $scope.type = "video";
          $scope.subsection.haveContent = true;
          angular.element(modal).modal('hide');
          $window.location.reload();
        });
    };

    $scope.openModal = function(){
      if($scope.haveContent){
        $scope.pass=true;
        $scope.action = "Edit";
        if($scope.type=="Video") {
          $scope.content = true;
        }
        else {
          $scope.content = false;
        }
      }
      else{
        $scope.pass=false;
       $scope.action = "Add";
      }
    };

    $scope.addArticle = function(){
      $scope.pass=true;
      $scope.content = false;
    };

    $scope.addYoutube = function(){
      $scope.pass=true;
      $scope.content = false;
      $scope.contentYoutube = true;
    };

    $scope.addVideo = function(){
      $scope.pass=true;
      $scope.content = true;

    };
});
