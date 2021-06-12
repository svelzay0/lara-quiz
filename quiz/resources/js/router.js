import Vue from 'vue';
import VueRouter from 'vue-router';

import Quiz from './pages/Quiz.vue';
import About from './pages/About.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        {
            path: '/',
            name: 'quiz',
            component: Quiz
        },
        {
            path: '/about',
            name: 'about',
            component: About
        },
        {
            path: '/about',
            name: 'test',
            component: About
        },
    ]
});

export default router;
