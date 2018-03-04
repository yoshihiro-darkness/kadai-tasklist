@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->

	<h1>id: {{ $tasklist->id }}のメッセージ編集ページ</h1>

	<!-- @if (count($errors) > 0)
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif -->

	{!! Form::model($tasklist, ['route' => ['tasklists.update', $tasklist->id], 'method' => 'put']) !!}

		{!! Form::label('title', 'タイトル:') !!}
		{!! Form::text('title') !!}

		{!! Form::label('content', 'タスク:') !!}
		{!! Form::text('content') !!}

		{!! Form::submit('更新') !!}

	{!! Form::close() !!}

@endsection
