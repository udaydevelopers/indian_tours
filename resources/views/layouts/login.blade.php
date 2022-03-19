<!doctype html>
<html lang="en">
   <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- favicon -->
        <link rel="icon" type="image/png" href="../assets/images/favicon.png">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ url('admin/assets/css/bootstrap.min.css') }}" media="all">
        <!-- Fonts Awesome CSS -->
        <link rel="stylesheet" type="text/css" href="{{ url('admin/assets/css/all.min.css') }}">
        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="{{ url('admin/style.css') }}">
        <!-- Bootstrap CSS -->
        @yield('style')
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title> @yield('title')</title>
        
</head>
<body>

    <!-- start Container Wrapper -->
<div class="login-page" style=" background-image: url('{{asset('admin/assets/images/bg.jpg')}}')">
        <!-- Dashboard -->
           
            @yield('content') 
         
            <!-- Content / End -->
           
       
        <!-- Dashboard / End -->
    </div>
    <!-- end Container Wrapper -->
    <!-- *Scripts* -->
    <script src="{{ url('admin/assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="{{ url('admin/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('admin/assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ url('admin/assets/js/dashboard-custom.js') }}"></script>
    @yield('script')
</body>
</html>