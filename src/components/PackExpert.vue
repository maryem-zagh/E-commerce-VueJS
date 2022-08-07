<template>

<button @click="toggleModal = !toggleModal" class="text-secondary font-medium bg-[#ffffff] leading-6 text-base lg:mb-0 mb-20 md:w-52 rounded-full  w-full lg:w-[318px] p-2">Acheter Maintenant</button>
       
            
              <div class="fixed overflow-x-hidden overflow-y-auto inset-0 flex justify-center items-center z-50"
              v-if="toggleModal">
              <div class="relative p-5 w-full lg:w-[1024px] h-full  ">
                <div class="relative bg-white rounded-lg lg:h-[570px] shadow ">
                  <div class="flex justify-between items-start p-4  ">
                    <button type="button"
                      class="text-gray-400 bg-transparent hover:bg-blue-200 hover:text-gray-900 rounded-full text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                      @click="toggleModal = false">
                      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                      </svg>
                      <span class="sr-only">Close modal</span>
                    </button>
                  </div>
                  <!-- step1 -->
         <div class="px-5 lg:px-20 ">
        <div class=" grid-cols-1" id="user_detail1" v-if="activePhase == 1">
        <!-- stepper -->
         <div class="flex flex-col md:flex-row lg:items-center md:items-center gap-3 ">
                        <div class="flex md:flex-row   ">
                        <div class="">
                       <div class="w-8 h-8  rounded-full bg-[#0059C8] text-white flex justify-center items-center">
                        <a href="# " class="">
                            <h1 class="text-2xl text-white">1</h1>
                        </a>
                    </div>
                      </div>
                      
                    
                     <div class=" px-3 lg:text-xl md:text-sm font-normal leading-8 text-blue-800">
                          Informations du contact
                   </div>
           
             
              </div>
              <span class="h-0.5 w-9 bg-gray-400 lg:w-1/1 px-5 "></span>
              <div class="flex md:flex-row ">
           <div class="lg:px-5">
                       <div class="w-8 h-8  rounded-full bg-[#C4C4C4] text-white flex justify-center items-center">
                        <a href="# " class="">
                            <h1 class="text-2xl text-white">2</h1>
                        </a>
                    </div>
                      </div>
                    
            <div class=" px-3 lg:text-xl md:text-sm font-normal leading-8 text-gray-400">
              Spécif  ications du projet
            </div>
            
            </div>
            <span class="h-0.5 w-9 bg-gray-400 lg:w-1/1 px-5 "></span>
            <div class="flex md:flex-row ">
             <div class="lg:px-5">
                       <div class="w-8 h-8  rounded-full bg-[#C4C4C4] text-white flex justify-center items-center">
                        <a href="# " class="">
                            <h1 class="text-2xl text-white">3</h1>
                        </a>
                    </div>
                      </div>
                      
                    
                     <div class=" px-3 md:text-sm lg:text-xl font-normal leading-8 text-gray-400">
                        Paiement
                       </div>
           
              </div>
        </div>
            <form class=" mt-9 " >
                <div class="grid  mb-6 lg:grid-cols-3  gap-4">
                    <div>
    
    <select id="location" name="location" class=" block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
      <option>United States</option>
      <option selected="">Entité</option>
      <option>Mexico</option>
    </select>
  </div>
                    <div class="lg:col-span-2">
                        <input type="text" id="last_name"
                            class="bg-[#ffffff] text-gray-900 text-sm rounded-lg border border-gray-300 block w-full p-2"
                            placeholder="Nom Complet" required />
                    </div>
                </div>
                <div class="grid  mb-6 lg:grid-cols-4 gap-4">
                    <div>
   
    <select id="location" name="location" class=" block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
      <option>United States</option>
      <option selected="">Pays</option>
      <option>Mexico</option>
    </select>
  </div>
                      <div class="lg:col-span-3">
                        <input type="text" id="last_name"
                            class="bg-[#ffffff] text-gray-900 text-sm border border-gray-300 rounded-lg block w-full p-2"
                            placeholder="Numéro de téléphone" required />
                    </div>
                </div>
                <div class="grid gap-6 mb-6 lg:grid-cols-1">
                    <input type="text" id="default-input"
                        class="bg-[#ffffff] text-gray-900 border border-gray-300 text-sm rounded-lg block w-full p-2"
                        placeholder="Adresse électronique" />
                </div>

                 <div class="grid gap-6 mb-6 lg:grid-cols-1">
                       <div>
    
    <select id="location" name="location" class=" block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
      <option>United States</option>
      <option selected="">Catégorie du projet</option>
      <option>Mexico</option>
    </select>
  </div>
                </div>
                <div class="grid gap-4 mb-6 lg:grid-cols-2">
                    <div>
    
    <select id="location" name="location" class=" block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
      <option>United States</option>
      <option selected="">Type</option>
      <option>Mexico</option>
    </select>
  </div>
                    <div>
                        <input type="text" id="last_name"
                            class="bg-[#ffffff] text-gray-900 text-sm rounded-lg border border-gray-300 block w-full p-2"
                            placeholder="Votre Service" required />
                    </div>
                </div>
            </form>
            <div class="text-black font-blod text-base text-center">
                             Je veux être contacté(e)
                   </div>
                   <div class="text-black font-blod text-base text-center py-4 gap-2">
                    <label>
  <input type="checkbox" class="rounded-full" checked> Par Téléphone
</label>
<label>
  <input type="checkbox" class="rounded-full" checked> Par Adresse éléctronique
</label>
                   </div>
                   <div class="text-center">
                    <button @click.prevent="goToStep(2)" class="text-white bg-[#0064D2] leading-6 font-medium rounded-full text-base w-full lg:w-[400px] p-2">Envoyer</button>
                   </div>
        </div>
         <!-- step2 -->
        <div class="" id="user_detail2" v-if="activePhase == 2">
               <div class="flex flex-col md:flex-row lg:items-center md:items-center gap-3 ">
                        <div class="flex md:flex-row   ">
                        <div class="">
                       <div class="w-8 h-8  rounded-full bg-[#0059C8] text-white flex justify-center items-center">
                        <a href="# " class="">
                            <h1 class="text-2xl text-white">1</h1>
                        </a>
                    </div>
                      </div>
                      
                    
                     <div class=" px-3 lg:text-xl md:text-sm font-normal leading-8 text-blue-800">
                          Informations du contact
                   </div>
           
             
              </div>
              <span class="h-0.5 w-9 bg-blue-600 lg:w-1/1 px-5 "></span>
              <div class="flex md:flex-row ">
           <div class="lg:px-5">
                       <div class="w-8 h-8  rounded-full bg-[#0059C8] text-white flex justify-center items-center">
                        <a href="# " class="">
                            <h1 class="text-2xl text-white">2</h1>
                        </a>
                    </div>
                      </div>
                    
            <div class=" px-3 lg:text-xl md:text-sm font-normal leading-8 text-blue-800">
              Spécif  ications du projet
            </div>
            
            </div>
            <span class="h-0.5 w-9 bg-gray-400 lg:w-1/1 px-5 "></span>
            <div class="flex md:flex-row ">
             <div class="lg:px-5">
                       <div class="w-8 h-8  rounded-full bg-[#C4C4C4] text-white flex justify-center items-center">
                        <a href="# " class="">
                            <h1 class="text-2xl text-white">3</h1>
                        </a>
                    </div>
                      </div>
                      
                    
                     <div class=" px-3 md:text-sm lg:text-xl font-normal leading-8 text-gray-400">
                        Paiement
                       </div>
           
              </div>
        </div>
            <form class=" mt-9 " >
                 <div class="grid  mb-6 lg:grid-cols-4 gap-2 ">
                  <div class="">
                    <div class="relative flex items-start">
                      <div class="flex items-center "><input id="candidates" aria-describedby="candidates-description" name="candidates" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-secondary border-gray-300 rounded-full" /></div>
                    <div class="ml-2 text-sm">
                      <label for="comments" class="font-medium text-gray-700">J’ai un site web ou compte social</label>
                    </div>
                    </div>
                    <div class="relative flex items-start">
      <div class="flex items-center h-5">
        <input id="candidates" aria-describedby="candidates-description" name="candidates" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-secondary border-gray-300 rounded-full" />
      </div>
      <div class="ml-3 text-sm">
        <label for="candidates" class="font-medium text-gray-700">Je n’ai pas</label>
       
      </div>
    </div>
                    </div>
                    <div class="lg:col-span-2">
  
    <input type="text" id="default-input"
                        class="bg-[#ffffff] text-gray-900 border border-gray-300 text-sm rounded-lg block w-full p-2"
                        placeholder="https://" />
  </div>
                   <div>
    
    <select id="location" name="location" class=" block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
      <option>FR</option>
      <option selected="">Langue du site</option>
      <option>EN</option>
    </select>
  </div>
                </div>
                <div class="grid  mb-6 lg:grid-cols-4 gap-4">
                  <div class="">
                    <div class="relative flex items-start">
                      <div class="flex items-center h-5"><input id="candidates" aria-describedby="candidates-description" name="candidates" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-secondary border-gray-300 rounded-full" /></div>
                    <div class="ml-3 text-sm">
                      <label for="comments" class="font-medium text-gray-700">J’ai une stratégie prête</label>
                    </div>
                    </div>
                    <div class="relative flex items-start">
      <div class="flex items-center h-5">
        <input id="candidates" aria-describedby="candidates-description" name="candidates" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-secondary border-gray-300 rounded-full" />
      </div>
      <div class="ml-3 text-sm">
        <label for="candidates" class="font-medium text-gray-700">Je n’ai pas</label>
       
      </div>
    </div>
                    </div>
                    <div>
  
    <select id="location" name="location" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
      <option>United States</option>
      <option selected="">Piéce jointe</option>
      <option>Mexico</option>
    </select>
  </div>
                   <div class="lg:col-span-2">
    
    <input type="text" id="default-input"
                        class="bg-[#ffffff] text-gray-900 border border-gray-300 text-sm rounded-lg block w-full p-2"
                        placeholder="Cibles" />
  </div>
                </div>
                <div class="grid  mb-6 lg:grid-cols-2 gap-4">
                  <div>
                    <input type="text" id="default-input"
                        class="bg-[#ffffff] text-gray-900 border border-gray-300 text-sm rounded-lg block w-full p-2"
                        placeholder="Quels sont vos objectifs prioritaires ?" />
                        </div>
                        <div>
                    <input type="text" id="default-input"
                        class="bg-[#ffffff] text-gray-900 border border-gray-300 text-sm rounded-lg block w-full p-2"
                        placeholder="Quels sont les objectifs de votre plan media" />
                        </div>
                </div>
                 <div class="grid  mb-6 lg:grid-cols-3 gap-2 ">
                  <div class="">
                    <div class="relative flex items-start">
                      <div class="flex items-center "><input id="candidates" aria-describedby="candidates-description" name="candidates" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-secondary border-gray-300 rounded-full" /></div>
                    <div class="ml-2 text-sm">
                      <label for="comments" class="font-medium text-gray-700">J’ai ma propre palette de couleurs</label>
                    </div>
                    </div>
                    <div class="relative flex items-start">
      <div class="flex items-center h-5">
        <input id="candidates" aria-describedby="candidates-description" name="candidates" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-secondary border-gray-300 rounded-full" />
      </div>
      <div class="ml-3 text-sm">
        <label for="candidates" class="font-medium text-gray-700">Vous êtes les experts</label>
       
      </div>
    </div>
                    </div>
                    <div class="">
  
    <select id="location" name="location" class=" block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
      <option>FR</option>
      <option selected="">Choix de couleurs</option>
      <option>EN</option>
    </select>
  </div>
                   <div>
    
    <select id="location" name="location" class=" block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
      <option>FR</option>
      <option selected="">Tranche d'âge de votre cible ?</option>
      <option>EN</option>
    </select>
  </div>
                </div>

                <div class="grid  mb-6 lg:grid-cols-2 gap-4">
                  <div>
                    <input type="text" id="default-input"
                        class="bg-[#ffffff] text-gray-900 border border-gray-300 text-sm rounded-lg block w-full p-2"
                        placeholder="Exemple de votre contenu" />
                        </div>
                        <div>
                    <select id="location" name="location" class=" block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
      <option>FR</option>
      <option selected="">Durée de la réalisation</option>
      <option>EN</option>
    </select>
                        </div>
                </div>
                  <div class="grid gap-6 mb-6 lg:grid-cols-1">
                    <input type="text" id="default-input"
                        class="bg-[#ffffff] text-gray-900 border border-gray-300 text-sm rounded-lg block w-full p-2"
                        placeholder="Plus d’informations" />
                </div>
            </form>
          
                   <div class="text-center">
                    <button  @click.prevent="goToStep(3)"  class="text-white bg-[#0064D2] leading-6 font-medium rounded-full text-base lg:w-[400px] w-full p-2">Envoyer</button>
                   </div>
        </div>
         <!-- step3 -->
        <div class="" id="step3" v-if="activePhase == 3">
          <div class="flex flex-col md:flex-row lg:items-center md:items-center gap-3 ">
                        <div class="flex md:flex-row   ">
                        <div class="">
                       <div class="w-8 h-8  rounded-full bg-[#0059C8] text-white flex justify-center items-center">
                        <a href="# " class="">
                            <h1 class="text-2xl text-white">1</h1>
                        </a>
                    </div>
                      </div>
                      
                    
                     <div class=" px-3 lg:text-xl md:text-sm font-normal leading-8 text-blue-800">
                          Informations du contact
                   </div>
           
             
              </div>
              <span class="h-0.5 w-9 bg-blue-600 lg:w-1/1 px-5 "></span>
              <div class="flex md:flex-row ">
           <div class="lg:px-5">
                       <div class="w-8 h-8  rounded-full bg-[#0059C8] text-white flex justify-center items-center">
                        <a href="# " class="">
                            <h1 class="text-2xl text-white">2</h1>
                        </a>
                    </div>
                      </div>
                    
            <div class=" px-3 lg:text-xl md:text-sm font-normal leading-8 text-blue-800">
              Spécif  ications du projet
            </div>
            
            </div>
            <span class="h-0.5 w-9 bg-blue-600 lg:w-1/1 px-5 "></span>
            <div class="flex md:flex-row ">
             <div class="lg:px-5">
                       <div class="w-8 h-8  rounded-full bg-[#0059C8] text-white flex justify-center items-center">
                        <a href="# " class="">
                            <h1 class="text-2xl text-white">3</h1>
                        </a>
                    </div>
                      </div>
                      
                    
                     <div class=" px-3 md:text-sm lg:text-xl font-normal leading-8 text-blue-800">
                        Paiement
                       </div>
           
              </div>
        </div>
           <div class="grid lg:grid-cols-2 lg:py-16 gap-8 px-5 py-5">
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
                      <div class=""><input type="text" id="last_name"
                            class="bg-[#ffffff] text-gray-900  text-sm rounded-lg border border-gray-300 block w-44 p-2"
                            placeholder="CVC" required /></div>      
                    </div>
                    <div class="mb-4">
                      <p class="text-sm font-normal">Les informations de votre carte bancaire ne seront pas sauvegardées, seulement votre nom et votre email.</p>

                    </div>
            </div>
                <div class="lg:py-2">
                  <div class="mb-5 leading-10 font-bold text-4xl text-center text-black">
                    Prix 
                  </div>
                  <p class="text-sm font-normal text-center mb-3 lg:px-14">Ce prix est basé sur vos spécifications de votre projet. Si le ne terminez pas dans le délai convenu, votre argent vous sera remboursé.</p>
                   <div class="mb-6 leading-10 font-bold text-6xl text-center text-black">
                    860 €
                  </div>
                  <div class="text-center mb-6">
                    <button  @click.prevent="goToStep(4)"  class="text-white bg-[#0064D2] leading-6 font-medium rounded-full text-base w-full lg:w-[365px] p-2">Effectuer</button>
                   </div>
                   <div class="text-center">
                    <button  @click.prevent="goToStep(2)"  class="text-black bg-[#F4F4F4] leading-6 font-medium rounded-full text-base w-full lg:w-[365px] p-2">Retour</button>
                   </div>
                </div>
           </div>
        </div>
        <div class=" py-11" id="step3" v-if="activePhase == 4">
        
       <div class="justify-center flex mb-7 ">
        
                            <img alt="park" class="   "   src="@/assets/icons/checkicon.svg" width="144"  />
                        
       </div>
       <div class="text-center font-bold text-5xl mb-5">une demande effectuée avec succès.</div>
       <div class="font-normal text-center text-base mb-16">Nous vous contacterons dans une durée<br/> de moins de 24h</div>
          
         <div class="text-center ">
                    <button @click="toggleModal = false"  @click.prevent="goToStep(1)" class="text-white bg-[#0064D2] leading-6 font-medium rounded-full text-base w-full lg:w-[365px] p-2">Fermer</button>
                   </div>
                   
        </div>
    </div>
   
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
<script>

export default {
  name: "modal",
  data() {
    return {
      activePhase: 1,
        user_detail1: {
            name: '',
            email: ''
        },
        user_detail2: {
            city: '',
            state: ''
        },
     
     
      toggleModal: false,
     
    };
  },
  ready:function(){
    console.log('ready');
  },
  methods:{
    goToStep: function(step){
      this.activePhase = step;
    }
  },
}
</script>