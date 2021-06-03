<x-pagelayout>
<div class="container">
    <!-- Default form login -->
    <p class="h2 mb-4  mt-4">User Profile </p>
    <form class=" border border-light p-5 mt-3  " action="{{route('update_userProfile')}}" method="post" enctype="multipart/form-data">
        @if(Session('error'))
        <div class="alert alert-danger">
            {{Session('error')}}

        </div>
        @endif @if(Session('success'))
        <div class="alert alert-success">
            {{Session('success')}}

        </div>
        @endif @csrf
        <!-- User Name -->
        <label for="title">User Name</label>
        <input type="text" id="defaultLoginFormEmail" name="userName" class="form-control mb-4" value="{{auth()->user()->name}}">

        <!-- Email -->
        <label for="Email">Email </label>
        <input type="text" id="defaultLoginFormEmail" name="email" class="form-control mb-4" value="{{auth()->user()->email}}">

        <!-- User Photo -->

        <label for="Photo">Profile Picture</label>
        <div class="input-group  mb-4">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input " name="image" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Choose File </label>
            </div>
        </div>

        <div class="mb-4 col-md-4">
            <img src="{{asset('images/profiles/'.auth()->user()->image)}}" class="img-fluid" alt="">
        </div>



        <!-- Old Password  -->
        <label for="title">Old Password</label>
        <input type="password" id="defaultLoginFormEmail" name="old_password" class="form-control mb-4">
        <!-- New  Password  -->
        <label for="title">New Password</label>
        <input type="password" id="defaultLoginFormEmail" name="new_password" class="form-control mb-4">



        <!-- Sign in button -->
        <button class="btn btn-purple btn-block my-4" type="submit">Update  Profile</button>




    </form>
    <!-- Default form login -->
</div>
</x-pagelayout>