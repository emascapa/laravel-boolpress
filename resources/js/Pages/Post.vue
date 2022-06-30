<template>
  <div>
    <div v-if="!loading">
      <div class="p-5 bg-primary text-light">
        <h1 class="display-3">{{ post.title }}</h1>
        <p class="lead">Category: {{ post.category }}</p>
      </div>

      <div class="container py-5">
        <p class="lead">{{ post.content }}</p>
      </div>
    </div>
    <div class="py-5 text-center" v-else>
        <p class="lead">Loading...</p>
    </div>
  </div>
</template>

<script>
export default {
  name: "Posts",

  data() {
    return {
      post: "",
      loading: true,
      //postResponse: "",
      //categories: "",
      //tags: "",
    };
  },

  methods: {
    //chiamata ajax per raccattare i posts
    //prende in input la pagina che vogliamo visualizzare
    getPost() {
      axios
        .get(`/api/posts/${this.$route.params.id}`)
        .then((response) => {
          console.log(response.data);

          this.post = response.data;

          //this.postResponse = response.data;

          //console.log(this.posts);

          this.loading = false;
        })
        .catch((e) => {
          console.error(e);
        });
    },

    /*     getCategories() {
      axios
        .get("/api/categories")
        .then((response) => {
          //console.log(response);

          this.categories = response.data;
        })
        .catch((e) => {
          console.error(e);
        });
    }, */

    /*     getTags() {
      axios
        .get("/api/tags")
        .then((response) => {
          //console.log(response);

          this.tags = response.data;
        })
        .catch((e) => {
          console.error(e);
        });
    }, */
  },

  mounted() {
    this.getPost();

    /*     this.getCategories();

    this.getTags(); */
  },
};
</script>