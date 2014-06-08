{assign var = "flag" value = 1}
{if empty($extras)}
	<p>Usted no tiene extras.<p>
{else}
	{section name=row loop=$extras}
		<div class = "extra">
			{foreach from=$extras[row] key="Key" item="Value"}
				{if $flag is odd}
	      			<label>Titulo:</label>	
	      		{else}
	      			<label>Valor:</label>	
	      		{/if}
	      		<input readonly type = "text" value = "{$Value}"></input>
	      		<br>
	      		{assign var = "flag" value = $flag + 1}
			{/foreach}
		</div>
	{/section}
{/if}