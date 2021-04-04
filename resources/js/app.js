window.Vue = require('vue').default;

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('card-products', require('./components/CardProduct').default);

const app = new Vue({
    el: '#app',
});
