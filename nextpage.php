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
    <title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />  


    <style>
@import url('../Loginphp/css/font.css');

/*header*/
*{
   margin:0;
   padding:0;
   box-sizing: border-box;

}

html{
    font-size: 10px;
    font-family: Amantic_SC,cursive;

}


a{
    text-decoration: none;
    color: #eee;

}

header{
    width:100%;
    height: 130vh;
  
 
    background: url("../Loginphp/Assets/2PM.png") center no-repeat;
    background-size: cover;
  
}

.site{
    max-width: 120rem;
    width:90%;
    margin:0 auto;

}

nav{
    padding-top: 5rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-transform: uppercase;
    font-size: 1rem;
}

.brand{
    font-size: 3rem;
    font-weight: 300;
    transform: translateX(-100rem);
    animation: slideIn .5s forwards;
  
   
}

.brand span{
    color:crimson;
}

nav ul{
    display:flex;

}

nav ul li{
    list-style: none;
    transform: translateX(100rem);
    animation: slideIn .5s forwards;
   
}

nav ul li:nth-child(1){
    animation-delay: 0s;
}
nav ul li:nth-child(2){
    animation-delay: 0.5s;
}

nav ul li:nth-child(3){
    animation-delay: 1s;
}

nav ul li:nth-child(4){
    animation-delay: 1.5s;
}


nav ul li a{
    padding: 1rem 0;
    margin:0 3rem;
    position: relative;
    letter-spacing: 2px;

}
nav ul li a::before,
nav ul li a::after{
    content: "";
    position: absolute;
    width: 100%;
    height: 2px;
    background-color: crimson;
    left: 0;
    transform: scaleX(0);
    transition: all .5s;

}

nav ul li a::before{
    top:0;
    transform-origin: left;
}

nav ul li a::after{
    bottom:0;
    transform-origin: right;
}

nav ul li a:hover::before,
nav ul li a:hover::after{
    transform: scaleX(1);
}

@keyframes slideIn{
    from{

    }
    to{
        transform: translateX(0);
    }
}
.site-background{

    text-align: center;
    color: var(--white);
    margin-top: 100px;
    margin-bottom: 100px;
    margin-right: 150px;
    margin-left: 80px;
    }
.marquee {
   
    white-space: nowrap;
    -webkit-animation: rightThenLeft 7s linear;
    font-family: Satisfy,cursive;
    font-size: 3rem;
    color: rgb(30, 210, 201);
}


/*Biodata section*/
.biocontainer {
    font-family: 'Open Sans', sans-serif;
    background: #333;
    height: 2000px;
}
.container {
    max-width: 900px;
    display: flex;
    justify-content: space-evenly;
    margin: 0 auto;
   
   
}
.card-wrapper {
    width: 400px;
    height: 500px;
    position: relative;
    margin-top: 3rem;
}
.card {
    position: absolute;
    top: 10%;
    left: 10%;
    width: 350px;
    height: 450px;
    transform: translate(-50%, -50%);
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 5px 18px rgba(0, 0, 0, 0.6);
    cursor: pointer;
    transition: 0.5s;
}
.card .card-image {
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    z-index: 2;
    background-color: #000;
    transition: 0.5s;
}
.card:hover img {
    opacity: 0.4;
    transition: 0.5s;
}
.card:hover .card-image {
    transform: translateY(-100px);
    transition: all 0.9s;
}
/**** Social Icons *****/
.social-icons {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 3;
    display: flex;
   
}
 
.social-icons li {
    list-style: none;
    text-align:center;
    
}


.social-icons li a {
    position: relative;
    display: block;
    width: 50px;
    height: 50px;
    line-height: 50px;
    text-align: center;
    margin: 0 3px;
    transition: 0.4s;
    transform: translateY(200px);
    opacity: 0;
}
.card:hover .social-icons li a {
    transform: translateY(0px);
    opacity: 1;
}
.social-icons li a:hover {
   
    transition: 0.2s;
}
.social-icons li a:hover .fab {
    color: #fff;
}
.social-icons li a .fab {
    transition: 0.8s;
}
.social-icons li a .fab:hover {
    transform: rotateY(360deg);
    color: #fff;
}
.card:hover li:nth-child(1) a {
    transition-delay: 0.1s;
}
.card:hover li:nth-child(2) a {
    transition-delay: 0.2s;
}
.card:hover li:nth-child(3) a {
    transition-delay: 0.3s;
}
.card:hover li:nth-child(4) a {
    transition-delay: 0.4s;
}
/**** Personal Details ****/
.details {
    position: absolute;
    bottom: 0;
    left: 0;
    background: #fff;
    width: 100%;
    height: 130px;
    z-index: 1;
    padding: 10px;
}
.details h2 {
    margin: 30px 0;
    padding: 0;
    text-align: center;
}
.details h2 .job-title {
    font-size: 1rem;
    line-height: 2.5rem;
    color: #333;
    font-weight: 300;
}
.hangul{

    font-size:1rem;
}
.imgsec{
    position: absolute;
    
    left: 0px;
}

.imgsec img{
    width:75rem;
    
}


/*introsection*/
.intro{
   
    font-family: Amantic_SC,cursive;
    
    width: 100%;
    height:90vh;
   
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
  
   
}



.title{

    font-family: 'Sigmar One', cursive;
    font-weight: 400;
    font-size: 8rem;
    text-align: center;
    color:white;
  padding-top: 10px;
   
}


.intro p{
    color: white;
    font-size: 3rem;
}

/*music container*/





.grid-item{
    position: absolute;
    left: 50px;
    width: 500px;
    height: 120px;
    padding: 10px;
    font-family: 'Sigmar One', cursive;
    font-size: 2.5rem;
    color: crimson;
    text-align: center;
  
}

ul{
list-style:none;
}

#playlist{
padding:20px;
}

#playlist li a{
color:white;
text-decoration: none;
}

#playlist .current-song a{
color:blue;
}



#box li{
font-family:Caveat,cursive;
font-size:2rem;
font-weight: 700;
display: flex;
text-decoration: none;
margin-bottom: 5px;
}


#box {
display: flex;
align-items: center;
justify-content:left;
width:350px;
height: 450px;
left: 55px;
}

.gradient-border {
--borderWidth: 3px;
position: relative;
border-radius: var(--borderWidth);
}

.gradient-border:after{
content: '';
position: absolute;
top: calc(-1 * var(--borderWidth));
left: calc(-1 * var(--borderWidth));
height: calc(100% + var(--borderWidth) * 2);
width: calc(100% + var(--borderWidth) * 2);
background: linear-gradient(60deg, #f79533, #f37055, #ef4e7b, #a166ab, #5073b8, #1098ad, #07b39b, #6fba82);
border-radius: calc(2 * var(--borderWidth));
z-index: -1;
animation: animatedgradient 3s ease alternate infinite;
background-size: 300% 300%;
}


@keyframes animatedgradient {
  0% {
      background-position: 0% 50%;
  }
  50% {
      background-position: 100% 50%;
  }
  100% {
      background-position: 0% 50%;
  }
}

.imgsec1{
    position: absolute;
    right: 0px;
}

.imgsec img{
    width:75rem;
    
}



.posts-wrapper {
  width: 50%;
  margin: 20px auto;
 
}
  .container {
    display: grid;
    grid-template-columns: auto auto auto;

  padding: 10px;
}
.post {
  width: 50%;
  margin: 20px auto;
  padding: 10px 5px 0px 5px;

}
.post-info {
  margin: 10px auto 0px;
  padding: 5px;
}
.fa {
  font-size: 1.2em;
}
.fa-thumbs-down, .fa-thumbs-o-down {
  transform:rotateY(180deg);
}
.logged_in_user {
  padding: 10px 30px 0px;
}
i {
  justify-content:center;
  color: blue;
}

.badge {
	 display: block;
	 position: relative;
	 width: 20rem;
	 height: 20rem;
	 cursor: pointer;
	 border-radius: 50%;
	 transition: all 0.5s cubic-bezier(0.55, 0, 0.1, 1);
	 box-shadow: 0px 0.5rem 1rem rgba(0, 0, 0, .75);
}
 .badge:hover {
	 box-shadow: 0px 0.5rem 2rem rgba(0, 0, 0, .75);
	 background-position: 0% 50%;
}
 .badge:hover .text {
	 transform: rotate(-45deg) translate(0px) rotate(-315deg);
	 background:pink;
	 width: 20rem;
	 letter-spacing: 1rem;
	 line-height: 20rem;
	 height: 20rem;
	 margin-top: -10rem;
	 margin-left: -10rem;
	 transition: all 0.5s cubic-bezier(0.55, 0, 0.1, 1), letter-spacing 1.5s ease-out;
}
 .badge .text {
	 display: block;
	 position: absolute;
	 width: 10rem;
	 height: 10rem;
	 line-height: 10rem;
	 left: 50%;
	 top: 50%;
	 margin-top: -5rem;
	 margin-left: -5rem;
	 font-size: 2rem;
   font-family: Dancing_Script,cursive;
   
	 text-align: center;
	 color: #fff;
	 border-radius: 50%;
	 background:#ff1493;
	 transform: rotate(-180deg) translate(-10rem) rotate(180deg);
	 box-shadow: 0px 0.5rem 1rem rgba(0, 0, 0, .5);
	 transition: all 0.5s cubic-bezier(0.55, 0, 0.1, 1);
}

</style>


</head>
<body>


<header>
    <div class="site">
    <nav>
        <h1 class="brand" style="  font-family: Caveat,cursive;"><a href="">SY<span>A</span>Q<img src="../Loginphp/Assets/flame.png" style="width:30px;"><img src="../Loginphp/Assets/ice.png" style="width:30px;">L</a><h1>
         <ul>
             <li>
                 <a href="#">Home</a>
             </li>
             <li>
                <a href="#">Category</a>
             </li>
             <li>
                <a href="#">Archive</a>
             </li>
             <li>
                <a href="#">Contact</a>
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

	<section>
    <div class="post-wrapper">
      <div class="container">
    <?php foreach ($posts as $post):?>

            <div class="post">
            <div class="badge" style="background:url('<?php echo $post['image']?> ') no-repeat 50%;  background-size: 100%; ; ">
          <div class="text"><?php echo $post['owner']?> </div>
          </div>
         

          <div class="post-info">
          <i 
            
            <?php if(userLiked($post['id'])):?>
            class="fa fa-thumbs-up like-btn" 

            <?php else:?>
              class="fa fa-thumbs-o-up like-btn" 

            <?php endif ?>


            data-id="<?php echo $post['id']?>"></i>
      	 <span class="likes"><?php echo getLikes($post['id']); ?></span>
      	
      	&nbsp;&nbsp;&nbsp;&nbsp;

	    <!-- if user dislikes post, style button differently -->
      	<i 
      	  <?php if (userDisliked($post['id'])): ?>
      		  class="fa fa-thumbs-down dislike-btn"
      	  <?php else: ?>
      		  class="fa fa-thumbs-o-down dislike-btn"
      	  <?php endif ?>
      	  data-id="<?php echo $post['id'] ?>"></i>
      	<span class="dislikes"><?php echo getDislikes($post['id']); ?></span>
      </div>
   	</div>
   <?php endforeach ?>
  </div>
</div>
</section>


<script src="https://code.jquery.com/jquery-2.2.0.js"></script>
<script src="../Loginphp/audioPlayer.js"></script>
<script>
    audioPlayer();
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
<script src='https://code.jquery.com/jquery-3.2.1.min.js'>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script> AOS.init();</script>


<script src="../Loginphp/script.js"></script>
</body>
</html>