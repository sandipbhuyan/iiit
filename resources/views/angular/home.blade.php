<script type="text/javascript">
var app = angular.module('public-page', []).config(function ($interpolateProvider) {
      $interpolateProvider.startSymbol('<%').endSymbol('%>');
  });
  app.controller('donateBlood',function ($scope,$http) {
       $scope.donateBlood = function () {
           $http.post('{{url("api/send-donor")}}',{
              'name' : $scope.name ,
              'blood_group' : $scope.bldGrp,
              'date' : document.getElementById('datepicker').value,
              'email' : $scope.email,
              'phone' : $scope.phn,
              'address' : $scope.addr,
              'age' : $scope.age,
              'gender' : $scope.gen,
              'weight' : $scope.weight
            }).then(function mySuccess(response) {
               // $scope.message = '';
               // $scope.name = '';
               // $scope.subject = '';
               // $scope.email = '';
               console.log(response);
               console.log("2");

           },function myFailuer(response) {
           })
       }
    });
</script>
