<?php
/* Smarty version 5.4.2, created on 2025-03-23 17:10:04
  from 'file:C:\xampp\htdocs\SW\php_03_szablonowanie_kredyt/app/calc.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67e0325cdb8cb1_38918507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de0bb910dedd777a4ea0a76cb506eb6d06420079' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SW\\php_03_szablonowanie_kredyt/app/calc.html',
      1 => 1742746201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e0325cdb8cb1_38918507 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\SW\\php_03_szablonowanie_kredyt\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_170784456267e0325cda4392_26676054', 'footer');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_131521385967e0325cda7ab1_70117227', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.html", $_smarty_current_dir);
}
/* {block 'footer'} */
class Block_170784456267e0325cda4392_26676054 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\SW\\php_03_szablonowanie_kredyt\\app';
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_131521385967e0325cda7ab1_70117227 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\SW\\php_03_szablonowanie_kredyt\\app';
?>


<form action="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/calc.php" method="post">
	<label for="id_kwota">Kwota kredytu(zł): </label>
	<input id="id_kwota" type="text" name="kwota" value="<?php echo $_smarty_tpl->getValue('form')['kwota'];?>
" />
	<label for="id_oproc">Oprocentowanie(%): </label>
	<input id="id_oproc" type="text" name="oproc" value="<?php echo $_smarty_tpl->getValue('form')['oproc'];?>
" />
	<label for="id_lata">Okres(lata): </label>
	<input id="id_lata" type="text" name="lata" value="<?php echo $_smarty_tpl->getValue('form')['lata'];?>
" />
	<input type="submit" class="primary" value="Oblicz" />
</form>	

<div class="messages">

		<?php if ((null !== ($_smarty_tpl->getValue('messages') ?? null))) {?>
		<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?> 
			<h4>Wystąpiły błędy: </h4>
			<ol class="err">
			<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages'), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
			<li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
			<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
			</ol>
		<?php }?>
	<?php }?>

	<?php if ((null !== ($_smarty_tpl->getValue('result') ?? null))) {?>
		<h4>Wynik</h4>
		<p class="res">
		<?php echo $_smarty_tpl->getValue('result');?>

		</p>
	<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
