<!DOCTYPE html>
<html>
<head> <title>Latihan Blade Tamplates</title>
</head>

<link = rel="stylesheet" href="css/styles.css" type="text/css">

<body>
@include('templates.header')
@yield('content')
@include ('templates.footer')
</body>
<html>