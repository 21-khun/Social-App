<x-pagelayout>
    <div class="container-fluid">
        <h1 class="mt-3">CONTACT US</h1>
        <div class="row">
            <div class="col-md-6 mt-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59681.692653296064!2d97.01499923332905!3d20.78700759424174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ce86381a88cc0f%3A0xf53083c4263eb24b!2z4YCQ4YCx4YCs4YCE4YC64YCA4YC84YCu4YC44YCZ4YC84YCt4YCv4YC3LCDhgJnhgLzhgJThgLrhgJnhgKw!5e0!3m2!1smy!2ssg!4v1622263694280!5m2!1smy!2ssg"
                    width="600" height="410" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-md-6 mt-5">
                <!-- Material form contact -->
                <div class="card">

                    <h5 class="card-header info-color white-text text-center py-4">
                        <strong>Contact us</strong>
                    </h5>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">

                        <!-- Form -->
                        <form class="text-center" style="color: #757575;" action="{{route('post_contactUs')}}" method="post">
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

                            <input type="text" hidden name="userId" value="{{auth()->user()->id}}">

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
        </div>
    </div>
</x-pagelayout>