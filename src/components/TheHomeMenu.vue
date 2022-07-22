<template>
    <header>
        <div class="relative z-50 items-center">
            <div class="flex justify-around fixed top-0 left-0 right-0 items-center ">
                <RouterLink to="/" class="flex items-center">
                    <Logo />
                </RouterLink>

                <nav class="w-full mx-4 xl:w-5/6 text-primary">
                    <font-awesome-icon
                        icon="bars"
                        class="block md:hidden mr-2"
                        width="48"
                    />
                    <RouterLink to="#" class="flex items-center">
                        <span class="hidden md:block mr-12"
                            >Home   </span
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
                       <select class="border-none py-0 bg-transparent  " v-model="$i18n.locale" @change="changeLanguage">
        <option value="en">En</option>
        <option value="fr">Fr</option>
    </select>
                </nav>
            </div>
        </div>
    </header>

</template>
<script>
import Logo from './Logo.vue';
export default {
    props: { open: Boolean, items: Array },
    data() {
        return {
            opened: this.open,
            dimmer: true,
            right: false,
        };
    },
    watch: {
        open: function (newVal, oldVal) {
            // watch it
            this.opened = newVal;
        },
    },
    methods: {
        toggle() {
            this.opened = !this.opened;
        },
        hideDropdown() {
            // console.log("close dropdown", this.opened);
            this.opened = !this.opened;
        },
    },
    components: { Logo }
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