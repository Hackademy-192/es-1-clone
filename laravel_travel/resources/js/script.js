document.addEventListener("DOMContentLoaded", function () {
    console.log("DreamTravel JS caricato correttamente!");

    const bookingForm = document.querySelector("form");
    if (bookingForm) {
        bookingForm.addEventListener("submit", function (e) {
            console.log("Invio form di prenotazione in corso...");
        });
    }
});