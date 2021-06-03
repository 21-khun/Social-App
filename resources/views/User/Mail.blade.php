<x-pagelayout>
    @if(Session('error'))
    <div class="alert alert-danger">{{Session('error')}}</div>
    @endif

    <table class="table table-hover">
        <thead>
            <tr>

                <th scope="col">Mail</th>
                <th scope="col">Message</th>
                <th scope="col">Email</th>
                <th scope="col">Created_at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($messages as $message)

            <tr>

                <th scope="row">From {{$message->from_userName}}

                </th>
                <th scope="row">{{$message->mail}} <br><br>
                    <a href="" class="btn btn-sm btn-success">Reply</a>
                </th>

                <td>{{$message->from_email}}</td>
                <td>{{$message->created_at}}</td>
            </tr>
            @endforeach


        </tbody>
    </table>

</x-pagelayout>