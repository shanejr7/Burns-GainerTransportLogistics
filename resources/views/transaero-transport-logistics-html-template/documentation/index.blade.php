<?php ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head lang="en">
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<title>Template Documentation Template</title>
	<!-- Framework CSS -->
	<link rel="stylesheet" href="assets/blueprint-css/screen.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="assets/blueprint-css/print.css" type="text/css" media="print">
	<!--[if lt IE 8]><link rel="stylesheet" href="assets/blueprint-css/ie.css" type="text/css" media="screen, projection"><![endif]-->
	<link rel="stylesheet" href="assets/blueprint-css/plugins/fancy-type/screen.css" type="text/css" media="screen, projection">
	<style type="text/css" media="screen">
		p, table, hr, .box { margin-bottom:25px; }
		.box p { margin-bottom:10px; }
	</style>
</head>


<body>
	<div class="container">
	
		<h3 class="center alt">&ldquo;Trans Aaero HTML Template&rdquo; Documentation by Vadzim Liashkevich v1.0</h3>
		
		<hr>
		
		<h1 class="center">&ldquo;Trans Aaero - Responsive Logistic HTML Template&rdquo;</h1>
		
		<div class="borderTop">
			<div class="span-6 colborder info prepend-1">
				<p class="prepend-top">
					<strong>
					Created: 02/11/2015<br>
					By: <a href="http://themeforest.net/user/lesh1j">Vadzim Liashkevich</a><br>
					Email: <a href="mailto:youremail@yourdomain.com">lesh1j@yandex.by</a>
					</strong>
				</p>
			</div><!-- end div .span-6 -->		
	
			<div class="span-12 last">
				<p class="prepend-top append-0">Thank you for purchasing my theme. If you have any questions that are beyond the scope of this help file, please feel free to email via my user page contact form <a href="http://themeforest.net/user/lesh1j">here</a>. Thanks so much!</p>
			</div>
		</div><!-- end div .borderTop -->
		
		<hr>
		
		<h2 id="toc" class="alt">Table of Contents</h2>
		<ol class="alpha">
			<li><a href="#filesStructure">Files Structure</a></li>
			<li><a href="#htmlStructure">HTML Structure</a></li>
			<li><a href="#cssFiles">CSS Files and Structure</a></li>
			<li><a href="#javascript">JavaScript</a></li>
			<li><a href="#colors">Color schemes</a></li>
			<li><a href="#credits">Sources and Credits</a></li>
			
		</ol>
		
		<hr>
		
		<h3 id="filesStructure"><strong>A) Files Structure</strong> - <a href="#toc">top</a></h3>		
		<img src="assets/images/filesstructure.png" alt="HTML Structure" />
		
		<hr>
		
		<h3 id="htmlStructure"><strong>B) HTML Structure</strong> - <a href="#toc">top</a></h3>
		<p>This theme is a responsive layout with 1-12 columns. Here is the general structure.</p>
		
		<img src="assets/images/htmlstructure.png" alt="HTML Structure" />
		
		<hr>

		<h3 id="cssFiles"><strong>C) LESS File and Structure</strong> - <a href="#toc">top</a></h3>

		<p> The file is separated into sections using:</p>  

<pre>	/* --------------------------------------
	=========================================
	   1. VARIABLES             
	=========================================
	-----------------------------------------*/

	some code

	/* --------------------------------------
	=========================================
	   2. GLOBAL STYLES
	=========================================
	-----------------------------------------*/
	
	some code
	
	/* --------------------------------------
	=========================================
	   3. SECTION SPECIFIC CODE
	=========================================
	-----------------------------------------*/
	
	some code
	
	/* --------------------------------------
	=========================================
	   4. INNER PAGES
	=========================================
	-----------------------------------------*/
	
	some code
	
	/* --------------------------------------
	=========================================
	   5. SLIDE MENU     
	=========================================
	-----------------------------------------*/
	
	some code
	
	etc, etc. 
</pre>
	<p> And into subsections using:</p>  
<pre>	/*---------------------------------------
	   3.1 TOP BAR  
	-----------------------------------------*/

	some code

	/*---------------------------------------
	   3.2 MAIN NAVBAR 1
	-----------------------------------------*/
	
	some code
	
	/*---------------------------------------
	   3.3 MAIN NAVBAR 2
	-----------------------------------------*/
	
	some code
	
	etc, etc. 
</pre>	

		
		<p>If you would like to edit a specific section of the site, simply find the appropriate label in the LESS file, 
		and then scroll down until you find the appropriate style that needs to be edited. Next compile the LESS in CSS file</p> 

		<hr>
		
		<h3 id="javascript"><strong>D) JavaScript</strong> - <a href="#toc">top</a></h3>
		
		<p>This theme imports three Javascript files.</p>
		
		<ol>
			<li>jQuery</li>
			<li>Bootstrap</li>
			<li>Slider PRO - main slider</li>
			<li>Stellar.js - parallax plugin</li>
			<li>Wow - plugin for animation</li>
			<li>OWL Carousel</li>
			<li>My custom scripts</li>
			<li>And some other plugin</li>
		</ol>
		  
		
		<hr>
		
		<h3 id="colors"><strong>E) Color schemes</strong> - <a href="#toc">top</a></h3>	
		
		<p>To use one of the ready color schemes, uncomment the appropriate line in the file "css/master.css"</p>
		
		<img src="assets/images/master.png" alt="master CSS" /><p></p>
		
		<p>To use any other color, change the value of a variable "@color-primary" in a line 66 in the file "less/theme.less". Next compile the LESS in CSS file.</p>
		
		<img src="assets/images/theme.png" alt="theme LESS" /><p></p>
		
		<hr>
		
		<h3 id="credits"><strong>F) Sources and Credits</strong> - <a href="#toc">top</a></h3>
				
		<ul>
			<li>Images from <a href="http://flickr.com">flickr.com</a></li>
			<li><a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">500+ Font Awesome Classes</a></li>
			<li>Icons made by </li>
			<li><a href="http://www.freepik.com" title="Freepik">Freepik</a></li>
			<li><a href="http://www.flaticon.com/authors/zurb" title="Zurb">Zurb</a></li>
			<li><a href="http://www.flaticon.com/authors/simpleicon" title="SimpleIcon">SimpleIcon</a></li>
			<li><a href="http://www.flaticon.com/authors/egor-rumyantsev" title="Egor Rumyantsev">Egor Rumyantsev</a></li>
			<li><a href="http://www.flaticon.com/authors/polyarix" title="Polyarix">Polyarix</a></li>
			<li><a href="http://www.flaticon.com/authors/petr-had" title="Petr Had">Petr Had</a></li>
			<li>from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a></li>
		</ul>
		
		<hr>
		
		<p>Once again, thank you so much for purchasing this theme. As I said at the beginning, I'd be glad to help you if you have any questions relating to this theme. No guarantees, but I'll do my best to assist. If you have a more general question relating to the themes on ThemeForest, you might consider visiting the forums and asking your question in the "Item Discussion" section.</p> 
		
		<p class="append-bottom alt large"><strong><a href="http://themeforest.net/user/lesh1j">Vadzim Liashkevich</a></strong></p>
		<p><a href="#toc">Go To Table of Contents</a></p>
		
		<hr class="space">
	</div><!-- end div .container -->
</body>
</html>