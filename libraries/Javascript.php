<?php

namespace Sophia;

class Javascript
{
    public static $scripts = [];
    public static function add($name, $href)
    {
        self::$scripts[$name] = ["href" => $href, "ext" => url_strip($href)];
    }
    public static function page($data)
    {
        foreach ($data["script"] as $script)
            $scripts[] = self::$scripts[$script];

        foreach ($scripts as $script)
            $execute[] = $script["ext"] ? $script["href"] : ROOT . $script["href"] . '?v=' . filemtime($script["href"]);

        $file = "assets/js/" . $data["view"] . ".js";
        if (file_exists($file))
            $execute[] = $file;

        $file = "assets/js/" . $data["view"] . "/" . $data["page"] . ".js";
        if (isset($data["page"]) && file_exists($file))
            $execute[] = $file;

        echo PHP_EOL . '<!-- INCLUDED SCRIPTS -->' . PHP_EOL;

        foreach ($execute as $script)
            echo  '<script src="' . $script . '"></script>' . PHP_EOL;

        echo '<!-- END INCLUDED SCRIPTS -->';
    }
}
