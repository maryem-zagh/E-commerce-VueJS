<template>
    <main>
        <!-- <div class="flex flex-col text-center my-32">
            <router-link
                v-for="category in categories"
                :key="category.id"
                class="text-5xl font-normal text-gray-900 capitalize pt-10 font-Amaline tracking-wider"
                :to="{
                    name: 'products-category',
                    params: { slug: category.slug, name: category.name },
                }"
            >
                {{ category.name }}
            </router-link>
        </div> -->
        <div class="grid grid-cols-1 md:grid-cols-12 pb-3">
            <div class="md:col-span-7">
                <div
                    class="w-full aspect-w-1 aspect-h-1 bg-gray-200 overflow-hidden xl:aspect-w-7 xl:aspect-h-8"
                >
                    <img
                        src="@/assets/hero.png"
                        alt="product.imageAlt"
                        class="w-full h-full object-center object-cover"
                    />
                </div>
            </div>
            <div
                class="col-span-5 flex flex-col absolute top-56 right-0 w-4/6 p-20"
            >
                <p
                    class="font-Gotham font-medium text-6xl text-right hidden lg:block"
                >
                    01
                </p>
                <p
                    class="font-Amaline font-normal text-8xl text-right hidden lg:block"
                >
                    The Hidden----- Garden
                </p>
                <p
                    class="font-Gotham font-light text-2xl text-right hidden lg:block"
                >
                    <span class="mr-2"> Discover now</span>
                    <font-awesome-icon icon="greater-than" />
                </p>
            </div>
        </div>

        <!-- Section Categories Start -->
        <div class="grid grid-cols-1 md:grid-cols-2 p-2">
            <!-- New arrivals -->
            <router-link
                class="relative object-cover hover:opacity-75"
                :to="{
                    name: 'products-category',
                    params: { slug: 'new-arrivals', name: 'New Arrivals' },
                }"
            >
                <img
                    src="@/assets/new-arrivals.png"
                    alt="product.imageAlt"
                    class="w-full h-full pr-0 pb-3 md:pr-3 md:pb-0"
                />
                <div
                    class="absolute w-full bottom-1/2 text-center text-4xl font-normal text-white capitalize font-Amaline tracking-wider"
                >
                    New Arrivals
                </div>
                <div
                    class="absolute w-full top-2/4 text-center text-2xl font-light text-white capitalize font-Gotham tracking-wider"
                >
                    Discover now
                </div>
            </router-link>

            <!-- Shop -->
            <router-link
                class="relative object-cover hover:opacity-75"
                :to="{
                    name: 'products-category',
                    params: { slug: 'shop', name: 'shop' },
                }"
            >
                <img
                    src="@/assets/shop.png"
                    alt="product.imageAlt"
                    class="w-full h-full"
                />
                <div
                    class="absolute w-full bottom-1/2 text-center text-4xl font-normal text-white capitalize font-Amaline tracking-wider"
                >
                    Shop
                </div>
                <div
                    class="absolute w-full top-2/4 text-center text-2xl font-light text-white capitalize font-Gotham tracking-wider"
                >
                    Discover now
                </div>
            </router-link>
        </div>
        <div class="grid p-2">
            <div class="pt-3">
                <router-link
                    class="relative object-cover hover:opacity-75"
                    :to="{
                        name: 'products-category',
                        params: {
                            slug: 'the-interior-gates',
                            name: 'The Interior Gates',
                        },
                    }"
                >
                    <img
                        src="@/assets/the-interior-gates.png"
                        alt="product.imageAlt"
                        class="w-full h-full"
                    />
                    <div
                        class="absolute w-full bottom-1/2 text-center text-4xl font-normal text-white capitalize font-Amaline tracking-wider"
                    >
                        The Interior Gates
                    </div>
                    <div
                        class="absolute w-full top-2/4 text-center text-2xl font-light text-white capitalize font-Gotham tracking-wider"
                    >
                        Discover now
                    </div>
                </router-link>
            </div>
        </div>
        <!-- <Products /> -->
    </main>
</template>
<script>
// import Products from "./shop/ProductsList.vue";

export default {
    data() {
        return {
            products: [],
            categories: [],
        };
    },
    //   components: {Products},
    created() {
        this.$http
            .get("http://localhost:8000/api/categories")
            .then((response) => {
                this.categories = response.data;
                console.log(this.categories);
            })
            .catch((error) => {
                console.error(error);
            });
    },
};
</script>
