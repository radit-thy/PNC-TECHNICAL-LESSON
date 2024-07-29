import { createApp } from 'vue'
// import App from './pp.vue'
// import UserPage from './views/UserPage.vue';
import CategoryPage from './views/CategoryPage.vue';

import router from './router';
import 'bootstrap/dist/css/bootstrap.css'
import bootstrap from 'bootstrap/dist/js/bootstrap.bundle.js' 

createApp(CategoryPage).use(bootstrap).use(router).mount('#app')