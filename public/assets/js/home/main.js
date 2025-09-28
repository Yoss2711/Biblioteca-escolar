// Tu código JavaScript actual +

// Función para mostrar prompt de login desde vista previa
function showLoginPrompt() {
    if(confirm('Para acceder al sistema completo necesitas iniciar sesión. ¿Deseas ir al login?')) {
        window.location.href = 'auth.php';
    }
}

// Mejorar la búsqueda para que redirija al sistema
const searchBtn = document.querySelector('.search-btn');
if(searchBtn) {
    searchBtn.addEventListener('click', () => {
        const query = document.querySelector('.search-input').value;
        if(query.trim()) {
            // Guardar búsqueda en localStorage para usarla en el dashboard
            localStorage.setItem('pendingSearch', query);
            window.location.href = 'auth.php';
        }
    });
}