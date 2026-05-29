document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('mainSearch');
    const filterButtons = document.querySelectorAll('.btn-filter');
    const cards = document.querySelectorAll('.card-element');
    const noResults = document.getElementById('noResults');

    let currentFilter = 'all';
    let currentSearchText = '';

    function filterItems() {
        let visibleCount = 0;

        cards.forEach(card => {
            const title = card.querySelector('.card-title-custom').textContent.toLowerCase();
            const desc = card.querySelector('.card-text-custom').textContent.toLowerCase();
            const category = card.getAttribute('data-category');

            const matchesFilter = (currentFilter === 'all' || category === currentFilter);
            const matchesSearch = (title.includes(currentSearchText) || desc.includes(currentSearchText));

            if (matchesFilter && matchesSearch) {
                card.style.display = 'block';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        if (visibleCount === 0) {
            noResults.classList.remove('d-none');
        } else {
            noResults.classList.add('d-none');
        }
    }

    // Listener para buscador de caja de texto
    if (searchInput) {
        searchInput.addEventListener('input', function (e) {
            currentSearchText = e.target.value.toLowerCase();
            filterItems();
        });
    }

    // Listener para los botones de filtrado rápido
    filterButtons.forEach(button => {
        button.addEventListener('click', function () {
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            currentFilter = this.getAttribute('data-filter');
            filterItems();
        });
    });
});
