<?php
if (($handle = fopen("ipaddress.csv", "r")) !== FALSE) {
	$filename = "ip_location.csv";
        $path = "upload/".$filename;
        $fp = fopen($path,"w+");
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
$ip = trim($data[0]);
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));
#print_r($details);
$csv_data = $details->ip."\t".$details->org."\t".$details->city."\t".$details->country."\n";
fwrite($fp,$csv_data);
unset($csv_data);
}
fclose($fp);
fclose($handle);
}
?>
