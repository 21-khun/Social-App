<x-pagelayout>
<div class="container">
    <!-- Default form login -->
    <p class="h2 mb-4  mt-4">Edit Post</p>
    <form class=" border border-light p-5 mt-3" action="{{route('update_post',$update_post->id)}}"  method="post" enctype="multipart/form-data">


        @csrf
        <!-- Title -->
        <label for="title">Title</label>
        <input type="text" id="defaultLoginFormEmail" name="title" value="{{$update_post->title}}" class="form-control mb-4" >

        <!-- photo -->
        <label for="Photo">Photo</label>
        <div class="input-group   ">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input " name="image" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Choose File </label>
            </div>
        </div>
        <div class="mt-3 col-md-4">
            <img src="{{asset('images/posts/'.$update_post->image)}}" class="img-fluid" alt="">
        </div>


        <!-- content -->
        <label for="content" class="mt-4">Content</label>
        <textarea name="content" class="form-control mb-4" id="" cols="30" rows="10" >{{$update_post->content}}</textarea>
        <!-- Sign in button -->
        <button class="btn btn-purple btn-block my-4" type="submit">Update Post</button>




    </form>
    <!-- Default form login -->
</div>
</x-pagelayout>