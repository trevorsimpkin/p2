<?php
error_reporting(E_ALL);
ini_set('display errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Profile">
    <meta name="author" content="Trevor Simpkin">

    <title>Trevor Simpkin - xkcd style password generator</title>
    <?php require 'logic.php'; ?>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dist/css/offcanvas.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project 2</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
            </ul>
        </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
</nav><!-- /.navbar -->

<div class="container">

    <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
            <p class="pull-right visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
            </p>
            <div class="jumbotron">
                <h1>XCKD style password generator</h1>
                <p>This will produce a password that is both secure and easy to remember!</p>
                <!--<img src='images/trevor.jpg' alt='Trevor Simpkin'>-->
            </div>
            <div class="row">
                <div class="col-md-3">
                <form method='POST' action='index.php'>
                    <div class="form-group">
                        <label for="number_of_words">Number of Words</label>
                        <input type="text" class="form-control" id="numberOfWords1" name='numberOfWords' placeholder="#">

                    </div>
                    <div class="checkbox">
                        <label for="add_symbol">
                            <input type="checkbox" id="add_symbol" name='isSymbol'> Add a symbol.
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="add_number">
                            <input type="checkbox" id="add_number" name='isNumber'> Add a number.
                        </label>

                    </div>
                    <div class="checkbox">
                        <label for="camel_Case">
                            <input type="checkbox" id="camel_Case" name='isCamelCase'> Add camelCase.
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Generate!</button>
                </form>
                </div>
                <div class="col-md-9">
                    <h2>Your Password:</h2>
                    <h3><?php echo $wordToDisplay?></h3>
                </div>
            </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
            <div class="list-group">
                <a href="https://p1.trevorsimpkin.com" class="list-group-item">PROJECT 1 (VIEW)</a>
                <a href="https://github.com/trevorsimpkin/project1" class="list-group-item">PROJECT 1 (GITHUB)</a>
                <a href="#" class="list-group-item active">PROJECT 2 (VIEW)</a>
                <a href="https://github.com/trevorsimpkin/p2" class="list-group-item">PROJECT 2 (GITHUB)</a>
                <a href="#" class="list-group-item">PROJECT 3 (VIEW)</a>
                <a href="#" class="list-group-item">PROJECT 3 (GITHUB)</a>
            </div>
        </div><!--/.sidebar-offcanvas-->
    </div><!--/row-->

    <hr>


</div><!--/.container-->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

<script src="dist/js/offcanvas.js"></script>
</body>