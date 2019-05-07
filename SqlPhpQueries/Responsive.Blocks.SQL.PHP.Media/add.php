<?php
//<!---- this retreiveis the data from your form, 
//-- field names here need to match name fields in your form
$cat_code = $_POST['cat_code'];
$content = $_POST['content'];
$feature_item = $_POST['feature_item'];

//!-- Your connection information needs to go here, match from your getcontent.php
$hostname="localhost";
$username="danderso_adsRD";
$password="***";
$dbname="danderso_ads";
$usertable="ad_table";

$link = mysqli_connect($hostname, $username, $password);
   if(!$link){
      echo('bad connect');
   }
  else
  {
      echo('good connect');
  }

if (!mysqli_select_db($link, $dbname))
{
	echo('no database selected'); 
	
}
else
{   
  echo('database selected');  
}
// remove the line before when you get your IF statements working

if ( $cat_code == 1 )
{
	$cat_name = "PETS";
}
else if ( $cat_code == 2 ) {
    
	  $cat_name = "VEHICLES";
} 

else if ( $cat_code == 3 ) {
      $cat_name = "TECHNOLOGY ITEMS";
}

else if ( $cat_code == 4 ) {
      $cat_name = "HOUSEHOLD ITEMS";
}
else if ( $cat_code == 5 ) {
      $cat_name = "WANTED";
}




 

$result = mysqli_query($link, "INSERT INTO ad_table (cat_code, content, cat_name, feature_item)
		VALUES ('$cat_code','$content','$cat_name','$feature_item')");

//echo ('after the result');


if (!$result)
{

	echo ('NO Record Inserted');
	//exit();
}
else
{
	echo ('Good job record inserted');
	
    
    
    
    
		
		
}

?>



