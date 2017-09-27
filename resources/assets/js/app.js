
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.VueResource = require('vue-resource');

import VueMask from 'v-mask'
Vue.use(VueMask);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('problem_list', require('./components/Problem/list.vue'));
Vue.component('problem_create', require('./components/Problem/create.vue'));
Vue.component('submission_create', require('./components/Submission/create.vue'));
Vue.component('ranking_geral', require('./components/Ranking/geral.vue'));

Vue.component('submissoes_list', require('./components/Submission/list.vue'));

const app = new Vue({
    el: '#app'
});
