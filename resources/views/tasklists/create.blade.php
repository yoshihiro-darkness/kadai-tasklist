@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->

	<h1>タスクの新規登録ページ</h1>
	<!--	
	@if (count($errors) > 0)
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif
	-->

	

	{!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}

		{!! Form::label('title', 'タイトル：') !!}
		{!! Form::text('title') !!}

		{!! Form::label('content', 'タスク：') !!}
		{!! Form::text('content') !!}

		{!! Form::submit('登録') !!}

	{!! Form::close() !!}
