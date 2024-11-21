<script setup>
import ForumListItem from '@/components/ForumListItem.vue';
import ForumListTopMenu from '@/components/ForumListTopMenu.vue';
ForumListItem
</script>

<template>
<div class="container forum-list-container">
        <ForumListTopMenu></ForumListTopMenu>
        <div class="row">
            <ForumListItem></ForumListItem>
        </div>
    </div>
</template>