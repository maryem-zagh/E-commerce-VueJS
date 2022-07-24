<script setup>
import Logo from "./Logo.vue";
</script>
<template>
    <footer class=" bg-[#1D1D1D]  ">
        <div class="grid   md:grid-cols-2 md:divide-x-2  gap-8 px-12  py-5  md:px-24 md:py-10   ">
            <div class="grid md:grid-cols-4 items-center gap-6">
                <div class=" md:col-span-2  ">
                    <img src="@/assets/footerlogo.png" width="187" alt="shop" />
                </div>
                <div class="text-white justify-center">

                    <ul class="text-white  ">
                        <li class="font-bold ">
                            Carte
                        </li>
                        <li class=" ">
                            <a href="#" class="hover:underline text-sm">Accueil</a>
                        </li>
                        <li class=" ">
                            <a href="#" class="hover:underline text-sm">A Propos</a>
                        </li>

                    </ul>
                </div>
                <div class="text-white  ">

                    <ul class="text-white  ">
                        <br>

                        <li class=" ">
                            <a href="#" class="hover:underline text-sm">Produits</a>
                        </li>
                        <li class="">
                            <a href=" #" class="hover:underline text-sm">Contact</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="grid md:grid-cols-2  gap-6   items-center  ">
                <div class="text-white   md:pl-20">

                    <ul class="text-white ">
                        <li class="font-bold ">
                            Liens
                        </li>
                        <li class="">
                            <a href="#" class="hover:underline text-sm">Intone Market</a>
                        </li>
                        <li class=" ">
                            <a href="#" class="hover:underline text-sm">Learning by Intone</a>
                        </li>

                    </ul>
                </div>
                <div class="self-end  ">
                    <span class="block text-sm text-white  opacity-75 text-center md:text-left">Copyright @ 2022 INTONE
                        DIGITALS.
                        All Right
                        Reserved
                        Powered by <a href="#" class="hover:underline">Tundev</a>.
                    </span>
                </div>
            </div>
        </div>

    </footer>

</template>
<style>
span {
    font-family: "Quicksand";
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 18px;
    /* identical to box height */

    letter-spacing: 0.04em;
}

li {
    padding-bottom: 10px;
}
</style>
