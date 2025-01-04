import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import ForumView from '@/views/ForumView.vue'
import LoginView from '@/views/LoginView.vue'
import RegisterView from '@/views/RegisterView.vue'
import ArtDiscussView from '@/views/Forum/ArtDiscussView.vue'
import PostView from '@/views/Thread/PostView.vue'
import ThreadStore from '@/views/Thread/ThreadStoreView.vue'
import ThreadView from '@/views/Thread/ThreadView.vue'
import ProfileView from '@/views/ProfileView.vue'
import ErrorView404 from '@/views/404View.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView,
    },

    {
      path: '/login',
      name: 'login',
      component: LoginView,
    },

    {
      path: '/register',
      name: 'register',
      component: RegisterView,
    },

    {
      path: '/forums',
      name: 'forums',
      component: ForumView
    },

    {
      path: '/post',
      name: 'post',
      component: PostView
    },

    {
      path: '/thread/',
      name: 'thread',
      component: ThreadView
    },
    

    {
      path: '/thread/new',
      name: 'new-thread',
      component: ThreadStore
    },
    
    {
      path: '/forums/art-discussions',
      name: 'art-discussions',
      component: ArtDiscussView,
    },
    {
      path: '/profile',
      name: 'profile',
      component: ProfileView,
    },
    {
      path: '/404',
      name: '404',
      component: ErrorView404,
    },
  ],
})

export default router
