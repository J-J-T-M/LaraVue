<template>
  <div class="users">
    <h1>This is an users page</h1>
    <div v-for="user in users">
      <h3>{{ user.name }}</h3> 
      <div v-for="post in user.posts">
        {{ post.title }} <br>
      </div>

    </div>
   
  </div>
</template>

<script>
  export default {
    data() {
      return {
        users: []
      }
    },
    async created() {
      await fetch('http://127.0.0.1:8000/api/users')
      .then(response => response.json())
      .then( r => {
        this.users = r;
      })
    }
  }
</script>
