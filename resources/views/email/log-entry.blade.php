<!doctype html>
<html lang="en">

<head>
  <title>New Log Entry - {{ $log->name }}</title>
</head>

<body>
  <h4>Hi, {{ $name }}!</h4>
  <p>There's a new log added with details:</p>
  <div>
    <p>Log ID: {{ $id }}</p>
    <p>Log Title: {{ $log->title }}</p>
    <p>Log Detail: {{ $log->description }}</p>
  </div>
  <p>You can review or update this later on the app!</p>
  <p>Enjoy your day!</p>
</body>

</html>