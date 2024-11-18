<script setup>
</script>

<template>
  <div class="container">
    <div class="row d-flex">
      <div class="col-lg-10">
        <ul class="list-group list-group-horizontal">
          <RouterLink class="forum-link" to="/forums"><li class="options-link-item list-group-item">Forums</li></RouterLink>
          <RouterLink class="forum-link" to="/booru"><li class="options-link-item list-group-item">Imageboard</li></RouterLink>
          <RouterLink class="forum-link" to="/posts"><li class="options-link-item list-group-item">Posts</li></RouterLink>
        </ul>
      </div>
      <div class="col-lg-2">
        <ul class="nav">
          <li class="nav-item">
            <RouterLink to="/login" class="options-link-item nav-link active" href="#">Login</RouterLink>
          </li>
          <li class="nav-item">
            <RouterLink to="/register" class="options-link-item nav-link active" href="#">Register</RouterLink>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>