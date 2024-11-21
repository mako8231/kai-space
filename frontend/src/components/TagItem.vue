<script>
import { onMounted } from 'vue';

export default {
    props : ['typeName', 'tagName'],
    data : function(){
        return {
        }
    },
}

</script>

<template>
    <RouterLink class="forum-link" ><span :class="this.typeName">{{ tagName }}</span></RouterLink>
</template>