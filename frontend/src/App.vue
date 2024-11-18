<script setup>
import { RouterLink, RouterView } from 'vue-router'
import ForumTitle from '@/components/ForumTitle.vue';
import ForumOptions from './components/ForumOptions.vue';

</script>

<template>
  <!--Forum title-->
  <ForumTitle/>
  <!--Forum title-->
  <!--Forum Options-->
  <ForumOptions/>
  <!--Forum Options-->
  <RouterView />
</template>
