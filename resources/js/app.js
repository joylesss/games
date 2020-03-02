require('./bootstrap');

window.Vue = require('vue');
import VueRouter from "vue-router";
Vue.use(VueRouter);

import routes from "./routes";
const router = new VueRouter ({
    routes
});
import RootComponent from './components/RootComponent';


const app = new Vue({
    el: '#app',
    components: {RootComponent},
    template: '<RootComponent />',

    router
});
