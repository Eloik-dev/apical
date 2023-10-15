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
        console.log('WORKS')
        const toggled = this.classList.toggle('active');

        $(this).stop(true, true).fadeTo();

        $(this).fadeTo("fast", + toggled, () => {
            $(this).css('display', toggled ? 'block' : 'none');
        })
    }

    // Ouverture et fermeture du menu de connexion
    submit = (e) => {
        e.preventDefault();
        console.log('SUBMITTED')
    }
}

customElements.define('login-popup', loginPopup);