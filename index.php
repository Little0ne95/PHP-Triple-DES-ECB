<?php
$currentMcrypt = 'Apple-Fixing-Manager-Email-Title-Posting-Stand-1';

$sKey = md5($currentMyCryptKey, true);
$sKey .= substr( $sKey, 0, 8 ); //Added this line to fix it

function encrypt( $key, $value )
{
    if( function_exists( 'openssl_encrypt' ) )
    {
        return base64_encode( openssl_encrypt( $value, 'DES-EDE3', $key,  OPENSSL_RAW_DATA ) );
    }

    return 'openssl missing';
}

function decrypt( $key, $value )
{
    if( function_exists( 'openssl_decrypt' ) )
    {
        return openssl_decrypt( base64_decode( $value ), 'DES-EDE3', $key, OPENSSL_RAW_DATA );
    }

    return 'openssl missing';
}

echo(encrypt($sKey, '6509'));
echo(decrypt($sKey, 'vx59V3FZjhA='))
