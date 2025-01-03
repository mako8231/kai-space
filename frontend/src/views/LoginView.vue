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
            },

            errors:
            {
                "email": "",
                "password" : ""    
            }
        }    
    },

    methods: {
        formSubmit : async function(e){
            endpointReq("POST", "/login", this.formData)
                .then(async res => {
                //If everything went ok...
                console.log(res);
                    await this.$router.push('/')
                })
                .catch(err => {
                    console.log(err);
                    const error_fields = err.response.data.errors
                    console.log(error_fields)
                    //Setting the error message 
                    this.errors.email = error_fields['email']
                    this.errors.password = error_fields['password']
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
                    <label for="userEmail"><span class="bold-text">E-mail</span></label>
                    <div v-if="this.errors.email?.length">
                        <span style="color: red">
                            <ul>
                                <li v-for="(item, index) in errors.email">{{ item }}</li>
                            </ul>
                        </span>
                    </div>                    
                    <input v-model="this.formData.email" type="text" class="form-control" id="userEmail" placeholder="Email or Username" required>
                </div>
                <div class="form-group col-lg-6">
                    <label for="userPassword"><span class="bold-text">Password</span></label>
                    <div v-if="this.errors.password?.length">
                        <span style="color: red">
                            <ul>
                                <li v-for="(item, index) in errors.password">{{ item }}</li>
                            </ul>
                        </span>
                    </div>       
                    <input v-model="this.formData.password" type="password" class="form-control" id="userPassword" placeholder="Password" required>
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