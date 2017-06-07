<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Lorem Bootstrap</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/lorem.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.min.js"></script>
  <script src="app.js"></script>
  <script src="directive/bootstrap.js"></script>
  <script src="directive/jumbotronMain.js"></script>
  <script src="chatmixer.js"></script>

  <!-- Google Font -->
</head>

<body>


<div ng-app="app" ng-controller="loremController">
<bootstrap-page></bootstrap-page>
<style>
  /* Generate background or color of main jumbotron */
 .jumbotron.main{ background-color: blue; color: white; background-image: url('asset/trees/big/2.png');}
</style>
<!-- Jumbotron Top -->

<div class="jumbotron mt-4 main">
    <div class="container text-center">
      <h1>{{lorem(8,1)}}</h1>
      <p class="lead">{{lorem(20,3)}}</p>


    </div>
</div>



<div class="container">
  <h1>{{lorem(6)}}</h1>
  <p class="lead">{{lorem(20)}}</p>
  <p>{{lorem(40)}}</p>
  <p>{{lorem(120)}}</p>

<div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-header">{{lorem(4, 2)}}</div>
      <div class="card-block">{{lorem(16, 2)}}</div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-header">{{lorem(4, 3)}}</div>
      <div class="card-block">{{lorem(16, 3)}}</div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-header">{{lorem(4, 4)}}</div>
      <div class="card-block">{{lorem(16, 4)}}</div>
    </div>
  </div>
</div>



</div>
<div class="jumbotron mt-4">
  <div class="container text-center">
    <h1>{{lorem(8,2)}}</h1>
    <p class="lead">{{lorem(20)}}</p>
    <div class="row justify-content-center">
      <div class="col-sm-6">
        <p>{{lorem(40)}}</p>
      </div>
    </div>

  </div>
</div>



</div>
<?php require 'footer.html'; ?>
