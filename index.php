<?php

defined('_JEXEC') or die;

$doc = JFactory::getDocument();
$doc->addStyleSheet($this->baseurl . '/media/jui/css/bootstrap.min.css');
$doc->addStyleSheet($this->baseurl . '/media/jui/css/bootstrap-responsive.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/style.css');
$doc->addScript('/templates/' . $this->template . '/js/main.js', 'text/javascript');
?>
<!DOCTYPE html>
<html>
<head>
    <jdoc:include type="head" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  	<div id='div_logo' class='centrado_logo_fondo'>  
		<img src='http://www.transitionfestival.org/images/logoCentral.png' class='rotar imagen_responsive_ancho transparente-alto' style='visibility=hidden;' />
	</div>
    <!-- main container -->
  	
  	<div id='content'>
      
    <div class='container'>
        <!-- TOP -->
      <div id='divIdioma'>
        <jdoc:include type="modules" name="position-0" style="none" />
      </div>      
      	<!-- header -->
      <div class='row'>
          	<div class='span12'>
            	<table id="topTablePositions"><tr>
                <td id="left_logoCentral"><jdoc:include type="modules" name="position-TOP1" style="none" /></td> 
                  <td id="logoCentral"><a href='http://transitionfestival.org'><img src='http://www.transitionfestival.org/images/logoCentral2.png' /></a></td> 
                <td id="right_logoCentral"><jdoc:include type="modules" name="position-TOP3" style="xhtml" /></td> 
              	</tr></table>  
          	</div>
        </div>
		
      	<!-- Seccion intermedia entre la cabecera y el contenido -->
      	<div class='row'>
        <div class='span12'>
        	  <jdoc:include type="modules" name="position-1" style="none" />
        </div>
      	</div>
      
        <!-- mid container - includes main content area and right sidebar -->
        <div class='row'>
          	<!-- left sidebar -->
          	<div class='span3'>
                <jdoc:include type="modules" name="position-8" style="well" />
            </div>
            <!-- main content area -->
            <div id='mainContentDiv' class='span6'>
                <jdoc:include type="modules" name="position-3" style="xhtml" />
                <jdoc:include type="message" />
                <jdoc:include type="component" />
                <jdoc:include type="modules" name="position-2" style="none" />
            </div>
            <!-- right sidebar -->
            <div class='span3'>
                <jdoc:include type="modules" name="position-7" style="well" />
            </div>
        </div>
      
      </div>
        <!-- footer -->
        <div class='row'>
          <div class='span12 redondeado gris transparente' style='text-align:center;'> &#169; Transition Crew 2015</div>
        </div>
    </div>
  	
  	<div id="auxDiv">
      
  	</div>
  
  <script type='text/javascript'>  
    if(!(window.location=="http://www.transitionfestival.org/index.php/es/" ||          window.location=="http://www.transitionfestival.org/index.php/en/" || window.location=="http://www.transitionfestival.org/index.php/es" || window.location=="http://www.transitionfestival.org/index.php/en" || 
window.location=="http://www.transitionfestival.org/index.php/es/noticias" || window.location=="http://www.transitionfestival.org/index.php/en/news" || 
window.location=="http://transitionfestival.org/index.php/es/" ||          window.location=="http://transitionfestival.org/index.php/en/" || window.location=="http://transitionfestival.org/index.php/es" || window.location=="http://transitionfestival.org/index.php/en" || 
window.location=="http://transitionfestival.org/index.php/es/noticias" || window.location=="http://transitionfestival.org/index.php/en/news"        
        )){
    	document.getElementById('mainContentDiv').className="span6 redondeado gris transparente";
      //alert('NO home page');
      	
    }
    else{
      	document.getElementById('mainContentDiv').className="span6 redondeado ";
      	
    }
    
            
  </script>
  
</body>
  

</html>