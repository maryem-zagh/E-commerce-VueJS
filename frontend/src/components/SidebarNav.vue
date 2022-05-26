<template>
    <div
        class="sidenav fixed inset-0 transition-all duration-700 font-Gotham font-light bg-white h-screen z-50 overflow-hidden justify-center flex items-center text-xl text-gray-900"
        :class="[open ? 'w-80' : 'w-0  ']"
    >
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
            <li class="py-5"><RouterLink to=""> Contact</RouterLink></li>
        </ul>
    </div>
</template>
<script>
export default {
    props: { open: Boolean },
};
</script>
