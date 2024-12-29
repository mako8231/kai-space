<script>
export default {
    props: ['key', 'label'],

}
</script>

<template>
    <label for="userPassword"><span class="bold-text">{{ this.label }}</span></label>
    <input type="file" class="form-control" id="exampleFormControlFile1" required>
</template>