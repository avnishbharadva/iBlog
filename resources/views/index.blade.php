<x-navbar title="Welcome to iBlog"/>

<div class="container my-3">
    <h2 class="text-center">Welcome To <span class="text-info">iBlog </span>{{session()->get('username')}}</h2>

    @foreach ($posts as $post) 

    <div class="card mb-3 mt-3" style="max-width: 100%;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{ asset('images/posts/'.$post->post_img)}}" height="40px" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            {{-- {{$id = $post->post_id}} --}}
            <h5 class="card-title"><a style="text-decoration:none;" href="{{url('/fullpost/'.$post->post_id)}}">{{$post->post_title}}</a></h5>
            <p class="card-text">{!! $post->post_desc !!}</p>
            <p class="card-text mt-5">Category : {{$post->post_tag}}</p>
            <p class="card-text">Posted on : {{$post->created_at}}</p>
          </div>
        </div>
      </div>
    </div>

      @endforeach




</div>

<x-footer/>