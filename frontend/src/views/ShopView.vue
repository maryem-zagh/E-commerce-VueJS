<script>
import Products from "./shop/ProductsList.vue";

import axios from "axios";
export default {
    data() {
        return {
            products: null,
            subCategories: [],
        };
    },
    components: { Products },
    // created() {
    //     axios
    //         .post("http://localhost:8000/api/products", {
    //             products: this.rawData,
    //         })
    //         .then((response) => {
    //             console.log("data", response.data);
    //         })
    //         .catch((error) => {});
    // },

    created() {
        this.filterProducts();
    },
    watch: {
        $route: function (to, from) {
            // console.log(to, from);
            this.filterProducts();
        },
    },
    methods: {
        filterProducts() {
            this.$http
                .get("/products/category/" + this.$route.params.slug)
                .then((response) => {
                    this.products = response.data.products;
                    this.subCategories = response.data.subCategories;
                    console.log(this.products);
                })
                .catch((error) => {});
        },
    },
};
</script>

<template>
    <main class="h-max px-6">
        <div
            class="flex flex-col flex-wrap items-center justify-center py-24 md:py-16"
        >
            <h1
                class="text-5xl font-normal text-gray-900 capitalize font-Amaline tracking-wider"
            >
                {{ this.$route.params.slug }}
            </h1>
            <p
                class="text-3xl font-normal text-gray-600 capitalize pt-3 font-Gotham"
            >
                <router-link
                    class="text-gray-500"
                    :to="{
                        name: 'home',
                    }"
                >
                    Home /
                </router-link>
                {{ this.$route.params.slug }}
            </p>
        </div>

        <div
            v-if="subCategories.length > 0"
            class="flex flex-wrap justify-center pb-16"
        >
            <router-link
                v-for="category in subCategories"
                :key="category.id"
                class="uppercase font-light tracking-wide font-Gotham text-sm px-4 py-2"
                :to="{
                    name: 'products-category',
                    params: { slug: category.slug, name: category.name },
                }"
            >
                {{ category.name }}
            </router-link>
        </div>

        <Products :products="products" />
    </main>
</template>
