@extends('layouts.frontend')

@section('content')


<div class="container">
    @include('includes.header')
  <div class="stunning-header post_title top1" >
      <div class="stunning-header-content">
          <h2 class="stunning-header-title sticky-top " align="center">{{$post->title}}</h2>
      </div>
  </div>
    <div class="row ">
      <div class="col-lg-10 center1">

        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <article class=" post post-standard-details">

                    <div class="post-thumb">
                        <img src="{{$post->featured}}" alt="image">
                    </div>

                    <div class="post__content">


                        <div class="post-additional-info">

                            <div class="post__author author vcard">
                                Posted by

                                <div class="post__author-name fn">
                                    <a href="#" class="post__author-link">{{ $post->user->name}}</a>
                                </div>

                            </div>

                            <span class="post__date">

                                <i class="seoicon-clock"></i>

                                <time class="published" datetime="2016-03-20 12:00:00">
                                  {{$post->created_at->toFormattedDateString()}}
                                </time>

                            </span>

                            <span class="category">
                                <i class="seoicon-tags"></i>
                                <a href="{{ route('category.single', ['id' => $post->category->id ])}}">{{ $post->category->name }}</a>
                            </span>

                        </div>

                        <div class="post__content-info justify-txt">

                              {!! $post->content!!}
                              <br/> <br/>
                            <div class="widget w-tags">
                              <p class="tag"> Tagged With :</p>
                                <span class="tags-wrap">
                                  @foreach($post->tags as $tag)
                                    <a href="{{ route('tag.single', ['id' => $tag->id ])}}" class="w-tags-item">{{ $tag->tag}}</a>
                                  @endforeach
                                </span>
                            </div>

                        </div>
                    </div>

                    <!-- <div class="socials">
                Go to www.addthis.com/dashboard to customize your tools
                <div class="addthis_inline_share_toolbox"></div>

                    </div> -->

                </article>

                <div class="blog-details-author">

                    <div class="blog-details-author-thumb">
                        <img src="{{asset($post->user->profile->avatar)}}" alt="Author">
                    </div>

                    <div class="blog-details-author-content">
                        <div class="author-info">
                            <h5 class="author-name">{{ $post->user->name}}</h5>
                        </div>
                        <p class="text">{{ $post->user->profile->about }}
                        </p>
                        <div class="socials">

                            <a href="{{ $post->user->profile->facebook }}" class="social__item" target="_blank">
                                <img src="{{ asset('app/svg/circle-facebook.svg')}}" alt="facebook">
                            </a>

                            <a href="https://twitter.com/joimman" class="social__item" target="_blank">
                                <img src="{{ asset('app/svg/twitter.svg')}}" alt="twitter">
                            </a>

                            <a href="{{ $post->user->profile->instagram }}" class="social__item" target="_blank">
                                <img src="{{ asset('app/svg/instagram.svg.png')}}" alt="youtube">
                            </a>

                        </div>
                    </div>
                </div>

                <div class="pagination-arrow">
                  @if($prev)
                    <a href="{{ route('post.single', ['slug' => $prev->slug ])}}" class="btn-prev-wrap">
                        <svg class="btn-prev">
                            <use xlink:href="#arrow-left"></use>
                        </svg>
                        <div class="btn-content">
                            <div class="btn-content-title">Previous Post</div>
                            <p class="btn-content-subtitle">{{ $prev->title}}</p>
                            <img src="{{ $prev->featured}}" alt="Image" width="100px" height="100px">
                        </div>
                    </a>
                    @endif

                  @if($next)
                  <a href="{{ route('post.single', ['slug' => $next->slug ])}}" class="btn-next-wrap">
                      <div class="btn-content">
                          <div class="btn-content-title">Next Post</div>
                          <p class="btn-content-subtitle"> {{$next->title}}</p>
                          <img src="{{ $next->featured}}" alt="Image" width="100px" height="100px">
                      </div>
                      <svg class="btn-next">
                          <use xlink:href="#arrow-right"></use>
                      </svg>
                  </a>
                  @endif

                </div>

                <div class="signup-form subscribe-box  blog-details-author">
    <form method="" action="">
       
        <div class="mc_form_inside">

            <div class="updated" id="mc_message"> </div><!-- /mc_message -->

              <header class="subscribe-header">
                <h2 class="subscribe-title">LET'S STAY IN TOUCH!</h2>
                <h3 class="subscribe-description">Sign up here to be the first to know about everything Jo Imman</h3>
              </header>
      
            <div class="signup-inputs cf">
        
                <div class="input-holder mc_merge_var">
                    <label for="mc_mv_FNAME" class="mc_var_label mc_header mc_header_text sr-only">First Name</label>
                    <input type="text" size="18" placeholder="first name" name="FNAME" id="mc_mv_FNAME" class="mc_input">
                </div><!-- /mc_merge_var -->

                <div class="input-holder mc_merge_var">
                    <label for="mc_mv_EMAIL" class="mc_var_label mc_header mc_header_email sr-only">Email Address<span class="mc_required">*</span></label>
                    <input type="email" size="18" placeholder="email address" name="EMAIL" id="mc_mv_EMAIL" class="mc_input">
                </div><!-- /mc_merge_var -->

                <div class="input-holder mc_merge_var">
                    <input type="submit" name="mc_signup_submit" id="mc_signup_submit" value="SIGN ME UP" class="submit-btn">
                </div><!-- /mc_merge_var -->
            </div>

            <div class="mc_signup_submit">
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b442c2243470c69b9cd83d530_7728fc8b13" tabindex="-1" value=""></div>
            </div><!-- /mc_signup_submit -->


            <div class="response-box">
                <div id="mce-thankyou">
                    <div class="response"></div>
                </div>

                <div id="mce-responses">
                    <div class="response"></div>
                </div>
            </div>
        </div><!-- /mc_form_inside -->
    </form><!-- /mc_signup_form -->
</div>


                <article class="comments">

                    <div class="heading text-center">
                      @if ($comment_count < 1)
                        <p class=" heading-title"> Be the first to comment </p>
                      @elseif ($comment_count == 1)
                        <p class=" heading-title">{{$comment_count}} Comment on {{$post->title}}</p>
                        @else
                          <p class=" heading-title">{{$comment_count}} Comments on {{$post->title}}</p>
                      @endif

                    </div>
                  @if ($comment_count > 0)
                   @include('includes.commentlist', ['collection' => $comments['root']])
                  @endif
                   @include('includes.commentform')

                </article>




            </div>

            <!-- End Post Details -->


        </div>
      </div>

        <!-- <div class="col-lg-3">
        </div> -->
    </div>
      @include('includes.footer')
</div>

@endsection
