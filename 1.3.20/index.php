<html>
    <body>
        <head>
            <link href="../bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="angular.js"></script>
            <style>
                body{background-image: url("../vbg.jpg");height: 100%;background-repeat: no-repeat;background-size: cover;color:white}
            </style>
            <meta charset="UTF-8" />
        </head>
        <div class="container" style="margin-top: 8%;">
            <div class="col-md-6 col-md-offset-3">     
                <div class="row">
                    <div id="logo" class="text-center">
                        <h1>What do you want?</h1>
                    </div>
                    <form role="form" id="form-buscar" action="" method="GET">
                    <div class="form-group">
                        <div class="input-group">
                        <input id="1" class="form-control input-lg" type="text" value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search'],ENT_QUOTES) : '' ?>" name="search" placeholder="Search..." required/>
                            <span class="input-group-btn">
                            <button class="btn btn-success input-lg" type="submit">
                            <i class="glyphicon glyphicon-search" aria-hidden="true"></i> Search
                            </button>
                            </span>
                        </div>
                    </div>
                    </form>
                    <h5>AngularJS v1.3.20</h5>
                    <?php
                    if(isset($_GET['search'])){
                        ?>
                    <div id="logo" class="text-center" ng-app="myApp" ng-controller="myCtrl">
                        <h3 style="color: orange">There is Nothing match with <?=htmlspecialchars($_GET['search'],ENT_QUOTES);?></h3>
                    </div>
                    <?php
}
                    ?>
                </div>            
            </div>
        </div>
        <script>
            var app = angular.module('myApp', []);
            app.controller('myCtrl', function($scope) {});
        </script> 
    </body>
</html>