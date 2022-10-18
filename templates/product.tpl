{include 'templates/header.tpl'}

<body>
  <nav>
    <div class="contenedor">

      <p>Nombre: {$product->nombre}</p>
      <p>Categoria: {$product->categoria}</p>
      <p>Material: {$product->material}</p>
      <p>Color: {$product->color}</p>
      <p>Descripcion: {$product->descripcion}</p>
      <p>Precio: {$product->precio}</p>
      <p>{if $product->foto}      
        <img class="miniatura" src="{$product->foto}">
      {/if}
      </p>
    </div>

  </nav>
</body>
{include 'templates/footer.tpl'}