@extends('layouts.frontend')

@section('content')


<div class="container">
    @include('includes.header')
  <div class="stunning-header post_title top1">
      <div class="stunning-header-content">
          <h1 class="stunning-header-title" align="center">{{$category->name}}</h1>
      </div>
  </div>
  @if($category->posts->count() > 0)
    <div class="row medium-padding60">
        <main class="main">


            <div >
                <?php $num = 1; ?>
                        <div class="case-item-wrap">
                          @foreach($category->posts as $post)
                            @if ($num % 2 != 0)
                            <div class="col-lg-12 col-md-12 ">
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


                                      <h2 class="text-center"><a href="{{ route('post.single', ['slug' => $post->slug ])}}">{{ $post->title}}</a></h2>

                                        <h5 class="text-center">   {{ $post->created_at->toFormattedDateString()}} </h5>
                                      <hr>

                                      <p> {!! str_limit( $post -> content,200) !!}  </p>
                                      <div align="center">
                                      <a href="{{ route('post.single', ['slug' => $post->slug ])}}" class="btn btn1">READ MORE</a>
                                    </div>
                                  </div>
                                  <!--Grid column-->


                              </div>
                              <!--Grid row-->
                            </div>
                              @else
                              <div class="col-lg-12 col-md-12 ">
                                <!--Grid row-->
                                <div class="row post">
                                  <!--Grid column-->
                                  <div class="col-md-6 mb-4">


                                      <h2 class="text-center"><a href="{{ route('post.single', ['slug' => $post->slug ])}}">{{ $post->title}}</a></h2>

                                        <h5 class="text-center">   {{ $post->created_at->toFormattedDateString()}} </h5>
                                      <hr>

                                      <p> {!! str_limit( $post -> content,200) !!}  </p>
                                      <div align="center">
                                      <a href="{{ route('post.single', ['slug' => $post->slug ])}}" class="btn btn1">READ MORE</a>
                                    </div>
                                  </div>
                                  <!--Grid column-->
                                    <!--Grid column-->
                                    <div class="col-md-6 mb-4">

                                        <!--Featured image -->
                                        <div >
                                            <img src="{{$post->featured}}" class="img-fluid z-depth-1-half" alt="">
                                            <div class="mask rgba-white-light"></div>
                                        </div>

                                    </div>
                                    <!--Grid column-->


                                </div>
                                <!--Grid row-->
                              </div>
                              @endif

                            <!-- <div class="col-lg-4 col-md-4">
                            </div> -->
                            <?php $num += 1; ?>
                            @endforeach
                        </div>
            </div>

            <!-- End Post Details -->
        </main>
    </div>
    @else
        <div class="">
            <div class="no"  >
                <p> No Post in this Category Yet  </p>
            </div>
        </div>

    @endif
    @include('includes.footer')
</div>

@endsection
