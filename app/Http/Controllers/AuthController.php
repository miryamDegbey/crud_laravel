<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function connexion()
    {
        // return 'mimi';
        return view('connexion');
    }
    // logique d'insertion d'un admin
    public function insertAdmin(Request $request)
    {

        $user = new User();

        $user->name = $request->nom;

        $user->email = $request->email;

        $user->password = $request->psd;
        // $user->isAdmin =$request->isAdmin;
        $user->isAdmin = 1;
        $user->save();

        return 'yes';
    }
    public function handle_login(Request $request)
    {

        $user = User::where('email', $request->email)->first(); // requete verifiant si lemail entré par lutilisateur existe deja
        if ($user) {

            if (Hash::check($request->password, $user->password)) { // mot de pase conforme

                Auth::login($user);

                session()->flash('success', 'Bonjour ' . $user->name . ' !');

                return redirect()->route('dashboard');

                // return view('dashboard');

            } else {

                session()->flash('error', 'faux identifiant veuilllez réessayer!');
                return redirect()->back();
                // return 'faux identifiants veuillez reessayer!';
            }
        } else {

            session()->flash('error', "Aucun email n'est associé à ce compte.");
            return redirect()->back();
        }
    }

    public function dashboard()
    {


        // Récupérer les utilisateurs non administrateurs
        // $users = User::all();            Requete
        $data = User::where('isAdmin', 0)->get(); 
      

        // Transmettre les données à la vue s'explique avec le tableau associatif, les noms dans le tableau peuvent etre différent mais doit etre la meme dans le balde
        return view('dashboard', ['users' => $data]);

    }

    public function create() {

        return view('create-user');

    }
}
