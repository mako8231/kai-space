<script>
import ProfileNavigation from '@/components/Profile/ProfileNavigation.vue';
//Section fields
import AboutSection from '@/components/Profile/AboutSection.vue'
import ArtGallery from '@/components/Profile/ArtGallery.vue'
import ThreadComment from '@/components/Profile/ThreadComment.vue'
import ThreadDiscussion from '@/components/Profile/ThreadDiscussion.vue'


export default {
    data : function () {
        return {
            navIndex: 0
        }
    },
    
    components : {
        ProfileNavigation,
        AboutSection,
        ThreadComment,
        ThreadDiscussion,
        ArtGallery
    },
}



</script>

<template>
    <div class="banner">
            <div class="jumbotron profile-cover-banner">
                <div class="container for-about">
                    <div class="container">
                        <div class="pfp-section d-flex">
                            <div class="profile-picture">
                                <img 
                                    class="active rounded-circle profile-picture"
                                    src="../../../src/assets/pictures/pfp.jpg" 
                                    alt=""
                                >
                            </div>
                            <div class="profile-name">
                                <h1>Profile Name</h1>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="jumbotron profile-details">
                    <div class="container">
                        <div class="d-flex">
                            <div class="container followers">
                                <h4>Followers</h4>
                                <p>12</p>
                            </div>
                            <div class="container art-threads">
                                <h4>Art Threads</h4>
                                <p>12</p>
                            </div>
                            <div class="container disc-threads">
                                <h4>Discussion Threads</h4>
                                <p>12</p>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container activity">
                <div class="recent">
                    {{ this.navIndex }}
                    <ProfileNavigation @indexUpdate="(index) => {this.navIndex = index}"/>
                    <div class="container mx-2">
                        <div class="about-me-title">
                            
                        </div>
                    </div>
                </div>

                <AboutSection v-if="this.navIndex == 0"/>
                <ArtGallery v-if="this.navIndex == 1"/>
                <ThreadComment v-if="this.navIndex == 2"/>
                <ThreadDiscussion v-if="this.navIndex == 3"/>
                
                
            </div>
        </div>

</template>