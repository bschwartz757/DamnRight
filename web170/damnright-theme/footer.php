
</div>		<!--close middle div-->

<footer>
<nav id="nav-footer">		
	<ul>
    	<li><a href="javascript:;" target="_blank">Home</a></li>
        <li><a href="javascript:;" target="_blank">About</a></li>
        <li><a href="javascript:;" target="_blank">Sitemap</a></li>
        <li><a href="javascript:;" target="_blank">Contact</a></li>        
    </ul>
</nav>

	<p class="credits">Site Contents &copy; Halie Schwartz &bull; Site Design by Houndstooth Ind.</p>
</footer>
<!-- close footer -->

<!-- Start WP Footer -->
<?php wp_footer(); ?>

<!-- End WP Footer -->

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
var originalNavClasses;

function toggleNav() {
    var elem = document.getElementById('nav-toggle');
    var classes = elem.className;
    if (originalNavClasses === undefined) {
        originalNavClasses = classes;
    }
    elem.className = /expanded/.test(classes) ? originalNavClasses : originalNavClasses + ' expanded';
} 
</script>

</body>
</html>