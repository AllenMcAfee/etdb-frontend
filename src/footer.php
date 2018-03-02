<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to finish 
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/
?>

</main><!-- / end page container, begun in the header -->

<footer class="site-footer">

<div id="footer" class="row">
  <div  class="col-sm-3">

<img src="http://www.designing-science-development.com/jensen/wp-content/uploads/2018/02/templteton.png">

<img src="http://www.designing-science-development.com/jensen/wp-content/uploads/2018/02/nih-logo-color.png">
</div>
  <div  class="col-sm-3">
<img src="http://www.designing-science-development.com/jensen/wp-content/uploads/2018/02/logo.png">

<img src="http://www.designing-science-development.com/jensen/wp-content/uploads/2018/02/hhmi-social-200x200.png">

  </div>
  
   <div  class="col-sm-3"><b>California Institute of Technology</b><br>
1200 E California Blvd<br>
Pasadena, CA 91125<br>
Department of Biology<br>
Broad Center for the Biological Sciences</div>
   
   <div  class="col-sm-3">Links</div>
   
  </div> 
</footer><!-- #colophon .site-footer -->

<?php wp_footer(); 
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website. 
// Removing this fxn call will disable all kinds of plugins. 
// Move it if you like, but keep it around.
?>

</body>
</html>
