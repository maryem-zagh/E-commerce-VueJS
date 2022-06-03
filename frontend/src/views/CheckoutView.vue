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
                    class="text-base font-normal text-gray-600 capitalize pt-3 pb-16 font-Gotham"
                >
                    Order Contact Information
                </p>
            </div>
            <form action="" method="post">
                <div class="grid grid-cols-2 gap-6 font-Gotham text-sm">
                    <!--  -->
                    <div
                        class="flex justify-center text-left col-span-2 lg:col-span-1"
                    >
                        <input
                            v-model="form.name"
                            type="text"
                            name="name"
                            id="name"
                            class="border-solid border-gray-700 w-full px-4 inp"
                            placeholder="Full Name *"
                            required
                        />
                    </div>
                    <!--  -->
                    <!--  -->
                    <div
                        class="flex justify-center text-left col-span-2 lg:col-span-1"
                    >
                        <input
                            v-model="form.phone"
                            type="text"
                            name="phone"
                            id="phone"
                            class="border-solid border-gray-700 w-full px-4 inp"
                            placeholder="Phone Number *"
                            required
                        />
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="flex justify-center text-left col-span-2">
                        <input
                            v-model="form.adress"
                            type="text"
                            name="adress"
                            id="adress"
                            class="border-solid border-gray-700 w-full px-4 inp"
                            placeholder="Adress *"
                            required
                        />
                    </div>
                    <!--  -->

                    <!--  -->
                    <div class="flex justify-center text-left">
                        <input
                            v-model="form.city"
                            type="text"
                            name="city"
                            id="city"
                            class="border-solid border-gray-700 w-full px-4 inp"
                            placeholder="City *"
                            required
                        />
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="flex justify-center text-left">
                        <input
                            v-model="form.country"
                            type="text"
                            name="country"
                            id="country"
                            class="border-solid border-gray-700 w-full px-4 inp"
                            placeholder="Country *"
                            required
                        />
                    </div>
                    <!--  -->
                    <!--  -->
                    <div
                        class="flex justify-center text-left col-span-2 lg:col-span-1"
                    >
                        <input
                            v-model="form.email"
                            type="text"
                            name="email"
                            id="email"
                            class="border-solid border-gray-700 w-full px-4 inp"
                            placeholder="E-mail *"
                            required
                        />
                    </div>
                    <!--  -->
                    <!--  -->
                    <div
                        class="flex justify-around text-base col-span-2 lg:col-span-1"
                    >
                        <div class="form-group p-2">
                            <input
                                v-model="form.isGift"
                                type="radio"
                                name="shipping"
                                id="for_me"
                                class="form-control"
                                value="false"
                            />
                            <label for="for_me"> Ship for myself</label>
                        </div>

                        <div class="for-group p-2">
                            <input
                                v-model="form.isGift"
                                type="radio"
                                name="shipping"
                                id="as_gift"
                                class="form-control"
                                value="true"
                            />
                            <label for="as_gift">Ship as a Gift</label>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="flex justify-center text-left col-span-2">
                        <input
                            v-if="form.isGift == 'true'"
                            v-model="form.message"
                            type="text"
                            name="message"
                            id="message"
                            class="border-solid border-gray-700 w-full px-4 inp"
                            placeholder="Gift Message"
                        />
                    </div>
                    <!--  -->
                </div>
                <!-- Button -->
                <div class="mt-10">
                    <button
                        @click="purchase()"
                        class="w-full capitalize bg-black hover:bg-gray-600 active:bg-gray-700 focus:outline-none focus:ring focus:ring-violet-300 px-auto py-4 text-white text-2xl font-Gotham font-normal"
                    >
                        Submit Order
                    </button>
                </div>
                <!--  -->
            </form>
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
            carts: CartStore.cart,
            form: {
                name: "",
                phone: "",
                adress: "",
                city: "",
                country: "",
                email: "",
                message: "",
                total: JSON.parse(localStorage.getItem("total")),
                isGift: false,
            },
        };
    },
    mounted() {
        // console.table("from checkout", this.carts);
    },

    methods: {
        // Checkout
        purchase() {
            console.table("from checkout", this.carts);
            this.$http
                .post(
                    "purchase/",
                    {
                        carts: this.carts,
                        form: this.form,
                    },
                    {
                        headers: {
                            // remove headers
                        },
                    }
                )
                .then((response) => {
                    // console.log(response.data);
                    localStorage.clear();
                    CartStore.$patch((state) => {
                        state.cart = [];
                        state.total = 0;
                    });
                    this.form = {
                        name: "",
                        phone: "",
                        adress: "",
                        city: "",
                        country: "",
                        email: "",
                        message: "",
                        total: 0,
                        isGift: false,
                    };
                })
                .catch((error) => {
                    // console.error("eoor", error);
                });
        },
    },
};
</script>
<style>
/* Solid border */
hr.solid {
    border-top: 3px solid #bbb;
}
.inp {
    border: none;
    border-bottom: 2px solid #d8d8d8;
    padding: 5px 10px;
    outline: none;
}

[placeholder]:focus::-webkit-input-placeholder {
    transition: text-indent 0.4s 0.4s ease;
    text-indent: -100%;
    opacity: 1;
}
</style>
