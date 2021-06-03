<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social App</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet"> {{-- css link --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}"> {{-- toastr link --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
</head>

<body>

 <x-navbar/>

    <div class="container-fluid">

        <div class="row mt-5">

            <div class="col-md-4 ">
                <ul class="list-group">
                    <li class="list-group-item"><a class="btn btn-block btn-purple white-text" href="{{route('manageUser')}}">Manage Premium User</a></li>
                    <li class="list-group-item"><a class="btn btn-block btn-purple white-text" href="{{route('messageBox')}}">Message Box</a></li>

                </ul>
            </div>
            <div class="col-md-8">
                {{$slot}}
            </div>
        </div>
    </div>




    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <!-- {{-- toastr js link --}} -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script>
        @if(Session('message'))
        let message = "{{Session('message')}}";
        toastr.info(message);
        @endif
    </script>
</body>

</html>