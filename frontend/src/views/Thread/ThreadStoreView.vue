
<script>
import ThreadForm from '@/components/ThreadForm.vue';
import { verifySession } from '@/api.handling'
import router from '@/main';
import app from '@/main';
import { ref } from 'vue'

let sessionCheck = ref(false)   
        
export default {
    components: {
        ThreadForm
    },

    data: function () {
        return {
            visible: sessionCheck,
            formData: {}
        }
    },

    async mounted() {
        sessionCheck.value = false 

        this.$parent.$emit("setLoading", true)

        console.log("HOIIII")
        const res = await verifySession().then((res) => {
            console.log(res)
            return res
        }).catch((err) => {
            console.log("ERROR", err);
            return err 
        })

        if (res.status != 200) {
            return this.$router.push('/404')
        }

        sessionCheck.value = res.status == 200;
        this.$parent.$emit("setLoading", false)
    }

}

</script>

<template>
    <ThreadForm v-if="this.visible"></ThreadForm>
</template>
