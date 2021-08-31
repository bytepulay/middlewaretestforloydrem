<?php

namespace App\Http\Middleware;
use Closure;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Guzzle\Http\Exception\ClientErrorResponseException;
use GuzzleHttp\Exception\ClientException;

class CheckApiToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
    
      
        // $client = new \GuzzleHttp\Client();
        // $apiReq = $client->request('POST', 'http://121.54.167.251/outbound/OutBoundHotel.asmx/getRoomRate?strSessionID='.$request->sessionId.'&strProdID='.$request->productId.'&strToken='.$request->tokenId.'&strHotelID='.$request->hotelId.'');
        // $rooms = json_decode($apiReq->getBody());
       


        $client = new Client();
     
        //$url = "http://18.139.236.27:81/api/v1/ssid-module/auth/member-login";
        $url = "http://18.139.236.27:81/api/v1/ssid-module/auth/check-ssid-validity";
        try{
            $response = $client->post($url,[
                //'headers' => ['Content-type' => 'application/json',],
                'headers' => ['Authorizatiion' => $request->header('Authorization'),],
                
                // 'json' => [
                //     'ssid' => $request->ssid,
                //     'password' => $request->password,
                // ],
            ]);

            $result = json_decode($response->getBody());
            // if($response->getStatusCode()==200){
            //     return response()->json(['token_status'=>'expired',"status_code"=>200]);
            // }
        }catch(\GuzzleHttp\Exception\RequestException $e){

            if($e->getResponse()->getStatusCode()==400 || $e->getResponse()->getStatusCode()==403){
                return response()->json(["status_code"=>$e->getResponse()->getStatusCode(),"status"=>"true","token_is_expired"=>"true",$request->header('Authorization')]);
            }

        
        }
        
        return $next($request);
    }
}
