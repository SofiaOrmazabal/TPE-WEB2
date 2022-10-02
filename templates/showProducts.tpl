{include file="header.tpl"}
<div>
    <h1>{$titulo}</h1>

    <ul>
        {foreach from=$products item=$product}
            <li>
                {$product->description}<a href="viewproduct/{$product->id_product}">VER MÁS</a>       
            </li>
        {/foreach}
    </ul>
</div>
{include file="footer.tpl"}