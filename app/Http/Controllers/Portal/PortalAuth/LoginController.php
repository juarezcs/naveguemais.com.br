<?php

namespace App\Http\Controllers\Portal\PortalAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Class needed for login and Logout logic
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\All\Genre;
use App\Models\All\Year;
use App\Models\Company\CompanyAuth\Company;
use PulkitJalan\GeoIP\GeoIP;

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
    
    //Obter o indereço de IP do usuário para controle do acesso.
    public function getClienteIP() {
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
    
    //Shows user login form
    public function showLoginForm(Request $params, Company $company, Genre $genre, Year $year)
    {
                
        $geoip = new GeoIP();
        $lat = $geoip->getLatitude();
        $lon = $geoip->getLongitude();
        
        $lon = $this->getClienteIP();
        echo $lon;
        
        //array [
          //"id" => "98:5f:d3:3e:26:13"
          //"ap" => "78:8a:20:32:b1:25"
          //"t" => "1519075998"
          //"url" => "http://www.msftconnecttest.com/redirect"
          //"ssid" => "Grunpfi-Lab"
        //]
        //dd($params->path());
        
        //Obtemos a origem da solicitação para identificar se o usuário chegou até a pagina
        //através de um hotspot ou com a sua propria conexão.
        //$origem = $params->path();
        
        //se a origem do usuário vem de um hotspot, identificamos de qual empresa o usuário esta acessando.
        //if ($origem != 'login') {
            
            //iniciamos uma matriz vazia.
            //$data = [];
            
            //Buscamos os dados da empresa provedora do acesso.
            //$empresa = $company->where('site_unifi', $origem)->first();
            
            //Montamos uma matriz com os dados de acesso. 
            //$data["ipAddress"] = getClienteIP();
            //$data["user_mac"] = $params->get("id", "Null");
            //$data["ap_mac"] = $params->get("ap", "Null");
            //$data["ssid"] = $params->get("ssid", "Null");
            //$data["company_id"] = $empresa->id;
            //$data["device"] = getTipoDispositivo();
            //$data["Longitude"] = 
            //$data["Latitude"] = 
            //$data["region"] = 
            
            
            
        //}else{
            
            //$teste = 'guest/s/i1budkki';
            //$empresa = $company->where('site_unifi', $teste)->first();
            //echo $empresa->company_name;
            
        //}       

        
        
        $genres = $genre->All();
        $years = $year->All();
        //return view('portal.portalAuth.register', compact('genres', 'years'));
        //return view('portal.portalHome.index');
       
    }
}
