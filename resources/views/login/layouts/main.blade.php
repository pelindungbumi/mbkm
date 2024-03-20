<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Signin Template · Bootstrap v5.0</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="/assets/css/style.css">
  <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-light navbar-bg">
    <div class="container-fluid">
      <a href="/">MBKM SI UKDW</a>
    </div>
  </nav>
  <div class="container mt-4">

    <div class="row">
      <div class="wrp-title">
        <h3> Merdeka Belajar Kampus </h3>
        <h3> Sistem Informasi </h3>
        <h3> Universitas Kristen Duta Wacana </h3>
      </div>
    </div>
    <div class="row mt-4">

      @yield('bodyauth')

    </div>
  </div>
</body>

</html>