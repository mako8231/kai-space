<script>
export default {
    data : function(){
        return {
            commentary : {
                '1' : "Oi achei o seu desenho legal!!! Muito bom você faz commision?",
                '2' : "Cara é a Izutsumi de Berserk mano",
                '3' : "VÁ PARA O MEU CIRCO!!!!"
            },

            user : {
                '1' : {
                    'username' : 'Izutsumi Fan',
                    'profile' : 'https://i.pinimg.com/736x/8e/d6/93/8ed693978b73ab6a0de9cf6dd3a426d0.jpg'
                },
                '2' : {
                    'username' : 'Guts o Guerreiro Berserk',
                    'profile' : 'https://i.pinimg.com/736x/c0/41/7a/c0417a53e6f15626c75b043405e3dcbe.jpg'
                },
                '3' : {
                    'username' : "EVIL CLOWN",
                    'profile' : 'https://i.pinimg.com/736x/8f/c8/32/8fc8326a073edd29af1998bde098b205.jpg'
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
                    <RouterLink class="forum-link" to="#"><p>{{ this.user[this.usernameID].username }}</p></RouterLink>
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