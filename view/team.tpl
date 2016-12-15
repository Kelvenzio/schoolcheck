<legend><h3>Players</h3></legend>
<hr>
<section>
    <article id="team">
      {foreach from=$result item=oneItem}
        <img src='images/{$oneItem.image}'id="player">
        {/foreach}
    </article>

</section>
