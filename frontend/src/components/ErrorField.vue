<script>
export default {
    props: ['errors']
}    
</script>

<template>
    <div v-if="errors?.length > 0" class="container error-field">
        <div class="d-flex justify-content-center">
            <div class="container">
                <h3 class="error-title">ERROR!</h3>
                <ul>
                    
                    <li v-for="error in errors">{{ error }}</li>
                </ul>
            </div>
        </div>
    </div>
</template>