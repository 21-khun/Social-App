<x-authlayout>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-4 mt-5">
                <!-- Material form login -->
                <div class="card mt-4">

                    <h5 class="card-header purple white-text text-center py-4">
                        <strong>Log in</strong>
                    </h5>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">




                        <!-- Form -->
                        <form class="text-center" style="color: #757575;" action="{{route('post_login')}}" method="post">
                            @csrf @if(Session('error'))
                            <div class="alert alert-danger mt-2">
                                {{Session('error')}}
                            </div>
                            @endif
                            <!-- Email -->
                            <div class="md-form">
                                <input type="email" id="materialLoginFormEmail" name="email" class="form-control">
                                <label for="materialLoginFormEmail">E-mail</label> @error("email")
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="md-form">
                                <input type="password" id="materialLoginFormPassword" name="password" class="form-control">
                                <label for="materialLoginFormPassword">Password</label> @error("password")
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-around">

                                <div>
                                    <!-- Forgot password -->
                                    <a href="">Forgot password?</a>
                                </div>
                            </div>

                            <!-- Sign in button -->
                            <button class="btn btn-outline-purple btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Log in</button>

                            <!-- Register -->
                            <p>Not a member?
                                <a href="{{route('register')}}">Register</a>
                            </p>



                        </form>
                        <!-- Form -->

                    </div>

                </div>
                <!-- Material form login -->

            </div>
        </div>
    </div>

</x-authlayout>