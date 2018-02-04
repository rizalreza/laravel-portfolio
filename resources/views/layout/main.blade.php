<!doctype html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>
            @yield('title','rizalreza')
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
        <link rel="stylesheet" href="{{asset('dist/css/foundation.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
        <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('dist/css/bootstrap.css')}}"/>
        <link rel="stylesheet" href="{{asset('dist/css/style.css')}}"/>
        <link rel="stylesheet" href="{{asset('dist/css/footer.css')}}"/>
        <script src="{{asset('dist/css/bootstrap.min.js')}}"></script>
        <script src="{{asset('dist/css/jquery-1.10.2.js')}}"></script>
      


    </head>
    <body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container ">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header ">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><strong>Portfolio</strong> Webs</a>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{route('home')}}">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="{{route('posts')}}">Portfolio</a></li>
        <li><a href="#">About</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('admin.index')}}">Login</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav> 
<!-- Akhir  navbar -->

     

@yield('content')


<div class="content">
</div>
    <footer id="myFooter">
        <div class="container">
            <div class="row full-width col-md-10 col-md-offset-1">
               
            <div class="tech-used">
                 <div class="col-sm-3">
                    <i class="fa fa-html5"></i>
                </div>
                <div class="col-sm-3">
                    <i class="fa fa-css3"></i>
                </div>
                <div class="col-sm-3">
                    <i class="fa fa-linux"></i>
                </div>
            </div>
                <div class="col-sm-3">
                    <div class="social-networks">
                        <a href="https://www.twitter.com/rizalrezaa" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com/rizalrezamaulana" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/rizalreza/" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="https://github.com/rizalreza" class="github"><i class="fa fa-github"></i></a>
                    </div>
                    <button type="button" class="btn btn-primary">Contact us</button>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2018 Copyright Text </p>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



    </body>
</html>