<?php 
    function encrypt($v)
    {
        $cipher_method = "BF-CBC";
        $option = 0;
        $IV = 12345678;
        $key = "ilmukita";

        return openssl_encrypt($v, $cipher_method, $key, $option, $IV);
    }

    function decrypt($v)
    {
        $cipher_method = "BF-CBC";
        $option = 0;
        $IV = 12345678;
        $key = "ilmukita";

        return openssl_decrypt($v, $cipher_method, $key, $option, $IV);
    }
?>