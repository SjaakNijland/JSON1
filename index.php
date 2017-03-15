<?php
/**
 * Created by PhpStorm.
 * User: Sjaak
 * Date: 10-3-2017
 * Time: 08:59
 */
$file = 'json.txt';
if(file_exists($file)){
    $filedata = file_get_contents($file);
    $objson = json_decode($filedata, true);
    echo "<hr><code><pre>";
    print_r($objson);
    echo "</pre><code></code><hr>";
}
else echo $file. " not exists";
echo ($objson['school']['Mediacollege']['courses']['MD']);
echo ("<br>");
echo ($objson['school']['Horizoncollege']['courses']['VZ']);