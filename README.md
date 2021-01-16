**__<h1>Sophia PHP Minimalistic framework</h1>__**

> Webiste: [Sophia PHP framework](http://sophiaphp.com)
<br>

__DOCUMENTATION WILL BE AVAILABLE SOON__

_If you want to download framework using composer:_

>composer create-project notcod/sophia



Easy download on server

<?php

    $name = "sophia";

    $version = "1.2";

    $zip_file = $name . '-' . $version . '.zip';

    file_put_contents($zip_file, file_get_contents("https://github.com/notcod/$name/archive/$version.zip"));

    $zip = new ZipArchive;

    $res = $zip->open($zip_file);

    if ($res === TRUE) {

        $zip->extractTo(dirname(__FILE__));

        $zip->close();

        unlink($zip_file);

        echo 'cool!';

    } else {

        echo 'doh!';

    }

?>
