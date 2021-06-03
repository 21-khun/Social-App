<x-adminlayout>

<table class="table table-hover">
    <thead class="black">
        <tr class="white-text">
            <th scope="col">ID</th>
            <th scope="col">User Name</th>
            <th scope="col">Email</th>
            <th scope="col">Is Admin?</th>
            <th scope="col">Is Premium?</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
    <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td><b>{{$user->isAdmin=='0' ? "False":"True"}}</b></td>
            <td><b>{{$user->isPremium=='0' ? "False":"True"}}</b></td>
            <td><a class="btn btn-sm btn-success" href="{{route('editUser',$user->id)}}">Edit</a></td>
            <td><a class="btn btn-sm btn-danger" href="{{route('deleteUser',$user->id)}}">Delete</a></td>
        </tr>
    @endforeach
       

    </tbody>
</table>
</x-adminlayout>
