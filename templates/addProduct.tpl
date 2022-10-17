<div class="container">
    {if ($admin)}
        <form action="insert" method="post" enctype="multipart/form-data">
            <div class="formulario">
                <form id="formTabla">
                    <div class="formFila">
                        <div class="formEtiqueta">
                            <label for="producto">Nombre</label>
                        </div>
                        <div class="formValor">
                            <label for="nombre"></label>
                            <input class="nombre" id="nombre" name="nombre">
                        </div>
                    </div>
                    <div class="formFila">
                        <div class="formEtiqueta">
                            <label for="categoria">Categoria</label>
                        </div>
                        <div class="formValor">
                            <select name='id_categoria' class='from_control'>
                                {foreach from=$categories item=$categoria}
                                    <option value="{$categoria->id_categoria}">
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
                            <input class="hidden" id="material" name="material">
                        </div>
                    </div>
                    <div class="formFila">
                        <div class="formEtiqueta">
                            <label for="colores">Colores</label>
                        </div>
                        <div class="formValor">
                            <label for="color"></label>
                            <input class="color" id="color" name="color">

                        </div>
                    </div>
                    <div class="formFila">
                        <div class="formEtiqueta">
                            <label for="descripcion">Descripcion</label>
                        </div>
                        <div class="formValor">
                            <label for="descripcion"></label>
                            <input class="descripcion" id="descripcion" name="descripcion">
                        </div>
                    </div>
                    <div class="formFila">
                        <div class="formEtiqueta">
                            <label for="img"></label>
                        </div>
                        <div class="formValor">
                            <label for="img"></label>
                            <input class="descripcion" id="descripcion" type="file" name="img">
                        </div>
                    </div>
                    <div class="formFila">
                        <div class="formEtiqueta">
                            <label for="precio">Precio</label>
                        </div>
                        <div class="formValor">
                            <input class="precio" id="precio" name="precio">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Agregar</button>
                </form>
            </div>
        </form>
    {/if}
</div>