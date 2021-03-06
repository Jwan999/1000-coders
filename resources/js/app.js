/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue/dist/vue.js';
import VueScrollactive from 'vue-scrollactive';

import VueApexCharts from 'vue-apexcharts'

Vue.use(VueApexCharts)

Vue.component('apexchart', VueApexCharts)

Vue.use(VueScrollactive);
import 'particles.js/particles.js';
//
const particlesJS = window.particlesJS;

// JSON file is located in the directory of 'public/js/particlejs-config.json'
particlesJS.load('particles-js', 'js/particlesjs-config.json', function () {
    console.log('callback - particles.js config loaded');
});

// import ref from 'Vue'
// import {Dialog, DialogOverlay, DialogTitle, TransitionChild, TransitionRoot} from '@headlessui/vue'

// vue.use(ref)
// vue.component(Dialog, DialogOverlay, DialogTitle, TransitionChild, TransitionRoot)

window.Vue = Vue;


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });
