<template>

<div class="lg:px-24" id="user_detail2" >
             <div  class="flex flex-row items-center">
                         
                        <div class="">
                       <div class="w-8 h-8  rounded-full bg-[#0059C8] text-white flex justify-center items-center">
                        <a href="# " class="">
                            <h1 class="text-2xl text-white">1</h1>
                        </a>
                    </div>
                      </div>
                      
                    
            <div class=" px-3 text-xl font-normal leading-8 text-blue-800">
              Informations du contact
            </div>
           
              <span class="h-0.5 w-9 bg-blue-600 lg:w-1/1 px-5 "></span>
           <div class="px-5">
                       <div class="w-8 h-8  rounded-full bg-[#0059C8] text-white flex justify-center items-center">
                        <a href="# " class="">
                            <h1 class="text-2xl text-white">2</h1>
                        </a>
                    </div>
                      </div>
                    
            <div class=" px-5  text-xl font-normal leading-8 text-blue-600">
              Spécif  ications du projet
            </div>
            <span class="h-0.5 w-9 bg-blue-600 lg:w-1/1 px-5 "></span>
             <div class="px-5">
                       <div class="w-8 h-8  rounded-full bg-[#C4C4C4] text-white flex justify-center items-center">
                        <a href="# " class="">
                            <h1 class="text-2xl text-white">3</h1>
                        </a>
                    </div>
                      </div>
                      
                    
            <div class=" px-3 text-xl font-normal leading-8 text-gray-400">
              Paiement
            </div>
           
              
                    </div>
            <form class=" mt-9 " >
                <div class="grid  mb-6 lg:grid-cols-2">
                    <div>
                        <Menu as="div" class="relative inline-block text-left">
        <div>
          <MenuButton
            class="inline-flex justify-center w-[395px] rounded-lg px-4 border-2 py-1.5 text-base font-medium text-black hover:bg-gray-50">
            Support de usage
            <ChevronDownIcon class="-mr-3 ml-60 h-5 w-5 text-secondary" aria-hidden="true" />
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
                    <div class="">
                                       <Menu as="div" class="relative inline-block text-left">
        <div>
          <MenuButton
            class="inline-flex justify-center w-[415px] rounded-lg px-4 border-2 py-1.5 text-base font-medium text-black hover:bg-gray-50">
            Durée de la réalisation
            <ChevronDownIcon class="-mr-3 ml-60 h-5 w-5 text-secondary" aria-hidden="true" />
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
                </div>
                <div class="grid  mb-6 lg:grid-cols-4">
                  <div class="lg:col-span-2">
                    <div class="relative flex items-start">
                      <div class="flex items-center h-5"><input id="candidates" aria-describedby="candidates-description" name="candidates" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-secondary border-gray-300 rounded-full" /></div>
                    <div class="ml-3 text-sm">
                      <label for="comments" class="font-medium text-gray-700">J’ai ma propre charte graphique ou palette de couleurs</label>
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
                        <Menu as="div" class="relative inline-block text-left">
        <div>
          <MenuButton
            class="inline-flex justify-center w-52 rounded-lg px-4 py-2 border-2 text-base font-medium text-primary hover:bg-gray-50">
            Piéce jointe
            <ChevronDownIcon class="-mr-1 ml-5 h-5 w-20 text-secondary" aria-hidden="true" />
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
                    <div class="">
                        <Menu as="div" class="relative inline-block text-left">
        <div>
          <MenuButton
            class="inline-flex justify-center w-56 rounded-lg px-4 py-2 border-2 text-base font-medium text-primary hover:bg-gray-50">
           Choix de couleurs
            <ChevronDownIcon class="-mr-1 ml-5 h-5 w-9 text-secondary" aria-hidden="true" />
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
                </div>
                <div class="grid gap-6 mb-6 lg:grid-cols-1">
                    <input type="text" id="default-input"
                        class="bg-[#ffffff] text-gray-900 border border-gray-300 text-sm rounded-lg block w-full p-2"
                        placeholder="Vos concurrents ( nommez 3 exemples minimum )" />
                </div>
                <div class="grid gap-6 mb-6 lg:grid-cols-1">
                    <input type="text" id="default-input"
                        class="bg-[#ffffff] text-gray-900 border border-gray-300 text-sm rounded-lg block w-full p-2"
                        placeholder="Cibles" />
                </div>

                 <div class="grid  mb-6 lg:grid-cols-2">
                    <div>
                        <Menu as="div" class="relative inline-block text-left">
        <div>
          <MenuButton
            class="inline-flex justify-center w-[375px] rounded-lg px-4 border-2 py-1.5 text-base font-medium text-black hover:bg-gray-50">
            Langue
            <ChevronDownIcon class="-mr-3 ml-72 h-5 w-96 text-secondary" aria-hidden="true" />
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
                    <div class="">
                                       <Menu as="div" class="relative inline-block text-left">
        <div>
          <MenuButton
            class="inline-flex justify-center w-[415px] rounded-lg px-4 border-2 py-1.5 text-base font-medium text-black hover:bg-gray-50">
            Nombre de propositions
            <ChevronDownIcon class="-mr-3 ml-52 h-5 w-5 text-secondary" aria-hidden="true" />
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
                </div>
                  <div class="grid gap-6 mb-6 lg:grid-cols-1">
                    <input type="text" id="default-input"
                        class="bg-[#ffffff] text-gray-900 border border-gray-300 text-sm rounded-lg block w-full p-2"
                        placeholder="Cibles" />
                </div>
            </form>
          
                   <div class="text-center">
                    <button  @click.prevent="goToStep(3)"  class="text-white bg-[#0064D2] leading-6 font-medium rounded-full text-base w-[400px] p-2">Envoyer</button>
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