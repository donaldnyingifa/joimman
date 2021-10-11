@extends('layouts.app')

@section('content')
          <div class="col-lg-6">

            <div class="card">
                <h3 class="card-header text-center primary-color white-text">  Published Posts</h3>
                <div class="card-body">
                    <h4 class="card-title text-center">  {{ $posts_count}}</h4>
                </div>
            </div>
            </div>

            <div class="col-lg-6">
              <div class="card">
                  <h3 class="card-header text-center danger-color white-text"> Trashed Posts </h3>

                  <div class="card-body ">
                    <h4 class="card-title text-center"> {{ $trashed_count}} </h4>
                  </div>
              </div>
              </div>

              <div class="col-lg-6">
                  <div class="card">
                    <h3 class="card-header text-center deep-orange lighten-1 white-text">   Users </h3>
                    <div class="card-body">
                      <h4 class="card-title text-center">
                        {{ $users_count}}
                      </h4>
                    </div>



                  </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                  <h3 class="card-header bg-info white-text text-center"> Categories</h3>

                      <div class="card-body ">
                      <h4 class="card-title text-center">  {{ $categories_count}} </h4>
                      </div>

                  </div>
                  </div>

@endsection
