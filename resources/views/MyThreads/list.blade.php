@extends('app')
  @section('content')
    <h2 class="page-header">スレッド一覧</h2>
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
          <td>1</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <p class='right'><a href="/thread/create">新規スレッド作成</a></p>
  @endsection
