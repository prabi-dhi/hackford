<?php session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Postnatal care</title>
<meta name="keywords" content="graphite theme, professional, free templates, CSS, HTML" />
<meta name="description" content="Graphite Theme, professional free CSS template from templatemo.com website" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.cs"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
  mainmenuid: "templatemo_menu", //menu DIV id
  orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
  classname: 'ddsmoothmenu', //class added to menu's outer DIV
  //customtheme: ["#1c5a80", "#18374a"],
  contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
  
</head>
<body id="home">
<div id="templatemo_wrapper">
  <div id="templatemo_top"> 
      <div id="templatemo_login">
<?php 
include('includes/top.inc.php');
?>
    </div> 
    </div> <!-- end of top -->
    
    <div id="templatemo_header">
      
    <div id="site_title">
         <h1><a href="index.php" rel="nofollow">Postnatal care</a></h1>
      </div> 
        
    <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="index.php" class="selected">Home</a></li>
            <li><a href="about_blood.php">News</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Health Care <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">


            <li><a href="the">Prenatal</a></li>


            <li><a href="postnatalpage.php">Postnatal</a></li>
           </ul>
        </li>
              <li><a href="healthcare.php">About Us</a></li>
          <li><a href="register.php">Register</a></li>
               
          
            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
    </div> <!-- end of header -->
    
    <div id="templatemo_middle">
      <!--   &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  <img src="images/blood.jpg">   
          <!--  <div id="flash_grid_slider">
                <a rel="nofollow" href="http://www.flashmo.com/preview/flashmo_224_grid_slider" target="_blank">
                    Flash XML Grid Slider
                </a>
                <br /><br />
                <a href="http://www.adobe.com/go/getflashplayer">
                    <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
                </a>
            </div>-->        
      <!--  <div id="mid_left">
            <div id="mid_title">
                Welcome to Blood Bank<span>Donate Blood,Save Lifes</span>
            </div>
            <p>Each drop of your blood can give another life</p>
          <!--  <div id="learn_more"><a href="#">Learn More</a></div> 
        </div>
        <div class="cleaner"></div>-->
    
    <img src="images/download.jpg" height="260px" width="960px">
    
    </div> <!-- end of templatemo_middle -->
    
    <div id="templatemo_main">
      
        <div class="col_fw_last">
          <div class="col_allw300">
      
              <h3>Latest Blood Request</h3>

<?php

    
    $link=mysqli_connect("localhost","root","root")or die("can not linkect");
        mysqli_select_db("bloodbank",$link) or die("can not select database");
            
    $query = "SELECT * FROM blood_request"; //LIMIT $offset,$rec_limit "; 
    $result = mysqli_query($query,$link) or die("wrong query");
  $i=0;
    while(($row = mysqli_fetch_array($result)) && $i<6)
      {
            
      echo'
      <div class="news_box">
            <a href="#">Name of Patient:'.$row['request_patientname'].'</a>
            <p>Hospital:'.$row['request_hospital'].'<br/>
      Bloodgroup Required:'.$row['request_bloodgroup'].'<br/>
      <Required On:'.$row['request_requiredon'].'<br/>
      Contact No:'.$row['request_contactno'].' </p>
            </div>
       ';
       $i=$i+1;
     }                
?>               
                 
                <div class="cleaner h20"></div>
         <!--       <a class="more" href="#">More</a> -->
            </div>
          <div class="col_allw300">
              <h3>Facts about blood needs</h3>
                <div class="image_frame_300"><span></span><img src="images/banner1.jpg" alt="Image 01" /></div> 
            <!--<p><em>Morbi nec varius mauris. Nam dapibus sapien eget eros cursus id tincidunt massa congue.</em></p>-->
          <ul>
            <p><li align="justify">The gift of blood is the gift of life. There is no substitute for human blood.</li></p>
            <p><li align="justify"> Every two seconds someone needs blood.</li></p>
            <p><li align="justify">46.5 gallons: amount of blood you could donate if you begin at age 17 and donate every 56 days until you reach 79 years old.</li></p>
            <p><li align="justify"> Giving blood will not decrease your strength. </li></p>
            <p><li align="justify"> The average red blood cell transfusion is approximately 3 pints.</li></p>
            <p><li align="justify"> The blood type most often requested by hospitals is Type O.</li></p>
            <p><li align="justify"> Blood donation is one of the most committed social activitiy. Blood is the most powerful and essential part of human life. Every people may need the blood transfusion during their life time.</li></p>
            <p><li align="justify"> A single car accident victim can require as many as 100 units of blood.</li></p>
          </ul>
<!--       <div class="fb-like-box" data-href="http://www.facebook.com/Blooddonorskerala" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
      
    --> 
      
        <div class="cleaner h20"></div>
             
            </div>
            <div class="col_allw300 col_rm">
              <h3>Advantages of giving blood</h3>
                <div class="image_frame_300"><span></span><img src="images/banner2.jpg" alt="Image 02" /></div>
              
              <p align="justify">
        
        
        
        </p>
              

        <div class="cleaner h20"></div>
             
            </div>
            <div class="cleaner"></div>
        </div>
        <div class="cleaner"></div>
    
    </div> <!-- end of main -->
  
</div> <!-- end of wrapper -->










<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
        
        <div class="cleaner"></div>
    </div>
</div> 
  

<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>