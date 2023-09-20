<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>編集</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}" >
</head>

<body>
    <div class="container">
        <header>
        <h1>{{ $post->name }}さん</h1>
        <a href="/">&laquo;戻る</a>
        </header>

        <form method="post" action="{{ route('update',$post) }}">
            @method('PATCH')
            @csrf
            {{-- <label>
                名前：
                <input type="text" name="name" value="{{ old('name',$post->name) }}">
            </label>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror --}}

            <label>
                予定：
                <textarea name="task">{{ old('task',$post->task) }}</textarea>
            </label>

            <button>上書き</button>
        </form>

    </div>

</body>

</html>
