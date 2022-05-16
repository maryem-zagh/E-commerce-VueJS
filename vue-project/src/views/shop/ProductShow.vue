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
            <div class="flex flex-wrap justify-center">
                <div
                    v-for="category in categories"
                    :key="category.id"
                    class="p-4"
                >
                    {{ category.name }}
                </div>
            </div>
            <h2 class="mb-4">Product Detail</h2>

            <div
                class="grid grid-cols-1 gap-y-10  gap-x-10 md:grid-cols-5 lg:grid-cols-9  xl:grid-cols-9  "
            >
                <div class="group col-span-4">
                    <div
                        class="w-full aspect-w-1 aspect-h-1 bg-gray-200   overflow-hidden xl:aspect-w-7 xl:aspect-h-8"
                    >
                        <img
                            :src="product.imageSrc"
                            :alt="product.imageAlt"
                            class="w-full h-full object-center object-cover group-hover:opacity-75"
                        />
                    </div>
                </div>
                
                <div class="grid grid-cols-4 gap-x-2 gap-y-2  md:grid-cols-1  lg:grid-cols-1">
              

                    <div
                        class="w-full aspect-w-1 aspect-h-1 bg-gray-200  overflow-hidden xl:aspect-w-7 xl:aspect-h-8 "
                    >
                        <img
                            :src="product.imageSrc"
                            :alt="product.imageAlt"
                            class="w-full h-full object-center object-cover group-hover:opacity-75"
                        />
                    </div>

                    <div
                        class="w-full aspect-w-1 aspect-h-1 bg-gray-200 overflow-hidden xl:aspect-w-7 xl:aspect-h-8 "
                    >
                        <img
                            :src="product.imageSrc"
                            :alt="product.imageAlt"
                            class="w-full h-full object-center object-cover group-hover:opacity-75"
                        />
                    </div>
                    <div
                        class="w-full aspect-w-1 aspect-h-1 bg-gray-200 overflow-hidden xl:aspect-w-7 xl:aspect-h-8 "
                    >
                        <img
                            :src="product.imageSrc"
                            :alt="product.imageAlt"
                            class="w-full h-full object-center object-cover group-hover:opacity-75"
                        />
                    </div>
                    <div
                        class="w-full aspect-w-1 aspect-h-1 bg-gray-200 overflow-hidden xl:aspect-w-7 xl:aspect-h-8 "
                    >
                        <img
                            :src="product.imageSrc"
                            :alt="product.imageAlt"
                            class="w-full h-full object-center object-cover group-hover:opacity-75"
                        />
                    </div>
                </div>
                <div class="col-span-4">
                    <h3 class="mt-4 text-sm text-gray-700">
                        {{ product.title }}
                    </h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">
                        {{ product.price }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            product: null,
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
    created() {
        axios
            .get("http://localhost:8000/api/products/" + this.$route.params.id)
            .then((response) => {
                this.product = response.data;
                console.log(this.product);
            })
            .catch((error) => {});
    },
};
</script>
