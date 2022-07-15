<x-navbar title="All Posts"/>

<div class="container">
    <h2 class="text-center my-2">My Posts</h2>
    <table class="table table-hover">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Description</th>
              <th scope="col">Image</th>
              <th scope="col">Tag</th>
              <th scope="col">Status</th>
              <th scope="col">TimeStamp</th>
              <th class="text-center" scope="col" colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post) 
            <tr>
              <td>{{$post->post_id}}</td>
              <td>{{$post->post_title}}</td>
              <td>{!!$post->post_desc!!}</td>
              <td>
                <img src="{{ asset('images/posts/'.$post->post_img)}}" alt="" width="200px" height="200px">
              </td>
              {{-- <td>
                @if($customer->gender=="M")
                Male
                @elseif($customer->gender=="F")
                Female
                @else
                Other
                @endif
              </td> --}}
              {{-- <td>{{get_formatted_date($customer->dob,'d-M-Y')}}</td> --}}
              <td>{{$post->post_tag}}</td>
              <td> 
                @if($post->status=="1")
                  <span class="badge bg-success">Publish</span>
                @else
                  <span class="badge bg-danger">Save in Draft</span>
                @endif
            </td>
            <td>{{$post->created_at}}</td>

            <td>
              <a href=""><button type="button" class="btn btn-sm btn-primary">Edit</button></a> 
            </td>
              <td>
                <a href=""><button type="button" class="btn btn-sm btn-danger">Delete</button></a>
              </td>
            </tr>
            @endforeach
          </tbody>
      </table>
</div>

<x-footer/>