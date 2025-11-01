<div class="contenedor resete">

<?php include_once __DIR__.'/../templates/nombre-sitio.php';?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Iniciar Sesión</p>
        <form action="/" method="post" class="formulario">

            <div class="campo">
                <label for="email">Email</label>
                <input
                    type="email"
                    id="email"
                    placeholder="Ingresa tu email"
                    name="email">
            </div>

            <input type="submit" class="boton" value="Enviar instrucciones">
        </form>
        <div class="acciones">
            <a href="/">¿Ya tienes cuenta? Inicia Sesión</a>
            <a href="/create">¿Aún no tienes una cuenta? Crea una</a>
        </div>
    </div>
</div>