<?php /*%%SmartyHeaderCode:2116054b59dced62811-41939568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee9c06bd68d5ef1bdccc86bcfac6b55ee83af7ac' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\game\\page.buildings.default.tpl',
      1 => 1421192736,
      2 => 'file',
    ),
    '0d87be48ddd93fcf796073d4cdc89664d7443f31' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\game\\layout.full.tpl',
      1 => 1368959720,
      2 => 'file',
    ),
    'bd0460dc332afc3e5badef19cbdec6f14b205e68' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\game\\main.header.tpl',
      1 => 1421190463,
      2 => 'file',
    ),
    '3fac69c8cf4e2f015f41071bd7989c414d561601' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\game\\main.navigation.tpl',
      1 => 1421193254,
      2 => 'file',
    ),
    'cde4185ebd3114e6746348a1b15757e50d8cfb8b' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\game\\main.topnav.tpl',
      1 => 1421191463,
      2 => 'file',
    ),
    '626ff14735e2dc86488cd73f782ebb662593e5f2' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\game\\main.footer.tpl',
      1 => 1368959720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2116054b59dced62811-41939568',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b5b068526c43_92424982',
  'variables' => 
  array (
    'hasAdminAccess' => 1,
    'LNG' => 1,
    'cronjobs' => 1,
    'cronjob' => 1,
  ),
  'has_nocache_code' => true,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b5b068526c43_92424982')) {function content_54b5b068526c43_92424982($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js"> <!--<![endif]-->
<head>
	<title>Edificios - <?php echo $_smarty_tpl->tpl_vars['uni_name']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['game_name']->value;?>
</title>
	<meta name="generator" content="2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
">
	<!-- 
		This website is powered by 2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>

		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2013 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">	<link rel="stylesheet" type="text/css" href="http://dystopiaonline.fr/v1.1.0/styles/resource/css/styles/cms.css">
	<link rel="stylesheet" type="text/css" href="http://dystopiaonline.fr/v1.1.0/styles/resource/css/styles/base.css">
	<link href="http://fonts.googleapis.com/css?family=Terminal+Dosis" rel="stylesheet" type="text/css">
	<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:100,400'>

	<link rel="stylesheet" type="text/css" href="http://dystopiaonline.fr/v1.1.0/styles/resource/css/ingame/main.css?v=2676">
	<link rel="stylesheet" type="text/css" href="http://dystopiaonline.fr/v1.1.0/styles/resource/css/base/jquery.css">
	<link rel="stylesheet" type="text/css" href="http://dystopiaonline.fr/v1.1.0/styles/resource/css/base/jquery.fancybox.css">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="http://dystopiaonline.fr/v1.1.0/styles/resource/css/base/validationEngine.jquery.css?v=2676">	
	
	<link rel="stylesheet" type="text/css" href="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/formate.css?v=2676">
	<link rel="shortcut icon" href="http://dystopiaonline.fr/v1.1.0/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="http://dystopiaonline.fr/v1.1.0/favicon.ico" type="image/x-icon">
	<script type="text/javascript">
	var ServerTimezoneOffset = <?php echo $_smarty_tpl->tpl_vars['Offset']->value;?>
;
	var serverTime 	= new Date(<?php echo $_smarty_tpl->tpl_vars['date']->value[0];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[1]-1;?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[2];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[3];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[4];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[5];?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "Pronto";
	var Skin		= "<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
";
	var Lang		= "<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
";
	var head_info	= "Informação";
	var auth		= <?php echo (($tmp = @$_smarty_tpl->tpl_vars['authlevel']->value)===null||$tmp==='' ? '0' : $tmp);?>
;
	var days 		= ["So","Mo","Di","Mi","Do","Fr","Sa"] 
	var months 		= ["Jan","Feb","Mar","Apr","Mai","Jun","Jul","Aug","Sep","Okt","Nov","Dez"] ;
	var tdformat	= "[M] [D] [d] [H]:[i]:[s]";
	var queryString	= "<?php echo strtr($_smarty_tpl->tpl_vars['queryString']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
	</script>

	<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/base/jquery.js?v=2676"></script>



	<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/vegas/jquery.vegas.js"></script>
	
	<link rel="stylesheet" type="text/css" href="http://dystopiaonline.fr/v1.1.0/scripts/vegas/jquery.vegas.css" />
	
	
	
	<script type="text/javascript">
	    $(function() {
			$.vegas({
			src:'http://dystopiaonline.fr/v1.1.0/styles/theme/gow/img/bkd_page.jpg',
			fade: 0
			});
			$.vegas('overlay', {
			src:'http://dystopiaonline.fr/v1.1.0/scripts/vegas/overlays/04.png',
			opacity:0.3
			});
		});
	</script>
	
	
	
	<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/base/jquery.ui.js?v=2676"></script>
	<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/base/jquery.cookie.js?v=2676"></script>
	<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/base/jquery.fancybox.js?v=2676"></script>
	<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/base/jquery.validationEngine.js?v=2676"></script>
	<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/base/tooltip.js?v=2676"></script>
	<!--<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/base/jquery.knob.min.js"></script>
<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/vegas/square.js"></script>	-->
	
		<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/game/jquery.countdown.js?v=2676"></script>
		
	<script type="text/javascript">
	$(function() {
		
	});
	</script>
	
<script src="scripts/style/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript">
    var s_account = "mshaloglobalplat";
</script>

<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/game/base.js?v=2676"></script>
<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/style/jquery-ui.min.js" ></script>
<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/style/Core8b08.js?v=12314" ></script>
<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/style/cms.js" ></script>
<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/style/main.js" ></script>
	<?php  $_smarty_tpl->tpl_vars['scriptname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['scriptname']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['scripts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['scriptname']->key => $_smarty_tpl->tpl_vars['scriptname']->value){
$_smarty_tpl->tpl_vars['scriptname']->_loop = true;
?>
	<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/game/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<?php } ?>
	
	<script type="text/javascript">
	$(function() {
		<?php echo $_smarty_tpl->tpl_vars['execscript']->value;?>

	});
	</script>
</head>
<body id="buildings" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="tooltip" class="tip"></div><?php if ($_smarty_tpl->tpl_vars['hasAdminAccess']->value){?>
<div class="globalWarning">
<?php echo $_smarty_tpl->tpl_vars['LNG']->value['admin_access_1'];?>
 <a id="drop-admin"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['admin_access_link'];?>
</a><?php echo $_smarty_tpl->tpl_vars['LNG']->value['admin_access_2'];?>

</div>
<?php }?>
<div id="leftmenu">


		
			
			
<div class="categories">
     <ul class="menuleft">
			<li onClick="window.open('game.php?page=overview', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item1"></div>Vue générale</span></li>
					<li onClick="window.open('game.php?page=buildings', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item8"></div>Infrastructures</span></li>
							<li onClick="window.open('game.php?page=expe', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item8"></div>Expéditions</span></li>
							<li onClick="window.open('game.php?page=research', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item9"></div>Centre de Recherche</span></li>
							<li onClick="window.open('game.php?page=shipyard&amp;mode=fleet&amp;shipyardpage=2', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item10"></div>Hangar</span></li>
						
					<li onClick="window.open('game.php?page=shipyard&amp;mode=defense', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item11"></div>Canons extérieurs</span></li>
		
		
		
		
		
		<li onClick="window.open('game.php?page=bank', '_self', 'scrollbars=no');" style="position: relative; margin-top: 10px;"><span><div class="item item13"></div>Compartiment</span></li>
						<li onClick="window.open('game.php?page=Lottery', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item6"></div>Taverne</span></li>		
		
		
		
		
		
		
		
		
		
		
		
		

							  <li onClick="window.open('game.php?page=galaxy', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item4"></div>Galaxie</span>
					  </li>							
					<li onClick="window.open('game.php?page=mission', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item2"></div>Missions</span></li>
	

					<li onClick="window.open('game.php?page=fleetTable', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item3"></div>Flottes</span></li>
				

					<li onClick="window.open('game.php?page=techtree', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item16"></div>Technologies</span></li>
							<li onClick="window.open('game.php?page=records', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item18"></div>Médailles</span></li>
					<li style="background: none; position: relative; margin-top: 10px;"><span><div class="item item14"></div>Menu social</span>
			</li>
	</ul>
</div>
</div><div id="header" style="margin-left: 0px; ">
	
	
	
	
	
	
	
	
	
	
	
	
	    <div class="article clearfix" id="home_videos_article">
        


        
        <div class="container background" style="height: 91px;
width: 100%;
position: fixed;
z-index: 10;
top: -3px;
border: 0px solid rgba(22, 24, 28, 0.5);
font-family: 'Roboto',sans-serif;
background: none repeat scroll 0% 0% rgba(8, 23, 36, 0.95);
box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.41);">
            <div class="content_area">
            <div class="hatch_strip"><br>
				
				
				
				<center>
				

				
		<table id="headerTable" style="margin-left: 35px;">
			<tbody>
			


			
				<tr>
				
					<td class="ficheperso" style="border-radius: 0px;">
						<a data-tooltip-content="Modifier l'avatar" class="tooltip" href="game.php?page=settings" ;="">
							<img src="styles/resource/uploads/anonymous.png" alt="Qwa" class="avatartop">
						</a>
						<br>
						
						<a data-tooltip-content="Points de compétences" class="tooltip" ;="">
							<div style="border-radius: 0px 0px 30px;
								z-index: 100;
								background: none repeat scroll 0px 0px rgba(0, 0, 0, 0.8);
								position: absolute;
								width: 120px;
								margin-top: -35px;
								margin-left: 2px;
								font-size: 19px;
								text-shadow: none;">
								<span style="font-family: 'Anton',sans-serif !important; text-transform: uppercase !important;">
									0<span class="flaticon-heart27" style="color: #FFF; font-size: 20px;"></span>
								</span>
							</div>
						</a>
							
							
					</td>
				<!--	
					<td class="competence">
					<div style="margin-left:25px; margin-right:40px; color: rgba(255, 255, 255, 1);width:82%;">
						<a data-tooltip-content="Points de compétences" class="tooltip"> 
							<div style="margin-top:3px;">
							
							<table style="margin: 0px; width: 100%;border-spacing:0px;">
								<tr>
									<td class="transparent" style="text-align: center; box-shadow: none;">
										0
									</td>
									<td class="transparent" style="width: 70px; box-shadow: none;">
										<img src="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/images/922.png" height="33px" alt="" style="margin-top: -3px;">
									</td>
								</tr>
							</table>
							
							
							</div> 
						</a>
					</div>
					</td>
					-->

					


				</tr>
			</tbody>
		</table>				

				
					<div class="menutop" style="height: 45px;">
						<table style="width: auto;">
							<tbody><tr>
								<td class="transparent" style="width: 45px; position: relative;">
									<a href="game.php?page=ticket" data-tooltip-content="Envoyer un message à l'administration." class="tooltip">
										<img src="http://dystopiaonline.fr/v1.1.0/styles/resource/images/icons/support.png" style="position: absolute; top: -1px; left: 0px; width: 39px;">
									</a>
								</td>								
								<td class="transparent" style="width: 45px; position: relative;">
									<a href="game.php?page=officier" data-tooltip-content="Compétences" class="tooltip">
										<span class="fa fa-heart" style="color: #FFF;  font-size: 28px; position: absolute; top: 5px; left: 0px;"></span>
									</a>
								</td>
								<td class="transparent" style="width: 45px; position: relative;">
									<div style="position: relative;">
										<a href="game.php?page=chat" data-tooltip-content="Chat" class="tooltip">
											<span class="fa fa-inbox" style="color: #FFF; font-size: 28px; position: absolute;top: 5px;left: -10px;"></span>
									</div>
								</td>
								<td class="transparent" style="width: 45px; position: relative;">
									<a href="game.php?page=statistics" data-tooltip-content="Classement" class="tooltip">
										<span class="fa fa-sort-amount-asc" style="color: #FFF;  font-size: 28px; position: absolute;top: 5px;left: 0px;"></span>
									</a>
								</td>
								<td class="transparent" style="width: 45px; position: relative;">
									<a href="game.php?page=settings" data-tooltip-content="Configuration" class="tooltip">
										<span  class="fa fa-cogs" style="color: #FFF; font-size: 28px; position: absolute;top: 5px; left: 0px;"></span>
									</a>
								</td>
							</tr>
						</tbody></table>
						<img src="http://dystopiaonline.fr/v1.1.0/styles/resource/images/angletop.png" style="opacity: 0.34; position: absolute; top: 0px; left: 350px; width: 35px; height: 45px;">
					</div>

					
					


											<a href="game.php?page=resources">
							<div class="ressourcestopgestion">
								Gérer l'énergie
							</div>
						</a>
						
					

					
				
					
					
					<table class="ressourcetop">
						<tbody><tr>
																	<td class="transparent metalheader" style="width: 11%;">
										<table class="ressourcemetalheader" style="border-spacing: 0px;">
											<tbody><tr class="ressourcetable">
												<td id="imageressource" style="border-radius: 0px;">
																										
														<img class="ressourcetopimg" src="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/images/metal.png" alt="">
													</a>
																									</td>
																														<td class="res_current" style="border-radius: 0px; background: none repeat scroll 0px 0px rgba(0, 0, 0, 0.5); box-shadow: none; text-shadow: 0px 0px 2px #000; font-size: 12px;" id="current_metal" data-real="<?php echo pretty_number($_smarty_tpl->tpl_vars['metal']->value);?>
" data-tooltip-content="<?php echo pretty_number($_smarty_tpl->tpl_vars['metal']->value);?>
"><?php echo pretty_number($_smarty_tpl->tpl_vars['metal']->value);?>
</td>
																
																	
																																			<td class="res_max" id="max_metal" data-real="<?php echo $_smarty_tpl->tpl_vars['metal']->value;?>
">/<?php echo $_smarty_tpl->tpl_vars['metal_max']->value;?>
</td>
																																	
																							
											</tr>
										</tbody></table>
									</td>
																	<td class="transparent crystalheader" style="width: 11%;">
										<table class="ressourcecrystalheader" style="border-spacing: 0px;">
											<tbody><tr class="ressourcetable">
												<td id="imageressource" style="border-radius: 0px;">
									<img class="ressourcetopimg" src="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/images/crystal.png" alt="">
																									</td>
																														<td class="res_current" style="border-radius: 0px; background: none repeat scroll 0px 0px rgba(0, 0, 0, 0.5); box-shadow: none; text-shadow: 0px 0px 2px #000; font-size: 12px;" id="current_crystal" data-real="<?php echo pretty_number($_smarty_tpl->tpl_vars['crystal']->value);?>
" data-tooltip-content="<?php echo pretty_number($_smarty_tpl->tpl_vars['crystal']->value);?>
"><?php echo pretty_number($_smarty_tpl->tpl_vars['crystal']->value);?>
</td>
																
																	
																																			<td class="res_max" id="max_crystal" data-real="<?php echo pretty_number($_smarty_tpl->tpl_vars['crystal']->value);?>
">/<?php echo $_smarty_tpl->tpl_vars['crystal_max']->value;?>
</td>
																																	
																							
											</tr>
										</tbody></table>
									</td>
																	<td class="transparent deuteriumheader" style="width: 11%;">
										<table class="ressourcedeuteriumheader" style="border-spacing: 0px;">
											<tbody><tr class="ressourcetable">
												<td id="imageressource" style="border-radius: 0px;">
														<img class="ressourcetopimg" src="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/images/deuterium.png" alt="">
													</a>
																									</td>
																														<td class="res_current" style="border-radius: 0px; background: none repeat scroll 0px 0px rgba(0, 0, 0, 0.5); box-shadow: none; text-shadow: 0px 0px 2px #000; font-size: 12px;" id="current_deuterium" data-real="<?php echo pretty_number($_smarty_tpl->tpl_vars['deuterium']->value);?>
" data-tooltip-content="<?php echo pretty_number($_smarty_tpl->tpl_vars['deuterium']->value);?>
"><?php echo pretty_number($_smarty_tpl->tpl_vars['deuterium']->value);?>
</td>
																
																	
																																			<td class="res_max" id="max_deuterium" data-real="<?php echo pretty_number($_smarty_tpl->tpl_vars['deuterium']->value);?>
">/<?php echo $_smarty_tpl->tpl_vars['deuterium_max']->value;?>
</td>
																																	
																							
											</tr>
										</tbody></table>
									</td>
																	<td class="transparent naniteheader" style="width: 11%;">
										<table class="ressourcenaniteheader" style="border-spacing: 0px;">
											<tbody><tr class="ressourcetable">
												<td id="imageressource" style="border-radius: 0px;">
																								
														<img class="ressourcetopimg" src="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/images/nanite.png" alt="">
													</a>
																									</td>
																														<td class="res_current" style="border-radius: 0px; background: none repeat scroll 0px 0px rgba(0, 0, 0, 0.5); box-shadow: none; text-shadow: 0px 0px 2px #000; font-size: 12px;" id="current_nanite" data-real="0" data-tooltip-content="0"><?php echo $_smarty_tpl->tpl_vars['darkmatter']->value;?>
</td>
																
																	
																																			<td class="res_max" id="max_nanite" data-real="0"></td>
																																	
																							
											</tr>
										</tbody></table>
									</td>
																	<td class="transparent civilheader" style="width: 0.01%;">
										<table class="ressourcecivilheader" style="border-spacing: 0px;">
											<tbody>
										</tbody></table>
									</td>
																	<td class="transparent energyheader" style="width: 11%;">
										<table class="ressourceenergyheader" style="border-spacing: 0px;">
											<tbody><tr class="ressourcetable">
												<td id="imageressource" style="border-radius: 0px;">
																									
														<img class="ressourcetopimg" src="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/images/energy.png" alt="">
													</a>
																									</td>
																																													<td class="res_current" style="border-radius: 0px; background: none repeat scroll 0px 0px rgba(0, 0, 0, 0.5); box-shadow: none;">
																	<span style=""><?php echo pretty_number($_smarty_tpl->tpl_vars['energy_used']->value);?>
/<?php echo pretty_number($_smarty_tpl->tpl_vars['energy']->value);?>
</span>
																</td>
																							
											</tr>
										</tbody></table>
									</td>
																	<td class="transparent darkmatterheader" style="width: 300px;">
										<table class="ressourcedarkmatterheader" style="border-spacing: 0px;">
											<tbody><tr class="ressourcetable">
												<td id="imageressource" style="border-radius: 0px;">
																										<a class="tooltip" style="height: 35px; display: block;" data-tooltip-content="<h3>Electrum</h3>">
																													<img src="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/images/darkmatter.gif" height="25px" ;="" alt="">
																											</a>
																									</td>
																														<td class="res_current" style="border-radius: 0px; background: none repeat scroll 0px 0px rgba(0, 0, 0, 0.5); box-shadow: none; text-shadow: 0px 0px 2px #000; font-size: 12px;" id="current_darkmatter" data-real="228" data-tooltip-content="228">
																	228																</td>
																
																	
																																			<td id="max_darkmatter">&nbsp;</td>
																																	
																							
											</tr>
										</tbody></table>
									</td>
																	<td class="transparent missionheader" style="width: 11%;">
										<table class="ressourcemissionheader" style="border-spacing: 0px;">
											<tbody><tr class="ressourcetable">
												<td id="imageressource" style="border-radius: 0px;">
																										<a class="tooltip" style="height: 35px; display: block;" data-tooltip-content="<h3>Point de compétence</h3>">
																													<img class="ressourcetopimg" src="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/images/mission.gif" alt="">
																											</a>
																									</td>
																														<td class="res_current" style="border-radius: 0px; background: none repeat scroll 0px 0px rgba(0, 0, 0, 0.5); box-shadow: none; text-shadow: 0px 0px 2px #000; font-size: 12px;" id="current_mission" data-real="0" data-tooltip-content="0">
																	0																</td>
																
																	
																																			<td id="max_mission">&nbsp;</td>
																																	
																							
											</tr>
										</tbody></table>
									</td>
																	<td class="transparent jetonheader" style="width: 300px;">
										<table class="ressourcejetonheader" style="border-spacing: 0px;">
											<tbody><tr class="ressourcetable">
												<td id="imageressource" style="border-radius: 0px;">
																										<a class="tooltip" style="height: 35px; display: block;" data-tooltip-content="<h3>Jetons</h3>">
																													<img src="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/images/923.png" height="25px" ;="" alt="">
																											</a>
																									</td>
																														<td class="res_current" style="border-radius: 0px; background: none repeat scroll 0px 0px rgba(0, 0, 0, 0.5); box-shadow: none; text-shadow: 0px 0px 2px #000; font-size: 12px;" id="current_jeton" data-real="304" data-tooltip-content="304">
																	304<span style="font-family: Websymbol; color: white; text-align: center;">ã</span>																</td>
																
																	
																																			<td id="max_jeton">&nbsp;</td>
																																	
																							
											</tr>
										</tbody></table>
									</td>
															</tr>
						</tbody></table>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
				
				
				
				
					
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				</center>
				</div>
            </div>
        </div>

    </div>
	
	
	
	
	<a class="tooltip" style="position: fixed; top: 15px; right: 15px; z-index: 999;" href="game.php?page=logout" data-tooltip-content="<span style='color: #F60; font-weight: 400; font-size: 15px; padding: 20px;'>Se déconnecter</span>">
		<img src="http://dystopiaonline.fr/v1.1.0/styles/resource/images/icons/logout.png" style="width: 20px; opacity: 0.5;">
	</a>
		<script type="text/javascript">

	</script>
	
	
			</div>
			
			<div id="wrapper">
    <div id="mainBody">
		<div id="article" class="index"><div id="content">

			<div class="article clearfix" id="home_carousel_article">
				<div class="section parent_section clearfix col9 carousel_section"></div>
				<div class="article clearfix">
					<div class="section clearfix col9" id="home_news_section">
						<div class="container">
							<div class="creat_ally">
							</div>
							<h2 class="clearfix">
								<div class="icon"></div>
								<div>Infrastructures</div>
							</h2>
							<div class="news_articles">
																<br>
								<center>
									
								</center>
								<br>
																
																
																								
																								
						<?php if (!empty($_smarty_tpl->tpl_vars['Queue']->value)){?>
<div id="buildlist" class="buildlist">
	<table style="width:760px">
		<?php  $_smarty_tpl->tpl_vars['List'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['List']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Queue']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['List']->iteration=0;
 $_smarty_tpl->tpl_vars['List']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['List']->key => $_smarty_tpl->tpl_vars['List']->value){
$_smarty_tpl->tpl_vars['List']->_loop = true;
 $_smarty_tpl->tpl_vars['List']->iteration++;
 $_smarty_tpl->tpl_vars['List']->index++;
 $_smarty_tpl->tpl_vars['List']->first = $_smarty_tpl->tpl_vars['List']->index === 0;
?>
		<?php $_smarty_tpl->tpl_vars['ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['List']->value['element'], true, 0);?>
		<tr>
			<td style="width:70%;vertical-align:top;" class="left">
				<?php echo $_smarty_tpl->tpl_vars['List']->iteration;?>
.: 
				<?php if (!($_smarty_tpl->tpl_vars['isBusy']->value['research']&&($_smarty_tpl->tpl_vars['ID']->value==6||$_smarty_tpl->tpl_vars['ID']->value==31))&&!($_smarty_tpl->tpl_vars['isBusy']->value['shipyard']&&($_smarty_tpl->tpl_vars['ID']->value==15||$_smarty_tpl->tpl_vars['ID']->value==21))&&$_smarty_tpl->tpl_vars['RoomIsOk']->value&&$_smarty_tpl->tpl_vars['CanBuildElement']->value&&$_smarty_tpl->tpl_vars['BuildInfoList']->value[$_smarty_tpl->tpl_vars['ID']->value]['buyable']){?>
				<form class="build_form" action="game.php?page=buildings" method="post">
					<input type="hidden" name="cmd" value="insert">
					<input type="hidden" name="building" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
">
					<button type="submit" class="build_submit onlist"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['ID']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['List']->value['level'];?>
<?php if ($_smarty_tpl->tpl_vars['List']->value['destroy']){?> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_dismantle'];?>
<?php }?></button>
				</form>
				<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['ID']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['List']->value['level'];?>
 <?php if ($_smarty_tpl->tpl_vars['List']->value['destroy']){?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_dismantle'];?>
<?php }?><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['List']->first){?>
				<br><br><div id="progressbar" data-time="<?php echo $_smarty_tpl->tpl_vars['List']->value['resttime'];?>
"></div>
			</td>
			<td>
				<div id="time" data-time="<?php echo $_smarty_tpl->tpl_vars['List']->value['time'];?>
"><br></div>
				<form action="game.php?page=buildings" method="post" class="build_form">
					<input type="hidden" name="cmd" value="cancel">
					<button type="submit" class="build_submit onlist"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_cancel'];?>
</button>
				</form>
				<?php }else{ ?>
			</td>
			<td>
				<form action="game.php?page=buildings" method="post" class="build_form">
					<input type="hidden" name="cmd" value="remove">
					<input type="hidden" name="listid" value="<?php echo $_smarty_tpl->tpl_vars['List']->iteration;?>
">
					<button type="submit" class="build_submit onlist"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_cancel'];?>
</button>
				</form>
				<?php }?>
				<br><span style="color:lime" data-time="<?php echo $_smarty_tpl->tpl_vars['List']->value['endtime'];?>
" class="timer"><?php echo $_smarty_tpl->tpl_vars['List']->value['display'];?>
</span>
			</td>
		</tr>
	<?php } ?>
	</table>
</div>
<?php }?>																		
								
								
								
								<?php  $_smarty_tpl->tpl_vars['Element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Element']->_loop = false;
 $_smarty_tpl->tpl_vars['ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['BuildInfoList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Element']->key => $_smarty_tpl->tpl_vars['Element']->value){
$_smarty_tpl->tpl_vars['Element']->_loop = true;
 $_smarty_tpl->tpl_vars['ID']->value = $_smarty_tpl->tpl_vars['Element']->key;
?>
								<div class="news_article">
									<div class="article_content">
										<div class="title_block dark_hatch_container" style="height: 35px;">
										
										
										
										
											<table style="width:100%; left: 0px; margin-top: -7px;">
												<tr>
													<td class="transparent" style="box-shadow: 0px 0px 0px 0px">
														<div class="titlebulding">
															<a href="#" onclick="return Dialog.info(<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
)"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['ID']->value];?>
</a><?php if ($_smarty_tpl->tpl_vars['Element']->value['level']>0){?> (<?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_lvl'];?>
 <?php echo $_smarty_tpl->tpl_vars['Element']->value['level'];?>
<?php if ($_smarty_tpl->tpl_vars['Element']->value['maxLevel']!=255){?>/<?php echo $_smarty_tpl->tpl_vars['Element']->value['maxLevel'];?>
<?php }?>)<?php }?>
																<i>																</i>
														</div>
													</td>
													
													<td class="transparent" style="box-shadow: 0px 0px 0px 0px">
														<div class="buttonbulding">
														
						<?php if ($_smarty_tpl->tpl_vars['Element']->value['maxLevel']==$_smarty_tpl->tpl_vars['Element']->value['levelToBuild']){?>
						<span class="btn btn-success btn-flat" style="color:red"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_maxlevel'];?>
</span>
					<?php }elseif(($_smarty_tpl->tpl_vars['isBusy']->value['research']&&($_smarty_tpl->tpl_vars['ID']->value==6||$_smarty_tpl->tpl_vars['ID']->value==31))||($_smarty_tpl->tpl_vars['isBusy']->value['shipyard']&&($_smarty_tpl->tpl_vars['ID']->value==15||$_smarty_tpl->tpl_vars['ID']->value==21))){?>
						<span class="btn btn-success btn-flat" style="color:red"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_working'];?>
</span>
					<?php }else{ ?>
						<?php if ($_smarty_tpl->tpl_vars['RoomIsOk']->value){?>
							<?php if ($_smarty_tpl->tpl_vars['CanBuildElement']->value&&$_smarty_tpl->tpl_vars['Element']->value['buyable']){?>
							<form action="game.php?page=buildings" method="post" class="build_form">
								<input type="hidden" name="cmd" value="insert">
								<input type="hidden" name="building" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
">
								<button class="btn btn-success btn-flat" type="submit" class="build_submit"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fgf_time'];?>
: <?php echo pretty_time($_smarty_tpl->tpl_vars['Element']->value['elementTime']);?>
</button>
							</form>
							<?php }else{ ?>
							<span class="btn btn-success btn-flat" style="color:red"><?php if ($_smarty_tpl->tpl_vars['Element']->value['level']==0){?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_build'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_build_next_level'];?>
<?php echo $_smarty_tpl->tpl_vars['Element']->value['levelToBuild']+1;?>
<?php }?></span>
							<?php }?>
						<?php }else{ ?>
						<span class="btn btn-success btn-flat" style="color:red"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_no_more_fields'];?>
</span>
						<?php }?>
					<?php }?>
																																																														</div>				
													</td>
												</tr>
											</table>
										</div>
										
										<div class="text_block">
											<div class="secondary_content">
												<table style="width:100%; border:0px;">
													<tr style="border-spacing:1px;">
														<td class="transparent" style="border:none; width: 249px;">
															<a href="#" onclick="return Dialog.info(4)" style="display: block; height: 144px;">
																<img src="styles/theme/gow/gebaeude/<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
.gif" alt="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['ID']->value];?>
" alt="Panneaux Solaires" style="border: 2px solid #000; border-radius: 2px; height: 140px;">
															</a>
														</td>
																			<td class="transparent" style="border-radius: 0px; width: 300px;">
																					<table style="border-collapse: separate; text-align:center; width: 100%;">
																						<tr>
																							<td class="transparent" style="border-radius: 0px;">
																								Ressource
																							</td>
																							<td class="transparent" style="border-radius: 0px;">
																								Prix
																							</td>
																							<td class="transparent" style="border-radius: 0px;">
																								Il vous manque
																							</td>
																						</tr>
																							
																							
																							
																							<?php  $_smarty_tpl->tpl_vars['RessAmount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RessAmount']->_loop = false;
 $_smarty_tpl->tpl_vars['RessID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Element']->value['costRessources']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RessAmount']->key => $_smarty_tpl->tpl_vars['RessAmount']->value){
$_smarty_tpl->tpl_vars['RessAmount']->_loop = true;
 $_smarty_tpl->tpl_vars['RessID']->value = $_smarty_tpl->tpl_vars['RessAmount']->key;
?>
																						<tr>
																						
																							<td class="transparent" style="border-radius: 0px; width: 50px;">
																								<a class="tooltip" data-tooltip-content="<h3>Alliage</h3>">
																									<img src="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/images/<?php echo $_smarty_tpl->tpl_vars['RessID']->value;?>
.png" alt="" style="height:38px; box-shadow: 0px 0px 5px #000; border-radius: 2px; border: 1px solid rgba(0, 0, 0, 0.7); margin-bottom: -3px;">
																								</a>
																							</td>
																							<td class="transparent" style="border-radius: 0px; background: none repeat scroll 0% 0% rgba(0, 0, 0, 0.8); width: 125px;">
																								<span style="color:#090">
																									<b><span style="color:<?php if ($_smarty_tpl->tpl_vars['Element']->value['costOverflow'][$_smarty_tpl->tpl_vars['RessID']->value]==0){?>lime<?php }else{ ?>red<?php }?>"><?php echo pretty_number($_smarty_tpl->tpl_vars['RessAmount']->value);?>
</span></b>
																								</span>
																							</td>
																							<td class="transparent" style="border-radius: 0px; background: none repeat scroll 0% 0% rgba(0, 0, 0, 0.8); width: 125px;">
																																																	<span style="font-weight:700">0</span>
																																															</td>
																						</tr>																							
																														 <?php } ?>
																							
																							
																							
																									

																																													<tr>
																							<td class="transparent" colspan="3" style="border-radius: 0px;">
																								<i style="text-shadow: 0px 0px 2px #010101;"> <?php if (!empty($_smarty_tpl->tpl_vars['Element']->value['infoEnergy'])){?>
							<?php echo $_smarty_tpl->tpl_vars['Element']->value['infoEnergy'];?>
<br>
						<?php }?></i>
																							</td>
																						</tr>
																					</table>
																					
																					
																			</td>
																			
																			
																			
																			
																			
																			
																			
																			<td class="transparent" style="border:0px;">
																				<p class="mini-des"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['shortDescription'][$_smarty_tpl->tpl_vars['ID']->value];?>
</p>
																			</td>																			
																			
																			
																			
																			
																			
																			
																			
																			
					
																				


																</tr>
															</table>
											</div>
										</div>
									</div>
								</div>	
	<?php } ?>
																								

																
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="clearer"></div>
	</div>

</div>
<?php  $_smarty_tpl->tpl_vars['cronjob'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cronjob']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cronjobs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cronjob']->key => $_smarty_tpl->tpl_vars['cronjob']->value){
$_smarty_tpl->tpl_vars['cronjob']->_loop = true;
?><img src="cronjob.php?cronjobID=<?php echo $_smarty_tpl->tpl_vars['cronjob']->value;?>
" alt=""><?php } ?>
<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>