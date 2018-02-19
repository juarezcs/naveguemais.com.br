<?php

namespace App\Http\Controllers\Portal\PortalAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Validator facade used in validator method
use Illuminate\Support\Facades\Validator;

//Advertiser Model
use App\Models\Portal\PortalAuth\User;
use App\Models\Portal\PortalAuth\UserAccess;
use App\Models\All\Genre;
use App\Models\All\Year;

//Auth Facade used in guard
use Auth;


class RegisterController extends Controller
{
    protected $redirectPath = '/';
    
    //shows registration form to seller
    public function showRegistrationForm(Genre $genre, Year $year)
    {        
        $title = 'Navegue+ :: Portal';
        $genres = $genre->All();
        $years = $year->All();
        return view('portal.portalAuth.register', compact('title', 'genres', 'years'));
    }
    
    //Handles registration request for seller
    public function register(Request $request)
    {   
        //Regras de validação
        $rules = array(
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|max:255',
            'year_id' => 'required|max:255',
            'genre_id' => 'required|max:255',
            'accepted_terms' => 'required|max:255',
            'user_id' => 'required|max:255',
            'ipAddress' => 'required|max:255',
            'user_mac' => 'required|max:255',
            'ap_mac' => 'required|max:255',
            'ssid' => 'required|max:255',
            'company_id' => 'required|max:255',
            'device' => 'required|max:255',
            'Longitude' => 'required|max:255',
            'Latitude' => 'required|max:255',
            'region' => 'required|max:255'
        );
        
        //Validates data
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            
            //redireciona para a mesma página informando os erros
            return redirect()->back()
                ->withErrors($validator, 'cadastro')
                ->withInput()
                ->with('year_id', $request->input('year_id'))
                ->with('genre_id', $request->input('genre_id'));
        }

        //Create seller
        $usuario = $this->create($request->all());

        //Authenticates seller
        $this->guard()->login($usuario);

       //Redirects sellers
        return redirect($this->redirectPath);
    }
    
    //Create a new usuário instance after a validation e adiciona um novo acesso.
    protected function create(array $data)
    {
         $usuario = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'year_id' => $data['year_id'],
            'genre_id' => $data['genre_id'],
            'accepted_terms' => $data['accepted_terms']
        ]);
        
         return UserAccess::create([
            'user_id' => $usuario->id,
            'ipAddress' => $data['ipAddress'],
            'user_mac' => $data['user_mac'],
            'ap_mac' => $data['ap_mac'],
            'ssid' => $data['ssid'],
            'company_id' => $data['company_id'],
            'device' => $data['device'],
            'longitude' => $data['longitude'],
            'latitude' => $data['latitude'],
            'region' => $data['region']
        ]);
        
    }
    
    //Get the guard to authenticate Seller
    protected function guard()
    {
        return Auth::guard('web');
    }
}
