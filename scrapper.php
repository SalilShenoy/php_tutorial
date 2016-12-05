<!-- Scrapper in PHP -->
<?php
    
    $fp = gzopen("lexicon.txt.gz", "r");
    if ($fp == null) {
        print ("No such file");
        exit(0);
    }

    while ($line = gzgets($fp)) {
        $line = ltrim($line, '/');
	$line = preg_replace('/[+<>]+/',' ',$line);
    }
?>
