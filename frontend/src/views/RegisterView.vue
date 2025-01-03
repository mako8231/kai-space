<script>
import { endpointReq } from '@/axios.conf.js'
import router from '@/main';

export default {
    data : function(){
        return {
            formData : 
            {
                'email' : '',
                'username' : '',
                'password' : '',
                'password_confirmation' : ''    
            },
            errors: {
                'email' : [],
                'username' : [],
                'password' : [],
            }                        
        }    
    },

    methods : {
        async formSubmit(e){
            endpointReq("POST", "/register", this.formData).then(async res => {
                //If everything went ok...
                console.log(res);
                await this.$router.push('/').catch((err) => {
                    console.log("error while redirecting")
                })
            })
            .catch(err => {
                const error_fields = err.response.data 
                //Setting the error message 
                this.errors.email = error_fields['email']
                this.errors.username = error_fields['username']
                this.errors.password = error_fields['password']
            });
        }
    }
}

</script>

<template>
    <div class="container">
        <form @submit.prevent="formSubmit" action="" method="POST">
            <div class="row form-login-register">
                <div class="form-group col-lg-6">
                    <label for="userEmail"><span class="bold-text">E-mail</span></label>
                    <input v-model="this.formData.email" type="email" class="form-control" id="userEmail" placeholder="Email" required>
                    <div v-if="this.errors.email?.length">
                        <span style="color: red">
                            <ul>
                                <li v-for="(item, index) in errors.email">{{ item }}</li>
                            </ul>
                        </span>
                    </div>
                </div>
                <div class="form-group col-lg-6">
                    <label for="userName"><span class="bold-text">Username</span></label>
                    <input v-model="this.formData.username" type="text" class="form-control" id="userName" placeholder="Username" required>
                    <div v-if="this.errors.username?.length">
                        <span style="color: red">
                            <ul>
                                <li v-for="(item, index) in errors.username">{{ item }}</li>
                            </ul>
                        </span>
                    </div>
                </div>
                <div class="form-group col-lg-12">
                    <label for="userPassword"><span class="bold-text">Password</span></label>
                    <input v-model="this.formData.password" type="password" class="form-control" id="userPassword" placeholder="Password" required>
                    <div v-if="this.errors.password?.length">
                        <span style="color: red">
                            <ul>
                                <li v-for="(item, index) in errors.password">{{ item }}</li>
                            </ul>
                        </span>
                    </div>
                </div>
                <div class="form-group col-lg-12">
                    <label for="userPasswordConfirm"><span class="bold-text">Confirm Password</span></label>
                    <input v-model="this.formData.password_confirmation" type="password" class="form-control" id="userPasswordConfirm" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <div class="container">
                        <div class="row d-flex justify-content-between">
                            <button class="form-button btn btn-primary">Register</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </form>
    </div>
</template>