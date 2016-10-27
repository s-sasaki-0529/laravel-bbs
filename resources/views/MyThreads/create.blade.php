@extends ('app')
  @section ('content')
    <h2 class='page-header'>スレッド作成</h2>
    <div class='right'><a href="/">スレッド一覧に戻る</a></div>
    <form method="POST">
      <div class='form-group'>
        <label class='control-label'>スレッド名</label>
        <input class='form-control' type="text" name="title" id="title">
      </div>
      <div class='form-group'>
        <label class='control-label'>投稿者名</label>
        <input class='form-control' type="text" name="name" id="name">
      </div>
      <div class='form-group'>
        <label class='control-label'>本文</label>
        <textarea class='size-fix form-control' name="body" id="body"></textarea>
      </div>
      <div class='right form-group'>
        <button type="submit" class='btn btn-default'>作成</button>
      </div>
    </form>
  @endsection
