import Vue from 'vue';
import VueRouter from 'vue-router';

import Test from './pages/Test.vue';
import About from './pages/About.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        {
            path: '/',
            name: 'test',
            component: Test
        },
        {
            path: '/about',
            name: 'about',
            component: About
        },
    ]
});

export default router;