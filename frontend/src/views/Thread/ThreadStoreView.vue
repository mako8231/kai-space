
<script>
import ThreadForm from '@/components/ThreadForm.vue';
import { verifySession } from '@/api.handling'
import { endpointReq } from '@/axios.conf';
import ErrorField from '@/components/ErrorField.vue'
import { generateErrorMessage } from '@/frontend/errors'
import { ref } from 'vue'

let sessionCheck = ref(false)   
        
export default {
    components: {
        ThreadForm,
        ErrorField
    },

    data: function () {
        return {
            visible: sessionCheck,
            errors: []
        }
    },

    methods: {
        formSubmit: async function (data) {
            this.$parent.$emit("setLoading", false)
            console.log(data);
            const authorData = await this.getLoggedProfile();
            if (authorData === null) {
                return 
            }

            //get user profile ID
            let profile = authorData.data.profile.id;
            data['author'] = profile;


            //Need to work it on exception handling
            await endpointReq("POST", "/api/thread", data)
                .then((res) => {
                    this.$parent.$emit("setLoading", false)
            
                    console.log(res);
                })
                .catch((err) => {
                    this.$parent.$emit("setLoading", false)
                    this.errors = generateErrorMessage(err.response)
                })
            
        },
        getLoggedProfile: async function() {
            const res = await endpointReq('GET', '/api/user')
                .then((res) => {
                    return res;        
                })
                .catch(err => {
                    return err
                })

            if (res.status === 200) {
                return res      
            } else {
                return null
            }

            
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
            this.$parent.$emit("setLoading", false)
            return this.$router.push('/404')
        }

        sessionCheck.value = res.status == 200;
        this.$parent.$emit("setLoading", false)
    }

}

</script>

<template>
    <ErrorField :errors="this.errors"></ErrorField>
    <ThreadForm @transferFormData="(data) => {formSubmit(data)}" v-if="this.visible"></ThreadForm>
</template>
