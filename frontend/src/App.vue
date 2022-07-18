<script setup>
import { RouterLink, RouterView } from "vue-router";
import { useCartStore } from "./stores/cart";
import TheFooter from "./components/TheFooter.vue";
import Logo from "./components/Logo.vue";

const CartStore = useCartStore();
</script>

<template>
    <header>
        <div class="relative z-50 items-center">
            <div class="flex justify-around fixed top-0 left-0 right-0">
                <RouterLink to="/" class="flex items-center">
                    <Logo />
                </RouterLink>

                <nav class="w-full mx-4 xl:w-5/6 text-primary">
                    <font-awesome-icon
                        icon="bars"
                        class="block md:hidden mr-6 lg:mr-12"
                    />
                    <RouterLink to="#" class="flex items-center">
                        <span class="hidden md:block mr-12"
                            >Home</span
                        ></RouterLink
                    >
                    <RouterLink to="#" class="flex items-center">
                        <span class="hidden md:block mr-12">A Propos</span>
                    </RouterLink>
                    <RouterLink to="/shop" class="flex items-center">
                        <span class="hidden md:block mr-12">produits</span>
                    </RouterLink>
                    <RouterLink to="#" class="flex items-center">
                        <span class="hidden md:block mr-12">contact</span>
                    </RouterLink>
                </nav>
            </div>
        </div>
    </header>

    <RouterView />
    <TheFooter />
</template>
<script>
export default {
    data() {
        return {
            open: false,
            dimmer: true,
            right: false,
        };
    },
    methods: {
        toggle() {
            this.open = !this.open;
        },
        hideDropdown() {
            console.log("close dropdown");
            this.open = false;
        },
    },
};
</script>
<style>
@import "@/assets/base.css";

#app {
    margin: 0 auto;
    padding-top: 4.5%;
    font-weight: normal;
    padding-top: 0%;
    font-family: "Product Sans";
}
/* @media (max-width: 576px) {
    #app {
        padding-top: 0%;
    }
} */

nav {
    text-align: center;
    margin-top: 2rem;
    margin-bottom: 1rem;
    font-family: "Product Sans";
    font-style: normal;
    font-weight: 700;
    font-size: 16px;
    letter-spacing: 0.01em;
    text-transform: capitalize;
    /* identical to box height, or 21px */
    color: #1d1d1d;
    display: flex;
    justify-content: flex-end;
}
</style>
