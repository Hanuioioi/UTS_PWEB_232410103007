document.addEventListener("DOMContentLoaded", function() {
    const modalOpenBtn = document.getElementById('modal-open');
    const modal = document.getElementById('modal');
    const modalCloseBtn = document.getElementById('modal-close');

    if (modalOpenBtn && modal && modalCloseBtn) {
        modalOpenBtn.addEventListener('click', () => {
            modal.style.display = 'block';
        });

        modalCloseBtn.addEventListener('click', () => {
            modal.style.display = 'none';
        });

        window.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        });
    }
});
