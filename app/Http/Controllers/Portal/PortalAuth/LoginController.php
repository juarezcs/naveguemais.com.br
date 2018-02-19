<?php

namespace App\Http\Controllers\Portal\PortalAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Class needed for login and Logout logic
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\All\Genre;
use App\Models\All\Year;

//Auth facade
use Auth;

class LoginController extends Controller
{
    //Where to redirect usuário after login.
    protected $redirectTo = '/';
    
    //Trait
    use AuthenticatesUsers;
    
    //Custom guard for user
    protected function guard()
    {
      return Auth::guard('web');
    }
    
    //Shows user login form
    public function showLoginForm(Request $params, Genre $genre, Year $year)
    {
        
        //inicia uma matriz vazia.
        //$data = [];
        
        //Obtemos todos os parametros do cabeçalho para identificar se o usuário chegou até a pagina
        //através de um hotspot ou sua propria conexão.
        //$data = $params->all();
        
        //Se encontrarmos um id nos parametros do cabeçalho, entendenmos que a conexão partiu de um 
        //hotspot e podemos pegar informações do: Mac Address Usuario, Mac Address AP, SSID Conexão 
        //if ($params->has("id") && $params->get("id", false) != false) {
            
            //verificamos por qual empresa o usuário realizou a conexão
            //$user = $userR->getByMac($params->get("id", "nenhum"));
            
            
            
            //$data["ap_mac"] = $params->get("ap", "nenhum");
            //$data["mac"] = $params->get("id", "nenhum"); 
            
            
            
            
           dd($params->all()); 
            
            
            //$genres = $genre->All();
            //$years = $year->All();
            //return view('portal.portalAuth.register', compact('genres', 'years'));
            
       // }
        
        
       
    }
    
    
    
    
    
    
    
    
    //Obter dispositivo no qual o usuário esta se conectando.
    function getTipoDispositivo()
    {
       $mobile = FALSE;
       $user_agents = array("Windows Phone","iPhone","iPad","Android","webOS","BlackBerry","iPod","Symbian","IsGeneric");
 
       foreach($user_agents as $user_agent){
         if (strpos($_SERVER['HTTP_USER_AGENT'], $user_agent) !== FALSE) {
            $mobile = TRUE;
            $modelo = $user_agent;
        break;
         }
       }
     
      
       if ($mobile){
            if($modelo=="iPhone"||$modelo=="iPad"||$modelo=="iPod"){
                return "ios";
            }else if($modelo=="Windows Phone"){
                return "windowsphone";
            }else if($modelo=="Android"){
                return "android";
            }else {
                return $modelo; 
            }
       }else{
          return "PC";
       }
    }
    
    //Obter o indereço de IP do usuário para controle do acesso.
    function get_client_ip() {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = '0';
        return $ipaddress;
    }
}
