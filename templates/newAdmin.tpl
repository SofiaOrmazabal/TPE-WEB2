{include file="header.tpl"}

<div>
    <h1>{$titulo}</h1>
    
    <form action="newAdmin" method="POST">
        <label for="userNew">Ingrese usuario</label><input type="text" name="userNew" placeholder="mail">
        <label for="passwordNew">Ingrese contraseña</label><input type="password" name="passwordNew" placeholder="contraseña">
        <input type="submit" value="Registrar">
    </form>
</div>

{include file="footer.tpl"}