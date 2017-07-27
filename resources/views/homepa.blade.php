@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Bienvenue, {{{ Auth::user()->name }}}.
                    <br><br>
                    <table border="1">
						<tr>
							<th>Prenom</th>
							<th>Nom de famille</th>
							<th>Adresse courriel</th>
						</tr>
						@foreach ($clientspa as $client)
						<tr>
							<td>{{ $client->firstname }}</td>
							<td>{{ $client->lastname }}</td>
							<td>{{ $client->email }}</td>
						</tr>
						@endforeach
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

