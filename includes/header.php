
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ReMida | Page title </title>
    <link rel="stylesheet" href="/remida-prototype/css/foundation.css" />
    <link rel="stylesheet" href="/remida-prototype/css/custom.css" />
    <link rel="stylesheet" href="/remida-prototype/fonts/font-awesome-4.5.0/css/font-awesome.css" />
    <link href='https://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css'>
   <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
  </head>
  <body>
<!--  Facebook SDK initialize -->
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5&appId=345313962221747";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<!-- Responsive navigation toggle 
contains menu and a logo in the middle
-->
<div class="row title-bar" data-responsive-toggle="main-nav" data-hide-for="large">
    <div class="small-5 columns">
        <div class="title-bar" >
          <button class="menu-icon" type="button" data-toggle></button>
          <div class="title-bar-title">Menu</div>
        </div>
    </div>

    <div class="small-2 columns end">
        <a href="index.php">        
            <img  src="/remida-prototype/img/remida-logo.png" alt="Remida logo"></a>    
    </div>

</div>

<!-- This is the nav that is shown on large scrcreen px 1024 and bigger-->
 <div class="top-bar">
  <div id="main-nav" class="top-bar-left">
    <ul class="vertical large-horizontal dropdown menu" data-dropdown-menu>
      <li class="menu-text">
          <img  class="show-for-large" src="/remida-prototype/img/remida-logo.png" alt="remida logo" id="logo"></li>
   
        <li><a href="/remida-prototype/index.php">Forside</a></li>
  
        <li> 
        <a href="/remida-prototype/workshops.php">Workshops</a>
<!--
        <ul class="submenu menu vertical" data-submenu>
          <li><a href="#">Workshop ideas</a></li>
          <li><a href="#">Educators</a></li>
          <li><a href="#">Practical info</a></li>
        </ul>
-->
      </li>
      <li><a href="/remida-prototype/our-story.php">Our story</a>
<!--
          <ul class="submenu menu vertical" data-submenu>
          <li><a href="#">People behind</a></li>
          <li><a href="#">Other centers</a></li>
          <li><a href="#">Reggio Emilia Network</a></li>
        </ul>
-->
      </li>
      <li><a href="/remida-prototype/companies.php">For companies</a></li>
      <li><a href="/remida-prototype/memberships.php">Be our member</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
     </div>
      
       <div class="top-bar-right">
    <ul class="menu">
      <li><a href="https://www.facebook.com/ReMida-Center-Odense-center-for-kreativt-genbrug-243182275732814/?fref=ts"><i class="fa fa-facebook"></i></a>         </li>
      <li><a href=""><i class="fa fa-youtube"></i></a></li>
      <li><a href="#"><i class="fa fa-instagram"></i>
</a></li>
    </ul>
</div> 
</div>


