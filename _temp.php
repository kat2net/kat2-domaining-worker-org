<?php

$domains = array();

$range = range(0, 1);
foreach($range as $r){
    $domains[] = $r.'st.org';
}

foreach($domains as $domain){
    echo $domain."\n\n";
    $fp = @fsockopen('whois.publicinterestregistry.net', 43, $errno, $errstr, 10);
    fputs($fp, $domain . "\r\n");
    $out = "";
    while(!feof($fp)){$out .= fgets($fp);}
    fclose($fp);

    echo $out;

    echo "\n\n";
}