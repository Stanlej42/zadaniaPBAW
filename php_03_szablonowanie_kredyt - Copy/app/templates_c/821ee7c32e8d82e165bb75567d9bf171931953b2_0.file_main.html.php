<?php
/* Smarty version 5.4.2, created on 2025-03-23 18:27:42
  from 'file:C:\xampp\htdocs\SW\php_03_szablonowanie_kredyt\app\../templates/main.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67e0448ebb29b4_51806759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '821ee7c32e8d82e165bb75567d9bf171931953b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SW\\php_03_szablonowanie_kredyt\\app\\../templates/main.html',
      1 => 1742750860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e0448ebb29b4_51806759 (\Smarty\Template $_smarty_tpl) {
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
			
			<header id="header">
				<span class="logo"><?php echo (($tmp = $_smarty_tpl->getValue('page_header') ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</span>
			</header>
			
			<section>
				<div class="inner">
					<header class="major">
						<h1><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
					</header>
					<p><?php echo (($tmp = $_smarty_tpl->getValue('page_description') ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
</p>
					<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_185322346567e0448ebae905_20621662', 'content');
?>

				</div>
			</section>
			
			<footer id="footer">
				<div class="inner">
					<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_170290773267e0448ebb2110_43862705', 'footer');
?>

				</div>
			</footer>
		</div>
	
		<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'content'} */
class Block_185322346567e0448ebae905_20621662 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\SW\\php_03_szablonowanie_kredyt\\templates';
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_170290773267e0448ebb2110_43862705 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\SW\\php_03_szablonowanie_kredyt\\templates';
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
