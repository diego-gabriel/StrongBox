{if empty($extras)}
	<p>Usted no tiene extras.<p>
{else}
	{section name=row loop=$extras}
	<div class = "extra">
	      {foreach from=$extras[row] key="Key" item="Value"}
	      	<label>{$Key}:</label>
	      	<input readonly type = "text" value = "{$Value}"></input>	
	      {/foreach}
	  {/section}
	</div>
{/if}