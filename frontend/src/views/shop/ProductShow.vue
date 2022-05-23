<!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<template>
    <div class="bg-white">
        <div class="max-w-2xl mx-auto py-16 px-4 sm:px-6 lg:max-w-7xl lg:px-4">
            <div class="flex flex-col flex-wrap items-center">
                <h1
                    class="text-5xl font-normal text-gray-900 capitalize pt-10 font-Amaline tracking-wider"
                >
                    {{ product.title }}
                </h1>
                <p
                    class="text-3xl font-normal text-gray-600 capitalize pt-3 pb-16 font-Gotham"
                >
                    <router-link
                        class="text-gray-500"
                        :to="{
                            name: 'home',
                        }"
                    >
                        Home /
                    </router-link>
                    <router-link
                        v-if="product.categories[0]"
                        class="text-gray-500"
                        :to="{
                            name: 'products-category',
                            params: {
                                slug: product.categories[0].slug,
                                name: product.categories[0].name,
                            },
                        }"
                    >
                        {{ product.categories[0].name }} /
                    </router-link>

                    {{ product.title }}
                </p>
            </div>

            <div
                class="grid grid-cols-1 gap-y-10 gap-x-10 md:grid-cols-5 lg:grid-cols-9 xl:grid-cols-9"
            >
                <div class="group col-span-4">
                    <div
                        class="w-full aspect-w-1 aspect-h-1 bg-gray-200 overflow-hidden xl:aspect-w-7 xl:aspect-h-8"
                    >
                        <img
                            :src="product.imageSrc"
                            :alt="product.imageAlt"
                            class="w-full h-full object-center object-cover group-hover:opacity-75"
                        />
                    </div>
                </div>

                <div
                    class="grid grid-cols-4 gap-x-2 gap-y-2 md:grid-cols-1 lg:grid-cols-1"
                >
                    <div
                        class="w-full aspect-w-1 aspect-h-1 bg-gray-200 overflow-hidden xl:aspect-w-7 xl:aspect-h-8"
                    >
                        <img
                            :src="product.imageSrc"
                            :alt="product.imageAlt"
                            class="w-full h-full object-center object-cover hover:opacity-75"
                        />
                    </div>

                    <div
                        class="w-full aspect-w-1 aspect-h-1 bg-gray-200 overflow-hidden xl:aspect-w-7 xl:aspect-h-8"
                    >
                        <img
                            :src="product.imageSrc"
                            :alt="product.imageAlt"
                            class="w-full h-full object-center object-cover hover:opacity-75"
                        />
                    </div>
                    <div
                        class="w-full aspect-w-1 aspect-h-1 bg-gray-200 overflow-hidden xl:aspect-w-7 xl:aspect-h-8"
                    >
                        <img
                            :src="product.imageSrc"
                            :alt="product.imageAlt"
                            class="w-full h-full object-center object-cover hover:opacity-75"
                        />
                    </div>
                    <div
                        class="w-full aspect-w-1 aspect-h-1 bg-gray-200 overflow-hidden xl:aspect-w-7 xl:aspect-h-8"
                    >
                        <img
                            :src="product.imageSrc"
                            :alt="product.imageAlt"
                            class="w-full h-full object-center object-cover hover:opacity-75"
                        />
                    </div>
                </div>
                <div class="col-span-4">
                    <div>Ref: Nb524X01</div>
                    <h3 class="mt-4 text-sm font-medium text-gray-900">
                        {{ product.title }}
                    </h3>
                    <p class="mt-1 text-lg text-gray-700">
                        {{ product.description }}
                    </p>
                    <div>Available colors: X X</div>
                    <p
                        class="my-4 text-3xl font-Gotham font-light text-gray-900"
                    >
                        <span class="mr-4"> Price</span> {{ product.price }} TND
                    </p>
                </div>
            </div>
        </div>

        <div class="flex flex-col flex-wrap items-center">
            <h1
                class="text-3xl font-normal text-gray-900 capitalize pt-28 pb-16 font-Amaline tracking-wider"
            >
                Related products
            </h1>
        </div>

        <ProductsList :products="products" />
    </div>
</template>

<script>
import ProductsList from "./ProductsList.vue";
export default {
    components: { ProductsList },
    data() {
        return {
            product: [],
            products: [],
        };
    },
    mounted() {
        this.$http
            .get(
                "http://localhost:8000/api/products/related/" + this.product.id
            )
            .then((response) => {
                this.products = response.data;
                console.log("other products", this.products);
            })
            .catch((error) => {});
    },
    created() {
        this.loadProduct();
    },
    watch: {
        $route: function (to, from) {
            // console.log(to, from);
            this.loadProduct();
        },
    },
    methods: {
        loadProduct() {
            this.$http
                .get(
                    "http://localhost:8000/api/products/" +
                        this.$route.params.product
                )
                .then((response) => {
                    this.product = response.data;
                    console.log(this.product);
                })
                .catch((error) => {});
        },
    },
};
</script>
