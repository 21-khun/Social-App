<x-pagelayout>
<div class="container">
    <!-- Default form login -->
    <p class="h2 mb-4  mt-4">Create Post</p>
    <form class=" border border-light p-5 mt-3  " action="{{route('post')}}" method="post" enctype="multipart/form-data">


        @csrf
        <!-- Title -->
        <label for="title">Title</label>
        <input type="text" id="defaultLoginFormEmail" name="title" class="form-control mb-4"> @error('title')
        <p class="text-danger"> {{$message}}</p>
        @enderror

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
        @error('image')
        <p class="text-danger mt-3"> {{$message}}</p>
        @enderror

        <!-- content -->
        <label for="content" class="mt-4">Content</label>
        <textarea name="content" class="form-control mb-4" id="" cols="30" rows="10"></textarea> @error('content')
        <p class="text-danger"> {{$message}}</p>
        @enderror


        <!-- Sign in button -->
        <button class="btn btn-purple btn-block my-4" type="submit">Add Post</button>




    </form>
    <!-- Default form login -->
</div>
</x-pagelayout>