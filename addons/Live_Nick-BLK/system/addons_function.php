<?php
if(!function_exists('addonTemplate')){
        function addonTemplate($target, $boom = ''){
	       global $mysqli,$data,$addons,$lang;
	       return boomAddonsTemplate('../addons/'.$addons['addons'].'/system/template/'.$target, $boom); 
    }
}