@extends('layouts.frontend')

@section('content')


<div class="container">
    @include('includes.header')
  <div class="stunning-header post_title top1">
      <div class="stunning-header-content">
          <h1 class="stunning-header-title" align="center">About</h1>
      </div>
  </div>
  
  <div class="row" style="margin-top: 40px;">

            <div class="col-md-6"  >
                <img src="{{ asset('uploads/wendy.jpg')}}" width="450px" height="auto" alt="image">
                
            </div>

            <div class="col-md-6">
                <p> My passion for fashion and photography prompted the launch of JO IMMAN by Wanaemi. Even as an adult, dressing up and taking photos of my outfits is still plenty fun. </p>
                <p>I like to think I can pull off any style but I feel Minimalist Fashion is the closest to my personality. </p>
                <p>With <span class="head_text">J</span><span class="head_text2">O </span> <span class="head_text">I</span><span class="head_text2">MMAN </span> , I am bringing together, two things I love, and creating <strong>FASHIONOGRAPHY</strong>. </p>
                <p> <strong>BEETEEDUBS</strong> Don’t be alarmed if I blog about Food, Travel, Beauty, Inspiration etc...I love em too!</p>
                <p>Don’t be a stranger, talk to me 🙂 </p>

                <form>
                  
                  <div>
                    <div align="center">
                  <input type="text" name="email" placeholder="Email">
                  <input type="text" name="name" placeholder="Name">
                  <textarea style="margin: 15px;" name="message" placeholder="Message"></textarea>
                  <div style="margin-left: 40px">
                  
                  <input type="submit" name="submit" id="submit" value="send">
                </div>
                    </div>
                    
                  </div>
                  
                </form>
                
            </div>

        </div>
    @include('includes.footer')
</div>

@endsection
