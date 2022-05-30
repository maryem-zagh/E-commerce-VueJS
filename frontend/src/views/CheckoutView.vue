<template>
    <div class="h-full bg-white">
        <div class="max-w-2xl mx-auto py-16 px-4 sm:px-6 lg:max-w-7xl lg:px-4">
            <div class="flex flex-col flex-wrap items-center">
                <h1
                    class="text-5xl font-normal text-gray-900 capitalize pt-10 font-Amaline tracking-wider"
                >
                    Checkout
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

                    Checkout
                </p>
            </div>
            <div style="overflow-x: auto">
                <table class="table w-full">
                    <thead
                        class="grid grid-cols-6 font-Gotham text-xs font-light tracking-wider text-center p-3"
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
                            class="grid grid-cols-6 font-Gotham text-base font-light md:tracking-wider text-center md:uppercase px-3 py-5 items-center"
                        >
                            <td class="grid col-span-2">
                                <div class="grid grid-cols-2">
                                    <div
                                        class="w-full aspect-w-1 aspect-h-1 bg-gray-200 overflow-hidden xl:aspect-w-7 xl:aspect-h-8"
                                    >
                                        <img
                                            :src="product.imageSrc"
                                            :alt="product.imageAlt"
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
                            <td class="">
                                <button
                                    @click="removeFromCart(product.product_id)"
                                >
                                    X
                                </button>
                            </td>
                        </tr>
                        <hr class="solid w-full" />
                    </tbody>
                </table>
            </div>

            <div class="grid lg:grid-cols-3 mt-11 font-Gotham">
                <div class="p-3">
                    <div class="text-base uppercase mb-4">
                        Delivery & Returns
                    </div>
                    <div class="text-xs text-gray-400">
                        Please click here to read about our return policy.
                    </div>
                </div>
                <div class="p-3">
                    <div class="text-base uppercase mb-4">
                        International Shipping
                    </div>
                    <div class="text-xs text-gray-400">
                        Additional Costum duty taxes are billed seperately by
                        the courier. Please click here to reade more
                    </div>
                </div>
                <div class="p-3">
                    <div class="flex justify-between mb-8">
                        <div class="text-base">Subtotal</div>
                        <div class="text-base">{{ totalPrice }} DT</div>
                    </div>

                    <div class="flex justify-between">
                        <div class="text-base">Shipping Fees</div>
                        <div class="text-base">{{ shipping }} DT</div>
                    </div>
                    <hr class="solid w-full my-8" />
                    <div class="flex justify-between">
                        <div class="text-xl">Total</div>
                        <div class="text-xl">
                            {{ totalPrice + shipping }} DT
                        </div>
                    </div>
                    <div class="mt-10">
                        <button
                            @click="checkout()"
                            class="w-full capitalize bg-black hover:bg-gray-600 active:bg-gray-700 focus:outline-none focus:ring focus:ring-violet-300 px-auto py-4 text-white text-2xl font-Gotham font-normal"
                        >
                            checkout
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- <ProductsList :products="products" /> -->
    </div>
</template>

<script>
import { useCartStore } from "../stores/cart";

const CartStore = useCartStore();
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
            badge: 0,
            totalPrice: 0,
            shipping: 150,
            quantity: 1,
            min: 1,
            max: 10,
        };
    },
    // computed: {
    //     total: (totalPriceWithShipping = this.totalPrice + 200),
    // },
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
        // Checkout
        checkout() {
            console.table(this.carts);
            /* 
        product_id
        order_id
        quantity
        total
        */
            this.$http.post("http://localhost:8000/api/purchase/", {
                carts: this.carts,
                total: this.totalPrice,
            });
        },

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
                    console.log(error);
                }
            } else {
                this.carts = [];
            }
            console.table("price", JSON.parse(localStorage.getItem("carts")));
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
        removeFromCart(id) {
            const index = this.carts.findIndex(
                ({ product_id }) => product_id === id
            );
            this.carts.splice(index, 1);
            localStorage.setItem("carts", JSON.stringify(this.carts));
            CartStore.$patch((state) => {
                state.cart = JSON.parse(localStorage.getItem("carts"));
            });
            this.viewCart();
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
