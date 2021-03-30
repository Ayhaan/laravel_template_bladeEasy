<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>

    {{-- CSS TEMPLATE --}}
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/agency.min.css')}}">
    {{-- ICON TEMPLATE --}}
    <link href={{asset('vendor/fontawesome-free/css/all.min.css')}} rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  
</head>
<body id="page-top">

    @yield('content')

  <!-- Bootstrap core JavaScript -->
  <script src={{asset("vendor/jquery/jquery.min.js")}}></script>
  <script src={{asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>

  <!-- Plugin JavaScript -->
  <script src={{asset("vendor/jquery-easing/jquery.easing.min.js")}}></script>

  <!-- Contact form JavaScript -->
  <script src={{asset("js/jqBootstrapValidation.js")}}></script>
  <script src={{asset("js/contact_me.js")}}></script>

  <!-- Custom scripts for this template -->
  <script src={{asset("js/agency.min.js")}}></script>
</body>
</html>