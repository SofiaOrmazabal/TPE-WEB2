{include file="header.tpl"}

<h1>{$titulo}</h1>

<ul>
    {foreach from=$detail item=$details}
        <li>
            {$details->description}       
        </li>
    {/foreach}
</ul>
</div>

{include file="footer.tpl"}