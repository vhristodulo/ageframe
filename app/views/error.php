<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <title>AgeFrame - PHP MVC Framework</title>

        <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo $base_path; ?>pub/css/ageframe.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo $base_path; ?>pub/font-awesome/css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic"/>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat:400,700"/>

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">
                        <i class="fa fa-square-o"></i>  <span class="light">Age</span>Frame
                    </a>
                </div>
            </div>
        </nav>

        <header class="intro">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="brand-heading">Error 404</h1>
                            <p class="intro-text">Page you are looking for doesn't exist on this server.<br>Go back to <a href="<?php echo $base_path; ?>">Home Page</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="<?php echo $base_path; ?>pub/js/jquery.easing.min.js"></script>
        <script src="<?php echo $base_path; ?>pub/js/ageframe.js"></script>

    </body>

</html>
