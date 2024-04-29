
import MiscellaneousEvents from "./miscellaneous-events.js";


document.addEventListener('DOMContentLoaded', function () {
    const init = () => {
        goBackWithButtonClicked();
    }

    /**remove page loader */
    const page_loader = document.querySelector(".page-loader");
    page_loader?.classList.contains("show") ?
        page_loader.classList.remove("show") :
        null;



    // /**Go back with button clicked */
    const goBackWithButtonClicked = () => {
        const triggers = document.querySelectorAll(".back-history-btn");

        for (let i = 0; i < triggers.length; i++) {
            const button = triggers[i];

            button.addEventListener("click", () => {
                const miscellaneousEvents = new MiscellaneousEvents();
                miscellaneousEvents.goBackHistoryWithButton();
            });
        }
    }


    init();

})