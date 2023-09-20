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

        <a href="{{ route('guest') }}">閲覧ページ</a>
        <a href="{{ route('namecreate') }}">名前新規作成</a>

        <form method="post" action="{{ route('alldestroy') }}" id="delete">
            @method('DELETE')
            @csrf
            <button class="alldeletebtn">
            予定一括削除</button>
        </form>

        </header>

        @foreach($posts as $post)
        <div class="post">

            <form method="post" action="{{ route('destroy',$post) }}" id="delete">
                @method('DELETE')
                @csrf
                <button class="deletebtn">削除</button>
            </form>

            <h2>{{ $post->name }}さん</h2>

            <a href="{{ route('edit',$post) }}">編集&raquo;</a>

            <p>{{ $post->task }}</p>

        </div>
        @endforeach
    </div>

<script src="{{ url('js/main.js') }}"></script>
</body>

</html>
