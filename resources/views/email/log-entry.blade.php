<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>New Log Entry - {{ $log->name }}</title>
</head>

<body>
  <h4>Hi, {{ $name }}!</h4>
  <p>There's a new log added with details:</p>
  <div style="margin: 20rem;">
    <p>Log ID: {{ $id }}</p>
    <p>Log Title: {{ $log->title }}</p>
    <p>Log Detail: {{ $log->description }}</p>
  </div>
  <p>You can review or update this later on the app!</p>
  <p style="margin-top: 20rem; margin-bottom: 20rem;">Enjoy your day!</p>
</body>

</html>