<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// UNTUK MENAMPILKAN 4 BULAN YANG LALU
if (!function_exists('remove_directory'))
{
    function remove_directory($path){
        foreach(glob("{$path}/*") as $file)
        {
            if(is_dir($file)) { 
                delete_dir($file);
            } else {
                unlink($file);
            }
        }
        rmdir($path);
        return true;
    }
}

