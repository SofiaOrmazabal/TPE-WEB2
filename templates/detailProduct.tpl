{include file="header.tpl"}

<div >
    <h1>{$titulo}</h1>
    <h2>Descripcion: {$detail->description}</h2>
    <h2>Precio: {$detail->price}</h2>
    <h2>Talle: {$detail->size} </h2>
    <h2>Categoria: {$detail->id_category} </h2>
    <a href="publicHome" > Volver al menú </a>
</div>


{include file="footer.tpl"}