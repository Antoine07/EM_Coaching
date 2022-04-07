import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: () => import('../components/Home.vue')
    },
    {
      path: '/posts',
      name: 'posts',
      component: () => import('../components/Posts.vue')
    },
    {
      path: '/user',
      name: 'user',
      component: () => import('../components/User.vue')
    },
    {
      path: '/post/:id',
      name: 'post',
      component: () => import('../components/Post.vue')
    },
    {
      path: '/bitcoin',
      name: 'bitcoin',
      component: () => import('../components/Bitcoin.vue')
    }
  ]
})

export default router
