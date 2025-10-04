<section class="hero section bubbles">
  <div class="container">
    <span class="badge reveal">Biblioteca Virtual · 24/7</span>
    <h1 class="reveal" style="animation-delay:.05s">
      Explora, aprende y disfruta miles de libros en un solo lugar
    </h1>
    <p class="reveal" style="animation-delay:.1s">
      Acceso inmediato a títulos académicos y de ocio. Lectura en línea, descargas seguras y tu progreso sincronizado en todos tus dispositivos.
    </p>

    <!-- Buscador principal -->
    <form class="searchbar reveal" style="animation-delay:.15s" method="get" action="/buscar">
      <input type="text" name="q" placeholder="Buscar por título, autor, ISBN o tema…">
      <button class="btn" type="submit">Buscar</button>
    </form>
    <div class="chips reveal" style="animation-delay:.18s">
      <span class="chip">Novela</span><span class="chip">Ciencia</span><span class="chip">Historia</span>
      <span class="chip">Medicina</span><span class="chip">Infantil</span><span class="chip">Tecnología</span>
    </div>

    <!-- Acceso rápido -->
    <div class="auth reveal" style="animation-delay:.22s">
      <div class="auth-card">
        <h3>¿Ya tienes cuenta?</h3>
        <p class="small">Entra para recuperar tus marcadores y lecturas recientes.</p>
        <form class="form" method="post" action="/login">
          <input class="input" type="email" name="email" placeholder="Correo" required>
          <input class="input" type="password" name="password" placeholder="Contraseña" required>
          <button class="btn" type="submit">Ingresar</button>
        </form>
      </div>
      <div class="auth-card">
        <h3>Crear cuenta gratis</h3>
        <p class="small">Guarda favoritos, anota en los libros y descarga en PDF/EPUB.</p>
        <form class="form" method="post" action="/registro">
          <input class="input" type="text" name="name" placeholder="Nombre y Apellido" required>
          <input class="input" type="email" name="email" placeholder="Correo" required>
          <button class="btn outline" type="submit">Registrarme</button>
        </form>
      </div>
    </div>

    <div class="hero-ill reveal" style="animation-delay:.26s" aria-hidden="true"></div>
  </div>
</section>

