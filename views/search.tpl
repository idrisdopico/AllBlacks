{include file="pagination.tpl"}

<section>

{foreach from=$result item=newsitem}
	<article>
	<h1>{$newsitem.title}</h1>
	<content>{$newsitem.content}</content>
	</article>

{/foreach}
</section>