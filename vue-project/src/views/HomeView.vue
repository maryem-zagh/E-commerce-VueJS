<script  >
import Products from "./shop/ProductsList.vue";

import axios from "axios";
export default {
    data() {
        return {
            products: [],
            categories: [],
        };
    },
      components: {Products},
    created() {
        // axios
        //     .post("http://localhost:8000/api/products", {
        //         products: this.rawData,
        //     })
        //     .then((response) => {
        //         console.log("data", response.data);
        //     })
        //     .catch((error) => {});
    },
    mounted() {
        axios
            .get("http://localhost:8000/api/products")
            .then((response) => {
                this.products = response.data.products;
                this.categories = response.data.categories;
                console.log(this.products);
            })
            .catch((error) => {});
    },
};
</script>

<template>
    <main>
        
      <div class="flex flex-wrap justify-center ">
            <div
        v-for="category in categories"
        :key="category.id"
        class="p-4"
        
        >
        {{category.name}}
        </div>
      </div>
        <!-- <Products /> -->
    </main>
</template>
