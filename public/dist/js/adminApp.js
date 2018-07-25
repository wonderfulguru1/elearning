(function() {
  angular.module('AdminApp',['datatables','ngFileUpload','textAngular','ngDragDrop'],function($interpolateProvider) {
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
})
  .constant('APP', {version:'1.0.0'})
  .constant('config',{url:'/api/',admin:'/admin/'});
})();
