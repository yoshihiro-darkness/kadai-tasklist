<table class="table table-striped">

<thread>
	<tr>
		<th>id</th>
		<th>task</th>
		<th>status</th>
	</tr>
</thread>



<tbody>
@foreach ($tasklists as $tasklist)
	<?php $user = $tasklist->user; ?>
				<tr>
					<td>{!! link_to_route('tasklists.show', $tasklist->id, ['id' => $tasklist->id]) !!}</td>
					<td>{{ $tasklist->content }}</td>
					<td>{{ $tasklist->status }}</td>
				</tr>
@endforeach
</tbody>
</table>
{!! $tasklists->render() !!}
