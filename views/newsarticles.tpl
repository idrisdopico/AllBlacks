<section>

{foreach from=$result item=newsitem}
	<article>
	
	<h1>{$newsitem.title}</h1>
	<img id="articleImg" src="{$newsitem.image}">
	<content>{$newsitem.content}</content>
	<hr color="silver">
	</article>

{/foreach}
</section>

{include file="pagination.tpl"}