<!DOCTYPE html>try
<html lang="zh-TW">
<head>
    <title>Chu Fashion · @yield('title')</title>
    <link rel="icon" href="{{URL('/')}}/img/logo.jpg" type="image/x-icon" / >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style>
a {
    color:#848484;
}
</style>

</head>
<body style="background-color:#f6f6f6;margin:2px;color:#848484">
    <span style="font-family:Microsoft JhengHei;font-size:1vw">
    <div style="margin:50px 15vw 50px 15vw">

    @include('frontend.header')
    @yield('content')
    
    </span>
    </div>
    @include('frontend.footer')
</body>
</html>
