<? include "config.php"; ?>
<!DOCTYPE html>
<html lang="cs">
<head>
<title>LmntStudio</title>
<meta charset="utf-8">
<meta name="author" content="LmntStudio Team" />
<meta name="keywords" content="kcms, k:cms, terrcms, lmntcms, cms, krotovič, lukáš krotovič, lmntstudio, lmnt, hološka, aleš hološka, petr križek, križek, dominik březina, březina, kristýna kalecká, kalecká, we cooperate, webdesign, graphic, web, mobile" />
<meta name="robots" content="<?php echo (($_GET["page"]!="about" OR $_GET["page"]!="contact")?"index, follow":"noindex, nofollow") ?>" />
<meta name="description" content="Oficiální web LmntStudio" />
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta itemprop="name" content="LmntStudio">
<meta itemprop="description" content="LmntStudio Official Page">
<?if($_GET["page"]=="lmntcms"):?>
<script src="js.js"></script>
<script type="text/javascript">
	int count=1;
	previous(){
		document.getElementById("lmntcms_intro_img_change").src="/images/lmntcms"+count+".png";
		count--;
		if(count>=3) count=1;
		if(count<=1) count=3;
	}
	next(){
		document.getElementById("lmntcms_intro_img_change").src="/images/lmntcms"+count+".png";
		count++;
		if(count>=3) count=1;
		if(count<=1) count=3;
	}
</script>
<?endif;?>
</head>
<body>

<header>
	<h1><a href="/">LmntStudio</a></h1>
	<span>Feel Free in the World of Multimedia</span>
</header><!-- end #header -->
<nav>
    <ul>
        <li<? if($_GET["page"]==""){echo " class=\"active\"";}?>><a href="./">Home</a></li>
        <li><a href="#">Products</a>
        	<ul>
        		<li><a href="./lmntcms">LmntCMS</a></li>
        		<li><a href="./wecooperate">We Cooperate</a></li>
        	</ul>
        </li>
        <li<? if($_GET["page"]=="services"){echo " class=\"active\"";}?>><a href="./services">Services</a></li>
        <li><a href="#">References</a>
        	<ul>
        		<li><a href="./web">Web</a></li>
        		<li><a href="./mobile">Mobile</a></li>
        		<li><a href="./graphic">Graphic</a></li>
        	</ul>
        </li>
        <li<? if($_GET["page"]=="about"){echo " class=\"active\"";}?>><a href="./about">LmntStudio Team</a></li>
        <li<? if($_GET["page"]=="contact"){echo " class=\"active\"";}?>><a href="./contact">Contact us</a></li>
    </ul>
</nav><!-- end #navigation -->

<div id="content">
<aside>

</aside>
<div id="center">
	<? if($_GET["page"]==""): ?>
	<div id="_intro">
		<p>
			<span><a href="./about">LmntStudio</a></span> je tým pěti mladých developerů a grafiků. Nesnažíme se zaměřovat pouze na tvorbu webových aplikací, ale uplatňujeme
			naše znalosti v grafické tvorbě, webových technologiích a mobilním průmyslu. Náš první projekt, který připravujeme, je We Cooperate (Project Manager).
		</p>
	</div>
	<div id="_cms">
		<p>
			<span><a href="./lmntcms">LmntCMS</a></span> je jeden z nejrychlejších a nejjednodušších redakčních systémů vůbec. Tento systém je vyvíjen už od roku 2011 pod názvem TerrCMS
			a v polovině roku 2013 vývoj přejímá LmntStudio. Mezi jeho přednosti patří také jednoduchá a přehledná administrace.
			Díky tomu, že se snažíme vytvořit pro tento systém podporu pluginů, tak jeho vývoj rozhodně neskončí.
		</p>
	</div>
	<div id="_we_cooperate">
		<p>
			<span><a href="./wecooperate">We Cooperate</a></span> je webová aplikace, ve které mohou jednotlivé týmy spravovat svoje projekty. Dá se zde nalést časová osa, která příslušníkům týmu prozradí
			,co se v daný den na projektu změnilo. Dále jsme propojili tuto aplikaci s verzovacím systémem Git, což má usnadnit práci se soubory.
		</p>
	</div>
	<div id="_services">
		<p>
			LmntStudio nabízí i řadu služeb pro malé podnikatele. Můžeme Vám připravit grafický návrh webové prezentace, realizovat ji a nadále spravovat.
			Nebo Vám pomůžeme rozšířit působnost pomocí internetové reklamy. <a href="./services">Další informace</a>
		</p>
	</div>
	<? endif;
	//----------------- LMNTCMS ---------------------
	if($_GET["page"]=="lmntcms"): ?>
	
	<div id="lmntcms_download">
		<div id="lmntcms_download_button">
			<a href="javascript:download('<?php echo str_replace(".","",LATEST_V); ?>');">Stáhnout poslední verzi</a>
		</div>
	</div>
	<div id="lmntcms_about">
		<p>
			Jednoduchá a přehledná administrace
		</p>
		<div id="lmntcms_intro_img">
			<div onclick="previous()">&lt;</div>
			<img src="/images/lmntcms_intro.png" id="lmntcms_intro_img_change" alt="LmntCMS Screenshot" width="" height="" />
			<div onclick="next()">&gt;</div>
		</div>
	</div>
	<div id="lmntcms_plans">
		<span>Plány do budoucna</span>
		<p>
			V příští verzi by měla administrace dostat nejen nový kabátek, ale i upravené funkce. Chtěli bychom předělat články pouze na novinky a přidat funkci <q>Pages</q>.
			Zároveň bychom také chtěli implementovat pluginy, abychom mohli následně vytvářet a upravovat další verze systému jenom pomocí pluginů.
		</p>
	</div>
	<div id="lmntcms_demo">
		<p>
			Můžete si vyzkoušet naše Demo.
		</p>
		<div id="lmntcms_demo_img">
			<a href="http://demo.lmntstudio.cz/" target="_blank">Demo verze LmntCMS</a>
		</div>
	</div>
	<? endif; //----------------- WE-COOPERATE ---------
	if($_GET["page"]=="wecooperate"): ?>
	<div id="wecoop_soon">
		<p>
			Připravujeme
		</p>
	</div>
	<div id="wecoop_intro">
		<span>Spravujte Váš projekt jednoduše.</span>
		<img src="/images/we_cooperate.png" alt="We Cooperate Screenshot" width="" height=""/>
	</div>
	<div id="wecoop_next">
		<p>
			Již brzy si budete moci vyzkoušet Trial verzi tohoto správce.
		</p>
	</div>
	<? endif; //------------------- WEB --------------
	if($_GET["page"]=="web"): ?>
	<div id="web_intro">
		<p>
			Na zakázku Vám připravíme návrh, zrealizujeme a nadále budeme spravovat Vaši webovou stránku.
		</p>
		<p>
			<strong>Upozornění:</strong> Nejsme plátci DPH. Každá služba bude provedena na základě dohody o provedení práce.
		</p>
	</div>
	<div id="web_design">
		<span>Grafický návrh</span>
		<div id="web_design_img">
			<img alt="Grafický návrh webu"/>
		</div>
	</div>
	<div id="web_real">
		<span>Sestavíme Vám web přímo na míru.</span>
		<div id="web_real_img">
			<img alt="Realizace webu"/>
		</div>
	</div>
	<div id="web_servis">
		<span>Posledním krokem je občasná údržba webu.</span>
		<div id="web_servis_img">
			<img alt="Správa webu"/>
		</div>
	</div>
	<? endif; //-------------- GRAPHIC -------------
	if($_GET["page"]=="graphic"): ?>
	<div id="graphic_intro">
		<span>Můžeme Vám vytvořit internetovou reklamu na míru.</span>
		<p>
			<strong>Upozornění:</strong> Nejsme plátci DPH. Každá služba bude provedena na základě dohody o provedení práce.
		</p>
	</div>
	<div id="graphic_ref">
		<p>
			Ukázka naší grafické práce.
		</p>
		<div id="graphic_ref_img">
			<img src="/images/graphic.png" alt="Ukázka grafické práce" width="" height=""/>
		</div>
	</div>
  <? endif;
  
  if($_GET["page"]=="contact"): ?>
    <h1> Contact Us </h1>
    
    <ul>
        <li>Lukáš Krotovič - krotovicl@hotmail.com</li>
        <li>Petr Križek - krizek@lmntstudio.cz</li>
    </ul>
    
    <div id="contact_form">
    <form>
    <label>Jméno a příjmení: </label><input type="text">
    <label>Email od: </label><input type="text">
    <label>Email pro: </label><span>krotovicl@hotmail.com</span>
    <label>Hlavička: </label><input type="text">
    <label>Zpráva: </label><input type="textarea" cols="50" rows="10"></textarea>
    <input type="submit">
    </form>
    </div>
  
  <? endif;?>
</div>
<div class="float-ending"><!-- --></div>

</div><!-- end #content -->
<footer>
	<div id="footer_info">
		<p>
			&copy; Copyright 2013 LmntStudio<br>
			Obsah patří členům týmu LmntStudio.<br>
			Nejsme plátci DPH, veškeré služby jsou uskutečněny dohodou.
		</p>
	</div>
</footer>
</body>
</html>
