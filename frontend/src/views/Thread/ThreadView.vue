<script setup>
import ThreadStatusLabel from '@/components/ThreadPost/ThreadStatusLabel.vue';
import ThreadDrawingThumbnail from "@/components/ThreadPost/ThreadDrawingThumbnail.vue"
import ImageGallery from '@/components/ThreadPost/ImageGallery.vue'
import CommentForm from '@/components/ThreadPost/CommentForm.vue'
import TagItem from '@/components/ThreadPost/TagItem.vue';
import TopThreadCommentary from '@/components/ThreadPost/TopThreadCommentary.vue';
</script>

<template>
    <div class="pt-4 container forum-list-container">
       <div class="row">
            <!--Thread content section-->
            <div class="col-lg-8">
                <div class="container">
                    <h4>Thread title</h4>
                    <span class="published-date-label">Published on: 20/10/2022</span>
                    <p><span class="bold-text">On:</span> Drawings</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia optio, necessitatibus ut voluptatem animi rem, unde laboriosam pariatur corporis voluptates quasi alias fugiat quae libero veniam id explicabo nemo non?</p>
                    <ImageGallery/>
                </div>
    
                <hr>

            </div>

            <div class="col-lg-4">
                <h4>Credits:</h4>
                <hr>
                <div class="container">
                    <div class="d-flex">
                        <RouterLink to="/profile">
                            <img 
                            class="rounded-circle profile-picture"
                            src="../../../src/assets/pictures/pfp.jpg" 
                            alt=""
                            >
                        </RouterLink>
                        <span class="op-username-thread bold-text align-self-center">Username</span>
                        <button class="thread-follow-btn btn btn-primary my-3">Follow</button>
                    </div>
                </div>
                <hr>
                <!--Post numbers-->
                <ThreadStatusLabel labelTitle="Views" value="10" />
                <ThreadStatusLabel labelTitle="Likes" value="10" />
                <ThreadStatusLabel labelTitle="Favs" value="10" />

                <hr>

                <h4>More of this User:</h4>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <ThreadDrawingThumbnail/>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <ThreadDrawingThumbnail/>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <ThreadDrawingThumbnail/>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="container">
                    <h4>Tags:</h4>
                    <p><span class="bold-text">Artist(s): </span>
                        <TagItem typeName="artist-tag" tagName="Mako"/>
                        <TagItem typeName="artist-tag" tagName="Da Silva"/>
                        
                    </p>
                    <p><span class="bold-text">Other(s): </span>
                        <TagItem typeName="other-tag" tagName="Catgirl"/>
                        <TagItem typeName="other-tag" tagName="Creatura"/>  
                    </p>
                    
                </div>
                <hr>
                <CommentForm></CommentForm>
                
            </div>

       </div>
       <div class="row">


         <div class="col-lg-8">
            <div class="container">
                <div class="row">
                    <h4>Top Thread Commentaries:</h4>
                </div>
            </div>

            <hr>

            <div class="container">
                <span>231 replies <RouterLink class="forum-link" to="#">click here to view</RouterLink></span>
            </div>

            <TopThreadCommentary usernameID="1" postID="1"></TopThreadCommentary>
            <TopThreadCommentary usernameID="2" postID="2"></TopThreadCommentary>
            <TopThreadCommentary usernameID="3" postID="3"></TopThreadCommentary>
         </div>
       </div>
    </div>
</template>