<form action="{{ route('comments.store', $post->id)}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="comment">Comment:</label>
                        <textarea name="comment" type="text" id="comment" cols="5" rows="5" class="form-control"></textarea>
                      </div>

                      <div class="form-group">
                        <div class="text-center">
                          <button class="btn btn-success" type="submit">
                            Add Comment
                          </button>
                        </div>
                      </div>

                    </form>