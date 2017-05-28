<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Source: https://www.warpconduit.net/2013/04/14/highly-secure-data-encryption-decryption-made-easy-with-php-mcrypt-rijndael-256-and-cbc/ */


// Define a 32-byte (64 character) hexadecimal encryption key
// Note: The same encryption key used to encrypt the data must be used to decrypt the data
//define('ENCRYPTION_KEY', '');

if(!function_exists("warpmc_ecrypt")) {
	// Encrypt Function
	function warpmc_encrypt($encrypt, $key){
	    $encrypt = serialize($encrypt);
	    $iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC), MCRYPT_DEV_URANDOM);
	    $key = pack('H*', $key);
	    $mac = hash_hmac('sha256', $encrypt, substr(bin2hex($key), -32));
	    $passcrypt = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $encrypt.$mac, MCRYPT_MODE_CBC, $iv);
	    $encoded = base64_encode($passcrypt).'|'.base64_encode($iv);
	    return $encoded;
	}
}

if(!function_exists("warpmc_decrypt")) {
	// Decrypt Function
	function warpmc_decrypt($decrypt, $key){
	    $decrypt = explode('|', $decrypt.'|');
	    $decoded = base64_decode($decrypt[0]);
	    $iv = base64_decode($decrypt[1]);
	    if(strlen($iv)!==mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC)){ return false; }
	    $key = pack('H*', $key);
	    $decrypted = trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, $decoded, MCRYPT_MODE_CBC, $iv));
	    $mac = substr($decrypted, -64);
	    $decrypted = substr($decrypted, 0, -64);
	    $calcmac = hash_hmac('sha256', $decrypted, substr(bin2hex($key), -32));
	    if($calcmac!==$mac){ return false; }
	    $decrypted = unserialize($decrypted);
	    return $decrypted;
	}
}


/* End of file encrypt_helper.php */
/* Location: ./application/helpers/encrypt_helper.php */

