<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Joimman</title>
    <link rel="icon" href="{{asset('app/img/blog-details-author.png')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="{{ asset('css/mdb.min.css')}}" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('font/Coustard/Coustard-Regular.ttf')}}" rel="stylesheet">
    <link href="{{ asset('font/Lato/Lato-Light.ttf')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet"> -->
</head>

<body >

    <!--Main layout-->
    <main class="mt-5">

      <!--Header image -->
      <div align="center " class="head_img">
          <!-- <img src="{{ asset('uploads/header.jpg')}}" class="img-fluid " alt="">
          <div class="mask rgba-white-light"></div> -->
          <h2 style="font-family: "Oswald, sans-serif" !important;"> <span class="head_text">J</span><span class="head_text2">O </span> <span class="head_text">I</span><span class="head_text2">MMAN </span> </h2>
          <p class="font1 logo1">Fashion. Beauty. Lifestyle</p>
      </div>

        <!--Main container-->
        <div class="container ">

          <!--Main Navigation-->
          <header class="top_nav sticky-top ">

              <!--Navbar-->
              <nav class="navbar navbar-expand-lg">

                  <!-- Collapse button -->
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
                      aria-expanded="false" aria-label="Toggle navigation">
                      <!-- <span class="navbar-toggler-icon"></span> -->
                      <i class="fa fa-bars"></i>
                  </button>

                  <!-- Collapsible content -->
                  <div class="collapse navbar-collapse" id="basicExampleNav">

                      <!-- Links -->
                      <ul class="navbar-nav mr-auto">
                        <!-- Navbar brand -->
                        <a class="navbar-brand active" href="{{ route('index')}}">Home</a>

                          <!-- <li class="nav-item active">
                              <a class="nav-link" href="{{ route('index')}}">Home
                                  <span class="sr-only">(current)</span>
                              </a>
                          </li> -->

                          @foreach($categories as $category)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('category.single', ['id' => $category->id ])}}">{{ $category->name}}</a>
                            </li>
                            @endforeach

                      </ul>
                      <!-- Links -->

                      <!-- <form class="form-inline" method="GET" action="/results">
                          <div class="md-form mt-0" >
                              <input class="form-control mr-sm-2" type="text" name="query" placeholder="Search" aria-label="Search">

                          </div>
                      </form> -->
                  </div>
                  <!-- Collapsible content -->
                  <form class="form-inline" method="GET" action="/results">
                      <div class="md-form mt-0" >
                          <input class="form-control mr-sm-2" type="text" name="query" placeholder="Search" aria-label="Search">

                      </div>
                  </form>

             <!-- instagram -->
              <a href="https://www.instagram.com/joimman/" target="_blank" class="px-2 fa-lg li-ic"><i class="fa fa-instagram"></i></a>
              <!-- Youtube-->
              <a href="https://www.youtube.com/user/Nuella7" target="_blank" class="px-2 fa-lg yt-ic"><i class="fa fa-youtube"></i></a>
              <!-- Twitter -->
              <a href="https://twitter.com/joimman" target="_blank" class="px-2 fa-lg tw-ic"><i class="fa fa-twitter"></i></a>
              <!-- facbook -->
              <a href="https://web.facebook.com/thejoimman/" target="_blank" class="px-2 fa-lg fb-ic"><i class="fa fa-facebook"></i></a>
              </nav>
              <!--/.Navbar-->

          </header>
          <div class="row medium-padding60">

              <div class="col-md-12 ">
                <!--Main Navigation-->
                <?php $num = 1; ?>
                @foreach ( $posts as $post)

                  @if ($num % 2 != 0)
                    <!--Grid row-->
                    <div class="row post">

                        <!--Grid column-->
                        <div class="col-md-6 mb-4">

                            <!--Featured image -->
                            <div >
                                <img src="{{$post->featured}}" class="img-fluid z-depth-1-half" alt="">
                                <div class="mask rgba-white-light"></div>
                            </div>

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6 mb-4">

                          <div>
                            <h2 class="text-center" id="test"><a href="{{ route('post.single', ['slug' => $post->slug ])}}">{{ $post->title}}</a></h2>

                              <h5 class="text-center">   {{ $post->created_at->toFormattedDateString()}} </h5>
                            </div>
                            <hr>

                            <p> {!! str_limit( $post -> content,200) !!}  </p>
                            <div align="center">
                            <a href="{{ route('post.single', ['slug' => $post->slug ])}}" class="btn ">READ MORE</a>
                          </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                  @else

                    <div class="row post">

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">


                        <h2 class="text-center"><a href="{{ route('post.single', ['slug' => $post->slug ])}}">{{ $post->title}}</a></h2>

                          <h5 class="text-center">   {{ $post->created_at->toFormattedDateString()}} </h5>
                        <hr>

                          <p> {!! str_limit( $post -> content,200) !!}  </p>
                        <div align="center">
                        <a href="{{ route('post.single', ['slug' => $post->slug ])}}" class="btn bot1">READ MORE</a>
                      </div>
                    </div>
                    <!--Grid column-->

                      <!--Grid column-->
                      <div class="col-md-6 mb-4">

                          <!--Featured image -->
                          <div class="">
                              <img src="{{$post->featured}}" class="img-fluid z-depth-1-half" alt="">
                              <div class="mask rgba-white-light"></div>
                          </div>

                      </div>
                      <!--Grid column-->

                  </div>

                  @endif
                  <?php $num += 1; ?>
                @endforeach
             </div>
             
          </div>
          
                
            
         <h4 align="center">CATCH UP WITH ME</h4>
         <div class="row">
    <div class="col-md-3">
      <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/BlzkQthnW3H/" data-instgrm-version="9" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:33.33333333333333% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:24px; margin:0 auto -44px; position:relative; top:-22px; width:24px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BlzkQthnW3H/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by WANAEMI (@joimman)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2018-07-29T06:35:57+00:00">Jul 28, 2018 at 11:35pm PDT</time></p></div></blockquote> <script async defer src="//www.instagram.com/embed.js"></script>
    </div>

    <div class="col-md-3" align="right" style="margin-top: 50px;">
      <blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">Preparing so much content for <a href="https://t.co/kQe12SgTVz">https://t.co/kQe12SgTVz</a><br><br>I can’t wait for the launch, I’m so excited 😆</p>&mdash; Wanaemi Immanuella Jonah (@JOIMMAN) <a href="https://twitter.com/JOIMMAN/status/1023247791437611008?ref_src=twsrc%5Etfw">July 28, 2018</a></blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

    </div>

    <div class="col-md-6">
      <iframe src="https://web.facebook.com/plugins/post.php?href=https%3A%2F%2Fweb.facebook.com%2Fthejoimman%2Fposts%2F1911326462497887%3A0&width=500" width="500" height="575" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
    </div>


  </div>

    <div class="center1 no">
             {{$posts->links("pagination::bootstrap-4")}}
           </div>

        @include('includes.footer')
        </div>

        <!--Main container-->

    </main>
    <!--Main layout-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
  <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('js/mdb.min.js')}}"></script>
    <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b16d93e1ad0691e"></script>

</body>

</html>
