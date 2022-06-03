<script setup></script>
<template>
    <div class="h-full bg-white">
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
                        v-if="product.categories"
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

                    <div class="text-left justify-center p-2">
                        <input
                            type="button"
                            value="-"
                            class="w-10 bg-slate-100 font-black text-xl"
                            @click="minusQuantity"
                        />

                        <input
                            v-model.number="quantity"
                            :min="min"
                            :max="max"
                            class="w-20 col-span-4 text-center text-xl bg-slate-100"
                        />

                        <input
                            type="button"
                            value="+"
                            class="w-10 bg-slate-100 font-black text-xl"
                            @click="plusQuantity"
                        />
                    </div>
                    <div class="mt-10">
                        <button
                            @click="addCart(product)"
                            class="w-4/5 bg-black hover:bg-gray-600 active:bg-gray-700 focus:outline-none focus:ring focus:ring-violet-300 px-auto py-4 text-white text-2xl font-Gotham font-normal"
                        >
                            I want this
                        </button>
                    </div>
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
import { useCartStore } from "../../stores/cart";

const CartStore = useCartStore();
import ProductsList from "./ProductsList.vue";
export default {
    components: { ProductsList },
    data() {
        return {
            product: [],
            products: [],
            carts: [],
            cartAdd: {
                product_id: "",
                name: "",
                price: "",
                imageSrc: "",
                imageAlt: "",
                order_id: "",
                quantity: 1,
            },
            badge: "0",
            totalPrice: " 0",
            quantity: 1,
            min: 1,
            max: 10,
        };
    },
    // computed: {
    //     carts: CartStore.cart,
    // },
    mounted() {
        this.$http
            .get("products/related/" + this.product.slug)
            .then((response) => {
                this.products = response.data;
                // console.log("other products", response.data, this.product.slug);
            })
            .catch((error) => {});
    },
    created() {
        this.loadProduct();
        this.viewCart();
    },
    watch: {
        $route: function (to, from) {
            // console.log(to, from);
            this.loadProduct();
        },
    },

    methods: {
        // Product
        loadProduct() {
            this.$http
                .get("products/" + this.$route.params.product)
                .then((response) => {
                    this.product = response.data;
                    // console.log(this.product);
                })
                .catch((error) => {});
        },
        // Cart
        isInCart(product) {
            if (!localStorage.getItem("carts")) {
                localStorage.setItem("carts", JSON.stringify([]));
            }
            let cartItem = this.carts.find(
                (item) => item.product_id === product.id
            );
            // console.log(cartItem);
            return Boolean(cartItem);
        },
        viewCart() {
            if (localStorage.getItem("carts")) {
                this.carts = JSON.parse(localStorage.getItem("carts"));
                this.badge = this.carts.length;
                try {
                    var valeurInitiale = 0;
                    this.totalPrice = JSON.parse(
                        localStorage.getItem("carts")
                    ).reduce(function (accumulateur, valeurCourante) {
                        return (
                            accumulateur +
                            valeurCourante.price * valeurCourante.quantity
                        );
                    }, valeurInitiale);
                    // console.log(
                    //     this.carts.reduce((total, item) => {
                    //         return total + item.quantity * item.price;
                    //     })
                    // );
                } catch (error) {
                    // console.log(error);
                }
            } else {
                this.carts = [];
            }
        },

        addCart(product) {
            if (this.isInCart(product)) {
                // console.log(product);
                const index = this.carts.findIndex(
                    ({ product_id }) => product_id === product.id
                );
                let cartItem = this.carts[index];
                if (cartItem.quantity + this.quantity <= 0) {
                    this.removeFromCart(product);
                } else {
                    cartItem.quantity += this.quantity;
                }

                // console.log("item", cartItem);
            } else {
                if (this.quantity > 0) {
                    this.cartAdd.product_id = product.id;
                    this.cartAdd.name = product.title;
                    this.cartAdd.price = product.price;
                    this.cartAdd.imageSrc = product.imageSrc;
                    this.cartAdd.imageAlt = product.imageAlt;
                    this.cartAdd.quantity = this.quantity;
                    this.carts.push(this.cartAdd);
                }
            }
            localStorage.setItem("carts", JSON.stringify(this.carts));
            CartStore.$patch((state) => {
                state.cart = JSON.parse(localStorage.getItem("carts"));
                state.total = this.totalPrice;
            });
        },
        updateCart(product_id, quantity) {},
        plusQuantity() {
            this.quantity++;
        },
        minusQuantity() {
            this.quantity--;
        },
        removeFromCart(product) {
            const index = this.carts.findIndex(
                ({ product_id }) => product_id === product.id
            );
            this.carts.splice(index, 1);
            localStorage.setItem("carts", JSON.stringify(this.carts));
        },
    },
};
</script>
