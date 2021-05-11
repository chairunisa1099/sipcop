<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('hash_password'))
{
  function hash_password($pass){
    $options = [
      'cost' => 10,
    ];

    return password_hash($pass, PASSWORD_BCRYPT, $options);
  }
}
