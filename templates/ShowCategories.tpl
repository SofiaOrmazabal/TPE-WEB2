{include file="header.tpl"}
<div>
    <h1>{$titulo}</h1>

    <ul>
        {foreach from=$categories item=$category}
            <li>
                {$category->name}<a href="viewcategory/{$category->id_category}">VER MÁS</a>       
            </li>
        {/foreach}
    </ul>
</div>
{include file="footer.tpl"}