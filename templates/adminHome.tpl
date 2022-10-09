{include file="header.tpl"}
{include file="nav.tpl"}

<form action="insert" method="post">
    <label for="description">Descripción:</label><input placeholder="por ej. top flores" type="text" name="description" required>
    <label for="price">Precio:</label><input placeholder=" por ej 150, 2500, 9000, etc" type="number" name="price" > 
    <label for="size">Talle:</label><input placeholder=" por ej s,m,l,38,40,etc" type="varchar" name="size" >
    <select name=id_category>
        {foreach from=$categories item=$category}
            <option value="{$category->id_category}">{$category->name}</option>
        {/foreach}
    </select>
    <button type="submit">Guardar</button>
</form>
<a href='showProductsAdmin'>Listar Productos</a>



<a href=''>INICIO</a>

{include file="footer.tpl"}