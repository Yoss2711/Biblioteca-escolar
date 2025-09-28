<section id="catalogo" class="catalogo-section">
    <div class="container">
        <h2 class="catalogo-title">📚 Vista Previa del Catálogo</h2>
        <p class="subtitle-catalog">Una muestra de nuestros libros disponibles</p>
        
        <div class="catalogo">
            <div class="results">
                <?php
                $sampleBooks = [
                    ['title' => 'El Principito', 'author' => 'Antoine de Saint-Exupéry', 'image' => 'El_principito.jpg', 'status' => 'disponible'],
                    ['title' => 'Cien años de soledad', 'author' => 'Gabriel García Márquez', 'image' => 'Cien_años-de-soledad.jpg', 'status' => 'prestado'],
                    ['title' => 'Don Quijote', 'author' => 'Miguel de Cervantes', 'image' => 'portada3.jpg', 'status' => 'disponible']
                ];
                foreach ($sampleBooks as $book): ?>
                    <?php include __DIR__ . '/../partials/book-card-preview.php'; ?>
                <?php endforeach; ?>
            </div>
        </div>
        
        <div class="catalog-cta">
            <a href="auth.php" class="btn btn-primary">Ver Catálogo Completo</a>
        </div>
    </div>
</section>