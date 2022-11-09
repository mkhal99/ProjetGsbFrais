<?php
namespace App\metier;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Frais extends Model {

    //On déclare la table Frais
    protected $table = 'frais';
    public $timestamps = false;
    protected $fillable = [
        'id_frais',
        "id_etat",
        "anneemois",
        "id_visiteur",
        "nbjustificatifs",
        "datemodification",
        "montant_valide"
    ];
}
