
import MiscellaneousEvents from "./miscellaneous-events.js";


document.addEventListener('DOMContentLoaded', function () {
    const init = () => {
        goBackWithButtonClicked();
    }


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