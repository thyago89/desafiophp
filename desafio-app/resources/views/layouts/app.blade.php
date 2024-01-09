<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" href="site.css"/>
</head>
<body>
    <header>
        <h1>Meu blog</h1>
    </header>
    <section class="menu">
        <ul>
            <li><a href="#"/>Home</a></li>
            <li><a href="#"/>Banco de Dados</a></li>
            <li><a href="#"/>Programação</a></li>
        </ul>
    </section>
    <section class="content">
        @yield('content')
    </section>
    <script src="jquery-3.0.0.min.js"></script>
    <script src="site.js"></script>
</body>
</html>