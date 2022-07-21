<script setup>
import Logo from "./Logo.vue";
</script>
<template>
      <footer class=" bg-[#1D1D1D]  ">
        <div class="grid gap-10   md:grid-cols-2 divide-x-2 px-12 py-12 ">
        <div class="grid md:grid-cols-3 gap-9">
        <div class="py-14">
             <img src="@/assets/footerlogo.png" width="187" alt="shop" />
        </div>
         <div class="text-white justify-center">
    
     <ul class="text-white py-12 px-12">
                <li class="mb-4">
                    <a href="#" class="hover:underline font-bold">Cart</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline text-sm">Accueil</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline text-sm">A Propos</a>
                </li>
                
            </ul>
  </div>
   <div class="text-white py-20 px-12">
    
     <ul class="text-white  ">
                
                <li class="mb-4">
                    <a href="#" class="hover:underline text-sm">Produits</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline text-sm">Contact</a>
                </li>
                
            </ul>
  </div>
 </div>
 <div class="grid md:grid-cols-2 gap-4  ">
  <div class="text-white py-12 px-20">
    
     <ul class="text-white ">
                <li class="mb-4">
                    <a href="#" class="hover:underline font-bold">Liens</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline text-sm">Intone Market</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline text-sm">Learning by Intone</a>
                </li>
                
            </ul>
  </div>
  <div class="py-20  px-12 ">
     <span class="block text-sm text-white px-5 ">Copyright @ 2022 INTONE DIGITALS. All Right Reserved Powered by <a href="#" class="hover:underline">Tundev</a>. 
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
</style>
