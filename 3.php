<?php
	print_r($_POST);
	$st = 5;
?>
<html>
<head>
<script type="text/javascript">
function show_page()  
    {  
        document.frm2.action ="3.php"      
        document.frm2.submit()   
    } 
</script>
</head>
</head>

<body>
<form name="frm2" method="post" accept-charset="utf-8">
 <?php 
	$page_n = $_REQUEST['page_n'];

$page_counter = 5;
if($page_n != 0){
		echo "<a title='PAGE' href=# onclick='show_page()'>First</a>&nbsp;";
		echo "<input type='hidden' name='page_n' value='0'>";
		}
	else{
		echo "First&nbsp;";
	}

	$prev = $page_n-1;
	if($prev >= 0){
 		echo "<a title='PAGE' href=# onclick='show_page()'>Prev</a>&nbsp;";
		echo "<input type='hidden' name='page_n' value=$prev>";
	 	}
	else{
 		echo	"Prev&nbsp;";
 		} 
$i = $page_n;
$ii = 0;
while($i < $st){
$j=$i+1;
if($ii < $page_counter){
?>
	<a title='PAGE' href=# onclick='show_page()'><?php echo $j;?></a>&nbsp;
	<input type='hidden' name='page_n' value=<?php echo $i;?> />
<?php 
}else
break;
$ii++;
$i++;
}
$next = $page_n+1;
$last = $st-$page_counter;
	if($next <= $last){
		echo "<a title='PAGE' href=# onclick='show_page()'>Next</a>&nbsp;";
		echo "<input type='hidden' name='page_n' value=$next>";
	}
	else{
		echo "Next&nbsp;";
	}
	if($next <= $last){
		echo "<a title='PAGE' href=# onclick='show_page()'>Last</a>&nbsp;";
		echo "<input type='hidden' name='page_n' value=$last>";
	}
	else{
		echo "Last&nbsp;";
	}

?>
</form>

