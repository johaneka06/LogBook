<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <title>EXPORT</title>

  </head>
    <body>
        <div style="text-align: center">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Date</th>
                    <th scope="col">Clock In</th>
                    <th scope="col">Clock Out</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                  </tr>
                </thead>
                <tbody>
                  @php $i=1 @endphp
                  @foreach ($data as $log)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$log->log_date}}</td>
                    <td>{{$log->clock_in}}</td>
                    <td>{{$log->clock_out}}</td>
                    <td>{{$log->title}}</td>
                    <td>{{$log->description}}</td>
                    
                  </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>