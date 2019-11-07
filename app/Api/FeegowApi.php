<?php

namespace App\Api;

class FeegowApi
{

    public static function getSpecialists(){
        return FeegowApi::consumeApi('specialties/list');
    }

    public static function getProfessionals($unity_id){
        return FeegowApi::consumeApi('professional/list', $unity_id);
    }

    public static function getPacientsListSource(){
        return FeegowApi::consumeApi('patient/list-sources');
    }

    public static function consumeApi($route, $param = null){
        if($param != ''){
            $param = json_encode(array(
                "ativo" => true,
                "unidade_id" => $param
            ));
        }

        $url = 'https://api.feegow.com.br/api/' . $route;

        $ch = curl_init($url);
        $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJmZWVnb3ciLCJhdWQiOiJwdWJsaWNhcGkiLCJpYXQiOiIxNy0wOC0yMDE4IiwibGljZW5zZUlEIjoiMTA1In0.UnUQPWYchqzASfDpVUVyQY0BBW50tSQQfVilVuvFG38";

        curl_setopt($ch, CURLOPT_HTTPHEADER, array("x-access-token:" . $token));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $response = curl_exec($ch);

        curl_close($ch);

        return json_decode($response);
    }

}
