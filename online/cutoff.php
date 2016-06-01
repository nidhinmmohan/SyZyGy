<html>
    <style>
   .fr {
                    width: 500px;
                    white-space: nowrap;
                }
                .fr input,textarea {
                    float: right;
                }
                
              .error {
                    position: relative;
                    margin-left: 500px;
                    float: right;
                    color: #FF0000;
                }
    </style>
    <body>
        <?php
        
        $cutofferr=$cutoff="";
         if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                //company name validation
               if (empty($_POST["cut"]))
                 {$cutofferr = "Enter Cut Off.";
                  
                 }
               else
                 {
                 $cutoff = test_input1($_POST["cut"]);
                 // check if name only contains letters and whitespace
                 if (!preg_match("/^[0-9 ]*$/",$cutoff))
                   {
                   $cutofferr = "Only Numbers are allowed"; 
                   }
                 }
            }
              function test_input1($data)
            {
                 $data = trim($data);
                 $data = stripslashes($data);
                 $data = htmlspecialchars($data);
                 
                 return $data;
            }
        
        ?>
        
        
        
        
        <form method="post" action="../online/shortlist.php">
                    <div class="fr">
                        
                        <p> <label for="cut" >Cut off</label>	  
                         <input type="text" name="cut" value="<?php echo $cutoff;?>" id="cname" />
                         <span class="error" ><?php echo $cutofferr; ?></span>	
                         
                     </p> 
                      <p> <input type="submit" value="View" name="sub" title="View Result" /></p>
                    </div>
             
             
             
             
         </form>
                 
    </body>
    </html>
    <?php   
                    
                     if(isset($_POST['sub'])){
                      $cutt=  $_POST['cut'];
          
          $_SESSION['cutof']=$cutt;
         
                     }
                     ?>    
   