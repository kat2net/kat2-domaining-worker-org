<?php

$fp = @fsockopen('whois.publicinterestregistry.net', 43, $errno, $errstr, 10);
fputs($fp, '8st.org' . "\r\n");
$out = "";
while(!feof($fp)){$out .= fgets($fp);}
fclose($fp);

echo $out;