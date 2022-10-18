{include 'templates/header.tpl'}

<body>
  <nav>
    <article>
      <div class="contenido">
        <div class="catalogo">
          <h1>Nuestros productos</h1>
          <p>
            Nuestros productos son artesanales, siempre buscamos lo natural y que
            sea amigable con el medio ambiente; si bien tenemos nuestra linea
            definida, trabajamos muchas veces con la opiñon de nuestros clientes
            que eligen en base a las opciones que les damos, y a sus necesidades.
            Al ser una tienda online con tienda conceptual, te encontras en un
            lugar donde las ideas innovadoras se unen para mejorar la experiencia.
            Combinamos de manera ecléctica, una variedad de productos y líneas de
            diseño cuidadosamente elaboradas, con el objetivo de perfeccionar e
            innovar en producto.
          </p>
        </div>
      </div>

  </nav>
  </article>

  <h1>PRODUCTOS</h1>
  <div class="contenido">

    <table>

      <thead>
        <tr>
          <th>Nombre</th>
          <th>Categoria</th>
          <th>Material</th>
          <th>Color</th>
          <th>Descripcion</th>
          <th>Foto</th>
          <th>Precio</th>
          <th>Ver</th>
          {if $admin}
            <th colspan="2">Acciones</th>
          {/if}

        </tr>
      </thead>
      <tbody>
        {foreach from=$products item=$producto}

          <tr>
            <td>{$producto->nombre}</td>
            <td>{$producto->categoria}</td>
            <td>{$producto->material}</td>
            <td>{$producto->color}</td>
            <td>{$producto->descripcion}</td>
            <td><img class="miniatura" src="{$producto->foto}"></td>
            <td>{$producto->precio}</td>

            <td><a href="showProduct/{$producto->id}"> Ver </a></td>
            {if $admin}
              <td><a href="edit/{$producto->id}"> Editar </a></td>
              <td><a href="delete/{$producto->id}"> Borrar </a></td>
            {/if}
          </tr>

        {/foreach}
      </tbody>
    </table>

  </div>

  </nav>
</body>
{include 'templates/addProduct.tpl'}
{include 'templates/footer.tpl'}