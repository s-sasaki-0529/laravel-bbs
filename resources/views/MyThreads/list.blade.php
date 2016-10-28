@extends('app')
  @section('content')
    <h2 class="page-header">スレッド一覧</h2>
    @if (count($threads) > 0 )
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>タイトル</th>
          <th>作成日時</th>
          <th>書き込み数</th>
        </tr>
      </thead>
      <tbody>
        @foreach($threads as $thread)
        <tr class='pointer' onclick="location.href='/thread/detail/{{{ $thread->id }}}'">
          <td>{{{ $thread->title }}}</td>
          <td>{{{ $thread->created_at }}}</td>
          <td>?</td>
          <td>
            <form method="POST" action="/thread/delete/{{ $thread->id }}">
              <button type="submit" class='btn btn-default btn-xs'>削除</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
    <p>スレッドがありません</p>
    @endif
    <p class='right'><a href="/thread/create">新規スレッド作成</a></p>
  @endsection
