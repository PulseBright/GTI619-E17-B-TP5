@extends('layouts.app')

@section('content')
<center><h2>Bienvenue, <strong>{{{ Auth::user()->name }}}</strong>, sur votre page d'accueil.</h2></center>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Clients résidentiels</div>

                <div class="panel-body">
					
					<table border="1">
						<tr>
							<th>Prenom</th>
							<th>Nom de famille</th>
							<th>Adresse courriel</th>
						</tr>
						@foreach ($clientspr as $clientpr)
						<tr>
							<td>{{ $clientpr->firstname }}</td>
							<td>{{ $clientpr->lastname }}</td>
							<td>{{ $clientpr->email }}</td>
						</tr>
						@endforeach
					</table>
					
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Clients d'affaires</div>

                <div class="panel-body">
                    <table border="1">
						<tr>
							<th>Prenom</th>
							<th>Nom de famille</th>
							<th>Adresse courriel</th>
						</tr>
						@foreach ($clientspa as $clientpa)
						<tr>
							<td>{{ $clientpa->firstname }}</td>
							<td>{{ $clientpa->lastname }}</td>
							<td>{{ $clientpa->email }}</td>
						</tr>
						@endforeach
					</table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tableau de bord de l'administrateur</div>
                <div class="panel-body">
                    <a href="/parametres">MODIFIER LES PARAMÈTRES</a>
                    <br>
                    <a href="/parametres">AJOUTER UN UTILISATEUR</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

