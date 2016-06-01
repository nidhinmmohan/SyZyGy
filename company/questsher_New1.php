
<?php
//session_start();
$_SESSION['link']=0;

?>

<html>

<body>
   
    <!--form action="" method="post" enctype="multipart/form-data">
        <br></br><br></br><br></br><br></br>
    <label for="file">Choose file to upload:</label>
  <input type="file" name="file" id="myFile"><br> 
  <input type="submit" value="Add File" name="add" title="choose file"-->
    
   
       <div class="container">
           <h2 style="color:#0099ff">Online Examination</h2>
           <h3 style="color:#0099ff"><blockquote>Quetion paper format:</blockquote></h3>
           
           <ol>
             <li> <h5 style="color: #666666">sdddd</h5></li>
               <li><h5 style="color: #666666">bcnxbmxc</h5></li>
               <li><h5 style="color: #666666">xcvsdvsdvs svv</h5></li>
               <li><h5 style="color: #666666">dcsd dsds sds</h5></li>
           </ol>
          
                            
                            <form role="form" method="post" action="" method="post" enctype="multipart/form-data">
                              <div class="form-group"><br>
                              <p>    
                                  <label for="comment">Choose file to be upload:</label></p>
                                <div class="well well-sm">
                                    <div> <p > <input type="file" name="file" id="myFile" /></p>
                                            </div></div> 
                                        <input type="submit" value="Add File" name="add" title="choose file"  class="btn btn-info" />
                                     <input type="reset" value="Clear" name="res" class="btn btn-info" /> </p> </div>
                            </form>
      
      
      
      
      
    


<?php
if(isset($_POST['add']))
{
   $con= mysql_connect("localhost","root","") or die(mysql_error());
    mysql_select_db("miniproject",$con);
     
    $del="DELETE FROM exam";
    
 mysql_query($del) or die(mysql_error());   
              
              
    $name1 = mysql_real_escape_string($_FILES['file']['name']);  
    $type=   mysql_real_escape_string($_FILES['file']['type']);
    $temp_name  =  mysql_real_escape_string($_FILES['file']['tmp_name']) ;  
    
    if($type=="text/plain") 
    {
        $file = fopen($name1, 'r');
        $data = array();


            
              
              
              
              
              

while(!feof($file))
{
    $line1=$line2=$line3=$line4="";
        $line1 = trim(fgets($file, 2048));
        $line2 = trim(fgets($file, 2048));
        $line3 = trim(fgets($file, 2048));
        $line4 = trim(fgets($file, 2048));
        echo "<br>";
        preg_match('/^(\d+)\s([^"]+)\s*?$/', $line1, $matches);
        $num=$matches[1];
        $quest=$matches[2];
	preg_match('/^a.\s([^"]+)\s*b.\s([^"]+)\s*?$/', $line2, $matches);   
        $opa=$matches[2];
        $opb=$matches[2];
        preg_match('/^c.\s([^"]+)\s*d.\s([^"]+)\s*?$/', $line3, $matches);
        $opc=$matches[1];
        $opd=$matches[2];
        preg_match('/^Ans.\s([^"]+)\s*?$/', $line4, $matches); 
        $answer=$matches[1];
    
   $query = "INSERT INTO exam (nmbr,question,opt1,opt2,opt3,opt4,ans)"
                             . "VALUES ('$num','$quest','$opa','$opb','$opc','$opd','$answer')";
    mysql_query($query) or die(mysql_error());                     
           
       
            $_SESSION['link']=1;
    
}
           // echo 'Successfully uploaded ';
            
            
            
            
            
         
            
            
            
            
            
          //  header('Location:admnstartex.php');
        }   
        else
        {
            echo 'Select a text file';
            exit();
        }
        mysql_close($con);
    }
    


?>
       </div>
                            
</body>
</html>