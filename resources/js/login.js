document.addEventListener("DOMContentLoaded", () => {
    const openModal = document.getElementById("openModal");
    const closeModal = document.getElementById("closeModal");
    const modal = document.getElementById("modal");

    openModal.addEventListener("click", () => {
        modal.classList.remove("hidden");
        setTimeout(() => {
            modal.classList.remove("opacity-0");
            modal.querySelector('div').classList.remove('scale-90');
        }, 10);
    });

    closeModal.addEventListener("click", () => {
        modal.classList.add("opacity-0");
        modal.querySelector('div').classList.add('scale-90');
        setTimeout(() => modal.classList.add("hidden"), 300);
    });

    window.addEventListener("click", (e) => {
        if (e.target === modal) {
            closeModal.click();
        }
    });
});