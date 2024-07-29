import { createWebHashHistory, createRouter } from 'vue-router';
import HomePage from '@/views/HomePage.vue';
import AboutPage from '@/views/AboutPage.vue';



const routes = [
    {
        path: '/',
        name: 'home',
        component: HomePage
    },
    {
        path: '/about',
        name: 'about',
        component: AboutPage
    }

]

const router = createRouter({
    history: createWebHashHistory(),
    routes,
})

export default router;



