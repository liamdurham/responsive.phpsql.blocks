<?PHP
$cat=$_GET['cat']; // this line of code get the varible from the menu
//echo "the category is $cat"; // confirms the cat value that is passed

if ( $cat == 1 )
{
	$message = "Pets";
}
else if ( $cat == 2 ) {
    
	  $message = "Vehicles";
} 

else if ( $cat == 3 ) {
      $message = "Tech Items";
}

else if ( $cat == 4 ) {
      $message = "House Items";
}

else if ( $cat == 5 ) {
      $message = "Wanted";
}
?>  

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>OtherStuff</title>
</head>

<body>
    <div class="cat">
    <h1>
        <?PHP echo "$message"; ?>
    </h1>
    </div>
  <div class="content dresscontent">
    <p><?php include 'getcontent.php';?></p>
    <p>&nbsp;</p>
    <!-- end .content --></div>
</body>
</html>