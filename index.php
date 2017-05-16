<!DOCTYPE html>
<html ng-app="uvApp">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AngularJS Skeleton Application -- Ravi Mane </title>
  <meta name="description" content="AngularJS Skeleton Application -- Yuvraj Patil">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  
  <!-- Library Styles -->
<!--  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"> -->

  <!-- Project Styles -->

  <link rel="stylesheet" href="app/home/home.css">  
  <link rel="stylesheet" href="app/footer/footer.css">  
  <link rel="stylesheet" href="app/common/styles.css"> 
  <link rel="stylesheet" href="node_modules/angular-material/angular-material.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- roboto font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">


</head>
<body>

<div ui-view="headerView"> </div>

<div ui-view="containerView" class="appContainer"> </div>

<div ui-view="footerView"> </div>

<!-- Library JS files -->
<script src="node_modules/angular/angular.min.js"></script>  
<script src="node_modules/angular-route/angular-route.min.js"></script>  
<script src="node_modules/angular-ui-router/release/angular-ui-router.min.js"></script>  
<script src="node_modules/angular-sanitize/angular-sanitize.min.js"></script> 
<script src="node_modules/angular-animate/angular-animate.min.js"></script> 
<script src="node_modules/angular-sanitize/angular-sanitize.min.js"></script>
  <script src="node_modules/angular-material/angular-material.min.js"></script>
   <script src="node_modules/angular-aria/angular-aria.min.js"></script>
  <script src="node_modules/angular-messages/angular-messages.min.js"></script>

  <!-- Angular Material Library -->

  
<!-- Third Party Library Files -->
<script src="node_modules/angular-ui-bootstrap/dist/ui-bootstrap-tpls.js"></script>  
<script src="node_modules/angular-local-storage/dist/angular-local-storage.min.js"></script> 

<!-- Project JS files -->
<script src="app/app.js"></script>  
<script src="app/home/HomeService.js"></script> 


<script src="app/home/HomeCtrl.js"></script>  
<script src="app/home/HomeService.js"></script> 

<script src="app/about/AboutCtrl.js"></script>  
<script src="app/header/HeaderCtrl.js"></script>  
<script src="app/personal_information/PersonalInfomationCtrl.js"></script>  
 
</body>
</html> 