<div class="contenedor login">
    <h1 class="uptask">UpTask</h1>
    <p class="tagline">Crea y administra tus proyectos</p>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Iniciar Sesión</p>
        <form action="/" method="post" class="formulario">
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

            <input type="submit" class="boton">
        </form>
        <div class="acciones">
            <a href="/create">¿Aún no tienes una cuenta? Crea una</a>
            <a href="/reset">¿Olvidaste tu password?</a>
        </div>
    </div>
</div>