<div class="book-card preview">
    <img src="assets/img/books/<?php echo $book['image']; ?>" alt="Portada del libro">
    <h3><?php echo htmlspecialchars($book['title']); ?></h3>
    <p><?php echo htmlspecialchars($book['author']); ?></p>
    <span class="status <?php echo $book['status']; ?>">
        <?php echo $book['status'] === 'disponible' ? 'Disponible' : 'Prestado'; ?>
    </span>
    <button class="btn preview-btn" onclick="showLoginPrompt()">
        <?php echo $book['status'] === 'disponible' ? 'Ingresar para Prestar' : 'No disponible'; ?>
    </button>
</div>
