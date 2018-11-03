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
                    

                    <li title="admin"><a href="/main"><i class="fas fa-user-tie fa-lg"></i>&nbsp; HomePages <span class="sr-only">(current)</span></a></li>


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

               <!--  <ul class="nav navbar-nav navbar-right">
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
 -->
                 <ul class="navbar-nav ml-auto" style="margin-top:15px;">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
            </div>
        </div>
    </nav>
    <!--end nav bar-->
    <!--start the content-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 ">
                <!--global search-->
                <div class="search2 ">
                      <form method="POST" action='/seach'>
                        <div class="form-group">
                            {{csrf_field()}}
                            <input class="form-control" type="text" placeholder="search" name="searchval">
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

                        @foreach($cats as $cat)
                        <li><a href="/searchcat/{{$cat->category_Name}}"><i class="fas fa-chalkboard"></i>&nbsp;{{$cat->category_Name}}</a></li>
                        @endforeach
                    </ul>
                </div>

            </div>
            <!--end side bar -->
            <div class="col-lg-6  posts">
                <!--write post-->
                <div class="post">
                    <form method="POST" action="/main1" enctype="multipart/form-data">

                            {{csrf_field()}}
                        <div class="form-group">
                            <input  class="form-control" type="text" name="title" placeholder="Title">
                            
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="body" rows="5" placeholder="..Post Containt"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <input  type="file" name="imgefile">
                            
                        </div>



                        <button type="submit" class="btn btn-info"><i class="fas fa-pen"></i> &nbsp; post</button>

                    </form>
                </div>
                <!--end write post-->
                <!--start post1 -->

                @foreach($posts as $post)
                <a style="text-decoration:none;" href="comment/{{$post->post_id}}">
                <div class="main-post">
                    <img src="imgs/avatar3.png" alt="avatar" />
                    <span>&nbsp;{{$post->auther}} &nbsp;&nbsp;<small>{{$post->created_at}}</small></span>
                    <p>
                       {{$post->body}}
                    </p>
                    <img class="img-responsive" src="{{$post->image}}" alt="plane" />
                    <!--laravel-->
                    <div class="container ">
                        <a class="button button--fun" href="comment/{{$post->post_id}}">
                            <i class="fas fa-comment"></i> <span class="button__content"> Comment</span>
                        </a>
                    </div>
                </div>
            </a>
            @endforeach
                <!--endpost1-->
               
              

            </div>
            <!--end post -->
            <div class="col-lg-3">
                <!-- start events-->
                <div class="event1">
                    <h3 class="text-center">upcoming events </h3>
                    <div class="e1 text-center">
                        <img src="imgs/ev2.jpg" alt="osc">
                        <!--lravel-->
                        <p>
                            saturday <span style="color:rgb(160, 160, 160)">at</span><br>
                            11:30 AM
                        </p>
                        <button type="submit" class=" btn  btn-info "><a href="#">info</a></button>
                    </div>
                    <hr>
                    <div class="e1 text-center">
                        <img src="imgs/ev.jpg" alt="osc">
                        <!--laravel-->
                        <p>
                            sunday <span style="color:rgb(160, 160, 160)">at</span><br>
                            10:00 AM
                        </p>
                        <button type="submit" class=" btn  btn-info "><a href="#">info</a></button>
                    </div>
                    <hr>

                    <div class="e1 text-center">
                        <img src="imgs/cover.jpg" alt="osc">
                        <!--laravel-->
                        <p>
                            thuesday <span style="color:rgb(160, 160, 160)">at</span><br>
                            8:00 AM
                        </p>
                        <button type="submit" class=" btn  btn-info "><a href="#">info</a></button>
                    </div>
                    <hr>
                    <div class="e1 text-center">
                        <img src="imgs/pexels-photo-908284.jpeg" alt="osc">
                        <!--laravel-->
                        <p>
                            thuesday <span style="color:rgb(160, 160, 160)">at</span><br>
                            8:00 AM
                        </p>
                        <button type="submit" class=" btn  btn-info "><a href="#">info</a></button>
                    </div>


                </div>

            </div>
            <!--end events-->
        </div>
    </div>
    <!--start footer-->
    <footer class="text-center">
        Copy Right &copy; Designed by<span>Osc</span> 's Team 2018
    </footer>
    <!--end footer-->

    <!--end the content-->
    <!--java script libraries-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!--laravel-->
    <script src="js/index.js"></script>
    <!--laravel-->
    <!--bootsrap-->
    <script src="js/bootstrap.min.js"></script>
    <!--laravel-->
</body>

</html>
