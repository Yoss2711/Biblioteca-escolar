<?php
include __DIR__ . '/../../../src/config/supabase.php';

// Si hay búsqueda
if (isset($_GET['q']) && $_GET['q'] !== '') {
    $query = urlencode($_GET['q']);
    $books = supabaseRequest("?select=title,author,image,status&or=(title.ilike.%$query%,author.ilike.%$query%)");
} else {
    // Si no hay búsqueda, mostrar 3 aleatorios
    $allBooks = supabaseRequest("?select=title,author,image,status");
    $books = [];
    if (is_array($allBooks) && count($allBooks) > 0) {
        $keys = array_rand($allBooks, min(3, count($allBooks)));
        foreach ((array)$keys as $k) {
            $books[] = $allBooks[$k];
        }
    }
}

// Bloque de depuración temporal
if ($books === null) {
    echo "<p style='color:red'>Error al consultar Supabase. Revisa tu conexión y credenciales.</p>";
    echo '<pre style="background:#eee;padding:1em;">';
    var_dump(error_get_last());
    echo '</pre>';
}
echo '<pre style="background:#eee;padding:1em;">';
var_dump($books);
echo '</pre>';

?>
<section id="catalogo" class="catalogo-section">
    <div class="container">
        <h2 class="catalogo-title">📚 Vista Previa del Catálogo</h2>
        <p class="subtitle-catalog">Una muestra de nuestros libros disponibles</p>

        <!-- Barra de búsqueda -->
        <form method="get" class="search-bar">
            <input type="text" name="q" placeholder="Buscar libro o autor..."
                value="<?php echo isset($_GET['q']) ? htmlspecialchars($_GET['q']) : ''; ?>">
            <button type="submit">Buscar</button>
        </form>

        <div class="catalogo">
            <div class="results">
                <?php if (is_array($books) && count($books) > 0): ?>
                <?php foreach ($books as $book): ?>
                <?php include __DIR__ . '/../partials/book-card-preview.php'; ?>
                <?php endforeach; ?>
                <?php else: ?>
                <p>No se encontraron resultados.</p>
                <?php endif; ?>
            </div>
        </div>

        <div class="catalog-cta">
            <a href="auth.php" class="btn btn-primary">Ver Catálogo Completo</a>
        </div>
    </div>
</section>