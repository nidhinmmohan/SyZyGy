<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<body>

<!--form action="../careerguidance/uploadfile.php" method="post" enctype="multipart/form-data">
   
    <label for="file">pls Choose file to upload:</label>
  <input type="file" name="file" id="myFile" class="btn btn-info btn-sm"><br> 
  <input type="submit" value="Add File" name="add" title="choose file"  >
    
   
    
</form-->
    
     <div class="container">
                            <h2 style="color:#0099ff">Upload Placement Question Papers..</h2>
                            <p>Upload previous placement question papers.</p>
                            <form role="form" method="post" action="" method="post" enctype="multipart/form-data">
                              <div class="form-group">
                                  
                                <label for="comment">Choose file to be upload:</label>
                                <div class="well well-sm">
                                    <div> <p > <input type="file" name="file" id="myFile" /></p>
                                            </div></div> 
                                        <input type="submit" value="Add File" name="add" title="choose file"  class="btn btn-info" />
                                     <input type="reset" value="Clear" name="res" class="btn btn-info" /> </p> </div>
                            </form>




<?php 
 if(isset($_POST['add'])){
    $name = mysql_real_escape_string($_FILES['file']['name']);  
    $type= mysql_real_escape_string($_FILES['file']['type']);
    $temp_name  =  mysql_real_escape_string($_FILES['file']['tmp_name']) ;  
    if($type=="application/pdf"){
        if(!empty($name)){      
           $con= mysql_connect("localhost","root","") or die(mysql_error());
           mysql_select_db("miniproject",$con);
           
           $res=  mysql_query("SELECT file_name FROM download WHERE file_name='$name'");
            $row=  mysql_fetch_row($res);

            if($row > 0){
            echo 'file '.$name .' already exist';}
           
           else{
           $query="INSERT INTO download (file_name) VALUES ('$name') ";
           mysql_query($query) or die(mysql_error());
           mysql_close($con);
                echo 'uploaded';
                   move_uploaded_file($_FILES["file"]["tmp_name"], "../careerguidance/pdf/" . $_FILES["file"]["name"]);
                  
 //echo "Stored in: " . $_FILES["file"]["content"];
  
                
              //  move_uploaded_file($name, "C:\wamp\www\xtrapdf/" . $name);
            
        }       
    }}
    else {
        echo 'choose a pdf file to upload.';
    }
}
?>
                            </div>
                              
</body>
</html>
