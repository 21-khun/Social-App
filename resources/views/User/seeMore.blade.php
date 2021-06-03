<x-pagelayout>
<div class="container ">
     <h4 class="mt-5 purple-text">Posted By {{$post->user->name}}</h4>
    <div class="row">
        <div class="col-md-6 mt-5 ">
           

            <img src="{{asset('images/posts/'.$post->image)}}" class="img-fluid" alt=" ">

        </div>
        <div class="col-md-6 mt-5 ">
            <div class="row ">
                <div class="col-md-9  ">

                    <head>
                        <h1 class="purple-text mb-3 ">CONTENT</h1>
                        <hr>
                    </head>
                    <h1> {{$post->title}}</h1>
                    <p> {{$post->content}}</p>

                </div>
                @can('premium')
                <div class="col-md-3 mt-5 ">
                    <a href="{{route('edit_post',$post->id)}}" class="btn btn-lg btn-info ">Edit</a>
                    <a href="{{route('delete_post',$post->id)}}" class="btn btn-lg btn-danger ">Delete</a>
                </div>
                @endcan
            </div>


        </div>

    </div>
</div>
</x-pagelayout>