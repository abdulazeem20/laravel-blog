<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee</title>
    <link rel="stylesheet" href="http://localhost:100/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('css/signup.css') }}">
</head>

<body>
    <div class="table-responsive w-100">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Salary</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employee as $item)
                    <tr class="">
                        <td scope="row">{{ $item->first_name }} </td>
                        <td>{{ $item->email }} </td>
                        <td>{{ $item->salary }} </td>
                    </tr>
                    {{-- {{ $item->first_name }} --}}
                @endforeach
            </tbody>
        </table>
        {{-- <style>
            .w-5 {
                width: 3rem
            }
        </style>
        {{ $employee->links() }} --}}
    </div>

</body>

</html>
