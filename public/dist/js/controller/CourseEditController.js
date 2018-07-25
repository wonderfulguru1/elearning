angular.module('AdminApp').controller('CourseEditController', CourseEditController);

function CourseEditController($http, $scope, $window, $location, config, Upload) {
    $scope.save = function() {
        $http({
            method: 'PUT',
            url: config.url + 'course/' + $scope.id,
            data: {
                name: $scope.name,
                description: $scope.description,
                src: $scope.file
            }
        }).then(function(response) {
         console.log($scope.file);
            if ($scope.file != undefined) {
                $scope.url = config.url + 'image';
                Upload.upload({
                    url: $scope.url,
                    data: { file: $scope.file, course_id: $scope.id }
                }).then(function(resp) {
                    console.log('Success ' + resp.config.data.file.name + 'uploaded. Response: ' + resp.data);
                    $location.path('/courses/gallery');
                    $window.location.href = config.admin + 'course';
                }, function(resp) {
                    console.log('Error status: ' + resp.status);
                });
            } else {
                $window.location.href = config.admin + 'course';
            }
        });
    };
    $scope.init = function(id) {
        $scope.id = id;
        load();
    };

    function load() {
        $http.get(config.url + 'course/' + $scope.id).then(function(response) {
            $scope.course = response.data;
            $scope.about = $scope.course.about;
            $scope.name = $scope.course.name;
            $scope.description = $scope.course.description;
            console.log(response.data);
        });
    }

}