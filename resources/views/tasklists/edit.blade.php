@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->

	<h1>id: {{ $tasklist->id }}のメッセージ編集ページ</h1>

	{!! Form::model($tasklist, ['route' => ['tasklists.update', $tasklist->id], 'method' => 'put']) !!}

		{!! Form::label('content', 'タスク:') !!}
		{!! Form::text('content') !!}

		{!! Form::submit('更新') !!}

	{!! Form::close() !!}

@endsection
