<table>
    <tr>
        <th>Name</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Password</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->lastname}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
        </tr>
    @endforeach
</table>

<a href="/register">
    <button> Go to register </button>
</a>