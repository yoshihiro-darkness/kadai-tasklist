@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->

	<h1>タスク一覧</h1>

	@if (count($tasklists) > 0)
		<ul>
			@foreach ($tasklists as $tasklist)
				<li>{!! link_to_route('tasklists.show', $tasklist->id, ['id' => $tasklist->id]) !!} : {{ $tasklist->title }} {{ $tasklist->created_at }} {{ $tasklist->content }}</li>
			@endforeach
		</ul>
	@endif

	{!! link_to_route('tasklists.create', '新規タスクの登録') !!}

@endsection
