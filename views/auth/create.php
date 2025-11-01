<div class="contenedor create">

<?php include_once __DIR__.'/../templates/nombre-sitio.php';?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Iniciar Sesión</p>
        <form action="/" method="post" class="formulario">

            <div class="campo">
                <label for="nombre">Nombre</label>
                <input
                    type="text"
                    id="nombre"
                    placeholder="Tu nombre"
                    name="nombre">
            </div>

            <div class="campo">
                <label for="email">Email</label>
                <input
                    type="email"
                    id="email"
                    placeholder="Tu email"
                    name="email">
            </div>

            <div class="campo">
                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    placeholder="Tu password"
                    name="password">
            </div>
            
            <div class="campo">
                <label for="password2">Repetir Password</label>
                <input
                    type="password"
                    id="password2"
                    placeholder="Repite tu password"
                    name="password2">
            </div>

            <input type="submit" class="boton" value="Enviar">
        </form>
        <div class="acciones">
            <a href="/">¿Ya tienes cuenta? Inicia Sesión</a>
            <a href="/reset">¿Olvidaste tu password?</a>
        </div>
    </div>
</div>