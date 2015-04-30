<?php
#session_start();
$auth_code = "";
$email = urlencode("amitdubeymrt@gmail.com");
$pass = urlencode("Amit@84dubey");
#$domain = urlencode("Citycom Networks Pvt. Ltd.");
#$username = urlencode("amit.dubey@spectranet.in");
$domain = urlencode("mail.google.com");
$username = urlencode("amitdubeymrt");

$ch1 = curl_init();
curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch1, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch1, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.7.3) Gecko/20041001 Firefox/0.10.1" );
curl_setopt($ch1, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch1, CURLOPT_COOKIEFILE, "cookie.txt");
/*
curl_setopt($ch1, CURLOPT_URL, "https://www.google.com/accounts/ClientLogin");
curl_setopt($ch1, CURLOPT_POST, 1);
curl_setopt($ch1, CURLOPT_POSTFIELDS, "Email=$email&Passwd=$pass&accountType=HOSTED_OR_GOOGLE&service=apps"); 
curl_setopt($ch1, CURLOPT_FOLLOWLOCATION, 1); // allow redirects
#curl_setopt($ch1, CURLOPT_HEADER, 1); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: application/x-www-form-urlencoded"));
curl_setopt($ch1, CURLOPT_RETURNTRANSFER,1); // return into a variable 
$result1 = trim(curl_exec($ch1)); 
#print_r($result1);
#echo curl_error($ch1);
$get_info = curl_getinfo($ch1);
#print_r($get_info);
if($get_info['http_code'] == 200){
	$tmp = explode('Auth=',$result1);
	$auth_code = urlencode($tmp[1]);
}
echo $auth_code;
echo "<hr>";
*/
curl_setopt($ch1, CURLOPT_URL, "https://apps-apis.google.com/a/feeds/emailsettings/2.0/$domain/$username/signature");
#curl_setopt($ch1, CURLOPT_URL, "https://www.googleapis.com/admin/directory/v1/users");
#curl_setopt($ch1, CURLOPT_POST, 1);
#curl_setopt($ch1, CURLOPT_POSTFIELDS, "domain=$domain&maxResults=2");
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch1, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: application/atom+xml", "Authorization: GoogleLogin auth='371039698801.apps.googleusercontent.com'"));
$result = trim(curl_exec($ch1));
print_r($result);
echo "<hr>";
echo curl_error($ch1);
$get_info = curl_getinfo($ch1);
print_r($get_info);

curl_close($ch1);

?>
