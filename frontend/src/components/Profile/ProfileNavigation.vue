<script>
export default {
    data : function() {
        return {
            items : ['About', 'Art Posts', 'Thread Discussions', 'Comments'],
            active_index : 0
        }
    },


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
                    
                    <li v-for="index, value in this.items" class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">About</a>
                    </li>
                   
                </ul>
                </div>
        </div>
    </nav>

</div>
</template>