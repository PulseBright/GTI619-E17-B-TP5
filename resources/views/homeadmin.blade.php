@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Bienvenue, {{{ Auth::user()->name }}}.
                    <br>
                    <a href="/parametres">MODIFIER LES PARAMÈTRES</a>
                    <br>
                    <a href="/parametres">AJOUTER UN UTILISATEUR</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

