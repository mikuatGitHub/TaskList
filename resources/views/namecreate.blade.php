<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>予定表</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}" >
</head>

<body>
    <div class="container">
        <header>
        <h1>名前新規作成</h1>
        <a href="/">&laquo;戻る</a>
        </header>

        <form method="post" action="{{ route('namecreatestore') }}">
            @csrf
            <label>
                名前：
                <input type="text" name="name">さん<br>
            </label>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror

            <label>
                予定：
                <textarea name="task">{{ old('task') }}</textarea>
            </label>

            <button class="addbtn">追加</button>
        </form>

    </div>

</body>

</html>
