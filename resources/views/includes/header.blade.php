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
<!--Main Navigation-->
