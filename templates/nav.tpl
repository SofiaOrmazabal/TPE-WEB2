<nav>
    <ul>    
        <li><a href=newAdmin>Registrar Admin</a></li>
        {* <li><a href=logout>Log out</a></li>        *}
        {if isset($smarty.session.user)}
            <li><a href="logout">({$smarty.session.user}) Log Out</a></li>
        {/if}
    </ul>
</nav>     
