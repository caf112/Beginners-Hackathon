<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/main.css">
</head>
<body>
    <header>
        <a href="/articles" class="site-title">ミニブログ</a>
    </header>
    <main class="container">
        @yield('content')
    </main>
    <footer>
        &copy; Laravel8 入門から開発実践まで
    </footer>
</body>
</html>