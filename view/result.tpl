<legend><h3>Results</h3></legend>
<section>
  {foreach from=$result item=oneItem}
    <article id="schedule">
      <p>{$oneItem.date}</p>
      <p>{$oneItem.teamn1}<img src='images/{$oneItem.team1}'id="team">{$oneItem.score}<img src='images/{$oneItem.team2}'id="team">{$oneItem.teamn2}</p>
    </article>
    {/foreach}
</section>
