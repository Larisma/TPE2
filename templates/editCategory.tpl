{include 'templates/header.tpl'}

<div class="container">
    <form action='editCategory/{$categoryEdit->id_categoria}' method="post" enctype="multipart/form-data">
        <div class="formulario">
            <form id="formTabla">
                <div class="formFila">
                    <div class="formEtiqueta">
                        <label for="categoria">Categoria</label>
                    </div>
                    <div class="formValor">

                        <input class="categoria" id="categoria" name='categoria' value='{$categoryEdit->categoria}'>
                    </div>
                </div>

                <button type="submit" class="btn">Modificar</button>
            </form>
        </div>
    </form>
</div>
{include 'templates/footer.tpl'}
































{include 'templates/footer.tpl'}