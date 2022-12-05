'use strict'

function authorizationModalControl() {
    const popup = document.querySelector(".authorization-popup");
    const closeButton = popup.querySelector(".authorization__close-button");
    const formButton = document.querySelector(".authorization-item.login");

    addEventListeners();

    formButton.addEventListener("click", () => {
        popup.classList.remove('hidden');
    });

    function closeButtonClickHandler(event) {
        event.preventDefault();

        popup.classList.add("hidden");

        removeEventListeners();
    }

    function addEventListeners() {
        closeButton.addEventListener("click", closeButtonClickHandler);
    }

    function removeEventListeners() {
        closeButton.addEventListener("click", closeButtonClickHandler);
    }
}

authorizationModalControl();

function registrationModalControl() {
    const popup = document.querySelector(".registration-popup");
    const closeButton = popup.querySelector(".registration__close-button");
    const formButton = document.querySelector(".authorization-item.register");

    addEventListeners();

    formButton.addEventListener("click", () => {
        popup.classList.remove('hidden');
    });

    function closeButtonClickHandler(event) {
        event.preventDefault();

        popup.classList.add("hidden");

        removeEventListeners();
    }

    function addEventListeners() {
        closeButton.addEventListener("click", closeButtonClickHandler);
    }

    function removeEventListeners() {
        closeButton.addEventListener("click", closeButtonClickHandler);
    }
}

registrationModalControl();