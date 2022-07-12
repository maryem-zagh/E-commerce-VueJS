<script setup>
import Logo from "./Logo.vue";
</script>
<template>
      <footer class="bg-primary text-left text-white xl:px-14 xl:pt-5">
        <div
            class="text-white  first-letter:sm:p-6 grid lg:grid-cols-1 font-Montserrat"
        >
        <!-- md:grid-cols-3 -->
            <div class="grid grid-cols-5  p-4">
                <div
                    class="xl:pr-12 pr-8 pb-3 col-span-2 md:col-span-1 justify-self-start"
                >
                    <img
                        alt="Vue logo"
                        class="logo pb-2"
                        src="@/assets/footerlogo.png"
                        width="187"
                    />
                   
                </div>

                <div>
                    <p class="font-semibold text-lg font-Montserrat ">
                       Carte
                    </p>
                    <ul class="text-white opacity-60 text-sm">
                        <li>
                            <RouterLink to="/">Accueil</RouterLink>
                        </li>
                        <li><a href="#">A Propos</a></li>
                        
                    </ul>
                </div>
                <div class="mt-7">
                    <ul class="text-white opacity-60 text-sm">
                        <li>
                            <RouterLink to="/products">
                                Produits</RouterLink
                            >
                        </li>
                        <li>
                            <RouterLink to="/interior-gates"
                                >Contact
                            </RouterLink>
                        </li>
                        
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-lg font-Montserrat mb-3">
                        Liens
                    </p>
                    <ul class="text-white opacity-60 text-sm">
                        <li>
                            <RouterLink to="/">Intone Market </RouterLink>
                        </li>
                       
                        <li>
                            <RouterLink to="/new-arrivals">
                                Learning by Intone</RouterLink
                            >
                        </li>
                    </ul>
                </div>
                <div>
                    
            <span
                class="font-extralight text-white text-center p-3 font-Montserrat tracking-widest opacity-70"
                style="font-size: 13px"
                >Copyright @ 2022
                      INTONE DIGITALS. All Right Reserved Powered by Tundev
            </span>
        
                </div>
            </div>
            <div></div>
            
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
</style>
