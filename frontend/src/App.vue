<script setup>
import { RouterLink, RouterView } from "vue-router";
import { useCartStore } from "./stores/cart";

const CartStore = useCartStore();
</script>

<template>
    <header>
        <div class="relative z-50 items-center">
            <div
                class="flex justify-around fixed top-0 left-0 right-0 bg-slate-50 bg-opacity-75"
            >
                <img
                    alt="Vue logo"
                    class="logo p-2"
                    src="@/assets/Asset 2.svg"
                    width="64"
                    height="64"
                />
                <nav class="w-full mx-4 xl:w-5/6">
                    <RouterLink to="/" class="flex items-center">
                        <font-awesome-icon icon="bars" />
                        <span class="hidden md:block ml-2"
                            >Menu</span
                        ></RouterLink
                    >
                    <RouterLink to="#" class="flex items-center">
                        <font-awesome-icon icon="search" />
                        <span class="hidden md:block ml-2"
                            >Search</span
                        ></RouterLink
                    >
                    <RouterLink to="/cart" class="flex items-center">
                        <font-awesome-icon icon="shopping-bag" class="mr-2" />
                        <span class="hidden md:block mr-2">Cart</span>
                        {{ CartStore.$state.cart.length }}
                    </RouterLink>
                </nav>
            </div>
        </div>
    </header>

    <RouterView />
</template>

<style>
@import "@/assets/base.css";

#app {
    max-width: 1280px;
    margin: 0 auto;
    padding-top: 4.5%;
    font-weight: normal;
}
@media (max-width: 576px) {
    #app {
        padding-top: 0%;
    }
}

nav {
    font-size: 14px;
    text-align: center;
    margin-top: 2rem;
    margin-bottom: 1rem;
    font-family: "Gotham";
    font-style: normal;
    font-weight: 325;
    font-size: 14px;
    line-height: 150%;
    /* identical to box height, or 21px */

    letter-spacing: 1.5em;
    text-transform: uppercase;
    color: #383838;
    display: flex;
    justify-content: space-between;
}
</style>
