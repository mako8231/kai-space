
<script>
import ThreadForm from '@/components/ThreadForm.vue';
import { ref } from 'vue';
import { verifySession } from '@/api.handling'
import router from '@/main';

export default {
    components: {
        ThreadForm
    },


    setup(){
        
    },

    async mounted() {
        console.log("HOIIII")
        const res = await verifySession().then((res) => {
            console.log(res)
            return res
        }).catch((err) => {
            console.log("ERROR", err);
            return err 
        })

        if (res.status != 200) {
            return router.push('/404')
        }

    }

}



</script>

<template>
    <ThreadForm></ThreadForm>
</template>