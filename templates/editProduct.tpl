{include 'templates/header.tpl'}
<h1> editar</h1>
<div class="container">

    <form action='editProduct/{$productEdit->id}' method="post" enctype="multipart/form-data">
        <div class="formulario">
            <form id="formTabla">
                <div class="formFila">
                    <div class="formEtiqueta">
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="formValor">

                        <input class="nombre" id="nombre" name="nombre" value='{$productEdit->nombre}'>
                    </div>
                </div>
                <div class="formFila">
                    <div class="formEtiqueta">
                        <label for="categoria">Categoria</label>
                    </div>
                    <div class="formValor">
                        <select name='id_categoria' class='from_control'>
                            
                            {foreach from=$categories item=$categoria}
                                <option value="{$categoria->id_categoria}"
                                    {if ($productEdit->categoria == $categoria->categoria)}selected{/if}>
                                    {$categoria->id_categoria}-{$categoria->categoria}</option>
                            {/foreach}
                        </select>
                    </div>
                </div>
                <div class="formFila">
                    <div class="formEtiqueta">
                        <label for="material">Material</label>
                    </div>
                    <div class="formValor">
                        <label for="material"></label>
                        <input class="material" id="material" name="material" value='{$productEdit->material}'>
                    </div>
                </div>

                <div class="formFila">
                    <div class="formEtiqueta">
                        <label for="colores">Colores</label>
                    </div>
                    <div class="formValor">
                        <label for="color"></label>
                        <input class="color" id="color" name="color" value='{$productEdit->color}'>

                    </div>
                </div>
                <div class="formFila">
                    <div class="formEtiqueta">
                        <label for="descripcion">Descripcion</label>
                    </div>
                    <div class="formValor">
                        <label for="descripcion"></label>
                        <input class="descripcion" id="descripcion" name="descripcion"
                            value='{$productEdit->descripcion}'>
                    </div>
                </div>
                <div class="formFila">
                        <div class="formEtiqueta">
                            <label for="foto">Foto</label>
                        </div>
                        <div class="formValor">
                            <label for="foto"></label>
                            <input class="descripcion" id="descripcion" type="file" name="foto">
                        </div>
                    </div>
                    <div class="formFila">
                    <div class="formEtiqueta">
                        <label for="precio">Precio</label>
                    </div>
                    <div class="formValor">
                        <input class="precio" id="precio" name="precio" value='{$productEdit->precio}'>
                    </div>
                </div>

                <input type="hidden" name="fotoAnterior" value="{$productEdit->foto}">
                <button type="submit" class="btn">Modificar</button>

            </form>
        </div>
    </form>
</div>
{include 'templates/footer.tpl'}