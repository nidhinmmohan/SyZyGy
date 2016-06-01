<!DOCTYPE html>
<html>

<body>

<div class="container">
  <h2>Informations of Registered Companies..</h2>
  <p>This table consists of the basic informations of registered companies.</p>            
  <table class="table">
    <thead>
      <tr >
 
        <th>Company</th>
	<th>Nature of Business</th>
	<th>Contact Person</th>
	<th>Designation</th>
        <th>Address</th>
        <th>Phone</th>
	<th>E-Mail</th>
        
        
        
        
      </tr>
    </thead>
    <tbody>
        <?php
//include './adminpage.html';
	$connect=mysql_connect("localhost","root","") or die("An error occur");
	mysql_select_db("miniproject");
	$r1=mysql_query("SELECT * FROM company");
        $i=1;
	while($row=mysql_fetch_array($r1)){
		$compname=$row['comp_name'];
		$natbus=$row['nat_busi'];
		$contper=$row['cont_pers'];
		$des=$row['designation'];
                $addr=$row['address'];
                $ph=$row['phone_nmbr'];
                $mail=$row['email'];
                if($i==1)
                {
                    $cls="success";
                    $i=0;
                }
                
                 else 
                {
                    $cls="info";
                    $i=1;
                }
             
                
?>
        <tr class="<?php echo $cls;?>">
		<td>
		<?php echo $compname;?>
		</td> 
		<td>
		<?php echo $natbus; ?>
		</td>
		<td>
		<?php echo $contper;?>
		</td>
		<td>
		<?php echo $des ;?>
		</td>
                <td>
		<?php echo $addr;?>
                  
		</td>
                <td>
		<?php echo $ph;?>
		</td> 
                <td>
		<?php echo $mail;?>
		</td> 
                		</tr>
	<?php
	}
	?>

        
        
     
    </tbody>
  </table>
</div>

</body>
</html>
