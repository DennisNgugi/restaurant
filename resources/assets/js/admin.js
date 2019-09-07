/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.events = new Vue();

import VueRouter from 'vue-router'
import moment from 'moment';
import Datepicker from 'vuejs-datepicker';
import VueAxios from 'vue-axios';
import axios from 'axios';
import _ from 'lodash';
import VModal from 'vue-js-modal';
import VueSweetalert2 from 'vue-sweetalert2';
import DataTable from 'v-data-table';
import V2Datepicker from 'v2-datepicker';


import swal from 'sweetalert2';
Vue.use(VModal)
//Vue.use(Datepicker);
Vue.use(VueRouter)
Vue.use(VueAxios, axios);
Vue.use(VueSweetalert2);
Vue.use(DataTable);
Vue.use(V2Datepicker)
Vue.component('pagination', require('laravel-vue-pagination'));

import {
    Form,
    HasError,
    AlertError
} from 'vform'

window.form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

Vue.filter('capitalize', function (value) {
  return value.charAt(0).toUpperCase() + value.slice(1)
})

Vue.filter('date', function (created) {
  return moment(created).format('LL');
})


window.swal = swal;


const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});
window.toast = toast;


//admin

import Admin from './components/admin/Dashboard.vue';

import Graph from './components/admin/reports/Graph.vue';

//sales
import Sales from './components/admin/sales/Sales.vue';
import SalesView from './components/admin/sales/SalesView.vue';

//Reports
import Report from './components/admin/reports/Report.vue';


import ProductCreate from './components/admin/products/Create.vue';
import ProductEdit from './components/admin/products/Edit.vue';
import ProductIndex from './components/admin/products/Index.vue';

import PaymentTypeCreate from './components/admin/paymenttype/Create.vue';
import PaymentTypeEdit from './components/admin/paymenttype/Edit.vue';


import CategoryCreate from './components/admin/category/Create.vue';
import CategoryEdit from './components/admin/category/Edit.vue';
import CategoryIndex from './components/admin/category/Index.vue';


import WaiterCreate from './components/admin/waiters/Create.vue';
import WaiterEdit from './components/admin/waiters/Edit.vue';
import WaiterIndex from './components/admin/waiters/Index.vue';

const routes = [

    {
        name: 'admin',
        path: '/admin/dashboard',
        component: Admin
    },
    {
        name: 'graph',
        path: '/admin/graph',
        component: Graph
    },
    {
        name: 'sales',
        path: '/admin/sales',
        component: Sales
    },
    {
        name: 'reports',
        path: '/admin/report',
        component: Report
    },
    {
        name: 'payment_type',
        path: '/admin/payment_type/create',
        component: PaymentTypeCreate
    },
    {
        name: 'payment_type_edit',
        path: '/admin/payment_type/:id',
        component: PaymentTypeEdit
    },
    {
        name: 'sales_view',
        path: '/admin/sales/:id',
        component: SalesView
    },
    {
        name: 'product_create',
        path: '/admin/products/create',
        component: ProductCreate
    },
    {
        name: 'products',
        path: '/admin/products',
        component: ProductIndex
    },
    {
        name: 'product_edit',
        path: '/admin/products/edit/:id',
        component: ProductEdit
    },
    {
        name: 'category_create',
        path: '/admin/category/create',
        component: CategoryCreate
    },
    {
        name: 'category',
        path: '/admin/category',
        component: CategoryIndex
    },
    {
        name: 'category_edit',
        path: '/admin/category/:id/edit',
        component: CategoryEdit
    },
    {
        name: 'waiter_create',
        path: '/admin/waiter/create',
        component: WaiterCreate
    },
    {
        name: 'waiter',
        path: '/admin/waiter',
        component: WaiterIndex
    },
    {
        name: 'waiter_edit',
        path: '/admin/waiter/edit/:id',
        component: WaiterEdit
    },



];


const router = new VueRouter({
    mode: 'history',
    routes: routes
});
//
// const date_picker = new Vue({
//   el: '#date_picker',
//   components :{
//     Datepicker
//   },
//   data: {
//     date: new Date()
// }
// });


const app1 = new Vue({
    el: '.admin-page',
    router
});
