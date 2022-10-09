{include file="header.tpl"}
<div>
    <h1>{$titulo}</h1>

    <ul>
        {foreach from=$categories item=$category}
            <li>
                {$category->name}<a class="linkVer" href="viewcategory/{$category->id_category}">VER MÁS</a>       
            </li>
        {/foreach}
    </ul>

    <a href="publicHome" > Volver atrás </a>
</div>
{include file="footer.tpl"}