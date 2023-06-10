<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>本の情報を登録</h1>

    <form action="{{ route('book.insert') }}" method="post">
        @csrf
        <!-- ユーザーid -->
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">

        <label for="title">タイトル</label>
        @error('title')
            <div class="error">{{ $message }}</div>
        @enderror
        <input type="text" id="title" name="title">

        <label for="memo">メモ</label>
        @error('memo')
            <div class="error">{{ $message }}</div>
        @enderror
        <textarea id="memo" name="memo" cols="30" rows="10"></textarea>

        <input type="submit" value="送信">
    </form>
</body>
</html>