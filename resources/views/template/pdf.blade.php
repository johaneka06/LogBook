<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>File</title>
</head>

<body>
    @php $i = 1 @endphp
    <div class="container">
        <div class="mt-3">
            <p>Name: {{ Auth::user()->name }}</p>
            <p>Email: {{ Auth::user()->email }}</p>
        </div>
        <div class="my-5">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Log Date</th>
                        <th scope="col">Clock In</th>
                        <th scope="col">Clock Out</th>
                        <th scope="col">Title</th>
                        <th scope="col">Desc</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($logs as $log)
                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{$log->log_date}}</td>
                        <td>{{ $log->clock_in }}</td>
                        <td>{{ $log->clock_out }}</td>
                        <td>{{ $log->title }}</td>
                        <td>{{ $log->description }}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>

    
</body>

</html>