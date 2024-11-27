<script>
import { error } from 'jquery';
import { rewriteDefault } from 'vue/compiler-sfc';
import axios from '@/axios.conf.js'
import Cookies from 'js-cookie'
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
            axios.post('/register', this.formData)
                .then(async function (response){
                    //if everything succeded, redirect
                    console.log(response)
                    await router.push('/').catch((err) => {
                        console.log("error while redirecting")
                    })
                })
                .catch((error) => {
                    console.log(error)
                    if (error.status === 422){
                        const errors = error.response.data;
                        console.log(errors)
                        this.errors = errors

                        //bad form data
                        //errors = ['email', 'password', 'username']
                    }
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
                    <input v-model="this.formData.email" type="email" class="form-control" id="userEmail" placeholder="Email">
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
                    <input v-model="this.formData.username" type="text" class="form-control" id="userName" placeholder="Username">
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
                    <input v-model="this.formData.password" type="password" class="form-control" id="userPassword" placeholder="Password">
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
                    <input v-model="this.formData.password_confirmation" type="password" class="form-control" id="userPasswordConfirm" placeholder="Password">
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