<script>

import UploadInput from '@/components/Forms/UploadInput.vue';

export default {
    components: {
        UploadInput
    },

    data: function () {
        return {
            galleryItems: [],
            maxCount: 10,
        }
    },


    methods: {
        appendGalleryInput() {
            if (this.galleryItems.length < this.maxCount) {
                this.galleryItems.push(`Picture #${this.galleryItems.length}`)                
            }

        },
        removeGalleryInput() {
            if (this.galleryItems.length > 0) {
                this.galleryItems.pop();   
            }
        }
    }

}


</script>

<template>
    <div class="container">
        <form @submit.prevent="" method="POST">
            <div class="row form-login-register">
                
                <div class="form-group">
                    <label for="userEmail"><span class="bold-text">Thread Name</span></label>
                    <input type="text" class="form-control" id="userEmail" placeholder="Email or Username">
                </div>
                

                <div class="form-group">
                    <label for="userPassword"><span class="bold-text">Password</span></label>
                    <textarea type="password" class="form-control" id="userPassword" placeholder="Password"></textarea>
                </div>
                

                <div class="form-group">
                    <div v-for="(inputG, index) in galleryItems">
                        <UploadInput :key="index" :label="inputG"/>
                    </div>
                    <div class="d-flex">
                        <button @click="appendGalleryInput()" class="form-button btn btn-primary mx-2">[+] Add Picture:</button>
                        <button @click="removeGalleryInput()" class="form-button btn btn-primary mx-2">[-] Remove Picture:</button>
                    </div>
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