import { createRouter, createWebHistory } from 'vue-router';
import Home from './pages/Home/Index.vue';
import NotFound from './pages/NotFound.vue';
import AboutUs from './pages/AboutUs/Index.vue'

const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home
    },
    {
        path: '/about-us',
        name: 'AboutUs',
        component: AboutUs
    },
    {
        path: '/:pathMatch(.*)*',
        name: 'NotFound',
        component: NotFound
    },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
