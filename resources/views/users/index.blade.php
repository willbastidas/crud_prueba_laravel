 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<title>Users</title>
</head>
<body>
<section class="container mt-5">
    @if(session('dele')) 
        <div class="alert alert-success">{{session('dele')}}</div>
    @endif
        <table class="table table-bordered">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Activation</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $key => $val)
        <tr>
            <th scope="row"> {{++$key}} </th>
            <td>{{ $val->name }}</td>
            <td>{{ $val->email }}</td>
            <td>
                <a href="{{ route('user.edit',$val->id)}}" class="btn btn-secondary">Edit</a>
                <a href="{{ route('user.show', $val->id)}}" class="btn btn-danger">Delete</a>
            </td>
        @endforeach
        </tr>
    </tbody>
     
    </table>
</section>

</body>
</html>