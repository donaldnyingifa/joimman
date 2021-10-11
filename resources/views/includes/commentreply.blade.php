<form action="{{ route('comments.store', $post->id)}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}


            @if ($parentId)
            <input name="parent_id" id="parent_id" type="hidden" value="{{$parentId}}"></input>  
            @endif
            <div class="">
              <!-- <div class="form-group mb-2">
              <label for="name">Name</label>
              <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group mb-2">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control">
            </div> -->

            
            <!-- <div class="col-md-6 ">
            <input type="text" name="name" placeholder="name"  class="form-control">
             <input type="email" name="email" placeholder="email" class="form-control">
              <textarea name="comment" placeholder="reply" type="text" id="comment" cols="0" rows="0" class="form-control"></textarea>
              
              <div class="text-right">
                <button class="btn btn-sm-success" type="submit">
                  Reply
                </button>
              </div>
           </div> -->
           

            

        </form>