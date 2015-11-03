<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<meta charset="UTF-8" />
<meta name="robots" content="noindex, nofollow"/>

<!-- Remy Sharp Shim --> 
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script> 
<![endif]-->

<link href="style.css" rel="stylesheet" />  
<style type="text/css">
</style>  
</head>
<body id="home">

<div id="wrapper">

<header>
							<!--SOCIAL MEDIA BUTTONS-->
	<nav id="nav-social">
    	<ul>
		<!--email:-->
			<li><a href="javascript:;" title="Link to Contact Form"><img src="images/email-32.png" alt="Email Icon" /></a></li> 
		<!--pinterest:-->
			<li><a href="javascript:;" title="Link to Pinterest Page"><img src="images/pinterest-32.png" alt="Pinterest Icon" /></a></li>
		<!--Instagram:-->
			<li><a href="javascript:;" title="Link to Instagram Page"><img src="images/instagram-32.png" alt="Instagram Icon" /></a></li>
		<!--Tumblr:-->
			<li class="last"><a href="javascript:;" title="Link to Tumblr Page"><img src="images/tumblr-32.png" alt="Tumblr Icon" /></a></li>
        </ul>
      </nav>  
<h1>
<a href="javascript:;">
<img src="images/LogoForWebsite-200.png" id="logo" alt="Halie Schwartz"/>
<span>Halie Schwartz</span></a>	<!--for SEO-->
</h1>
</header>

<nav id="nav-mobile">			<!--Responsive, for mobile screens-->
    <a class="menu-button" href="#nav-foot" onclick="toggleNav(); return false;">&#9776;  MENU</a>
    <ul id="nav-toggle">
    	<li><a href="javascript:;">Home</a></li>
    	<li><a href="javascript:;">About</a></li>
    	<li><a href="javascript:;">Sitemap</a></li>
    	<li><a href="javascript:;">Contact</a></li>
    </ul>
</nav>

<nav id="nav-main">		<!--  This is the main nav, nav-main.php  -->
	<ul>
    	<li><a href="javascript:;" target="_blank">Home</a></li>
        <li><a href="javascript:;" target="_blank">About</a></li>
        <li><a href="javascript:;" target="_blank">Sitemap</a></li>
        <li><a href="javascript:;" target="_blank">Contact</a></li>        
    </ul>
</nav>

<div id="middle">
<!--This is the middle div-->

<section>		<!--block-level element-->

<div class="one-third right">
<nav id="nav-sub">
        <!--<p>This is the subnav. It needs a unique id or class name.</p>-->
        <h3>Projects</h3>
        <ul>
          <li><a href="javascript:;">Photography</a></li>
          <li><a href="javascript:;">Print</a></li>
          <li><a href="javascript:;">Jewelry</a></li>
          <li><a href="javascript:;">Accessories</a></li>
          <li><a href="javascript:;">Design</a></li>
        </ul>
</nav> <!--  /subnav  -->
</div>

<div class="two-thirds left">
		<h2>Home</h2>     
        <p>I am always looking at how things are designed and thinking about how they can be improved upon. I believe that how we merge and remix ideas, pushing ourselves to not be derivative but to represent ourselves in a fresh way is what expands the boundaries.</p>
         
		<p>I love working with people and see myself contributing to the success of my clients and co workers by helping to make their visions a reality. I have learned a lot about color, space, design and marketing throughout my career as a hairstylist. My experiences have given me the professional sense to ask the right questions to clients so that I can help clarify what they are looking for and give suggestions to expand on their vision.</p>
         
		<p>I love solving visual problems, and I enjoy collaborating with other people or just throwing ideas around. I am constantly seeking to improve myself and I actively seek feedback from others, and I also like giving feedback to help my peers.</p> 
</div>

</section>

<section>		<!--block-level element-->

<div class="one-half left">
<img src="images/TreePortrait-574.jpg" alt="Tree Portrait Medium"/>		
</div>

<div class="one-half right">
		<h3>Blah! Blah!</h3>
        <p>Your longest line-length on a web page should<span class="line-length">* average between 45 to 75 ch*</span>racters. Set your column width so the line breaks between the two asterisks in this paragraph.</p>	
</div>

</section>


<p class="top-link"><a href="#nav-main">Back to top</a></p>
</div>		<!--close middle div-->

<footer>

<nav id="nav-footer">		<!--  Need to have id  -->
	<ul>
    	<li><a href="javascript:;" target="_blank">Home</a></li>
        <li><a href="javascript:;" target="_blank">About</a></li>
        <li><a href="javascript:;" target="_blank">Sitemap</a></li>
        <li><a href="javascript:;" target="_blank">Contact</a></li>        
    </ul>
</nav>

	<p class="credits">Site Contents &copy; Halie Schwartz &bull; Site Design by Houndstooth Ind.</p>

</footer>

<!-- begin validation buttons -->
 <a href="http://validator.w3.org/check?uri=referer">
  <img src="http://www.w3.org/html/logo/badge/html5-badge-h-solo.png" 
  width="31" height="32" alt="valid HTML5" />
 </a>
 <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">
  <img src="http://jigsaw.w3.org/css-validator/images/vcss" 
   alt="Valid CSS3" height="31" width="88" />
 </a>
<!-- end validation buttons -->

</div><!--  close wrapper  -->

<script> 
<!--
var originalNavClasses;

function toggleNav() {
    var elem = document.getElementById('nav-toggle');
    var classes = elem.className;
    if (originalNavClasses === undefined) {
        originalNavClasses = classes;
    }
    elem.className = /expanded/.test(classes) ? originalNavClasses : originalNavClasses + ' expanded';
}
-->  
</script>

</body>
</html>