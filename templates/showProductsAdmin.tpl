{include file="header.tpl"}
<div>
    <h1>{$titulo}</h1>
    <ul>
        {foreach from=$products item=$product}
            <li>
                {$product->description}<a class="linkVer" href="viewproduct/{$product->id_product}">VER MÁS</a><a class="linkVer" href="delete/{$product->id_product}">ELIMINAR</a><a class="linkVer" href="editFormProduct/{$product->id_product}">Editar</a>       
            </li>
        {/foreach}
        
    </ul>

    <a href="adminHome" > Volver atrás </a>

</div>
{include file="footer.tpl"}