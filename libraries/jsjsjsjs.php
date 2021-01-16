<?php

namespace Sophia;

class Javascript
{
    public static $scripts = [];
    public static function list($name, $href, $ext = false)
    {
        self::$scripts[$name] = $ext ? $href : ROOT . $href;
    }
    public static function get($name)
    {
        return self::$scripts[$name];
    }
    public static function print($name)
    {
        return '<script src="' . self::get($name) . '"></script>';
    }
    public static function page($data)
    {
        if (isset($data["script"])) {
            $scripts = [];
            $data["script"] = array_unique($data["script"]);
            echo PHP_EOL . '<!-- INCLUDED SCRIPTS -->' . PHP_EOL;
            if (isset($data["script"])) {
                foreach ($data["script"] as $script) {

                    $scripts[] = self::get($script);
                }
            }
            $file = "assets/theme/js/" . $data["view"] . ".js";
            if (file_exists($file)) {
                $scripts[] = ROOT . $file;
            }
            if (isset($data["page"])) {
                $file = "assets/theme/js/" . $data["view"] . "/" . $data["page"] . ".js";
                if (file_exists($file)) {
                    $scripts[] = ROOT . $file;
                }
            }

            $scripts = array_unique($scripts);
            // if (!MINIMIZE_CSS) {
            foreach ($scripts as $script) {
                // if (strpos($script, 'https://') !== false || strpos($script, 'http://') !== false) {
                //     $check = false;
                // } else {
                //     $check = filemtime(substr($script, 1));
                // }
                $v = strpos($script, 'https://') !== false || strpos($script, 'http://') !== false ? '' : '?v='.filemtime(substr($script, 1));
                echo  '<script src="' . $script . $v . '"></script>' . PHP_EOL;
            }
            // } else {


            //     $cache = "";
            //     foreach ($scripts as $script) {
            //         if (strpos($script, 'https://') !== false || strpos($script, 'http://') !== false) {
            //             echo  '<script src="' . $script . '"></script>' . PHP_EOL;
            //         } else {
            //             $file = dirname(dirname(dirname(__FILE__))) . $script;
            //             $myfile = fopen($file, "r") or die("Unable to open file! -> " . $file);
            //             $cache .= fread($myfile, filesize($file));
            //             fclose($myfile);
            //         }
            //     }
            //     if (!empty($cache)) {
            //         $filename =  "/assets/cache/" . hash("sha256", $cache . "1") . ".js";
            //         if (!file_exists($filename)) {
            //             // $cache = minimize_css($cache);
            //             $pattern = '/(?:(?:\/\*(?:[^*]|(?:\*+[^*\/]))*\*+\/)|(?:(?<!\:|\\\|\'|\")\/\/.*))/';
            //             $cache = preg_replace($pattern, '', $cache);
            //             $file = dirname(dirname(__FILE__)) . $filename;
            //             $myfile = fopen($file, "w") or die("Unable to open file3!");
            //             fwrite($myfile, $cache);
            //             fclose($myfile);
            //         }

            //         $check = filemtime(substr($filename, 1));
            //         $v = $check != false ? '?v=' . $check : '';
            //         echo  '<link rel="stylesheet" href="' . ROOT . substr($filename, 1) . $v . '">' . PHP_EOL;
            //     }
            // }
            echo '<!-- END INCLUDED SCRIPTS -->';
        }
    }
}
