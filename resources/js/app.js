import './bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import { createApp } from 'vue'
import app from './components/App.vue'
import router from './router'

createApp(app).use(router).mount("#app")