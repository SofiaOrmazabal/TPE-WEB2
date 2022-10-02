{include file="header.tpl"}
{include file="nav.tpl"}
<div>
    <h1>LOG IN</h1>
    <p>Acceso ADMINISTRADOR</p>
    <form action="verify" method="POST">
        <label for="user">Ingrese usuario</label><input type="text" name="user" placeholder="mail">
        <label for="password">Ingrese contraseña</label><input type="password" name="password" placeholder="contraseña">
        <input type="submit" value="Login">
    </form>

    <a href="publicHome">Acceso público</a>
</div>
{include file="footer.tpl"}