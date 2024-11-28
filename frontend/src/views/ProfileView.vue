<script>
import ProfileNavigation from '@/components/Profile/ProfileNavigation.vue';

export default {
    components : {
        ProfileNavigation
    }
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
                    <h3>Forum's Recent Activity:</h3>
                    <ProfileNavigation/>
                </div>
                <div class="latest-art">
                    
                </div>
                <div class="latest-threads-discussions">

                </div>
                
            </div>
        </div>

</template>