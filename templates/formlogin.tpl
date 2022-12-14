{include 'header.tpl'}
{* Formulario que se utiliza para logearse y poder tener la funcinalidad de ABM, con un IF que si esta mal la contraseña se enviara un mensaje*}

<div class="mt-5 w-25 mx-auto">
    <form method="POST" action="validate">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" required class="form-control" id="email" name="email" aria-describedby="emailHelp"required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required class="form-control" id="password" name="password"required>
        </div>

        {if $error} 
            <div class="alert alert-danger mt-3">
                {$error}
            </div>
        {/if}
        <button type="submit" class="btn btn-primary mt-3">Entrar</button>
    </form>
</div>

{include file='footer.tpl'}