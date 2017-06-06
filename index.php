<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html ng-app="myModel">
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="angular.min.js"></script>
        <script type="text/javascript" src="app.js"></script>
        <title>Clock App</title>
    </head>
    <body>
        <h1>Clock App </h1>
        <div ng-controller="myCtrl">
            Please enter your name : <input ng-model="userName" type="text"></input>

            <p>The current time is : {{timeString}}</p>

            <button ng-click="updateTime()">Update</button>
            <P>Your Name is : {{userName}}</P>
        </div>

    </body>
</html>
