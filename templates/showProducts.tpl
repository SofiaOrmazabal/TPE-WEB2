{include file="header.tpl"}
<div>
    <h1>{$titulo}</h1>

    <ul>
        {foreach from=$products item=$product}
            <li>
                {$product->description}<a class="linkVer" href="viewproduct/{$product->id_product}">VER MÁS</a>       
            </li>
        {/foreach}
        
    </ul>

    <a href="publicHome" > Volver atrás </a>
</div>
{include file="footer.tpl"}