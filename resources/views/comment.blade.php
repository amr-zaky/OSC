<!DOCTYPE HTML >
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Time4Learnig</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('css/index.css')}}" />
    <link rel="shortcut icon" href="imgs/title_icon.png" />
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
 <![endif]-->
</head>

<body>
    <!--start nav bar -->

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><i class="fas fa-graduation-cap"></i>&nbsp;Time<span>4</span>Learing</a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li title="admin"><a href="#"><i class="fas fa-user-tie fa-lg"></i>&nbsp; Admin <span class="sr-only">(current)</span></a></li>
                    <li class="dropdown" title="university">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false"><i class="fas fa-university fa-lg"></i>&nbsp; Unversity <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Ain Shams university</a></li>
                            <li><a href="#">cairo university</a></li>
                            <li><a href="#">Helwan university</a></li>

                        </ul>
                    </li>

                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false"><img src="imgs/download.png" /><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="text-center  special">
                                Sign in as:
                                <span style="font-weight:600">3bdelmoniemahmed11</span>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">MY Acount</a></li>
                            <li><a href="#">Login Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--end nav bar-->
    <!--start the content-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 ">
                <div class="search2 ">
                    <form method ="" action="">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Default input">
                            <button type="submit" class="btn btn-success ">Go!</button>
                        </div>
                    </form>
                </div>

                <div class="sidebar text-center">
                    <h3>category</h3>
                    <div class="style"></div>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="fas fa-chalkboard"></i>&nbsp;lectures</a></li>
                        <li><a href="#"><i class="fas fa-vials"></i>&nbsp;labs</a></li>
                        <li><a href="#"><i class="fas fa-book"></i>&nbsp;books</a></li>
                        <li><a href="#"><i class="fas fa-question-circle"></i>&nbsp;questions</a></li>
                        <li><a href="#"><i class="fas fa-file-alt"></i>&nbsp;final test</a></li>
                        <li><a href="#"><i class="fas fa-file-alt"></i>&nbsp;mid term </a></li>
                    </ul>
                </div>

            </div>
            <div class="col-lg-6  posts">
                <!--start post -->
                <div class="main-post">
                    <img src="imgs/avatar3.png" alt="avatar" />
                    <span>&nbsp;abdelmoniem ahmed</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <img class="img-responsive" src="imgs/backlit-bright-clouds-355508.jpg" alt="plane" />

                </div>
                <div class="comment">
                    <form>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Comment">
                            <button type="submit" class="btn btn-success ">comment</button>
                        </div>
                    </form>
                </div>

            </div>
            <!--end post c-->
            <div class="col-lg-3">
                <div class="event1">
                    <h3 class="text-center">upcoming events </h3>
                    <div class="e1 text-center">
                        <img src="imgs/osc.jpg" alt="osc">
                        <p>
                            saturday <span style="color:rgb(160, 160, 160)">at</span><br>
                            11:30 AM
                        </p>
                        <button type="submit" class=" btn  btn-info "><a href="#">info</a></button>
                    </div>
                    <hr>
                    <div class="e1 text-center">
                        <img src="imgs/microsoft-2.png" alt="osc">
                        <p>
                            sunday <span style="color:rgb(160, 160, 160)">at</span><br>
                            10:00 AM
                        </p>
                        <button type="submit" class=" btn  btn-info "><a href="#">info</a></button>
                    </div>
                    <hr>
                    <div class="e1 text-center">
                        <img src="imgs/cover.jpg" alt="osc">
                        <p>
                            thuesday <span style="color:rgb(160, 160, 160)">at</span><br>
                            8:00 AM
                        </p>
                        <button type="submit" class=" btn  btn-info "><a href="#">info</a></button>
                    </div>
                    <hr>
                    <div class="e1 text-center">
                        <img src="imgs/pexels-photo-908284.jpeg" alt="osc">
                        <p>
                            thuesday <span style="color:rgb(160, 160, 160)">at</span><br>
                            8:00 AM
                        </p>
                        <button type="submit" class=" btn  btn-info "><a href="#">info</a></button>
                    </div>


                </div>

            </div>
        </div>
    </div>
    <footer class="text-center">
        Copy Right &copy; Designed by<span>Osc</span> 's Team 2018
    </footer>

    <!--end the content-->
    <!--java script libraries-->
    <script src="js/jquery-3.3.1.min.js"></script><!--laravel-->
    <script src="js/index.js"></script><!--laravel-->
    <!--bootsrap-->
    <script src="js/bootstrap.min.js"></script><!--laravel-->
</body>

</html>