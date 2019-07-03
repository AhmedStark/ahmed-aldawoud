/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue';
import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css' ;
Vue.use(Vuetify);
window.Vue = require('vue');

//colors
//#1a237e
//#004d40


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('nav-bar', require('./components/NavBar.vue').default);
Vue.component('my-projects', require('./components/MyProjects.vue').default);
Vue.component('about-me', require('./components/AboutMe.vue').default);
Vue.component('social', require('./components/Social.vue').default);
Vue.component('my-cv', require('./components/MyCV.vue').default);
Vue.component('my-exp', require('./components/MyExperience.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
