{include file="header.tpl"}
<div>
    <h1>{$titulo}</h1>

    <ul>
        {foreach from=$categories item=$category}
            <li>
                {$category->name}<a class="linkVer" href="viewcategory/{$category->id_category}">VER MÁS</a><a class="linkVer" href="delete/{$category->id_category}">ELIMINAR</a><a class="linkVer" href="editForm/{$category->id_category}">Editar</a>       
            </li>
        {/foreach}
    </ul>

    <a href="publicHome" > Volver atrás </a>
</div>
{include file="footer.tpl"}