<script>
export default {
    data : function(){
        return {
            commentary : {
                '1' : "Nice!",
                '2' : "Very lovely",
                '3' : "Great photography"
            },

            user : {
                '1' : {
                    'handle' : 'user1',
                    'username' : 'Wurauel',
                    'profile' : '../../src/assets/pictures/pfp.jpg'
                },
                '2' : {
                    'handle' : 'munlixa300',
                    'username' : 'Bosirob',
                    'profile' : '../../src/assets/pictures/pfp2.webp'
                },
                '3' : {
                    'handle' : 'whurru120',
                    'username' : "Mulniak",
                    'profile' : '../../src/assets/pictures/pfp3.jpeg'
                }
            }
        }
    }, 

    props: ['usernameID', 'postID'],
}
</script>

<template>
    <div class="top-commentary container">
        <div class="row">
            <div class="d-flex">
                <div class="">
                        <img 
                    class="comment-pfp rounded-circle profile-picture"
                    :src="this.user[this.usernameID].profile" 
                    alt=""
                    >
                </div>
                
                <div class="commentary-username mt-4">
                    <div class="d-flex">
                        <RouterLink class="forum-link" to="#"><p>{{ this.user[this.usernameID].username }}</p></RouterLink>
                        <RouterLink style="text-decoration: none;" to="#">
                            <span class="commentary-username-handle">@{{ this.user[this.usernameID].handle }}</span>
                        </RouterLink>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="commentary-body">
                    <p>{{ commentary[this.postID] }}</p>
            </div>    
        </div>
        <div class="row">
            <div class="container d-flex align-items-center">
                <RouterLink><i style="color: rgb(61, 90, 78); font-size: 2rem" class="bi bi-suit-heart"></i></RouterLink><span style="margin-left: 12px; font-size: 1.2rem" class="my-1">1</span>
            </div>
        </div>
    </div>
</template>