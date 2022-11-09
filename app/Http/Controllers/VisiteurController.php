<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Exception;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
use App\Metier\Visiteur;
use App\dao\ServiceVisiteur;
use App\Exceptions\MonException;

class VisiteurController extends Controller{

    public function getLogin(){
        try {
            $erreur = "";
            return view('vues/formLogin', compact('erreur'));
        } catch (MonException $e){
            $monErreur = $e->getMessage();
            return view('vues/formLogin', compact('erreur'));
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('vues/formLogin', compact('erreur'));
        }
    }

    public function signIn() {
        try {
            $login = Request::input('login');
            $pwd = Request::input('pwd');
            $unVisiteur = new ServiceVisiteur();
            $connected = $unVisiteur->login($login, $pwd);

            if ($connected) {
                if (Session::get('type') == 'P'){
                    return view('vues/homePracticien');
                } else {
                    return view('home');
                }
            } else {
                $erreur = "Login ou mot de passe inconnu";
                return view('vues/formLogin', compact('erreur'));
            }
        } catch (MonException $e) {
            $monErreur = $e->getMessage();
            return view('vues/formLogin', compact('monErreur'));
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('vues/formLogin', compact('monErreur'));
        }
    }

    public function signOut() {
        $unVisiteur = new ServiceVisiteur();
        $unVisiteur->logout();
        return view('home');
    }
}
