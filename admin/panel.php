<?php 
session_start();
require("connect/load.php");
if(Auth::islogged()){
	
}else{
	header('Location:index.php');
}
?>


<?php
include ('header.php');
?>

    <div class="container-fluid">
      <div class="row-fluid">
       <div class="span3">
          <div class="well sidebar-nav">
           <p>Bienvenue sur le panel d'administration de serveur, grâce à ce panel, vous pourrez gérer le site que vous avez préalablement commandé !</p>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="hero-unit">
            <div>
              <img src="images/ana.png" alt="google analytics">
            </div>
        
          </div>
          <div class="row-fluid">
            <div class="span4">
              <h3>Gestion de Pages</h3>
        <a href="page.php"><img src="images/illustrations/images/posts.png" alt="google analytics"></a>
              <p style="width:70%">La gestion de pages vous permet de gérer les pages présente sur votre site web</p>
            </div><!--/span-->
            <div class="span4">
              <h3>Gestion de Posts</h3>
       <a href="post.php"> <img src="images/illustrations/images/posts.png" alt="google analytics"></a>
           <p style="width:70%">La gestion de posts vous permet de gérer les articles dans toutes les pages</p>
            </div><!--/span-->
            
              <div class="span4">
              <h3>Agenda</h3>
         <a href="agenda.php"> <img src="images/illustrations/images/agenda.png" alt="google analytics">  </a>       
          <p style="width:70%">La partie agenda vous permet d'insérer des événements et de les affficher sur un calendrier</p>
            </div><!--/span-->
          </div><!--/row-->
          <div class="row-fluid">
            <div class="span4">
              <h3>Galerie</h3>
             <a href="galerie.php"> <img src="images/illustrations/images/galerie.png" alt="google analytics">     </a>    
            <p style="width:70%">La partie galerie vous permet de gérer vos photos se trouvant dans vos posts</p>
            </div><!--/span-->
             <div class="span4">
              <h3>Ventes d'articles</h3>
             <a href="article.php"> <img src="images/illustrations/Pocket.png" alt="google analytics"></a>
               <p style="width:70%">La vente d'article vous permet grâce au scanner de code barre de vendre des produits</p>
            </div><!--/span-->
            <div class="span4">
              <h3>Newsletter</h3>
              <a href="newsletter.php"><img src="images/illustrations/images/newsletter.png" alt="google analytics">  </a>        
               <p style="width:70%">La partie newsletter vous permet d'envoyer des e-mails au personnes inscrites à votre newsletter</p>
            </div><!--/span-->
          </div><!--/row-->
		  	<br/>	<br/>
        </div><!--/span-->
	
      </div><!--/row-->


  <?php
include ('footer.php');
?>   