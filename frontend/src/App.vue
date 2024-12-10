<script setup>
import { RouterLink, RouterView } from 'vue-router'
import ForumTitle from '@/components/ForumTitle.vue';
import ForumOptions from './components/ForumOptions.vue';

</script>

<template>
  <!--Forum title-->
  <ForumTitle :key="$route.fullPath" />
  <!--Forum title-->
  <!--Forum Options-->
  <ForumOptions :key="$route.fullPath" />
  <!--Forum Options-->
  <RouterView :key="$route.fullPath" />
</template>
