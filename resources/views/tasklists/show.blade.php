@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->

	<h1>id = {{ $tasklist->id }}のメッセージ詳細ページ</h1>

	<p>{{ $tasklist->status }}</po>
	<p>{{ $tasklist->content }}</po>

	{!! link_to_route('tasklists.edit', 'このタスク編集', ['id' => $tasklist->id]) !!}

	{!! Form::model($tasklist, ['route' => ['tasklists.destroy', $tasklist->id], 'method' => 'delete']) !!}
		{!! Form::submit('削除') !!}
	{!! Form::close() !!}

@endsection
