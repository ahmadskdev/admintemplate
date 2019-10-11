window._ = require('lodash');
require('material-design-icons');

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

window.Vue = require('vue');

const app = new Vue({
    el: '#wrapper',
});




