{assign var = "flag" value = 1}
{assign var = "number" value = 1}
{if empty($extras)}
	<p id = "noExtras">Usted no tiene extras.<p>
{else}
	{section name=row loop=$extras}
	
		{foreach from=$extras[row] key="Key" item="Value"}
			
			{if $flag is odd}
			<div>
      			<label for = "title-{$number}">Titulo {$number}:</label>	
      			<input required name = "title-{$number}" class = "extra" readonly type = "text" value = "{$Value}" id = "title-{$number}"></input>
      		{else}
      			<label for = "value-{$number}">Valor {$number}:</label>	
      			<input required name = "value-{$number}" class = "extra" readonly type = "text" value = "{$Value}" id = "value-{$number}"></input>
      		</div>
      		{/if}
      		<br>
      		{assign var = "flag" value = $flag + 1}
		{/foreach}
		{assign var = "number" value = $number + 1}
	{/section}
{/if}