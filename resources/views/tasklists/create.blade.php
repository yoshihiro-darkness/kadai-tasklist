@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->

	<h1>タスクの新規登録ページ</h1>

	{!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}

		{!! Form::label('content', 'タスク：') !!}
		{!! Form::text('content') !!}

		{!! Form::submit('登録') !!}

	{!! Form::close() !!}
