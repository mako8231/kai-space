<script>
import { RouterLink } from 'vue-router';
import ThreadItem  from '@/components/Profile/ThreadItem.vue'

export default {
    components : {
        ThreadItem
    }
}

</script>
    
<template>
    <div id="thread-disc">
        <ThreadItem/>
        <ThreadItem/>
        <ThreadItem/>
    </div>
</template>