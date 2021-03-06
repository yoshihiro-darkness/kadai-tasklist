@extends('layouts.app')

@section('content')
	@if (Auth::check())
		<h1>タスク一覧</h1>

		@if (count($tasklists) > 0)
			@include('tasklists.tasklists', ['tasklists' => $tasklists])
		@endif

		{!! link_to_route('tasklists.create', '新規タスクの登録') !!}
	@else
                <div class="center jumbotron">
                        <div class="text-center">
                                <h1>Welcome to the Tasklists</h1>
                                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
                        </div>
                </div>
	@endif

@endsection
