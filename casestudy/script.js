document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("register-modal");
    const openModalBtn = document.querySelector(".open-modal");
    const closeModal = document.querySelector(".close");

    openModalBtn.addEventListener("click", function () {
        modal.style.display = "block";
    });

    closeModal.addEventListener("click", function () {
        modal.style.display = "none";
    });

    window.addEventListener("click", function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
});


