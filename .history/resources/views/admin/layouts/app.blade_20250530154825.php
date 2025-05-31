<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <title>@yield('title', 'Zirve admin ')</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet">

  <!-- Template Styles -->
  <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/milligram.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
  <!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>


<body>

    @include('admin.partials.navbar')
    @include('admin.partials.sidebar')

    @yield('content')





  <!-- İçerik -->

  <script src="{{ asset('assets/js/chart.min.js') }}"></script>
  <script src="{{ asset('assets/js/chart-data.js') }}"></script>

</body>
</html>
