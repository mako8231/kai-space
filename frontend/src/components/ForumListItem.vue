<script setup>
</script>

<template>
    <div class="col-lg-4">
                <div class="forum-post container">
                    <div class="row d-flex">
                        <div class="pt-4 pl-4 pb-4">
                            <RouterLink to="/profile">
                                <img 
                                class="rounded-circle profile-picture"
                                src="../assets/pictures/pfp.jpg" 
                                alt=""
                                >
                            </RouterLink>
                            <RouterLink class="forum-link" to="/profile"><span class="post-profile-name">Perfil Usuario</span></RouterLink>
                        </div>
                    </div>

                    <div class="row">
                        <RouterLink class="forum-link" to="/post"><h4 class="post-list-title">Postagem Teste, post muito legal lalalalaalalala</h4></RouterLink>
                    </div>

                    <div class="row d-flex">
                        <RouterLink to="/post"><img class="rounded mx-auto d-block post-list-thumbnail" src="../assets/pictures/landscape.jpg" alt=""></RouterLink>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="d-flex justify-content-between">
                            <span>Likes: 2</span>
                            <span>Comments: 2</span>
                            <span>Views: 2</span>
                        </div>
                    </div>
                    
                    <div class="row mt-4 mb-4 pb-4">
                        <div class="d-flex justify-content-between">
                            <span><a href="#">Like</a></span>
                            <span><a href="#">Comment</a></span>
                        </div>
                    </div>
                    </div>
                </div>
            
</template>