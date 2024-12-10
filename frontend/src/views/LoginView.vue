<script>
import { endpointReq } from '@/axios.conf.js'
import router from '@/main';


export default {
    data : function()
    {
        return {
            formData : 
            {
                "email" : "",
                "password" : "",
            }
        }    
    },

    methods: {
        formSubmit : async function(e){
            endpointReq("POST", "/login", this.formData).then(async res => {
            //If everything went ok...
            console.log(res);
            await router.push('/').catch((err) => {
                console.log("error while redirecting")
                })
            })
            .catch(err => {
                console.log(err);
                //const error_fields = err.response.data 
                //Setting the error message 
                //this.errors.email = error_fields['email']
                //this.errors.username = error_fields['username']
                //this.errors.password = error_fields['password']
            });
        }
    }
}

</script>

<template>
    <div class="container">
        <form @submit.prevent="formSubmit" method="POST">
            <div class="row form-login-register">
                <div class="form-group col-lg-6">
                    <label for="userEmail"><span class="bold-text">E-mail or Username</span></label>
                    <input v-model="this.formData.email" type="text" class="form-control" id="userEmail" placeholder="Email or Username">
                </div>
                <div class="form-group col-lg-6">
                    <label for="userPassword"><span class="bold-text">Password</span></label>
                    <input v-model="this.formData.password" type="password" class="form-control" id="userPassword" placeholder="Password">
                </div>
                <div class="form-group col-lg">
                    <div class="container">
                        <div class="row d-flex justify-content-between">
                            <button class="form-button btn btn-primary">Sign in</button>
                        </div>
                    </div>
                </div>
                
            </div>
        </form>
    </div>
</template>