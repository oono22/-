<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">  
<html>  
  <head>  
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
    <title>スロット問題</title>  
  </head>  
  <body bgcolor="#333333" >  
  
  
    <table align="center">  
    <tr>  
        <td><img src="./slot_images/title.png"></td>  
      </tr>  
    </table>  
    <hr/>  
    <?php  
    $buttonName = "スロットをまわす！";  
    for($i=0;$i<9;$i++){  
      $numberArray[$i] = rand(1,9);  
    }  
    ?>  
	

	
	
  <table align="center">  
  
    <tr>  
      <td><?php echo "<img src=./slot_images/" . $numberArray[0] .".png>"?></td>  
      <td><?php echo "<img src=./slot_images/" . $numberArray[1] .".png>"?></td>  
      <td><?php echo "<img src=./slot_images/" . $numberArray[2] .".png>"?></td>
	  <td><?php echo "<img src=./slot_images/" . $numberArray[3] .".png>"?></td> 
	  <td><?php echo "<img src=./slot_images/" . $numberArray[4] .".png>"?></td>
	  <td><?php echo "<img src=./slot_images/" . $numberArray[5] .".png>"?></td>  
      <td><?php echo "<img src=./slot_images/" . $numberArray[6] .".png>"?></td>
	  <td><?php echo "<img src=./slot_images/" . $numberArray[7] .".png>"?></td> 
	  <td><?php echo "<img src=./slot_images/" . $numberArray[8] .".png>"?></td> 
    </tr>
	
	
    <tr>  
      <td colspan="3">  
        <form name="sample" action="sample_slot.php" method="post">  
        <input type="submit" name="submit_btn" value=<?php echo $buttonName;?>>  
        </form>  
      </td>  
    </tr>  
	
	
	
    <tr>  
      <td colspan="3">
<br></br>
	<br></br>
	<br></br>
	
		  
        <?php  
          if($numberArray[0]==$numberArray[1]
		  && $numberArray[0]==$numberArray[2]
		  && $numberArray[0]==$numberArray[3]
		  && $numberArray[0]==$numberArray[4]
		  && $numberArray[0]==$numberArray[5]
		  && $numberArray[0]==$numberArray[6]
		  && $numberArray[0]==$numberArray[7]
		  && $numberArray[0]==$numberArray[8]){  
            echo '<FONT COLOR="WHITE">FLAG=congratulation!!</FONT>';
          }else{  
            echo "<img src= noclear.png>";  
          }  
        ?>  
      </td>  
    </tr>  
  </table>  
  
  </body>  
</html>  