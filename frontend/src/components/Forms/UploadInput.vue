<script>
export default {
    props: ['id', 'label'],

    methods: {
        generateID: function () {
            return `picture_${this.id}`
        }
    }

}
</script>

<template>
    <label for="userPassword"><span class="bold-text">{{ this.label }}</span></label>
    <input type="file" class="form-control" :id=generateID() required>
</template>