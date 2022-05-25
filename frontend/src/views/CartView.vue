<template>
    <div class="bg-white">
        <div class="max-w-2xl mx-auto py-16 px-4 sm:px-6 lg:max-w-7xl lg:px-4">
            <div class="flex flex-col flex-wrap items-center">
                <h1
                    class="text-5xl font-normal text-gray-900 capitalize pt-10 font-Amaline tracking-wider"
                >
                    Cart
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

                    Cart
                </p>
            </div>
            <div>
                <table class="table w-full">
                    <thead
                        class="grid grid-cols-6 font-Gotham text-xs font-light tracking-wider text-left p-3"
                    >
                        <th class="grid col-span-2">PRODUCT</th>
                        <th>PRICE</th>
                        <th>QTY</th>
                        <th>UNIT PRICE</th>
                        <th>REMOVE</th>
                    </thead>
                    <tbody>
                        <tr
                            v-for="product in carts"
                            class="grid grid-cols-6 font-Gotham text-base font-light tracking-wider text-left uppercase px-3 py-5 items-center"
                        >
                            <td class="grid col-span-2">
                                <div class="grid grid-cols-2">
                                    <div
                                        class="w-full aspect-w-1 aspect-h-1 bg-gray-200 overflow-hidden xl:aspect-w-7 xl:aspect-h-8"
                                    >
                                        <img
                                            src="https:\/\/tailwindui.com\/img\/ecommerce-images\/category-page-04-image-card-01.jpg"
                                            alt="tt"
                                            class="w-full h-full object-center object-cover group-hover:opacity-75"
                                        />
                                    </div>
                                    <div
                                        class="items-center grid justify-center"
                                    >
                                        <div>
                                            {{ product.name }}
                                        </div>
                                        <p>colors: xXX</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                {{ product.price * product.quantity }}
                                <span>TND</span>
                            </td>
                            <td>
                                {{ product.quantity }}
                            </td>
                            <td>{{ product.price }} <span>TND</span></td>
                            <td>
                                <button>X</button>
                            </td>
                            <hr class="solid w-full" />
                        </tr>
                        <hr class="solid w-full" />
                    </tbody>
                </table>
            </div>
            <!-- <div
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

                    <div
                        class="w-1/3 bg-slate-100 text-center justify-center p-2"
                    >
                        <input
                            type="button"
                            value="-"
                            class="w-10 font-black text-xl"
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
                            class="w-10 font-black text-xl"
                            @click="plusQuantity"
                        />
                    </div>
                    <div class="mt-10">
                        <button
                            @click="addCart(product)"
                            class="w-4/5 bg-black hover:bg-gray-600 active:bg-gray-700 focus:outline-none focus:ring focus:ring-violet-300 px-24 py-4 text-white text-2xl font-Gotham font-normal"
                        >
                            I want this
                        </button>
                    </div>
                </div>
            </div>
        </div> -->
        </div>

        <div class="flex flex-col flex-wrap items-center">
            <h1
                class="text-3xl font-normal text-gray-900 capitalize pt-28 pb-16 font-Amaline tracking-wider"
            >
                Related products
            </h1>
        </div>

        <!-- <ProductsList :products="products" /> -->
    </div>
</template>

<script>
export default {
    components: {},
    data() {
        return {
            products: [],
            carts: [],
            cartAdd: {
                product_id: "",
                name: "",
                price: "",
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
    mounted() {},
    created() {
        this.viewCart();
    },
    watch: {
        $route: function (to, from) {
            // console.log(to, from);
            // this.loadProduct();
        },
    },
    updated() {},
    methods: {
        // Cart
        plusQuantity() {
            this.quantity++;
        },
        minusQuantity() {
            this.quantity--;
        },
        viewCart() {
            if (localStorage.getItem("carts")) {
                this.carts = JSON.parse(localStorage.getItem("carts"));
                this.badge = this.carts.length;
                this.totalPrice = this.carts.reduce((total, item) => {
                    return total + item.quantity * item.price;
                });
            } else {
                this.carts = [];
            }
            console.log("total", this.totalPrice);
        },
        isInCart(product) {
            if (!localStorage.getItem("carts")) {
                localStorage.setItem("carts", JSON.stringify([]));
            }
            let cartItem = this.carts.find(
                (item) => item.product_id === product.id
            );
            console.log(cartItem);
            return Boolean(cartItem);
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
                    this.cartAdd.quantity = this.quantity;
                    this.carts.push(this.cartAdd);
                }
            }
            localStorage.setItem("carts", JSON.stringify(this.carts));
        },
        updateCart(product_id, quantity) {},
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
<style>
/* Solid border */
hr.solid {
    border-top: 3px solid #bbb;
}
</style>
