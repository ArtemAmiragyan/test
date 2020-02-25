import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './components/App.vue'
import Authors from './components/Authors.vue'
import Books from './components/Books.vue'

Vue.component('author', require('./components/Author.vue').default);
Vue.component('authors', require('./components/Authors.vue').default);
Vue.component('book', require('./components/Book.vue').default);
Vue.component('books', require('./components/Books.vue').default);
Vue.component('pagination', require('./components/pagination.vue').default);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/authors',
            name: 'authors',
            component: Authors
        },
        {
            path: '/books',
            name: 'books',
            component: Books,
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
