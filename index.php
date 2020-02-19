<?php

session_start();
date_default_timezone_set("Asia/Bangkok");
include 'db.inc.php';
include 'coments.inc.php';
include 'show.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Loginphp/css/all.css">
    <link rel="stylesheet" href="../Loginphp/css/landingpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:700|Roboto|Roboto+Slab:700|Sigmar+One&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title> 안녕하세요 ! </title>
   
</head>
<body>
<header>
    <div class="site">
    <nav>
        <h1 class="brand" style="  font-family: Caveat,cursive;"><a href="">SY<span>A</span>Q<img src="../Loginphp/Assets/flame.png" style="width:30px;"><img src="../Loginphp/Assets/ice.png" style="width:30px;">L</a><h1>
         <ul>
             <li>
                 <a href="">Home</a>
             </li>
             <li>
                <a href="#About">About</a>
             </li>
             <li>
                <a href="#BoxBiodata">Biography</a>
             </li>
             <li>
                <a href="#footer">Contact</a>
            </li>

            <li>
                <a href="logout.php">Logout</a>
            </li>
          
        </ul>
    
</nav>

         <div class="site-background" data-aos="fade-up" data-aos-delay="100" >
         <marquee behavior="alternate"><span class="marquee">Hello <?php echo $_SESSION['Name'];?> !</span></marquee>
             <h3 style="font-family: Satisfy,cursive; font-size: 2.5rem; color: white;">"It's about who you miss in 2PM in the afternoon when your are busy, not 2AM in the morning when you are lonely"</h3>         
          
            
             
         </div>
</div>
</header>
    
<main>

<!-- Box biodata--> 
<section class= "biocontainer" id="BoxBiodata" >
<!-- 1st Card Row --> 
<div class="container">
    
    <div class="card-wrapper">
      <!-- Taecyeon's--> 
      <div class="card" data-aos="fade-right" data-aos-delay="200">
        <div class="card-image">
        <img src="../Loginphp/Assets/oktaecyeon.jpg" alt="profile one">
        </div>
        <ul class="social-icons">
        <li>
          <a href="https://www.instagram.com/taecyeonokay/?hl=en">
          <i class="fab fa-instagram fa-3x"></i>
          </a>
        </li>
        <li>
          <a href="https://twitter.com/taeccool">
          <i class="fab fa-twitter fa-3x"></i>
          </a>
        </li>
        
        </ul>

        <div class="details">
        <h2>Ok Taecyeon
          <br><span class="Hangul">옥택연</span><br>
          <span class="job-title">Main Rapper</span>
        </h2>
      </div>
    </div>
  </div>
    
<div class="card-wrapper">
<!-- Minjun's -->  
 <div class="card"data-aos="fade-left" data-aos-delay="200">
        
        <div class="card-image">
          <img src="../Loginphp/Assets/junk2.jpg" alt="profile one">
        </div>

      <ul class="social-icons">
    
        <li>
          <a href="https://www.instagram.com/jun2dakay/?hl=en">
            <i class="fab fa-instagram fa-3x"></i>
          </a>
        </li>
        <li>
          <a href="https://twitter.com/jun2dakay?lang=en">
            <i class="fab fa-twitter fa-3x"></i>
          </a>
        </li>
        
      </ul>

      <div class="details">
        <h2>Kim Min Jun
          <br><span class="hangul">김준수</span><br>
          <span class="job-title">Main Vocalist</span>
        </h2>
      </div>
    </div>
  </div>
</div><!-- End of 1st Card Row --> 

<!-- 2nd Card Row --> 
<div class="container">
    <!-- Chansung -->  
    <div class="card-wrapper">
      
      <div class="card" data-aos="fade-right" data-aos-delay="200" >
        
        <div class="card-image">
          <img src="../Loginphp/Assets/chans.jpg" alt="profile one">
        </div>

      <ul class="social-icons">
    
        <li>
          <a href="">
            <i class="fab fa-instagram fa-3x"></i>
          </a>
        </li>
        <li>
          <a href="https://twitter.com/taeccool">
            <i class="fab fa-twitter fa-3x"></i>
          </a>
        </li>
        
      </ul>

      <div class="details" data-aos="fade-right" data-aos-delay="200" >
        <h2>Hwang Chansung
          <br><span class="Hangul"> 황찬성</span><br>
          <span class="job-title">Rapper</span>
        </h2>
      </div>
    </div>
</div>

    
<div class="card-wrapper">
      <!--Nickhun -->  
      <div class="card"data-aos="fade-left" data-aos-delay="200">
        
        <div class="card-image">
          <img src="../Loginphp/Assets/Nickhun3.jpg" alt="profile one">
        </div>

      <ul class="social-icons">
    
        <li>
          <a href="">
            <i class="fab fa-instagram fa-3x"></i>
          </a>
        </li>
        <li>
          <a href="https://twitter.com/taeccool">
            <i class="fab fa-twitter fa-3x "></i>
          </a>
        </li>
        
      </ul>

      <div class="details">
        <h2>Nickhun Buck
        <br><span class="Hangul">닉쿤</span><br>
          <span class="job-title">Vocal</span>
        </h2>
      </div>
    </div>
  </div>
</div>
    
</div>  
</div><!-- End of 2nd Card Row --> 

 
 <!-- 3rd Card Row --> 
<div class="container">  
<div class="card-wrapper">
      <!-- Junho -->  
      <div class="card"data-aos="fade-right" data-aos-delay="200">
        
        <div class="card-image">
          <img src="../Loginphp/Assets/junho2.jpg" alt="profile one">
        </div>

      <ul class="social-icons">
    
        <li>
          <a href="https://www.instagram.com/le2jh/?hl=en">
            <i class="fab fa-instagram fa-3x"></i>
          </a>
        </li>
        <li>
          <a href="https://twitter.com/taeccool">
            <i class="fab fa-twitter fa-3x "></i>
          </a>
        </li>
        
      </ul>

      <div class="details">
        <h2>Lee Jun Ho
        <br><span class="Hangul">닉쿤</span><br>
          <span class="job-title">Rapper</span>
        </h2>
      </div>
    </div>
  </div>
    
    
<div class="card-wrapper">
      <!--Wooyoung's -->  
      <div class="card"data-aos="fade-left" data-aos-delay="200">
        
        <div class="card-image">
          <img src="../Loginphp/Assets/wooyoung.png" alt="profile one">
        </div>

      <ul class="social-icons">
    
        <li>
          <a href="">
            <i class="fab fa-instagram fa-3x "></i>
          </a>
        </li>
        <li>
          <a href="https://twitter.com/taeccool">
            <i class="fab fa-twitter fa-3x "></i>
          </a>
        </li>
        
      </ul>

      <div class="details">
        <h2>Wooyoung
        <br><span class="Hangul">장우영</span><br>
          <span class="job-title">Vocal</span>
        </h2>
      </div>
    </div>
  </div>
    
</div>
  <div class="imgsec"><br>
    <img src="../Loginphp/Assets/2PMpng2.png" alt=""  data-aos="zoom-in" data-aos-delay="200"></div>
</div><!-- End of 3rd Card Row --> 
</section>

<!-- Intro Section--> 
<section style=" background:black;" id="About">

    <div class="intro">
   <h1 class="title" data-aos="fade-down-right" data-aos-delay="400">All THE WAY<br>
        <span>2</span> 
        <span>P</span>
        <span>M</span></h1>
    <p  data-aos="fade-down-left" data-aos-delay="600" > This page is dedicated to 2PM, a South Korean boy band formed by JYP Entertainment. 
        The current members are Jun. K, Nichkhun, Taecyeon, Wooyoung, Junho and Chansung. </p>
    
</div>
</section> 


<!-- Music--> 
<section class="musicsection" >
<div class="grid-item">
<h1>Melt your E<img src="../Loginphp/Assets/sound.png" style="width:30px;">rs!</h1>

<img src="../Loginphp/Assets/giphy.gif" style=" border-radius: 50%; width:200px; height:200px;"><br><br>
         
<audio src="" controls id="audioPlayer" style="padding:10px;" >
</audio>
<!-- Music playlist--> 
<ul id="playlist">
<li class="current-song"><a href="../Loginphp/music/2pmsound.mp3"></a></li>

	<div class="cardmusic">
	<img src="../Loginphp/Assets/adtoy.jpg">
	<li><a href="..\Loginphp\music\adtoy.mp3">All day Thinking of You</a></li></div>
	
  <div class="cardmusic">
	<img src="../Loginphp/Assets/go.png">
		<li ><a  href="../Loginphp/music/gocray.mp3">Go Crazy</a></li>
	</div>
	
  <div class="cardmusic">
		<img src="../Loginphp/Assets/handsup.jpg">
		<li><a href="../Loginphp/music/handsup.mp3">Hands Up</a></li>
	</div>
	  
  <div class="cardmusic">
		<img src="../Loginphp/Assets/im your man.jpg">
		<li><a href="../Loginphp/music/im your man.mp3">Im Your Man</a></li>
	</div>

	<div class="cardmusic">
		<img src="../Loginphp/Assets/heartbeat.jpg" >
		<li> <a href="../Loginphp/music/heartbeat.mp3">Heartbeat</a></li>
	</div>

	<div class="cardmusic">
		<img src="../Loginphp/Assets/promise.jpg" >
   <li><a href="../Loginphp/music/promise.mp3">Promise I'll Be</a></li>
  </div>
	</ul>
</div><!-- End of Music playlist--> 

</div>
</section>

<!-- 2oopm section--> 
<section class="zooPMsection" style=" background:#f5f5f5 ; background-position: center;background-size: cover; min-height:30vh;" >
<h1 class="zoopm"> 200 PM </h1>
<div class="post-wrapper"data-aos="flip-up" data-aos-delay="200">
<div class="container">
    
    <?php foreach ($posts as $post):?>
          <div class="post">
            <div class="badge" style="background:url('<?php echo $post['image']?> ') no-repeat 50%;  background-size: 100%;" >
          <div class="text"><?php echo $post['owner']?> </div>
          </div>
         

          <div class="post-info">
          <i 
            
            <?php if(userLiked($post['id'])):?>
            class="fa fa-thumbs-up like-btn fa-2x" 

            <?php else:?>
              class="fa fa-thumbs-o-up like-btn fa-2x" 

            <?php endif ?>


            data-id="<?php echo $post['id']?>"></i>
      	 <span class="likes"><?php echo getLikes($post['id']); ?></span>
      	
      	&nbsp;&nbsp;&nbsp;&nbsp;

	    <!-- if user dislikes post, style button differently -->
      	<i 
      	  <?php if (userDisliked($post['id'])): ?>
      		  class="fa fa-thumbs-down dislike-btn fa-2x"
      	  <?php else: ?>
      		  class="fa fa-thumbs-o-down dislike-btn fa-2x"
      	  <?php endif ?>
      	  data-id="<?php echo $post['id'] ?>"></i>
      	<span class="dislikes"><?php echo getDislikes($post['id']); ?></span>
      </div>
   	</div>
   <?php endforeach ?>
  </div>
</div>
</section>

<!-- Footer -->
<section class="footersection" id="footer" >
<div class="footer">
    <div class="footer-content">
        
        <div class="footer-section about">
        <div class="contact">
        <h1 class="logo-text"><a href="">SYAQ<img src="../Loginphp/Assets/flame.png" style="width:30px;"><img src="../Loginphp/Assets/ice.png" style="width:30px;">L</a></h1>
      <br><p>This page are inspired by a fan page just for my study purposed.<br> Do visit my original page <b>https://syafiqahazizamprofile.000webhostapp.com</p>
      <br> <span><i class="fas fa-phone fa-2x"></i>&nbsp; 019-7188504</span>
            <span><i class="fas fa-envelope fa-2x"></i>&nbsp; nursyafiqahazizam@gmail.com</span>
         
            <div class="socials">
             <br>   <a href ="#"><i class="fab fa-twitter fa-2x"></i></a>
                <a href ="#"><i class="fab fa-instagram fa-2x"></i></a>
          </div>
</div>

<!-- Email Modal -->
<img class="email" style="width: 60%;
  height:250px;" src="../Loginphp/Assets/envolope.png"onclick="document.getElementById('id01').style.display='block'">
         
<div id="id01" class="modal">
<?php
echo "<form method='POST'action='".setComments($conn2)."'>
<input type='hidden' name='uid' value='anonymus'>
<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
<textarea name='message'></textarea><br>
<button type='submit' name='commentSubmit'>Comment</button>

</form>";

?>

<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
</div>
<div class="footer-bottom" >
        &copy; syaqcool.com | Designed by Syafiqah Azizam 
    </div>
</div>
</section>


<!-- Modal script -->
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script src="https://code.jquery.com/jquery-2.2.0.js"></script>


<!-- Autoplaymusic script -->
<script src="../Loginphp/js/audioPlayer.js"></script>
<script>
    audioPlayer();
</script>


<!-- like unlike script -->
<script src="../Loginphp/js/script.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>   
   AOS.init(); 
</script>
</body>
</html>