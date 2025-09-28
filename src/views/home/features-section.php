<section id="servicios" class="features">
    <div class="container">
        <div class="section-title">
            <h2>Nuestros Servicios</h2>
            <p>Ofrecemos una experiencia completa de aprendizaje digital con herramientas modernas y contenido de calidad</p>
        </div>
        
        <div class="features-grid">
            <?php
            $features = [
                ['icon' => '📚', 'title' => 'Catálogo Digital', 'description' => 'Accede a miles de libros digitales, revistas académicas y recursos multimedia organizados por materias y niveles educativos.'],
                ['icon' => '🔍', 'title' => 'Búsqueda Inteligente', 'description' => 'Encuentra rápidamente el contenido que necesitas con nuestro sistema de búsqueda avanzada y filtros especializados.'],
                ['icon' => '💻', 'title' => 'Plataforma Interactiva', 'description' => 'Disfruta de una experiencia de lectura enriquecida con herramientas de anotación, marcadores y compartir contenido.'],
                ['icon' => '👥', 'title' => 'Comunidad Estudiantil', 'description' => 'Conecta con compañeros, participa en clubes de lectura virtuales y colabora en proyectos de investigación.'],
                ['icon' => '📱', 'title' => 'Acceso Móvil', 'description' => 'Lee desde cualquier dispositivo con sincronización automática de tu progreso, notas y biblioteca personal.'],
                ['icon' => '🏆', 'title' => 'Programas de Lectura', 'description' => 'Participa en desafíos de lectura, obtén certificaciones y desarrolla hábitos de estudio efectivos.']
            ];
            
            foreach($features as $feature): ?>
                <div class="feature-card">
                    <div class="feature-icon"><?php echo $feature['icon']; ?></div>
                    <h3><?php echo $feature['title']; ?></h3>
                    <p><?php echo $feature['description']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>