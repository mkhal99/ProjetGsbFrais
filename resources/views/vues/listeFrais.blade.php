@extends('layouts.master')
@section('content')

<div class="container">
    <div class="col-md-12">
        <div class="blanc">
            <h1>Liste des frais</h1>
        </div>

        <table class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th style="width:auto">Période</th>
                    <th style="width:auto">Nombre Justificatif</th>
                    <th style="width:auto">Date Modification</th>
                    <th style="width:auto">Montant</th>
                    <th style="width:auto">Modifier</th>
                    <th style="width:auto">Supprimer</th>
                </tr>
            </thead>
            @foreach($mesFrais as $unFrais)
            <tr>
                <td>{{ $unFrais->anneemois }}</td>
                <td>{{ $unFrais->nbjustificatifs }}</td>
                <td>{{ $unFrais->datemodification }}</td>
                <td>{{ $unFrais->montantvalide }}</td>
                <td style="text-align:center;"><a href="{{ url('/modifierFrais') }}/{{ $unFrais->id_frais }}">
                        <span class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="Modifier"></span></a></td>
                <td style="text-align:center;">
                    <a class="glyphicon glyphicon-remove" data-toggle="tooltip" data-placement="top" title="Supprimer" href="#"
                       onclick="javascript:if (confirm('Suppression confirmée ?'))
                           { window.location ='{{ url('/supprimerFrais') }}/{{ $unFrais->id_frais }}';}">
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@stop
