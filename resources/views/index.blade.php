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
    <!--laravel-->
    <link rel="stylesheet" href="{{asset('css/index.css')}}" />
    <!--laravel-->
    <link rel="shortcut icon" href="imgs/title_icon.png" />
    <!--laravel-->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
 <![endif]-->
</head>

<body>
  

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
                        <!--laravel-->
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


    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 ">
                <!--global search-->
                <div class="search2 ">
                    <form method="" action="">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="search">
                            <button type="submit" class="btn btn-danger btn-lg ">Go!</button>
                        </div>
                        
                    </form>
                </div>
                <!---end global search-->
                <!--start side bar-->
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

            <!--end side bar -->
            <div class="col-lg-6  posts">
                <!--write post-->
                <div class="post">

                    <form method="POST" action="/OSC/public/main">
                        {{csrf_field()}}
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="auther" placeholder="auther"></textarea>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="title" placeholder="title"></textarea>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="body" placeholder="body"></textarea>
                            <input type="file" class="form-control-file" name="image">
                        </div>
                        <button type="submit" class="btn btn-info"><i class="fas fa-pen"></i> &nbsp; post</button>
                    </form>


                </div>

                @foreach ($var as $v)
                    
                    <div class="main-post">
                        <img src="imgs/avatar3.png" alt="avatar" />
                        <span>{{ $v->title}} <small>by {{$v->auther}}</small></span>
                        <p>
                            {{$v->body}}
                        </p>
                        <img class="img-responsive" src="{{$v->image}}" alt="plane" />
                        <div class="container ">
                            <a class="button button--fun" href="/OSC/public/main/{{$v->post_id}}">
                                <i class="fas fa-comment"></i> <span class="button__content"> Comment</span>
                            </a>
                        </div>
                    </div>

                @endforeach

            </div>
          

</body>

</html>
