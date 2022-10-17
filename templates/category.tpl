{include 'templates/header.tpl'}
<nav>
    <h2>Sus productos</h2>
    <ul class="category">
        {foreach from=$products item=$product}
            <li>
                <span> {$product->nombre} - $ {$product->precio}</span>
                <a href='showProduct/{$product->id}'>Ver producto</a>
            </li>

        {/foreach}
    </ul>

</nav>
{include 'templates/footer.tpl'}