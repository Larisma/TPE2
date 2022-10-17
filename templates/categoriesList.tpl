{include 'templates/header.tpl'}

<nav>
    <article>
        <div class="contenido">
            <h1>CATEGORIAS</h1>
            <ul class="listaCategorias">
                {foreach from=$categories item=$category}
                    <li>
                        <h1>{$category->categoria}</h1>
                        <a href="category/{$category->id_categoria}">Ver</a>
                        {if ($admin)}
                            <a href="deleteCategory/{$category->id_categoria}">Borrar</a>
                            <a href="edits/{$category->id_categoria}">Modificar</a>
                        {/if}
                    </li>
                {/foreach}
            </ul>
        </div>
        {if $admin}
            <div class="formContenedor" id="formContenedor">
                <form action="createCategory" method="POST" class="createCategory" enctype="multipart/form-data">
                    <div class="formulario">
                        <div class="formFila">
                            <div class="formEtiqueta">
                                <label for="producto">Categoria:</label>
                            </div>
                            <div class="formValor">
                                <input name="categoria" type="categoria" class="categoria">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Agregar</button>
                    </div>
                </form>
            </div>
        {/if}
    </article>
</nav>

{include 'templates/footer.tpl'}