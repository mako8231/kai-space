<script>
import { RouterLink } from 'vue-router';
import ThreadItem  from '@/components/Profile/ThreadItem.vue'

export default {
    props: ['typeKey'],
    components : {
        ThreadItem
    }
}

</script>
    
<template>
    <div id="thread-disc">
        <ThreadItem :typeKey="this.typeKey"/>
        <ThreadItem :typeKey="this.typeKey"/>
        <ThreadItem :typeKey="this.typeKey"/>
    </div>
</template>