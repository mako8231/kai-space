<script>
import { ref, useTemplateRef } from 'vue'
import { fileToBase64 } from '@/frontend/fileHandler';

let uploadFile = ref(null);
const input = useTemplateRef('image-input');

const allowedTypes = ref({
    "image/jpeg": 'jpg',
    "image/jpg": 'jpg',
    "image/png": 'png',
    "image/webp" : 'webp'
})


export default {
    props: ['id', 'label'],

    data(){
        return {
            imageFile: '',
            warns: []
        }
    },

    methods: {
        generateID: function () {
            return `picture_${this.id}`
        },

        handleFile: async function ($event) {
            //clear the warns array
            this.warns = []

            let root = this.$parent
            //Call the loading component from the App
            root.$parent.$emit("setLoading", true)

            const file = $event.target.files[0];
            console.log(file);
            if (allowedTypes.value[file.type] !== undefined) {
                
                let base64String = await fileToBase64(file)
                uploadFile.value = {type: file.type, fileString: base64String}
                this.$emit('fileUploaded', this.generateID(), uploadFile.value);

                //Close the loading component
                root.$parent.$emit("setLoading", false)
            } else {
                //add the error message 
                this.warns.push("Invalid file type, use the following formats: JPG, PNG, WEBP");
                $event.target.value = ''
                root.$parent.$emit("setLoading", false)
                
            }
        }
    }

}
</script>

<template>
    <label :for="generateID()"><span class="bold-text">{{ this.label }}</span></label>
    <div v-if="warns.length > 0">
        
        <label v-for="warn in warns" class="bold-text" style="color: rgb(199, 115, 5)">{{ warn }}</label>
    
    </div>
    <input ref='image-input' @change="handleFile($event)" type="file" class="form-control" :id=generateID() required>
</template>