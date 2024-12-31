<script setup>
import { RouterLink, RouterView } from 'vue-router'
import ForumTitle from '@/components/ForumTitle.vue';
import ForumOptions from './components/ForumOptions.vue';
import LoadingIcon from '@/components/LoadingIcon.vue'
import {ref} from 'vue'

let visibleLoading = ref(false) 

function setLoadingVisibility(value) {
  this.visibleLoading = value 
}



</script>

<template>
  <!--Loading-->
  
  <!--Forum title-->
  <ForumTitle :key="$route.fullPath" />
  <!--Forum title-->
  <!--Forum Options-->
  <ForumOptions :key="$route.fullPath" />
  <!--Forum Options-->

  <LoadingIcon v-show="visibleLoading"></LoadingIcon>
  <RouterView @setLoading="(value) => { setLoadingVisibility(value);}"/>
</template>
