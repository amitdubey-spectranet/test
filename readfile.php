<?php
	$search = 'mzp';
	$lines = file('members_ent.txt');
	$found = false;
	foreach($lines as $line)
	{
	  if(strpos($line, $search) !== false)
	  {
	    $found = true;
	   // echo $line;
	  }
	}
	if(!$found)
	{
	  echo 'No match found';
	}
	else
	{
	  echo 'Match found';
	}
?>
