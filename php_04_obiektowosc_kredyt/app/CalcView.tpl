{extends file="../templates/main.html"}

{block name=footer}przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora{/block}

{block name=content}

<div class="row">
	{if !$messages->isEmpty()}
		<div class="col-8 col-12-medium">
	{else}
		<div class="col-12">	
	{/if}
		<form action="{$conf->app_url}/app/calc.php#result" method="post">
			<div class="fields">
				<div class="field half">
					<label for="id_amount">Kwota kredytu(zł): </label>
					<input id="id_amount" type="text" name="amount" value="{$form->amount}" />
				</div>
				<div class="field half">
					<label for="id_interest">Oprocentowanie(%): </label>
					<input id="id_interest" type="text" name="interest" value="{$form->interest}" />
				</div>
				<div class="field">
					<label for="id_years">Okres(lata): </label>
					<input id="id_years" type="text" name="years" value="{$form->years}" />
				</div>
			</div>
		<input type="submit" class="button primary fit" value="Oblicz"/>
		</form>	
	</div>
	{if !$messages->isEmpty()}
	<div class="col-4 col-12-medium">
		{if $messages->isError()} 
		<div id="err" class="box">
			<h4>Błędy:</h4>
			<ol>
				{foreach $messages->getErrors() as $err}
				{strip}
				<li>{$err}</li>
				{/strip}
				{/foreach}
			</ol>
		</div>
		{/if}
		{if $messages->isInfo()} 
		<div class="box">
			<h4>Informacje:</h4>
			<ol>
				{foreach $messages->getInfos() as $info}
				{strip}
				<li>{$info}</li>
				{/strip}
				{/foreach}
			</ol>
		</div>
		{/if}
	</div>
	{/if}
</div>

{if isset($result->monthly_installment)}
	<h2 id="result" class="align-center">
		Wynik: {$result->monthly_installment}
	</h2>
{/if}

{/block}