const rating_btns = document.querySelectorAll(".rating__btn");
const submit_btn = document.getElementById("submit-btn");
const selected = document.getElementById("selected");
const main_page = document.querySelector(".main-page");
const thank_you_page = document.querySelector(".thank-you-page");

rating_btns.forEach((rating_btn) => {
    rating_btn.addEventListener("click", (e) => {
        const checked_btn = document.querySelector(".checked");

        // Checking for a button that's already checked, if there is one, we uncheck it.
        if(checked_btn){
            checked_btn.classList.remove("checked");
        }

        const selected_btn = e.target;
        selected_btn.classList.add("checked");

        selected.innerHTML = selected_btn.innerHTML;
    })
});


submit_btn.addEventListener("click", (e) => {
    if(selected.innerHTML !== ""){
        main_page.classList.add("hidden");
        thank_you_page.classList.remove("hidden");
    }
});
