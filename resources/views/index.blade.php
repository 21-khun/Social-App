<x-pagelayout>
<!-- background image -->
<header>



</header>
<!-- post -->

<!-- Card -->
<div class="container">
    <h1 class="mt-5">All Post</h1>
    <div class="row">
        @foreach($posts as $post)

        <div class="col-md-4 mt-4">
            <div class="card ">

                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top" src="{{asset('images/posts/'.$post->image)}}" alt="Card image cap">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                    <h4 class="card-title">{{$post->name}}</h4>
                </div>

                <!-- Card content -->
                <div class="card-body">

                    <p>Posted By {{$post->user->name}}</p>

                    <!-- Title -->
                    <h4 class="card-title">{{$post->title}}</h4>


                    <!-- Button -->
                    <a href="{{route('seeMore',$post->id)}}" class="btn btn-primary">See More</a>

                </div>

            </div>
        </div>
        @endforeach

        
    </div>
    <div>
    {{$posts->links()}}</div>

</div>
<!-- Card -->
</x-pagelayout>