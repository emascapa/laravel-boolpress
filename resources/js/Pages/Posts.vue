<template>

<div>
<h1>Post qui</h1>

    <div class="container-fluid">
      <div class="row">
        <main class="posts col-12 col-md-9">
          <div class="container py-5">
            <div
              class="
                row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4
                g-3
              "
            >
              <div class="col" v-for="post in postResponse.data" :key="post.id">
                <div class="card h-100">
                  <img :src="post.image" alt="" />

                  <div class="card-body">
                    <h5>{{ post.title }}</h5>

                    <p>{{ post.content }}</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="pagination mt-5 d-flex justify-content-center">
              <nav aria-label="Page navigation">
                <ul class="pagination">
                  <li
                    :class="
                      postResponse.current_page == 1
                        ? 'disabled page-item'
                        : 'page-item'
                    "
                  >
                    <a
                      class="page-link"
                      href="#"
                      aria-label="Previous"
                      @click="getPosts(postResponse.current_page - 1)"
                    >
                      <span aria-hidden="true">&laquo;</span>
                      <span class="visually-hidden">Previous</span>
                    </a>
                  </li>

                  <!--                     <li class="page-item active"><a class="page-link" href="#">1</a></li>

                    <li class="page-item"><a class="page-link" href="#">2</a></li> -->

                  <li
                    :class="
                      page_num == postResponse.current_page
                        ? 'page-item active'
                        : 'page-item'
                    "
                    v-for="page_num in postResponse.last_page"
                    :key="page_num"
                  >
                    <a class="page-link" href="#" @click="getPosts(page_num)">
                      {{ page_num }}
                    </a>
                  </li>

                  <li
                    :class="
                      postResponse.current_page == postResponse.last_page
                        ? 'disabled page-item'
                        : 'page-item'
                    "
                  >
                    <a
                      class="page-link"
                      href="#"
                      aria-label="Next"
                      @click="getPosts(postResponse.current_page + 1)"
                    >
                      <span aria-hidden="true">&raquo;</span>
                      <span class="visually-hidden">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </main>

        <aside class="col-12 col-md-3 bg-info text-center py-5">
          <div class="categories mb-5">
            <h2>Categories</h2>

            <ul class="list-unstyled">
              <li v-for="category in categories" :key="category.id">{{ category.name }}</li>
            </ul>
          </div>
          <div class="tags">
            <h2>Tags</h2>

            <ul class="list-unstyled">
              <li v-for="tag in tags" :key="tag.id"># {{ tag.name }}</li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
</div>
  
</template>

<script>
export default {
    name: 'Posts',

      data() {
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

  mounted() {
    this.getPosts(1);

    this.getCategories();

    this.getTags();
  },


}
</script>
