/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var module = angular.module("myModel", []);
module.controller("myCtrl", currentTime);

function currentTime($scope) {
    $scope.userName = "";
    var date = new Date();
    $scope.timeString = date.toTimeString();  
    
    $scope.updateTime =function(){
    var date = new Date();
    $scope.timeString = date.toTimeString();    
    }
}

