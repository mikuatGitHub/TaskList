<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>予定表</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>

<body>
    <div class="container">
        <header>
        <h1 id="today"></h1>
        <a href="{{ route('index') }}">管理者ページ</a>
        </header>

        @foreach($posts as $post)
        <div class="post">
            <h2>{{ $post->name }}さん</h2>
            <p>{{ $post->task }}</p>
        </div>
        @endforeach
    </div>

<script src="{{ url('js/main.js') }}"></script>
</body>

</html>
