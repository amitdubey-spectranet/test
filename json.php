<?php

$input = '{"status":"success","actionid":"retrieveCallsWithPassword","service-provider":"AS","records":[{"originaldestinationalias":"19013745000","countryname":"1901 - United States","starttime":"2014-03-27 17:42:45","endtime":"2014-03-27 17:42:51","callduration":"6","callamount":"0.06"},{"originaldestinationalias":"19013745000","countryname":"1901 - United States","starttime":"2014-03-27 17:26:32","endtime":"2014-03-27 17:27:03","callduration":"31","callamount":"0.31"},{"originaldestinationalias":"19013745000","countryname":"1901 - United States","starttime":"2014-03-27 11:58:32","endtime":"2014-03-27 11:58:42","callduration":"11","callamount":"0.11"},{"originaldestinationalias":"19013745000","countryname":"1901 - United States","starttime":"2014-03-20 15:24:28","endtime":"2014-03-20 15:24:32","callduration":"5","callamount":"0.05"},{"originaldestinationalias":"84933120610","countryname":"849 - Vietnam Cellular","starttime":"2014-03-19 18:04:16","endtime":"2014-03-19 18:04:42","callduration":"27","callamount":"1.89"},{"originaldestinationalias":"19013745000","countryname":"{1901} - {"United States"}","starttime":"2014-03-04 12:36:00","endtime":"2014-03-04 12:36:04","callduration":"4","callamount":"0.04"}],"totalRecords":"6"}';

$data = json_decode1($input);
//echo json_last_error_msg();
echo "<hr>";
print_r($data);
#echo $data['status'];

function json_decode1($json)
{
    // Author: walidator.info 2009 
    $comment = false;
    $out = '$x=';

    for ($i=0; $i<strlen($json); $i++)
    {
        if (!$comment)
        {
            if ($json[$i] == '{' || $json[$i] == '[')        $out .= ' array(';
            else if ($json[$i] == '}' || $json[$i] == ']')    $out .= ')';
            else if ($json[$i] == ':')    $out .= '=>';
            else                         $out .= $json[$i];
        }
        else $out .= $json[$i];
        if ($json[$i] == '"')    $comment = !$comment;
    }
    eval($out . ';');
    return $x;
}

?>

