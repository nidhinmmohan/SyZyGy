
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <body>

 <?php
 

    $con = mysql_connect("localhost", "root", "");
    mysql_select_db("miniproject",$con);
    $query= "select file_name from download ";
    mysql_query($query);
    $p=mysql_query($query )or die(mysql_error()); 
    echo '<h2><p style="color:#0099ff">Placement Question Papers :</p></h2>'
    . '<p>You can download previous year question papers.</p><br><br>';
    $i=1;
    while($c = mysql_fetch_array($p)) {
      
        ?>
        <div class="well well-sm">
            
        <a href="../careerguidance/pdf/<?php echo  $c['file_name'];  ?>"><?php echo $i++.') '. $c['file_name'];  ?></a></div>
        <?php
    }
    
    mysql_close($con); 
?>        
</body>
</html>
