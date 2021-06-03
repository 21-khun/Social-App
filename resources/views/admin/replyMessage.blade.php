                        <x-adminlayout>
                <div class="col-md-12 ">
                <!-- Material form contact -->
                <div class="card">

                    <h5 class="card-header info-color white-text text-center py-4">
                        <strong>Reply to User</strong>
                    </h5>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">

                        <!-- Form -->
                        <form class="text-center" style="color: #757575;" action="{{route('post_reply')}}" method="post">
                            @csrf

                            <!-- Name -->
                            <div class="md-form mt-3">
                                <input type="text" name="userName" id="materialContactFormName" value="{{auth()->user()->name}}" class="form-control">
                                <label for="materialContactFormName">Name</label> @error('userName')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <!-- E-mail -->
                            <div class="md-form">
                                <input type="email" name="email" id="materialContactFormEmail" value="{{auth()->user()->email}}" class="form-control">
                                <label for="materialContactFormEmail">E-mail</label> @error('email')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <input type="text" hidden name="userId" value="{{$userId->id}}">

                            <!--Message-->
                            <div class="md-form">
                                <textarea name="message" id="materialContactFormMessage" class="form-control md-textarea" rows="3"></textarea>
                                <label for="materialContactFormMessage">Message</label> @error('message')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <!-- Send button -->
                            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Send</button>

                        </form>
                        <!-- Form -->

                    </div>

                </div>
                <!-- Material form contact -->
            </div>
                        </x-adminlayout>