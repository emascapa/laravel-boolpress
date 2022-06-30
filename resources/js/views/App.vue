<template>
  <div>
    <!-- laravel header -->
    <header>
      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
          <router-link class="navbar-brand" :to="{ name: 'home' }"
            >BoolPress</router-link
          >
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label=""
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <router-link class="nav-link" :to="{ name: 'home' }"
                  >Homepage</router-link
                >
              </li>
              <li class="nav-item">
                <router-link class="nav-link" :to="{ name: 'about' }"
                  >About</router-link
                >
              </li>
              <li class="nav-item">
                <router-link class="nav-link" :to="{ name: 'posts' }"
                  >Posts</router-link
                >
              </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto"></ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- <welcome-page-guest></welcome-page-guest> -->

    <!--     <nav class="text-center">
      <router-link to="/">Home</router-link>
      <router-link to="/about">About</router-link>
      <router-link to="/posts">Posts</router-link>
    </nav> -->
    <main>
      <router-view></router-view>
    </main>

    <footer class="bg-dark text-light py-4 text-center">
      <span>Footer Here</span>
    </footer>
  </div>
</template>

<script>
//import WelcomePageGuest from "../components/WelcomePageGuest.vue";

export default {
  name: "App",

/*   components: {
    WelcomePageGuest,
  }, */

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
  /*  mounted() {
     this.getPosts(1);

    this.getCategories();

    this.getTags(); 

    console.log(this.$router.getRoutes());
  }, */
};
</script>