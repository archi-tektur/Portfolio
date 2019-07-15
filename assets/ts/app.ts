import {Navigation} from "./portfolio/Navigation/Navigation";
import {FormHandler} from "./portfolio/Form/FormHandler";

require('../sass/main.sass');

document.querySelector('.form_input--textarea').addEventListener('keydown', autosize);

function autosize() {
    let el = this;
    setTimeout(function () {
        el.style.cssText = 'height:' + (el.scrollHeight + 6) + 'px';
    }, 0);
}

new FormHandler({
    name: document.querySelector('#field-name'),
    email: document.querySelector('#field-email'),
    reason: document.querySelector('#field-reason'),
    content: document.querySelector('#field-content'),
    submit: document.querySelector('#button-submit'),
    formScreen: document.querySelector('#window-form'),
    confirmScreen: document.querySelector('#window-confirmation')
});

// handles navigation behavior
new Navigation(
    document.querySelector('.navigation_hamburger'),
    document.querySelector('.navigation_links')
);
