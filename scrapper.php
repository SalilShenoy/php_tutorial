<!-- Scrapper in PHP -->
<?php
    #$url = 'https://en.wikipedia.org/wiki/Part-of-speech_tagging';
    #$lines = file($url);
    #$lines = implode('', $lines);
    #echo $lines; 
    
    $fp = fopen("idxnoun_txt", "r");
    if ($fp == null) {
        print ("No such file");
        exit(0);
    }

    while (!feof($fp)) {
        #$line = stream_get_line($fp, 4096, " "); //use 2048 if very long lines
        $line = fgets($fp) ;
        #if (preg_match('/^\d/', $line) == 1) {
        #    continue;
        #}

        if ( (ctype_alpha($line) == false) or (preg_match('/^\d/', $line) == 0))
        {
            $line = explode(" ", $line); 
            print($line[0]);
            print("<br>");
        }
    }
?>