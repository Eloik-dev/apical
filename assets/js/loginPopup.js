class loginPopup extends HTMLElement {
    constructor() {
        super();

        $(document).ready(() => {
            this.initEvents();
        })
    }

    // Initiliaser les événements de l'élément
    initEvents = () => {
        $(this).find('#close-button').on('click', () => {
            this.toggle();
        })
    }

    // Ouverture et fermeture du menu de connexion
    toggle = () => {
        const toggled = this.classList.toggle('active');

        $(this).stop(true, true).fadeTo();

        $(this).fadeTo("fast", + toggled, () => {
            $(this).css('display', toggled ? 'block' : 'none');
        })
    }
}

customElements.define('login-popup', loginPopup);