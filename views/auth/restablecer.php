<div class="contenedor restablecer">
<?php include_once __DIR__.'/../templates/nombre-sitio.php';?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Restablece tu Password</p>
        <form action="/" method="post" class="formulario">
            <div class="campo">
                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    placeholder="Tu password"
                    name="password">
            </div>

            <input type="submit" class="boton" value="Cambiar Password">
        </form>
        <div class="acciones">
            <a href="/create">¿Aún no tienes una cuenta? Crea una</a>
            <a href="/reset">¿Olvidaste tu password?</a>
        </div>
    </div>
</div>