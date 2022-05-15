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
        <div
            class="max-w-2xl mx-auto py-0 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8"
        >
             <div class="flex flex-wrap justify-center ">
            <div
        v-for="category in categories"
        :key="category.id"
        class="p-4"
        
        >
        {{category.name}}
        </div>
      </div>
            <h2 class="mb-4">Products</h2>

            <div
                class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8"
            >
               
                 <router-link
                 v-for="product in products"
                 :key="product.id"
                       class="group"
                :to="{ name: 'product-details', params: { id: product.id } }">
                    <div
                        class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8"
                    >
                        <img
                            :src="product.imageSrc"
                            :alt="product.imageAlt"
                            class="w-full h-full object-center object-cover group-hover:opacity-75"
                        />
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700">
                        {{ product.title }}
                    </h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">
                        {{ product.price }}
                    </p>
                 </router-link>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            products: [],
            categories: [],
        };
    },
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
