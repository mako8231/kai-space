<script>
export default {
    props: ['labelTitle', 'value'],
    data: function(){
        return {
        }
    }
}
</script>
<template>
    <div class="d-flex justify-content-around">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <span class="bold-text">{{ labelTitle }}: </span> <span>{{ value }}</span>
                
                </div>
                
            </div>
        </div>
    </div>
</template>