<template>
  <div>
    <div>
      <div class="p-5 bg-info text-light">
        <h1 class="display-3">Home page eheh</h1>
        <p class="lead">Jumbo helper text</p>
        <hr class="my-2" />
        <p>More info</p>
        <p class="lead">
          <router-link class="btn btn-primary btn-lg" :to="{ name: 'posts' }"
            >Check Boolpress Posts</router-link
          >
        </p>
      </div>

      <div class="container py-5">
        <div class="row g-5">
          <div class="col-12 col-md-8">
            <h2>Lorem ipsum dolor sit.</h2>
            <p class="lead">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima
              facilis eligendi eos alias sapiente quisquam ad perferendis error
              hic iusto, explicabo distinctio ducimus! Aliquid veniam voluptatum
              quaerat amet accusantium in, laboriosam ea ut mollitia dolorum
              quis alias expedita minus aut praesentium minima dolorem voluptate
              sunt quisquam vel cum illo incidunt eaque. Odio aspernatur saepe
              in quam ipsa velit recusandae cupiditate. Vitae nobis, blanditiis,
              optio omnis dignissimos temporibus atque ipsum exercitationem
              placeat veritatis provident laudantium odit, dolorem ad similique.
              Soluta ea et at architecto nobis iste dicta, illum maiores nulla
              atque porro doloribus, quasi molestiae ipsam obcaecati, enim
              quibusdam delectus error?
            </p>
          </div>

          <div class="col-12 col-md-4">
            <h2>Dolor sit lorem</h2>
            <p class="lead">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic
              alias eligendi deserunt modi? Adipisci eius officia quasi fugiat
              corporis facilis suscipit eaque dolor id veritatis, omnis maiores
              aliquid nostrum quis dolorem fugit debitis et voluptate est, ipsam
              laborum magni, ipsa atque. Sint nostrum blanditiis voluptas
              praesentium veritatis distinctio alias numquam.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Home",
};
</script>
