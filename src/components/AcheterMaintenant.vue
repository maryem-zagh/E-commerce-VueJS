<template>
<div class="py-14 px-20 ">
             
             <div class="">
              <div class="font-bold text-2xl mb-4 text-black ">Effectuez votre paiement</div>
              <div class="mb-4">
                        <input type="text" id="last_name"
                            class="bg-[#ffffff] text-gray-900 text-sm rounded-lg border border-gray-300 block w-full p-2"
                            placeholder="Adresse éléctronique" required />
                    </div>
                    <div class="mb-4">
                        <input type="text" id="last_name"
                            class="bg-[#ffffff] text-gray-900 text-sm rounded-lg border border-gray-300 block w-full p-2"
                            placeholder="Nom Complet" required />
                    </div>
                    <div class="mb-4">
                        <input type="text" id="last_name"
                            class="bg-[#ffffff] text-gray-900 text-sm rounded-lg border border-gray-300 block w-full p-2"
                            placeholder="Numéro de la carte" required />
                    </div>
                    <div class="grid lg:grid-cols-2 mb-4 gap-4">
                      <div>
         
    
                      <select id="location" name="location" class=" block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                         <option>United States</option>
                         <option selected="">EXP</option>
                         <option>Mexico</option>
                      </select>
 
                      </div>
                      <div class=" mb-4 lg:justify-end"><input type="text" id="last_name"
                            class="bg-[#ffffff] text-gray-900  text-sm rounded-lg border border-gray-300 block w-full p-2"
                            placeholder="CVC" required /></div>      
                    </div>
                    <div class="mb-5 flex flex-row gap-5">
                        <label class="">
                           <input type="checkbox" class="" checked> 
                        </label>
                        <div>Souvenez moi lors du prochain achat</div>
                        
                    </div>
                    <div class="mb-7">
                      <p class="text-sm font-normal text-gray-400">Les informations de votre carte bancaire ne seront pas sauvegardées, seulement votre nom et votre email.</p>

                    </div>
                    <div class="text-center lg:mb-28">
                    <button  class="text-white bg-[#0064D2] leading-6 font-medium rounded-full text-base w-full p-2">Acheter Maintenant</button>
                   </div>
            </div>
         </div>
</template>
<script setup>
import { Menu, MenuButton, MenuItem, MenuItems } from "@headlessui/vue";

import {
  ChevronDownIcon,
 
} from "@heroicons/vue/solid";


</script>