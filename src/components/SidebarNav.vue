<template>
    <!--     v-click-outside="() => hideDropdown()"
        @focus="toggle()" -->
    <div
        class="sidenav fixed inset-0 font-Gotham font-light transition-all bg-white h-screen z-50 overflow-hidden justify-center flex items-center text-xl text-gray-900"
        :class="[opened ? 'w-80' : 'w-0  ']"
    >
        <!-- transition-all duration-700 -->

        <ul>
            <li class="py-5">
                <RouterLink to="/"> Home ------ </RouterLink>
            </li>
            <li class="py-5">
                <RouterLink to="/new-arrivals"> New Arrivals</RouterLink>
            </li>
            <li class="py-5">
                <RouterLink to="/shop"> Shop</RouterLink>
            </li>
            <li class="py-5">
                <RouterLink to="/the-interior-gates"
                    >The Interior Gates
                </RouterLink>
            </li>
            <li class="py-5">
                <RouterLink to="/cart">Shoping Cart </RouterLink>
            </li>
            <li class="py-5">
                <RouterLink to="/contact"> Contact</RouterLink>
            </li>
        </ul>
    </div>
</template>
<script>
export default {
    props: { open: Boolean },
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
};
</script>
