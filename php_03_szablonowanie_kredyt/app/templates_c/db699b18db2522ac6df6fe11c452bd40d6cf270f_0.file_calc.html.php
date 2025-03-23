<?php
/* Smarty version 5.4.2, created on 2025-03-23 18:27:33
  from 'file:C:\xampp\htdocs\SW\php_03_szablonowanie_kredyt/app/calc.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67e0448509e128_85863742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db699b18db2522ac6df6fe11c452bd40d6cf270f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SW\\php_03_szablonowanie_kredyt/app/calc.html',
      1 => 1742750735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e0448509e128_85863742 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\SW\\php_03_szablonowanie_kredyt\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_105817964667e0448508ab25_88206182', 'footer');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_163940502267e0448508e317_80222330', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.html", $_smarty_current_dir);
}
/* {block 'footer'} */
class Block_105817964667e0448508ab25_88206182 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\SW\\php_03_szablonowanie_kredyt\\app';
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_163940502267e0448508e317_80222330 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\SW\\php_03_szablonowanie_kredyt\\app';
?>


<form action="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/calc.php" method="post">
	<div class="fields">
		<div class="field half">
			<label for="id_kwota">Kwota kredytu(zł): </label>
			<input id="id_kwota" type="text" name="kwota" value="<?php echo $_smarty_tpl->getValue('form')['kwota'];?>
" />
		</div>
		<div class="field half">
			<label for="id_oproc">Oprocentowanie(%): </label>
			<input id="id_oproc" type="text" name="oproc" value="<?php echo $_smarty_tpl->getValue('form')['oproc'];?>
" />
		</div>
		<div class="field">
			<label for="id_lata">Okres(lata): </label>
			<input id="id_lata" type="text" name="lata" value="<?php echo $_smarty_tpl->getValue('form')['lata'];?>
" />
		</div>
	</div>
	<input type="submit" class="button primary fit" value="Oblicz"/>
</form>	
	

<?php if ((null !== ($_smarty_tpl->getValue('messages') ?? null))) {?>
	<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?> 
		<div class="box">
			<h4>Wystąpiły błędy: </h4>
			<ol>
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
		</div>
	<?php }
}?>

<?php if ((null !== ($_smarty_tpl->getValue('result') ?? null))) {?>
	<h2 class="align-center">
		Wynik: <?php echo $_smarty_tpl->getValue('result');?>

	</h2>
<?php }?>


<?php
}
}
/* {/block 'content'} */
}
