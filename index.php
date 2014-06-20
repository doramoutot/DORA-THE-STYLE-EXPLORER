
   <!-- LIENS VERS LE PHP DU HEADER -->
	<?php include "header.php"; ?>


</head>  <!-- fin du header -->

<!-- FIN DU HEAD -->


<!-- DEBUT DU BODY -->

<body>

<!--Container mets des marges automatique --> 
<div class="container">

<!-- DEBUT DU HEADER -->
  <header>

  	<!--reseaux sociaux-->
     <div> 
 	     <ul class="social">
 	        <li> <a href="http://facebook.com" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
            <li><a href="http://twitter.com" target=blank><i class="fa fa-twitter-square"></i></a></li>
	        <li><a href="http://youtube.com" target=blank><i class="fa fa-youtube"></i></a></li>
 	        <li><a href="http://youtube.com" target=blank><i class="fa fa-tumblr"></i></a></li>
 	        <li><a href="http://pinterest.com" target=blank><i class="fa fa-pinterest-square"></i></a></li>
         </ul>
     </div>


     <!--bouton suscribe-->
     <div id="subcribe">
         <p><a href= "#">SUBCRIBE</a></p>
     </div>


     <!--BANNIERE HEADER DORA THE EXPLORER AVEC GRILLES BOOTSTRAP: h1,h2 + barre nav-->

     <!--ligne row de bootstrap -->
     <div class="row" id="bigtitle">

     <!--ligne colonnes de bootstrap-->
	 <div class="col-md-8 col-md-offset-2">

        <!--bloc titre-->
        <h1>DORA<br>THE STYLE EXPLORER</br></h1>

        <!--div de ligne de separation-->
        <div id="separateur1"></div>

        <!--bloc sous titre-->
        <h2><a href="http://the-other.info"target="_blank">A project by<br>the Other - home of subcultures & style documentary</br></a></h2>
        <div></div>

        <!--div de ligne de separation-->
        <div id="separateur2"></div>

       <!--bloc barre navigation menu-->
       <nav>
          <ul class="barrenav" id="main-nav"> <!--ul indique une liste-->

	              <li><a href= "#">ABOUT</a></li>
	              <li><a href="#">SHOP</a></li>
	 
                  <!--fonction dropdown de boostrap dans la barre nav sur certains mots-->
                  <!--drowpdown sur video-->
	             <li class="dropdown">
                 <a id="drop4" role="button" data-toggle="dropdown" href="#">VIDEO<b class="caret"></b></a>
                 <ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop4">
                 <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Episode 1</a></li>
                 </ul>
                 </li>

                 <!--drowpdown sur diary-->
	             <li class="dropdown">
                 <a id="drop4" role="button" data-toggle="dropdown" href="#">DIARY<b class="caret"></b></a>
                 <ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop4">
                 <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">On the Road</a></li>
                 <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Memories from</a></li>
                 <li role="presentation" class="divider"></li>
                 </ul>
                 </li>
          </ul> <!--indique la fin de la liste-->
	    </nav> <!--ce div ferme la barre nav> -->

      <!--div de ligne de separation-->
        <div id="separateur3"></div>

    </div> <!--ce div ferme <div class="col-md-7 col-md-offset-3"> -->
    </div> <!--ce div ferme <div class="row" id="bigtitle"> --> 
    <!--FERMETURE DE LA GRILLE BOOTSTRAP POUR LA BANNIERE HEADER DORA THE EXPLORER: h1,h2 + barre nav-->

  </header> <!--ce div ferme le <header> --> 
  <!-- FIN DU HEADER -->


   <!--IMAGE VIDEO "we can't wait to show you the first episode AVEC BOOTSTRAP" --> 
   	  <!--ligne row de bootstrap -->
     <div class="row" id="image-video">

     <!--ligne colonnes de bootstrap-->
	 <div class="col-md-12">
         <img width="100%" class="imagecentre" src="images/artwork.png">
    </div><!--ce div ferme <div class="col-md-12"> -->
    </div><!--<ce div ferme <div class="row"> -->

       
     <!--ROW, Entre 2 lignes imaginaires, il y a 2 COLONNES: FROM THE SHOP ET ON THE ROAD IN BOLIVIA> --> 
    <div class="row"> 

    <!--COLONNE 1 FROM THE SHOP > --> 
       <section id="section-from-the-shop">
       <div class="col-md-6">
          <h3><a href="#">FROM THE SHOP</a></h3>
          <img width="100%" id="fromtheshop" src=" images/artwork2.png">
       </div> <!--ce div ferme <div class="col-md-6"> -->
       </section> <!-- Fermeture de la section "section-from-the-shop" -->


    <!--COLONNE 2 ON THE ROAD IN BOLIVIA -->
       <section id="section-on-the-road">
       <div class="col-md-6">


	    <!--TITRE ET TEXTE -->
		<div id="intro-on-the-road">
			<h3><a href="#">ON THE ROAD IN BOLIVIA</a></h3>
		     <p>We’re now on the road to shoot our new video in Bolivia. Follow our Travel Diary and the making of this new episode! Discover cool shops, our encounters, exclusive interviews and more...</p>
	    </div>

        <!--BOX ARTICLE 1 -->
	    <div class="dans-un-article-on-the-road">
		   <article> <!--Dans un article il y a une image et du texte -->
			   <a href="#"><img width="100%" src=" images/artwork3.png"></a>
			   <h4><a href="#">WE HAVE ARRIVED</h4></a>
			   <p> discover our first moments in Santiago</p>
           </article>
       </div>

        <!--BOX ARTICLE 2 -->
		<div class="dans-un-article-on-the-road">
			<article>
			     <a href="#"><img width="100%" src=" images/artwork3.png"></a>
			     <h4><a href="#">FIRST DAY</a></h3>
			     <p> discover our first moments in Santiago</p>
            </article>
	     </div>

         <!--BOX ARTICLE 3 -->
        <div class="dans-un-article-on-the-road">
		    <article>
			    <a href="#"><img width="100%" src=" images/artwork3.png"></a>
			     <h4><a href="#">SECOND DAY</h3></a>
			     <p> discover our first moments in Santiago</p>
            </article>

	    </div>

</section> <!-- Fermeture de la section "section-on-the-road" -->
<!--FERMETURE DE LA SECTION ON THE ROAD IN BOLIVIA -->
	
	<!--FERMETURE DU ROW "COLONNE 1 ET COLONNE 2-->
	</div> <!--<ce div ferme <div class="row"> -->

<br><br><br> <!--ce sont des espaces-->

<!--FOOTER-->
<footer>

	<!-- LE ROW INTEGRE LES SECTIONS (QUI SONT DES COLONNES) -->
       <div class="row">

		<!--SECTION COLONNE ABOUT-->
		<section class="col-xs-2">
			<h5>About</h5> <!-- Le H5 est le titre de la colonne -->
		    <ul class="about"> <!--Liste "about"-->
			    <li><a href="#">contact</a></li>
			</ul>
		</section>

		<!--SECTION COLONNE SHOP-->
		<section class="col-xs-2">
			<h5>Shop</h5>
		    <ul class="shop"> <!--Liste "about"-->
			    <li><a href="#">list item</a></li>
			</ul>
		</section>

		<!--SECTION COLONNE VIDEO-->
		<section class="col-xs-2">
			<h5>Video</h5>
		    <ul class="video"> <!--Liste "about"-->
			    <li><a href="#">list item</a></li>
			</ul>
		</section>

		<!--SECTION COLONNE DIARY-->
	 	<section class="col-xs-2">
			<h5>Diary</h5>
		    <ul class="diary"> <!--Liste "about"-->
			    <li><a href="#">list item</a></li>
			</ul>
		</section>

		<!--SECTION FIND US RESEAUX SOCIAUX-->
		<section class="col-md-2 col-md-offset-2">
			<p>Find us on</p>
			<ul class="social"> 
 	   			<li> <a href="http://facebook.com" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
       			<li><a href="http://twitter.com" target=blank><i class="fa fa-twitter-square"></i></a></li>
	  			<li><a href="http://youtube.com" target=blank><i class="fa fa-youtube"></i></a></li>
 	  			<li><a href="http://youtube.com" target=blank><i class="fa fa-tumblr"></i></a></li>
 	  			<li><a href="http://pinterest.com" target=blank><i class="fa fa-pinterest-square"></i></a></li>
    		</ul>
		</section>

  	</div> <!-- ce div ferne le row -->

	<!--COPYRIGHT-->
	<h6 class="dora2014">© 2014 Dora The Style Explorer</h6>

  	

 </footer> <!--ferme le footer-->

 <!--FIN DU FOOTER-->

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>


</body>
<!-- FIN DU BODY-->

</html>