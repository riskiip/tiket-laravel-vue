/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');
window.Vue = require('vue');
import 'vue-css-donut-chart/dist/vcdonut.css';
import Vue from 'vue'
import Vuetify from 'vuetify'
import router from './Router/router.js'
import vueMask from 'vue-jquery-mask';
import Donut from 'vue-css-donut-chart';
Vue.use(vueMask);
Vue.use(Vuetify)
Vue.use(Donut);


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component',require('./components/ExampleComponent.vue').default);
Vue.component('apphome',require('./components/Apphome.vue').default);
Vue.component('category-component',require('./components/categori/CategoriComponent.vue').default);
Vue.component('create-category',require('./components/categori/CreateCategori.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
*/

const app = new Vue({
    el: '#app',
    router
});
