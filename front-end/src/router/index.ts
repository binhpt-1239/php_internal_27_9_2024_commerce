import { createRouter, createWebHistory } from 'vue-router'
import ExampleView from '../views/ExampleView.vue'
import ProductsView from '../views/ProductsView.vue'

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: '/',
            name: 'example',
            component: ExampleView
        },
        {
            path: '/products',
            name: 'products',
            component: ProductsView
        },
    ]
})

export default router
