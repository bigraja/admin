<?php

namespace Bigraja\Admin\Http\Middleware;

use Closure;

class PublicPath
{

    function handle($request, Closure $next)
    {
        // $this->iterateFiles(__DIR__ . "../../../../public");


        // if (in_array("app", scandir(__DIR__ . "../../../../public"))) {
        //     return "public/path";
        // }

        return $next($request);
    }

    public $files = [];

    function iterateFiles($directory)
    {
        $files = scandir($directory);

        foreach ($files as $file) {
            if ($file !== '.' && $file !== '..') {
                $path = $directory . '/' . $file;
                if (is_file($path)) {
                    $this->files[] = $file;
                }

                if (is_dir($path)) {
                    $this->iterateFiles($path);
                }
            }
        }
    }
}