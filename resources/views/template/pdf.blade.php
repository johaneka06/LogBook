<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

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
        <div class="mt-5 mb-5">
            <div class="row my-3">
                <div class="col">No</div>
                <div class="col">Log Date</div>
                <div class="col">Clock In</div>
                <div class="col">Clock Out</div>
                <div class="col">Title</div>
                <div class="col">Description</div>
            </div>
            @foreach($logs as $log)
            <div class="row my-2">
                <div class="col">{{ $i++ }}</div>
                <div class="col">{{$log->log_date}}</div>
                <div class="col">{{ $log->clock_in }}</div>
                <div class="col">{{ $log->clock_out }}</div>
                <div class="col">{{ $log->title }}</div>
                <div class="col">{{ $log->description }}</div>
            </div>
            @endforeach
            
        </div>

    </div>

    
</body>

</html>