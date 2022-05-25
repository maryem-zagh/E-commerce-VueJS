<template>
    <div class="bg-white">
        <div class="max-w-2xl mx-auto py-0 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div
                v-if="products"
                class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-3 xl:gap-x-8"
            >
                <router-link
                    v-for="product in products"
                    :key="product.id"
                    class="group"
                    :to="{
                        name: 'product-details',
                        params: { product: product.slug },
                    }"
                >
                    <div
                        class="w-full aspect-w-1 aspect-h-1 bg-gray-200 overflow-hidden xl:aspect-w-7 xl:aspect-h-8"
                    >
                        <img
                            :src="product.imageSrc"
                            :alt="product.imageAlt"
                            class="w-full h-full object-center object-cover group-hover:opacity-75"
                        />
                    </div>
                    <h3
                        class="mt-4 text-xl font-light capitalize font-Gotham text-gray-900 text-center"
                    >
                        {{ product.title }}
                    </h3>
                    <p
                        class="mt-2 text-sm text-gray-500 text-center font-Gotham"
                    >
                        {{ product.price }} TND
                    </p>
                    <p
                        class="mt-1 text-lg font-medium text-gray-900 text-center"
                    >
                        X X
                    </p>
                </router-link>
            </div>
            <!-- <div v-else>No product found</div> -->
        </div>
    </div>
</template>

<script>
export default {
    props: {
        products: {
            type: Object,
            required: true,
        },
    },
    data() {
        return {
            // products: [],
            // categories: [],
        };
    },
};
</script>
