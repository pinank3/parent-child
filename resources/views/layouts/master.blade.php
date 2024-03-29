<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title> @yield('title')</title>
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
      <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
      <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <div>
          @include('users.header')
          @include('users.sidebar')
        </div>
        <div class="content-wrapper">
          @include('users.messages')
          @yield('content')
        </div>
        <div>
          @include('users.footer')
        </div>
    </div>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="dist/js/adminlte.min.js"></script>
    <script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
