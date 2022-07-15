<x-navbar title="Add Post"/>
<div class="container" style="min-height: 633px">
    <h2 class="my-2 text-center text-aqua">{{$heading}}</h2>
<form action="{{$url}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Title</label>
      <input type="text" name="post_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Description</label>
      <textarea id="desc" name="post_desc" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Choose File</label>
      <input type="file" class="form-control" name="post_img" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Tag</label>
      <input type="text" name="post_tag" class="form-control" id="exampleCheck1">
    </div>
    <div class="mb-3">
    <select class="form-select" name="status" aria-label="Default select example">
      <option value="1">Publish</option>
      <option value="0">Save in Draft</option>
    </select>
  </div>
    <div class="text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  </form>
</div>

{{-- ck editor script --}}
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>

<script>
  ClassicEditor
      .create( document.querySelector( '#desc' ) )
      .catch( error => {
          console.error( error );
      } );
</script>

<x-footer/>