@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-center" style="margin-bottom: 2vw">
                    <div class="card-header text-primary">Welkom</div>
                    <div class="card-body">
                        <p class="text-center">
                            Welkom {{Auth::user()->name}} op de My.Conduct omgeving.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card text-center">
                    <div class="card-header text-primary">Vertrouwenspersonen</div>
                    <div class="card-body">
                        <p>Maak je melding bij iemand die je zelf kan kiezen.
                            <br>Praat je liever met iemand die dezelfde taal spreekt, of zoek je een expert in een
                            bepaald onderwerp?
                            <br>Je kan een vertrouwenspersoon kiezen door op op de onderstaande knop te klikken.
                            <br><a class="btn btn-primary" href="{{route("confidant.index")}}" role="button">Kies je vertrouwenspersoon</a>
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
