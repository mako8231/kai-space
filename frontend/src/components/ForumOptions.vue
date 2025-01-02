
<script>

import { verifySession, logout } from '@/api.handling';
import { onMounted } from 'vue';
import { ref } from 'vue';
import router from '@/main';


//Set logged_in as reference value to be accessed by the component
let logged_in = ref(false)

export default { 
  data : function(){
    return {logged : logged_in}
  },

  methods: {
    async getSession() {
      let session = await verifySession()
      return session
    },

    async logout() {
      try {
        let res = await logout()
        await this.$router.push('/login')
        logged_in.value = false;        
      } catch (err) {
          console.log(err)
      }
    }

  },

  setup: function(){
    onMounted(async () => {
      let response = await verifySession();
      if (response !== undefined) {    
        console.log(response)  
        logged_in.value = (response.status == 200) 

      }
    });
  
  },

}

</script>

<template>
  <div class="container" v-cloak>
    <div class="row d-flex">
      <div class="col-lg-10">
        <ul class="list-group list-group-horizontal">
          <RouterLink class="forum-link" to="/forums"><li class="options-link-item list-group-item">Forums</li></RouterLink>
          <RouterLink class="forum-link" to="/booru"><li class="options-link-item list-group-item">Imageboard</li></RouterLink>
          <RouterLink class="forum-link" to="/posts"><li class="options-link-item list-group-item">Posts</li></RouterLink>
        </ul>
      </div>
      <div class="col-lg-2 ">
        <div v-if="!logged" class="d-flex flex-row justify-content-center">
              <RouterLink to="/login" class="options-link-item nav-link active mx-2" href="#">Login</RouterLink>
              <RouterLink to="/register" class="options-link-item nav-link active mx-2" href="#">Register</RouterLink>            
        </div>
        <div v-if="logged" class="d-flex flex-row justify-content-center">
              <a href="#" class="options-link-item nav-link active mx-2">Profile</a>
              <a @click="logout()" href="#" class="options-link-item nav-link active mx-2">LogOut</a>            
        </div>
      </div>
    </div>
  </div>
</template>