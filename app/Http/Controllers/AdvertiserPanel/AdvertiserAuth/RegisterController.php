<?php

namespace App\Http\Controllers\AdvertiserPanel\AdvertiserAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Validator facade used in validator method
use Illuminate\Support\Facades\Validator;

//Advertiser Model
use App\Models\Advertiser\AdvertiserAuth\Advertiser;
use App\Models\Advertiser\AdvertiserAuth\AdvertiserUser;
use App\Models\All\EconomicActivity;
use App\Models\All\State;

//Auth Facade used in guard
use Auth;

class RegisterController extends Controller
{
    protected $redirectPath = 'anunciantes/panelHome';
    
    //shows registration form to anunciantes
    public function showRegistrationForm(EconomicActivity $economicActivity, State $state)
    {        
        $economic_activities = $economicActivity->All();
        $states = $state->All();
        return view('advertiserPanel.advertiserAuth.register', compact('economic_activities', 'states'));
    }
    
    //Handles registration request for seller
    public function register(Request $request)
    {   
        //Regras de validação
        $rules = array(
            'account_type' => 'required|max:255',
            'cpf_cnpf' => 'required|max:255|cpfCnpj|unique:advertisers',
            'company_name' => 'required|max:255',
            'economicactivity_id' => 'required|max:255',
            'landline_phone' => 'required|max:255',
            'mobile_phone' => 'required|max:255',
            'zip_code' => 'required|max:255',
            'address' => 'required|max:255',
            'number' => 'required|max:255',
            'city' => 'required|max:255',
            'neighborhood' => 'required|max:255',
            'state_id' => 'required|max:255',
            'email' => 'required|max:255|email|unique:advertiser_users',
            'password' => 'required|max:255',
            'accepted_terms' => 'required|max:255' 
        );
        
        //Validates data
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            
            //redireciona para a mesma página informando os erros
            return redirect()->back()
                ->withErrors($validator, 'cadastro')
                ->withInput()
                ->with('economicactivity_id', $request->input('economicactivity_id'))
                ->with('state_id', $request->input('state_id'));
        }

        //Create seller
        $anunciante = $this->create($request->all());

        //Authenticates seller
        $this->guard()->login($anunciante);

       //Redirects sellers
        return redirect($this->redirectPath);
    }

    //Create a new seller instance after a validation.
    protected function create(array $data)
    {
        $advertiser = Advertiser::create([
            'account_type' => $data['account_type'],
            'cpf_cnpf' => $data['cpf_cnpf'],
            'company_name' => $data['company_name'],
            'economicactivity_id' => $data['economicactivity_id'],
            'landline_phone' => $data['landline_phone'],
            'mobile_phone' => $data['mobile_phone'],
            'zip_code' => $data['zip_code'],
            'address' => $data['address'],
            'number' => $data['number'],
            'city' => $data['city'],
            'neighborhood' => $data['neighborhood'],
            'state_id' => $data['state_id'],
            'accepted_terms' => $data['accepted_terms']
        ]);
        
        return AdvertiserUser::create([
            'advertiser_id' => $advertiser->id,
            'name' => $data['company_name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    //Get the guard to authenticate Seller
    protected function guard()
    {
       return Auth::guard('web_advertiser');
    }
}
