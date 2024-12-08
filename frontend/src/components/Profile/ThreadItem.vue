<script>
export default {
    props: ['typeKey'],
    data : function(){
        return {
            type : {"1" : "Open Thread", "2" : "Reply"}
        }
    },
}
</script>

<template>
    <div class="container thread-item">
        <div class="topic-item">
            <div class="topic-title row">
                <span class="title"><a class="forum-link" href="#"> <span v-if="this.typeKey === '2'">RE: </span> Topic title</a> <span class="topic-date">2022/12/14</span></span> 
            </div>
            <hr>
            <div class="topic-body row">
                <span><a class="forum-link" href="#"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis rerum nobis quibusdam minima earum quasi necessitatibus, commodi ad saepe nesciunt possimus dolor recusandae quidem iusto harum qui dolorum eos aliquid [...]</p></a></span>
            </div>
            <div class="button-group">
                <a href="#" class=" btn btn-primary">{{ this.type[this.typeKey] }}</a>
            </div>
        </div>
    </div>
</template>