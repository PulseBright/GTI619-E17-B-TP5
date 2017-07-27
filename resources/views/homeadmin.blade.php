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
                    <h2>Paramètres de sécurité</h2>
                    <br>
					<form method="POST" action="/security">
					{{ csrf_field() }}
					
						<div class="form-group">
							<label for="nbTentative">Nombre de tentatives d’authentification maximal</label>
							<input type="text" class="form-control" id="nbTentative" name="nbTentative" text="{{ config('') }}">
						</div>
						
						<div class="form-group">
							<label for="delai">Délais d’attente entre chaque tentative échouée</label>
							<input type="text" class="form-control" id="delai" name="delai">
						</div>
						
						<div class="form-group">
							<label for="duree">Durée d'un mot de passe (en jours)</label>
							<input type="text" class="form-control" id="duree" name="duree">
						</div>
						
						<div class="form-group">
							<label for="mdpminimum">Mot de passe : minimum</label>
							<input type="text" class="form-control" id="mdpminimum" name="mdpminimum">
							<label for="mdpmaximum">Mot de passe : maximum</label>
							<input type="text" class="form-control" id="mdpmaximum" name="mdpmaximum">
							<label for="complexite">Mot de passe : complexité</label>
							<input type="text" class="form-control" id="complexite" name="complexite">
						</div>
					
						<button type="submit" class="btn btn-primary">Modifier</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

