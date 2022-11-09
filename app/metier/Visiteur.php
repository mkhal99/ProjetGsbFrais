<?php
namespace App\metier;

use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use BD;

class Visiteur extends Model {

    //On déclare la table visiteur
    protected $table = 'visiteur';
    public $timestamps = false;
    protected $fillable = [
        'id_visiteur',
        "id_laboratoire",
        "id_secteur",
        "nom_visiteur",
        "prenom_visiteur",
        "adresse_visiteur",
        "cp_visiteur",
        "ville_visiteur",
        "date_embauche",
        "login_visiteur",
        "pwd_visiteur",
        "type_visiteur"
    ];

    public function __construct()
    {
        $this->id_frais = 0;
    }
}
