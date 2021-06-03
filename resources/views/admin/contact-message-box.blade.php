<x-adminlayout>
<table class="table table-hover">
    <thead class="black">
        <tr class="white-text ">
            <th scope="col">ID</th>
            <th scope="col">UserId</th>
            <th scope="col">User Name</th>
            <th scope="col">Email</th>
            <th scope="col">Message</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
       @foreach ($message as $text)
         <tr>
            <th scope="row">{{$text->id}}</th>
            <th scope="row">{{$text->userId}}</th>
            <td>{{$text->name}}</td>
            <td>{{$text->email}}</td>
            <td>{{$text->message}}</td>
            <td><a class="btn btn-sm btn-success" href="{{route('replyMessage',$text->userId)}}">Reply</a></td>
            <td><a class="btn btn-sm btn-danger" href="{{route('deleteContactMessage',$text->id)}}">Delete</a></td>
        </tr>           
       @endforeach

    </tbody>
</table>
</x-adminlayout>