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
      {if $product->foto}
        <img src="uploads/{$product->foto}">
      {/if}
    </div>

  </nav>
</body>
{include 'templates/footer.tpl'}