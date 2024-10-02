import { createRouter, createWebHistory } from "vue-router";

import notFound from '../components/notFound.vue';
import RegisterPage from '../components/Register.vue';
import LoginPage from '../components/Login.vue';
import DashboardPage from '../components/admin/Dashboard.vue';

const routes = [
    {
        path: '/:pathMatch(.*)*',
        name: 'notfound',
        component: notFound
    },
    {
        path: '/register',
        name: 'register',
        component: RegisterPage
    },
    {
        path: '/',
        name: 'login',
        component: LoginPage
    },
    {
        path: '/dashboard',
        name: 'dashboard',
        component: DashboardPage,
        meta: { requiresAuth: true },
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

router.beforeEach(async (to, from, next) => {
    if (to.matched.some((record) => record.meta.requiresAuth)) {
      try {
        await axios.get('/api/check-auth');
        next();
      } catch (error) {
        next({ name: 'login' });
      }
    } else {
      next();
    }
  });

export default router;
