
<!-- <div id="schedule">
<h2> Last match! </h2>
<h3> England </h3> <p> vs </p> <h3> New Zeeland </h3>
</div> -->
<p> See here a short rundown of England vs New Zeeland and New Zeeland vs Namibia.</p>
<div id="video"></div><iframe id="video" width="560" height="315" src="https://www.youtube.com/embed/BgldGgTL7D8" frameborder="0" allowfullscreen> </iframe>
<iframe id="video1" width="560" height="315" src="https://www.youtube.com/embed/795dI3HQpOo" frameborder="0" allowfullscreen></iframe></div>
<section>

{foreach from=$result item=matches}
	<article>
	<h1>{$matches.team1}</h1>
	<p>{$matches.score_team1}</p>
	<h2> VS </h2>
	<h1>{$matches.team2}</h1>
	<p>{$matches.score_team2}</p>
	<hr color="silver">
	</article>

{/foreach}
</section>
