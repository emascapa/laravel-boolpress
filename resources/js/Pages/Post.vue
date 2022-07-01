<template>
  <div>
    <div v-if="!loading">
      <div class="p-5 bg-primary text-light">
        <h1 class="display-3">{{ post.title }}</h1>
        <p class="lead" v-if="post.category">Category: {{ post.category.name }}</p>
        <p class="lead" v-else>Category: N/A</p>
      </div>

      <div class="container py-5">
        <div class="row g-5">
          <div class="col-12 col-md-4">
            <img :src="post.image" :alt="post.title" class="img-fluid" />
          </div>
          <div class="col-12 col-md-8">
            <p class="lead">{{ post.content }}</p>
          </div>

          <div class="col-12 text-center d-flex flex-column align-items-center">
            <span class="mb-2">Date: {{post.date}}</span>
            <span v-if="post.tags.length > 0">Tags: 
                <span v-for="tag in post.tags" :key="tag.id">
                    #{{tag.name}}
                </span>
            </span>
            <span v-else>Tags: N/A</span>

          </div>
        </div>
        
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

          if (response.data.status_code == 404) {

            //this.loading = false;

            this.$router.push({name: 'not-found'})
          
          } else {

          this.post = response.data;

          //this.postResponse = response.data;

          //console.log(this.posts);

          this.loading = false;

          }
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