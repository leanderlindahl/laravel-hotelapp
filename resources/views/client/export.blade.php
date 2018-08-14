<table class="stack">
	<thead>
	<tr>
		<th width="200">{{ __('Name') }}</th>
		<th width="200">{{ __('Email') }}</th>
		<th width="200">{{ __('Action') }}</th>
	</tr>
	</thead>
	<tbody>

		@foreach( $clients as $client )

		<tr>
		<td>{{ $client->title }}. {{ $client->name }} {{ $client->last_name }}</td>
		<td>{{ $client->email }}</td>
		<td>
			<a class="hollow button" href="{{ route('show_client', ['client_id' => $client->id]) }}">{{ __('EDIT') }}</a>
			<a class="hollow button warning" href="{{ route('check_room', ['client_id' => $client->id]) }}">{{ __('BOOK A ROOM') }}</a>
		</td>
		</tr>

		@endforeach
		
	</tbody>
</table>