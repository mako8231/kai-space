<script>
import { ref } from 'vue'
import { fileToBase64 } from '@/frontend/fileHandler';

let uploadFile = ref(null);

export default {
    props: ['id', 'label'],

    data(){
        return {
            imageFile: ''
        }
    },

    methods: {
        generateID: function () {
            return `picture_${this.id}`
        },

        handleFile: async function ($event) {
            let root = this.$parent
            //Call the loading component from the App
            root.$parent.$emit("setLoading", true)

            const file = $event.target.files[0];
            uploadFile.value = await fileToBase64(file)
            this.$emit('fileUploaded', this.generateID(), uploadFile.value);

            //Close the loading component
            root.$parent.$emit("setLoading", false)
            
        }
    }

}
</script>

<template>
    <label :for="generateID()"><span class="bold-text">{{ this.label }}</span></label>
    <input @change="handleFile($event)" type="file" class="form-control" :id=generateID() required>
</template>