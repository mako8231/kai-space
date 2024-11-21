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
                                src="https://i.pinimg.com/736x/8e/d6/93/8ed693978b73ab6a0de9cf6dd3a426d0.jpg" 
                                alt=""
                                >
                            </RouterLink>
                            <RouterLink class="forum-link" to="/profile"><span class="post-profile-name">Perfil Usuario</span></RouterLink>
                        </div>
                    </div>

                    <div class="row">
                        <RouterLink class="forum-link" to="/thread"><h4 class="post-list-title">Postagem Teste, post muito legal lalalalaalalala</h4></RouterLink>
                    </div>

                    <div class="row d-flex">
                        <RouterLink to="/thread"><img class="rounded mx-auto d-block post-list-thumbnail" src="https://i.pinimg.com/736x/a8/e4/bd/a8e4bd9411fa1dec31aa444ab06ac503.jpg" alt=""></RouterLink>
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