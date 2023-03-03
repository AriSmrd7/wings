<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ari Sumardi">
    <title>Halaman Login</title>
    <!-- Bootstrap core CSS -->
    <link href="{!! url('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css') !!}"
        rel="stylesheet">
    <link href="{!! url('assets/css/signin.css') !!}" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">
    <main class="form-signin">
        @yield('content')
    </main>
</body>
</html>