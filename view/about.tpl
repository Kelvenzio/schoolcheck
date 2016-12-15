<section>
    {foreach from=$result item=oneItem}
<about>
    <p style="font-size: 50px">INFO</p>
    <pre>{$oneItem.info}</pre>
    <p style="font-size: 50px">CONTACT INFO</p>
    <pre>{$oneItem.contactinfo}</pre>
</about>

    {/foreach}

</section>
