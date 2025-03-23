<?php
/* Smarty version 5.4.2, created on 2025-03-23 17:03:40
  from 'file:C:\xampp\htdocs\SW\php_03_szablonowanie_kredyt\app\../templates/main.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67e030dc627444_26128780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a4ce954876de827b6e9209403ded596f51ea460' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SW\\php_03_szablonowanie_kredyt\\app\\../templates/main.html',
      1 => 1742745818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e030dc627444_26128780 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\SW\\php_03_szablonowanie_kredyt\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo (($tmp = $_smarty_tpl->getValue('page_description') ?? null)===null||$tmp==='' ? 'Opis domyślny' ?? null : $tmp);?>
">
	<title><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/css/main.css">
</head>
<body>

<div id="wrapper">

	<header id="header" class="alt">
		<h3><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h3>
	</header>

	<section id="banner" class="major">
		<div class="inner">
			<header class="major">
				<h1><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
			</header>
			<div class="content">
				<p><?php echo (($tmp = $_smarty_tpl->getValue('page_description') ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
</p>
			</div>
		</div>
	</section>
	
	<div class="inner">
		<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_163958410267e030dc623207_99344164', 'content');
?>

	</div><!-- content -->
	
	<footer id="footer">
		<p class="inner">
			<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_188162584067e030dc626d58_64176500', 'footer');
?>

		</p>
	</footer>

</div>
	
</body>
</html><?php }
/* {block 'content'} */
class Block_163958410267e030dc623207_99344164 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\SW\\php_03_szablonowanie_kredyt\\templates';
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_188162584067e030dc626d58_64176500 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\SW\\php_03_szablonowanie_kredyt\\templates';
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
