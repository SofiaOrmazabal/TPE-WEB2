{include file="header.tpl"}
<div>
    <h1>{$titulo}</h1>

    <ul>
        {foreach from=$categories item=$category}
            <li>
                {$category->name}<a class="linkVer" href="viewcategory/{$category->id_category}">VER MÁS</a><a class="linkVer" href="deleteCategory/{$category->id_category}">ELIMINAR</a><a class="linkVer" href="editFormCategory/{$category->id_category}">Editar</a>       
            </li>
        {/foreach}
    </ul>


    <p class="error">Recuerde que no podrá eliminar una categoria si tiene productos asociados, el sistema no lo permitirá </p>

    <a href="adminHome" > Volver atrás </a>
</div>
{include file="footer.tpl"}