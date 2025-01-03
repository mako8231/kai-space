<script>
import UploadInput from '@/components/Forms/UploadInput.vue';


export default {
    components: {
        UploadInput,
    },

    data: function () {
        return {
            galleryItems: [],
            maxCount: 10,
            formData: {pictures : []},
        }
    },


    methods: {
        appendGalleryInput() {
            if (this.galleryItems.length < this.maxCount) {
                this.galleryItems.push(`Picture #${this.galleryItems.length + 1}`)              
            }

        },
        removeGalleryInput() {
            if (this.galleryItems.length > 0) {
                delete this.formData[`picture_${this.galleryItems.length - 1}`];
                this.galleryItems.pop();
                //also remove the sent file
                this.formData.pictures.pop();
            }
        },
        addUploadedPicture(index, file) {
            this.formData.pictures.push(file);
        },
        submitThread() {
            this.$emit('transferFormData', this.formData);
        }
    }

}
</script>

<template>
    <div>
        <div class="container">
        <form @submit.prevent="submitThread()" method="POST">
            <div class="row form-login-register">
                
                <div class="form-group">
                    <label for="title"><span class="bold-text">Thread Name</span></label>
                    <input v-model="this.formData['title']" type="text" class="form-control" id="title" placeholder="Thread Name" required>
                </div>
                

                <div class="form-group">
                    <label for="description"><span class="bold-text">Thread Description</span></label>
                    <textarea v-model="this.formData['body']" type="text" class="form-control" id="description" placeholder="Write something about:" required></textarea>
                </div>
                

                <div class="form-group">
                    <div v-if="this.galleryItems.length > 0">
                        <label for="">The first uploaded image will become the thread's thumbnail</label>
                    </div>
                    <div v-for="(inputG, index) in galleryItems">
                        <UploadInput @fileUploaded="(id, file) => {addUploadedPicture(id, file)}" :id="index" :label="inputG"/>
                    </div>
                    <div class="d-flex">
                        <button @click="appendGalleryInput()" class="form-button btn btn-primary mx-2">[+] Add Picture:</button>
                        <button @click="removeGalleryInput()" class="form-button btn btn-primary mx-2">[-] Remove Picture:</button>
                    </div>
                </div>
            


                <div class="form-group col-lg">
                    <div class="container">
                        <div class="row d-flex justify-content-between">
                            <button class="form-button btn btn-primary">Post</button>
                        </div>
                    </div>
                </div>

                
            </div>
        </form>
        </div>
    </div>
</template>