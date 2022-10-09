{include file="header.tpl"}

<h1>{$titulo}</h1>
<table> 
    <tr>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Talle</th>
        <th>Categoria</th>
    </tr> 
    <tr>
        <td>{$detail->description}</td>
        <td>{$detail->price}</td>
        <td>{$detail->size} </td>
        <td>{$category->name} </td>  
    </tr>     
</table>
            
<a href="publicHome" > Volver al menú </a>


{include file="footer.tpl"}