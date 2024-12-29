import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import ForumView from '@/views/ForumView.vue'
import LoginView from '@/views/LoginView.vue'
import RegisterView from '@/views/RegisterView.vue'
import ArtDiscussView from '@/views/Forum/ArtDiscussView.vue'
import ThreadView from '@/views/Thread/ThreadView.vue'
import ThreadStore from '@/views/Thread/ThreadStore.vue'
import ProfileView from '@/views/ProfileView.vue'

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
      path: '/thread',
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
    }
  ],
})

export default router
