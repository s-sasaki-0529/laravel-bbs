@extends ('app')
  @section ('content')
  <h2 class='page-header'>{{{ $thread->title }}}</h2>
  <div class='thread-content'>
    @foreach ($writings as $writing)
    <div class='thread-writing'>
      <span class='writing-name'>{{ $writing->name }}</span>
      <span class='writing-datetime'>({{ $writing->created_at }})</span>
      <div class='writing-body'>{{ $writing->body }}</div>
    </div>
    @endforeach
  </div>

  <form method="POST">
    <div class='form-group'>
      <label class='control-label'>お名前</label>
      <input class='form-control' type='input' name='title' id='title'>
    </div>
    <div class='form-group'>
      <label class='control-label'>本文</label>
      <textarea class='form-control' name='body' id='body'></textarea>
    </div>
    <div class='form-group right'>
      <button type='submit'>送信</button>
    </div>
  </form>
  @endsection
