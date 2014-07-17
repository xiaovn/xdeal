<html>
<form action="" name="" method="post">
<input type="checkbox" name="check1" value="<?php echo $list[0]['prokey'];?>"><?php echo $list[0]['prokey'];?><br>
<?php
for($i = 1;$i< count($list);$i++)
{
	$a = $list[0]['prokey'];
	if( $list[$i]['prokey'] != $a)
	{
	$a = $list[$i]['prokey'];
?>
<input type="checkbox" name="check1" value="<?php echo $list[$i]['prokey'];?>"><?php echo $list[$i]['prokey'];?><br>
<?php
	}
}
?>

</form>
</html>