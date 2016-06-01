
<!DOCTYPE html>
 <html>
     <body>
         
       
<div class="container">
  <h2 style="color:#0099ff" >Informations of Registered Students..</h2>
  <p>This table consists of the basic informations of registered companies.</p>            
  <table class="table">
    <thead>
      <tr >
 
        <th>Candidate's Name</th>
        <th>Father's Name</th>
        <th>Date of Birth</th>
        <th>Gender</th>
        <th>Category</th>
        <!--th>NATION</th-->
        <th>Address</th>
        <th>District</th>
        <th>State</th>
        <th>E-mail ADDRESS</th>
        <th>Phone</th>
     
      </tr>
    </thead>
    <tbody>

<?php
//include 'adminpage.html';
$a=$b=$c=$d=$f=$g=$h=$i=$j=$k=$l=$m=$n=$o=$p=$q=$r=$e="";
$connect=mysql_connect("localhost","root","");
	mysql_select_db("miniproject");
         
            $r1=mysql_query("SELECT * FROM student")or die("An error occur");
       $i=1;
	while($row=mysql_fetch_array($r1)){
               
               $a=$row['stud'];
		$b=$row['fath'];
               
             $d=$row['dob'];
              $e=$row['gender'];
               $f=$row['categ'];
         //$g=$row['nation'];
          //$h=$row['college'];
          // $i=$row['branch'];
            //$j=$row['ten'];
             //$k=$row['twel'];
              //$l=$row['sg'];
               //$m=$row['coco'];
                $n=$row['addr'];
                 $o=$row['dist'];
                  $p=$row['sta'];
                   $q=$row['mail'];
                    $r=$row['ph'];
                    
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
		<?php echo $a;?>
		</td> 
		<td>
		<?php echo $b; ?>
		</td>
		<td>
		
                <?php echo $d;?>
		</td>
                <td>
		<?php echo $e;?>
                
		</td>
              
                <td>
                      <?php echo $f;?>
		</td>
               
                <!--td>
                     <?php //echo $g;?>
		</td>
               
                <td>
                     <?php //echo $h;?>
		</td>
                
                <td>
                    <?php //echo $i;?>
		</td>
                
                
                <td>
                    <?php //echo $j;?>
		</td>
               
                <td>
                     <?php //echo $k;?>
		</td>
                
                <td>
                    <?php //echo $l;?>
		</td>
               
                <td>
                     <?php //echo $m;?>
		</td-->
                
                <td>
                    <?php echo $n;?>
		</td>
                
                <td>
                    <?php echo $o;?>
		</td>
                
                <td>
                    <?php echo $p;?>
		</td>
               
                <td>
                     <?php echo $q;?>
		</td>
              
                <td>
                      <?php echo $r;?>
		</td>
               
                
</tr>
	<?php
	}
	?>
</table>
  
	<!--tr>
	
        
        <th>COLLEGE</th>
	<th>BRANCH</th>
        <th>10TH CLASS PERCENTAGE</th>
        <th>12TH CLASS PERCENTAGE</th>
        <th>SGPA</th>
        <th>DATE OF COURSE COMPLETION</th>
        
        <th>PHONE</th>
        </tr-->
       
</div>
</body>
</html>