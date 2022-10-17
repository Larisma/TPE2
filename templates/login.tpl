{include file="header.tpl"}
<nav>
    <div class="">
        <form action="validate" method="post" class="p-4" enctype="multipart/form-data">
            <div class="form">
                <label for="user">Usuario</label>
                <input name="email" placeholder="email" type="email" id="email" class="form">
            </div>
            <div class="form">
                <label for="pass">Password</label>
                <input name="password" placeholder="password" type="password" id="password" class="form">
            </div>
            {if $error}
                <div class="alert alert-danger mt-3">
                    {$error}
                </div>
            {/if}

            <button type="submit" class="btn">Ingresar</button>

        </form>
    </div>
</nav>




{include file="footer.tpl"}