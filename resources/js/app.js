

require('./bootstrap');

window.Vue = require('vue');

import {HasError, AlertError } from 'vform'

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';
Vue.use(VueSweetalert2);


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('form-contato', require('./components/contato/FormContato.vue').default);


const app = new Vue({
    el: '#app',
});
