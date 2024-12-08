<script>

export default {

    data : function() {
        return {
            items : [{value: 'About', id: '#about-me'}, 
                     {value: 'Art Posts', id: '#art-posts'}, 
                     {value: 'Thread Topics', id: '#thread-disc'}, 
                     {value: 'Comments', id: '#comments'}
                ],
            activeIndex : 0,
        }
    },

    methods: {
        setIndex : function(value) {
            this.activeIndex = value
            this.$emit('indexUpdate', this.activeIndex)
        }
    }

}



</script>

<template>
<div>
    <nav class="profile-nav navbar navbar-expand-lg">
        <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li v-for="data, index in this.items" :key="index" class="nav-item">
                        <a @click.stop="setIndex(index)" class="nav-link active" aria-current="page" :href="data.id">{{ data.value }}</a>
                    </li>                   
                </ul>
                </div>
        </div>
    </nav>

</div>
</template>