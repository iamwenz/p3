<!doctype html>
<html lang='en'>
<head>
  <title>@yield('title')</title>
  <meta charset='utf-8'>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <style>
    html, body {
      background-color: #fff;
      color: #636b6f;
      font-family: 'Nunito', sans-serif;
      font-weight: 200;
      height: 100vh;
      margin: 0;
    }
  </style>
  @yield('head')
</head>
<body>
  <header>
    <center><h1>Puma Lai Veterinarian</h1></center>
  </header>
  <section>
    @yield('content')
  </section>
  <footer>
    <center><h5>&copy; Puma Lai {{ date('Y')}}</h5></center>
  </footer>
</body>
</html>
