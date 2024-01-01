<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All_student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
        <div class="container">
            <div class="row">
                <h1>Student List</h1>
                <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">City</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Password</th>
                        <th scope="col">View</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                {{-- <th scope="row">{{$loop->iteration}}</th> --}}
                                <th scope="row">{{ $student->id}}</th>
                                <td>{{ $student->name}}</td>
                                <td>{{ $student->age}}</td>
                                <td>{{ $student->email}}</td>
                                <td>{{ $student->address}}</td>
                                <td>{{ $student->city}}</td>
                                <td>{{ $student->phone}}</td>
                                <td>{{ $student->password}}</td>
                                <td><a href="{{ route('student.view', $student->id)}}" class="btn btn-primary btn-sm">View</a></td>
                                <td><a href="{{ route('student.delete', $student->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
</body>
</html>


