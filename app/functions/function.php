<?php



if(! function_exists("ca_asset")) {

    function ca_asset($url) {
        $sslAsset = false;
        if($sslAsset == false) {


            return asset($url);


        } else {

            return secure_asset($url);

        }
        
    }

}
if(! function_exists("ca_url")) {

    function ca_url($url) {
        $sslUrl = false;
        if($sslUrl == false) {


            return url($url);


        } else {

            return secure_url($url);

        }
        
    }

}