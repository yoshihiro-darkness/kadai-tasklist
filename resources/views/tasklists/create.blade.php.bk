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

<div class="row">
	<div class="col-xs-12 col-sm-offset-2 col-sm-6 col-md-offset-2 col-md-6 col-lg-offset-3 col-lg-3">	

	{!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}

	<div class="form-group">
		{!! Form::label('content', 'タスク：') !!}
		{!! Form::text('content', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
                {!! Form::label('status', 'ステータス：') !!}
                {!! Form::text('status', null, ['class' => 'form-control']) !!}
	</div>

		{!! Form::submit('登録', ['class' => 'btn btn-primary']) !!}

	{!! Form::close() !!}
	</div>
</div>

@endsection
