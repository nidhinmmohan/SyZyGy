
<!--<link href="./style.css" type="text/css" media="all" rel="stylesheet" />-->
<style type="text/css">
    .menu_nav {
	margin:0 auto;
	padding:0px 0 0;
	height:10px;
	float:right;
}
ul {  margin:0 auto;
	padding:0px 0 0;
	//height:50px;
	float:right;
  text-align: left;
  display: inline;
  
  margin: 0;
//  padding: 15px 4px 17px 0;
  list-style: none;
  -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
	//background: #efefef; 
	//background: linear-gradient(top, #efefef 0%, #bbbbbb 100%);  
	//background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%); 
	//background: -webkit-linear-gradient(top, #efefef 0%,#bbbbbb 100%); 
	//box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
	//padding: 68px 0 0;
	border-radius: 50px;  
	//list-style: none;
	position: relative;
	display: inline-table;
         z-index: 2;
}
	nav ul:after {
		content: ""; clear: both; display: block;
	}
        ul ul {
	display: none;
}

	nav ul li:hover > ul {
		display: block;
	}
ul li {
  /*font: bold 12px/18px sans-serif;*/
  display: inline-block;
  margin-right: -4px;
  position: relative;
  padding: 20px 20px;
  background: #fff;
  cursor: pointer;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -ms-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
  color: #fff;
}
ul li:hover {
    visibility:visible;
  background: #fff;
  color: #fff;
}
ul li ul {
  padding: 0;
  position: absolute;
  top: 10px;
  left: 0;
  width: 150px;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  display: none;
  opacity: 0;
  visibility: hidden;
  -webkit-transiton: opacity 0.2s;
  -moz-transition: opacity 0.2s;
  -ms-transition: opacity 0.2s;
  -o-transition: opacity 0.2s;
  -transition: opacity 0.2s;
}
ul li ul li { 
  background: #202020; 
  display: block; 
  color: #fff;
  text-shadow: 0 -1px 0 #000;
}
ul li ul li:hover { background: #333; }
ul li:hover ul {
  display: block;
  opacity: 1;
  visibility: visible;
}

</style>
<header style="height:132px;background-color:#000;width:100%;border-bottom:5px solid #1ca2ce;">
<div class="wrap" style="text-align:left;">
<img src="./images/syzygy_without_bg.png" style="padding-top:15px;" width="252px" height="102px" class="hvr-wobble-to-top-right">
   </div>


    <div class="wrap" >

    <ul style="position: relative;height: 41px;padding: 0px;margin-top: -90px;z-index: 1000;text-decoration: none;background-color: #000;color: #fff;">
        <li style="background-color: #000;"><a href="student.html" style="color: #fff;"><span>Home</span></a></li>
        <li style="background-color: #000;"><a href="administrator/cotab.php" title="View the companies recruting through Syzygy" style="color: #fff;"><span>Companies</span></a></li>
          <li style="background-color: #000;">
            <a href="student/jeprofile.php" title="Update profile or change username and password" style="color: #fff;"><span>Edit Profile</span></a></li>
                  
          
          <li style="background-color: #000;"><a><span>Career guidance</span></a>
              <ul style="top:41px; "><li style="background-color: #000;"><a href="campus.html" title="Tips for how to prepare for campus placements" style="color: #fff;"><span>placement tips</span></a></li>
                  <li style="background-color: #000;"><a href="afterbtech.html" title="Tips for what to do after Engineering" style="color: #fff;"><span>After BTech.</span></a></li>
                  <li style="background-color: #000;"><a href="careerguidance/download.php" title="Download previous year'splacement papers." style="color: #fff;"><span>Placement Papers</span></a></li>
              </ul> </li>
          <li style="background-color: #000;"><a href="student/online_exam.php" title='Attend online exam' style="color: #fff;"><span>Online Exam</span></a></li>
           <li style="background-color: #000;"><a href="signout.php" style="color: #fff;"><span>Log out</span></a></li>
        </ul>
    
   </div>
</header>


 <!-----------------------banner starting----------------------------------->

<div class="bannerwrap" style=" height:412px;margin-top:50px;">


<div class="wrap" >

<div class="box_skitter box_skitter_large">
					<ul>
						<li><img src="images/banner1.jpg" class="random" /></li>
						<li><img src="images/banner1.jpg" class="random" /></li>
						<li><img src="images/banner1.jpg" class="random" /></li>
						<li><img src="images/banner1.jpg" class="random" /></li>	
					</ul>
				</div>
				<div class="bbkb" style="position:absolute;"></div>   
    <img src="./images/bannerafter.png">
    </div>   
  </div>  
  
</div>
       
      <div class="clr"> </div>
<!-----------------------banner section ending----------------------------------->