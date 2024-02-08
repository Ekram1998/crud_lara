<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Information</title>
</head>
<body>
    <h1>All Student Information</h1>
    <a href="{{route('create.student')}}">Add Student</a>
    <div>
        <table class="table table-responsive table-strioe" border="1px">
            <thead>
            <tr>
                <th>SL NO</th>
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($students as $key=>$student)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->address}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->phone}}</td>
                        <td>
                            <a href="{{route('edit.student',$student->id)}}">edit</a>
                            <a href="{{route('delete.student',$student->id)}}">delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>
</body>
</html>