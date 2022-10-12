{include file="header.tpl"}

<h2>Editar categoria</h2>

<form action="editCategory/{$detailCategory->id_category}" method="POST">
    <label for="description">Descripción:</label><input type="text" name="description" value={$detailCategory->name} required>
    <button type="submit">Editar</button>
</form>

<a href="showCategoriesAdmin">Cancelar</a>

{include file="footer.tpl"}