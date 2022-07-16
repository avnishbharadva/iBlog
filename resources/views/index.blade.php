<x-navbar title="Welcome to iBlog"/>

<div class="container my-3">
    <h2 class="text-center">Welcome To <span class="text-info">iBlog </span>{{session()->get('username')}}</h2>

    @foreach ($posts as $post) 

      <div class="card mt-3">
          <div class="card-body">
              <h4 class="card-title">{{$post->post_title}}</h4>
              <span class="badge bg-primary">{{$post->post_created_at}}</span>
              <span class="badge bg-secondary">{{$post->post_tag}}</span>
              <img src="{{ asset('images/posts/'.$post->post_img)}}" class="card-img-top mt-1" alt="..."
                  height="500px">
              <p class="card-text mt-2">{!!$post->post_desc!!}</p>
              <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
              <!-- Button trigger modal -->
              {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                  data-bs-target="#exampleModal">Comment on this
              </button> --}}

              <!-- Modal -->
              {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Comment on this</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              <form action="" method="post">
                  
                                  <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Comment</label>
                                      <textarea class="form-control" name="comment" id="" cols="20"
                                          rows="3" required></textarea>
                                  </div> --}}
                                  
                                  <!-- <button type="submit" name="post"
                                          class="btn btn-primary mb-3">Submit</button> -->
                              
                          {{-- </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary"
                                  data-bs-dismiss="modal">Close</button>
                              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                          </div>
                              </form> --}}
                      {{-- </div> --}}
                  {{-- </div> --}}
              {{-- </div> --}}
          </div>
      </div>
      @endforeach




</div>

<x-footer/>