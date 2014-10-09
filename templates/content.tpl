{if $content eq 'users'}
	{include file="users.tpl"}
	
{elseif $content eq 'suppliers'}
	{include file="suppliers.tpl"}
	
{elseif $content eq 'categories'}
	{include file="categories.tpl"}
	
{elseif $content eq 'merks'}
	{include file="merks.tpl"}

{elseif $content eq 'products'}
	{include file="products.tpl"}
	
{elseif $content eq 'sales'}
	{include file="sales.tpl"}

{elseif $content eq 'buys'}
	{include file="buys.tpl"}

{elseif $content eq 'searchs'}
	{include file="searchs.tpl"}

{elseif $content eq 'reports'}
	{include file="reports.tpl"}
	
{else}
	Hai, <b>{$name}</b>.<br>
	Selamat datang di Aplikasi Point of Sales ASFA Jaya, sebuah aplikasi yang dapat membantu anda untuk mengerjakan transaksi
	secara cepat dan mudah.<br>
	Saat ini, Anda login sebagai {$level}
	<br><br>
	Persembahan dari ASFA Solution, best solution for your business<br>
	Website: <a href="http://www.agussaputra.com" target="_blank">http://www.agussaputra.com</a>
{/if}