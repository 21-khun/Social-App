<x-adminlayout>

    <div class="col-md-12 ">
        <!-- Material form contact -->
        <div class="card">

            <h5 class="card-header info-color white-text text-center py-4">
                <strong>Update User Information</strong>
            </h5>

            <!--Card content-->
            <div class="card-body px-lg-5 pt-0">

                <!-- Form -->
                <form class="text-center" style="color: #757575;" action="{{route('updateUser',$user->id)}}" method="post">
                    @csrf

                    <!-- Name -->
                    <div class="md-form mt-5">
                        <input type="text" name="userName" id="materialContactFormName" value="{{$user->name}}" class="form-control">
                        <label for="materialContactFormName">Name</label> @error('userName')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <!-- E-mail -->
                    <div class="md-form ">
                        <input type="email" name="email" id="materialContactFormEmail" value="{{$user->email}}" class="form-control">
                        <label for="materialContactFormEmail">E-mail</label> @error('email')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <label for="">Admin </label>


                    <select name="isAdmin" class="form-control" id="">
                                    <option value="1" {{$user->isAdmin =="1" ? "selected":""}} >True</option>
                                    <option value="0" {{$user->isAdmin =="0" ? "selected":""}} >False</option>

                                </select>


                    <div class="mt-3">
                        <label for="">Premium User</label>

                        <select name="isPremium" class="form-control" id="">
                                    <option value="1" {{$user->isPremium =="1" ? "selected":""}} >True</option>
                                    <option value="0" {{$user->isPremium =="0" ? "selected":""}} >False</option>

                                </select>
                    </div>



                    <!-- Send button -->
                    <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Update</button>

                </form>
                <!-- Form -->

            </div>

        </div>
        <!-- Material form contact -->
    </div>
</x-adminlayout>