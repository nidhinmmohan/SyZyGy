
<!DOCTYPE html>
 <html>
     <body>
         
       
<div class="container">
  <h2 style="color:#0099ff" >Informations of Registered Students..</h2>
  <p>This table consists of the academic informations of registered companies.</p>            
  <table class="table">
    <thead>
      <tr >
 
        <th>Candidate's Name</th>
        <th>College</th>
	<th>Branch</th>
        <th>10%</th>
        <th>12%</th>
        <th>SGPA</th>
        <th>Course Completion Date</th>
        
        <th>Phone</th>
        <th>E-mail ADDRESS</th>
       
      </tr>
    </thead>
    <tbody>

<?php
//include 'adminpage.html';
$a=$b=$c=$d=$f=$g=$h=$i=$j=$k=$l=$m=$n=$o=$p=$q=$r=$e="";
$connect=mysql_connect("localhost","root","");
	mysql_select_db("miniproject");
         
            $r1=mysql_query("SELECT * FROM student")or die("An error occur");
       $t=1;
	while($row=mysql_fetch_array($r1)){
               
              $a=$row['stud'];
	/*	$b=$row['fath'];
               
             $d=$row['dob'];
              $e=$row['gender'];
               $f=$row['categ'];*/
         $g=$row['nation'];
          $h=$row['college'];
           $i=$row['branch'];
            $j=$row['ten'];
            $k=$row['twel'];
             $l=$row['sg'];
              $m=$row['coco'];
              /*  $n=$row['addr'];
                 $o=$row['dist'];
                  $p=$row['sta'];$r=$row['ph'];*/
                   $q=$row['mail'];
                    
                    
                     if($t==1)
                {
                    $cls="success";
                    $t=0;
                }
                
                 else 
                {
                    $cls="info";
                    $t=1;
                }
        	
?>
           <tr class="<?php echo $cls;?>">
	
               <td>
                     <?php echo $a;?>
		</td>
                <td>
                     <?php echo $g;?>
		</td>
               
                <td>
                     <?php echo $h;?>
		</td>
                
                <td>
                    <?php echo $i;?>
		</td>
                
                
                <td>
                    <?php echo $j;?>
		</td>
               
                <td>
                     <?php echo $k;?>
		</td>
                
                <td>
                    <?php echo $l;?>
		</td>
               
                <td>
                     <?php echo $m;?>
		</td>
                <td>
                     <?php echo $q;?>
		</td>
                
               
               
                
</tr>
	<?php
	}
	?>
</table>
  
	<!--tr>
	
        
        
        </tr-->
       
</div>
</body>
</html>