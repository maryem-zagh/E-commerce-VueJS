<template>

  <div class="lg:px-24 md:px-5 grid-cols-1" id="user_detail1" >
        <!-- stepper -->
         <div class="flex flex-row items-center sm:grid-cols-6 ">
                         
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
           
              <span class="h-0.5 w-9 bg-blue-600 lg:w-1/1 px-5 "></span>
           <div class="px-5">
                       <div class="w-8 h-8  rounded-full bg-[#C4C4C4] text-white flex justify-center items-center">
                        <a href="# " class="">
                            <h1 class="text-2xl text-white">2</h1>
                        </a>
                    </div>
                      </div>
                    
            <div class=" px-5 lg:text-xl md:text-sm font-normal leading-8 text-gray-400">
              Spécif  ications du projet
            </div>
            <span class="h-0.5 w-9 bg-gray-400 lg:w-1/1 px-5 "></span>
             <div class="px-5">
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
            <form class=" mt-9 " >
                <div class="grid  mb-6 lg:grid-cols-3">
                    <div>
                        <Menu as="div" class="relative inline-block text-left">
        <div>
          <MenuButton
            class="inline-flex justify-center lg:w-72 rounded-lg px-4 border-2 py-1.5 text-base font-medium text-black hover:bg-gray-50">
            Entité
            <ChevronDownIcon class="-mr-3 ml-40 h-5 w-52 text-secondary" aria-hidden="true" />
          </MenuButton>
        </div>

        <transition enter-active-class="transition ease-out duration-100"
          enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100"
          leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100"
          leave-to-class="transform opacity-0 scale-95">
          <MenuItems
            class="origin-top-left absolute left-0 mt-2 w-64 z-50 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
            <div class="py-1">
              <MenuItem v-slot="{ active }">
              <a href="#" :class="[
                active ? 'bg-gray-100 text-gray-900' : 'text-gray-700',
                'block px-4 py-2 text-sm',
              ]">Account settings</a>
              </MenuItem>
              <MenuItem v-slot="{ active }">
              <a href="#" :class="[
                active ? 'bg-gray-100 text-gray-900' : 'text-gray-700',
                'block px-4 py-2 text-sm',
              ]">Support</a>
              </MenuItem>
              <MenuItem v-slot="{ active }">
              <a href="#" :class="[
                active ? 'bg-gray-100 text-gray-900' : 'text-gray-700',
                'block px-4 py-2 text-sm',
              ]">License</a>
              </MenuItem>
              <form method="POST" action="#">
                <MenuItem v-slot="{ active }">
                <button type="submit" :class="[
                  active ? 'bg-gray-100 text-gray-900' : 'text-gray-700',
                  'block w-full text-left px-4 py-2 text-sm',
                ]">
                  Sign out
                </button>
                </MenuItem>
              </form>
            </div>
          </MenuItems>
        </transition>
       </Menu>
                    </div>
                    <div class="lg:col-span-2">
                        <input type="text" id="last_name"
                            class="bg-[#ffffff] text-gray-900 text-sm rounded-lg border border-gray-300 block lg:w-full p-2"
                            placeholder="Nom Complet" required />
                    </div>
                </div>
                <div class="grid  mb-6 lg:grid-cols-4">
                    <div>
                        <Menu as="div" class="relative inline-block text-left">
        <div>
          <MenuButton
            class="inline-flex justify-center w-52 rounded-lg px-4 py-1.5 text-base font-medium border-2 text-primary hover:bg-gray-50">
            Pays
            <ChevronDownIcon class="-mr-1 ml-28 h-5 w-28 text-secondary" aria-hidden="true" />
          </MenuButton>
        </div>

        <transition enter-active-class="transition ease-out duration-100"
          enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100"
          leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100"
          leave-to-class="transform opacity-0 scale-95">
          <MenuItems
            class="origin-top-left absolute left-0 mt-2 w-32 z-50 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
            <div class="py-1">
              <MenuItem v-slot="{ active }">
              <a href="#" :class="[
                active ? 'bg-gray-100 text-gray-900' : 'text-gray-700',
                'block px-4 py-2 text-sm',
              ]">Account settings</a>
              </MenuItem>
              <MenuItem v-slot="{ active }">
              <a href="#" :class="[
                active ? 'bg-gray-100 text-gray-900' : 'text-gray-700',
                'block px-4 py-2 text-sm',
              ]">Support</a>
              </MenuItem>
              <MenuItem v-slot="{ active }">
              <a href="#" :class="[
                active ? 'bg-gray-100 text-gray-900' : 'text-gray-700',
                'block px-4 py-2 text-sm',
              ]">License</a>
              </MenuItem>
              <form method="POST" action="#">
                <MenuItem v-slot="{ active }">
                <button type="submit" :class="[
                  active ? 'bg-gray-100 text-gray-900' : 'text-gray-700',
                  'block w-full text-left px-4 py-2 text-sm',
                ]">
                  Sign out
                </button>
                </MenuItem>
              </form>
            </div>
          </MenuItems>
        </transition>
       </Menu>
                    </div>
                      <div class="lg:col-span-3">
                        <input type="text" id="last_name"
                            class="bg-[#ffffff] text-gray-900 text-sm border border-gray-300 rounded-lg block lg:w-full p-2"
                            placeholder="Numéro de téléphone" required />
                    </div>
                </div>
                <div class="grid gap-6 mb-6 lg:grid-cols-1">
                    <input type="text" id="default-input"
                        class="bg-[#ffffff] text-gray-900 border border-gray-300 text-sm rounded-lg block lg:w-full p-2"
                        placeholder="Adresse électronique" />
                </div>

                 <div class="grid gap-6 mb-6 lg:grid-cols-1">
                    <Menu as="div" class="relative inline-block text-left">
        <div>
          <MenuButton
            class="inline-flex justify-center lg:w-full rounded-lg px-4 py-1.5 border-2 text-base font-medium text-primary hover:bg-gray-50">
            Secteur du projet
            <ChevronDownIcon class="-mr-1 lg:ml-[659px] h-5 w-5 text-secondary" aria-hidden="true" />
          </MenuButton>
        </div>

        <transition enter-active-class="transition ease-out duration-100"
          enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100"
          leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100"
          leave-to-class="transform opacity-0 scale-95">
          <MenuItems
            class="origin-top-left absolute left-0 mt-2 w-full z-50 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
            <div class="py-1">
              <MenuItem v-slot="{ active }">
              <a href="#" :class="[
                active ? 'bg-gray-100 text-gray-900' : 'text-gray-700',
                'block px-4 py-2 text-sm',
              ]">Account settings</a>
              </MenuItem>
              <MenuItem v-slot="{ active }">
              <a href="#" :class="[
                active ? 'bg-gray-100 text-gray-900' : 'text-gray-700',
                'block px-4 py-2 text-sm',
              ]">Support</a>
              </MenuItem>
              <MenuItem v-slot="{ active }">
              <a href="#" :class="[
                active ? 'bg-gray-100 text-gray-900' : 'text-gray-700',
                'block px-4 py-2 text-sm',
              ]">License</a>
              </MenuItem>
              <form method="POST" action="#">
                <MenuItem v-slot="{ active }">
                <button type="submit" :class="[
                  active ? 'bg-gray-100 text-gray-900' : 'text-gray-700',
                  'block w-full text-left px-4 py-2 text-sm',
                ]">
                  Sign out
                </button>
                </MenuItem>
              </form>
            </div>
          </MenuItems>
        </transition>
       </Menu>
                </div>
                <div class="grid gap-2 mb-6 lg:grid-cols-2">
                    <div>
                        <Menu as="div" class="relative inline-block text-left">
        <div>
          <MenuButton
            class="inline-flex justify-center lg:w-[390px] rounded-lg px-4 py-1.5 border-2 text-base font-medium text-primary hover:bg-gray-50">
            Activité
            <ChevronDownIcon class="-mr-1 ml-72 h-5 w-5 text-secondary" aria-hidden="true" />
          </MenuButton>
        </div>

        <transition enter-active-class="transition ease-out duration-100"
          enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100"
          leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100"
          leave-to-class="transform opacity-0 scale-95">
          <MenuItems
            class="origin-top-left absolute left-0 mt-2 w-full z-50 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
            <div class="py-1">
              <MenuItem v-slot="{ active }">
              <a href="#" :class="[
                active ? 'bg-gray-100 text-gray-900' : 'text-gray-700',
                'block px-4 py-2 text-sm',
              ]">Account settings</a>
              </MenuItem>
              <MenuItem v-slot="{ active }">
              <a href="#" :class="[
                active ? 'bg-gray-100 text-gray-900' : 'text-gray-700',
                'block px-4 py-2 text-sm',
              ]">Support</a>
              </MenuItem>
              <MenuItem v-slot="{ active }">
              <a href="#" :class="[
                active ? 'bg-gray-100 text-gray-900' : 'text-gray-700',
                'block px-4 py-2 text-sm',
              ]">License</a>
              </MenuItem>
              <form method="POST" action="#">
                <MenuItem v-slot="{ active }">
                <button type="submit" :class="[
                  active ? 'bg-gray-100 text-gray-900' : 'text-gray-700',
                  'block w-full text-left px-4 py-2 text-sm',
                ]">
                  Sign out
                </button>
                </MenuItem>
              </form>
            </div>
          </MenuItems>
        </transition>
       </Menu>
                    </div>
                    <div>
                        <input type="text" id="last_name"
                            class="bg-[#ffffff] text-gray-900 text-sm rounded-lg border border-gray-300 block lg:w-full p-2"
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
                    <button @click.prevent="goToStep(2)" class="text-white bg-[#0064D2] leading-6 font-medium rounded-full text-base w-[400px] p-2">Envoyer</button>
                   </div>
        </div>
</template>
<script setup>
import { Menu, MenuButton, MenuItem, MenuItems } from "@headlessui/vue";

import {
  ChevronDownIcon,
 
} from "@heroicons/vue/solid";
import DetailProduct from "../DetailProduct.vue";
import AcheterMaintenantVue from "../AcheterMaintenant.vue";
import AcheterMaintenant from "../AcheterMaintenant.vue";

</script>
<script>

export default {
  name: "modal",
  data() {
    return {
      showDetail: true,
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
      toggleModal1: false,
      toggleModal2: false
    };
  },
  ready:function(){
    console.log('ready');
  },
  methods:{
    goToStep: function(step){
      this.activePhase = step;
    },
    hideDetail :function(){
      this.showDetail= false;
    }
  },
}
</script>