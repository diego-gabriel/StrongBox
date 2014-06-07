{if empty($boxes)}
	<p>Usted no tiene boxes.<p>
{else}
	<table>
	<tr>
	  <th>Numero</th>
	  <th>Titulo</th>		
	</tr>
	{section name=row loop=$boxes}
	<tbody>
		<tr>
	      {foreach from=$boxes[row] key="Key" item="Value"}
	      	{if $flag is odd}
	      		{assign var = "number" value = $number + 1}
	      		<td><a href="showBox.php?id={$Value}">{$number}</a></td>	
	      	{else}
	      		<td>{$Value}</td>
	      	{/if}
	      	{assign var = "flag" value = $flag + 1}
	      {/foreach}
	  	</tr>
	</tbody>
	  {/section}
	</table>
{/if}