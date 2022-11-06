<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
    @include('components/vendor/css')
</head>

<body>

  @include('components/header')
  @include('components/sidebar')

  

  <main id="main" class="main">

    @yield('container')

  </main><!-- End #main -->

  @include('components/footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('components/vendor/js')
</body>

</html>