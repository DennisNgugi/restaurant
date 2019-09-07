
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
import moment from 'moment'
import VueAxios from 'vue-axios';
import axios from 'axios';

import swal from 'sweetalert2';
window.swal = swal;
const toast = swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000
});
window.toast = toast;



Vue.use(VueRouter)
Vue.use(VueAxios, axios);
// Vue.filter('myDate',function(){
//   return moment().format('MMMM Do YYYY, h:mm:ss a');
// });
Vue.prototype.moment = moment
Vue.component('login', require('./components/Login.vue'));

const app = new Vue({
    el: '#login'
});
