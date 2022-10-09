{include file="header.tpl"}
<form action="edit/{$detail->id_product}" method="POST">
    <label for="description">Descripción:</label><input type="text" name="description" value={$detail->description} required>
    <label for="price">Precio:</label><input placeholder=" por ej 150, 2500, 9000, etc" type="number" name="price" value={$detail->price} > 
    <label for="size">Talle:</label><input placeholder=" por ej s,m,l,38,40,etc" type="varchar" name="size" value={$detail->size}>
    <select name=id_category>
        {foreach from=$categories item=$category}
            <option value="{$category->id_category}">{$category->name}</option>
        {/foreach}
    </select>

    <button type="submit">Guardar</button>
</form>


{include file="footer.tpl"}