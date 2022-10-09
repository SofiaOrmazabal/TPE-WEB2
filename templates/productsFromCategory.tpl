{include file="header.tpl"}

<h1>{$titulo}</h1>

<ul>
    {foreach from=$detail item=$details}
        <li>
            {$details->description}       
        </li>
    {/foreach}
</ul>
<a href="showCategories" > Volver atrás </a>

{include file="footer.tpl"}