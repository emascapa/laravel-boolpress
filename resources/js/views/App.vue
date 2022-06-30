<template>
  <div>
    <welcome-page-guest></welcome-page-guest>

    <nav class="text-center">
      <router-link to="/">Home</router-link> 
      <router-link to="/about">About</router-link> 
      <router-link to="/posts">Posts</router-link>
    </nav>

    <router-view></router-view>
  </div>
</template>

<script>
import WelcomePageGuest from "../components/WelcomePageGuest.vue";

export default {
  name: "App",

  components: {
    WelcomePageGuest,
  },

  /*   data() {
    return {
      posts: "",
      postResponse: "",
      categories: "",
      tags: "",
    };
  },

  methods: {
    //chiamata ajax per raccattare i posts
    //prende in input la pagina che vogliamo visualizzare
    getPosts(postPage) {
      axios
        .get("/api/posts", {
          //cerca i risultati della pagina selezionata
          params: {
            page: postPage,
          },
        })
        .then((response) => {
          //console.log(response.data);

          this.posts = response.data;

          this.postResponse = response.data;

          //console.log(this.posts);
        })
        .catch((e) => {
          console.error(e);
        });
    },

    getCategories() {
      axios
        .get("/api/categories")
        .then((response) => {
          //console.log(response);

          this.categories = response.data;
        })
        .catch((e) => {
          console.error(e);
        });
    },

    getTags() {
      axios
        .get("/api/tags")
        .then((response) => {
          //console.log(response);

          this.tags = response.data;
        })
        .catch((e) => {
          console.error(e);
        });
    },
  },
*/
  mounted() {
/*     this.getPosts(1);

    this.getCategories();

    this.getTags(); */

    console.log(this.$router.getRoutes());
  }, 
};
</script>