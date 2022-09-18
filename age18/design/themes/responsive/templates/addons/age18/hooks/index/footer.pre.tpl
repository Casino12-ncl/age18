
{if $show_window === 'accept'} 
{include file="addons/age18/views/accept.tpl"} 
{elseif $show_window === 'false'}
{include file="addons/age18/views/deny.tpl"} 
{/if}
