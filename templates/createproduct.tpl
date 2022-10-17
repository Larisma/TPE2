{include 'templates/header.tpl'}
<div class="formContenedor" id="formContenedor">
    <form action="createProduct" method="POST" class="createProduct" enctype="multipart/form-data">
        <div class="formulario">
            <div class="formFila">
                <div class="formEtiqueta">
                    <label for="producto"> Producto: </label>
                </div>
                <div class="formValor">
                    <input name="product" type="product" class="product">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Agregar</button>
        </div>
    </form>
</div>
{include 'templates/footer.tpl'}