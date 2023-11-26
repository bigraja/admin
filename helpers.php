<?php

if (!function_exists('action_url_build')) {
    function action_url_build($v, $data)
    {

        foreach ($v as $value) {
            if (!is_array($value)) {echo $value;}
        }

        return '/';
        // return route($value['name'], $params);
    }
}