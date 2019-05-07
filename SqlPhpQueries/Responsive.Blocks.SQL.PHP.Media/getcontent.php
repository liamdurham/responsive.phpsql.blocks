<?php
//echo('in the page');
//$cat=$_GET['cat']; un comment for getcontent.php
//echo "the category is $cat";

$hostname="localhost";
$username="danderso_adsRD";
$password="***";
$dbname="danderso_ads";
$usertable="ad_table";

$link = mysqli_connect($hostname, $username, $password);
   if(!$link){
      echo('bad connect to MySql server');
   }
  else
  {
      echo('good connect to MySql server');
  }



if (!mysqli_select_db($link, $dbname))
{
	echo('could not find database'); 
	
}
else
{   
  echo('good found database');  
}
//this section retreives the data from the database based on the SELECT statement
//This SELECT retreives from the table "recipes" like in the lecure
//You will need to change the SELECT to retreive from your database table
//You will need to determine if the WHERE will work for getcontent.php or for getfeature.php
//then change the WHERE if needed


$result = mysqli_query($link, "SELECT content, cat_name FROM ad_table WHERE cat_code='$cat'");

//echo ('after the result');


if (!$result)
{
	
	echo ('SELECT did not work ');
}
else
{
	echo ('SELECT did work');
	
    while ($row = mysqli_fetch_array($result))
       {
     		?> 
    	 <table width="400" border="1" cellpadding="0">
          <tr>   
          <td><?php echo  $row['content'] ; ?></td>
          </tr>
        </table>
         <?php  
    } // ends the while loop
   } // ends the if statement


?>