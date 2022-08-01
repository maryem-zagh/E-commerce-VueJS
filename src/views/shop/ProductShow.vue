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
      product: {
        "url": "/src/assets/shop.png"
      },
      products: [
        {
          "id": 1,
          "url": "/src/assets/zebra.png",

        },
        {
          "id": 2,
          "url": "/src/assets/zebra2.png",

        },
        {
          "id": 3,
          "url": "/src/assets/zebra3.png",

        },
      ],
      categories: [],
      toggleModal: false,
      toggleModal1: false,
      toggleModal2: false
    };
  },
  methods: {
    changeImage(data) {
      this.product.url = data
    }
  }
}
</script>

<template>
  <img src="@/assets/bg-2.png" class="block bg-no-repeat bg-cover min-h-[110px] w-full " alt="Motorbike Smoke" />

  <main class="lg:px-24 ">

    <div class="bg-white  px-8 pb-4 font-ProductSans flex flex-wrap justify-center gap-x-2">
      <Menu as="div" class="relative inline-block text-left">
        <div>
          <MenuButton
            class="inline-flex justify-center w-full rounded-md px-4 py-2 text-base font-medium text-primary hover:bg-gray-50">
            Modèle Graphique
            <ChevronDownIcon class="-mr-1 ml-2 h-5 w-5" aria-hidden="true" />
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
      <!--   Documents -->
      <Menu as="div" class="relative inline-block text-left">
        <div>
          <MenuButton
            class="inline-flex justify-center w-full rounded-md px-4 py-2 text-base font-medium text-primary hover:bg-gray-50">
            Documents
            <ChevronDownIcon class="-mr-1 ml-2 h-5 w-5" aria-hidden="true" />
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
      <!--   Modéles 3D -->
      <Menu as="div" class="relative inline-block text-left">
        <div>
          <MenuButton
            class="inline-flex justify-center w-full rounded-md px-4 py-2 text-base font-medium text-primary hover:bg-gray-50">
            Modéles 3D
            <ChevronDownIcon class="-mr-1 ml-2 h-5 w-5" aria-hidden="true" />
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
      <!--   UX / UI -->
      <Menu as="div" class="relative inline-block text-left">
        <div>
          <MenuButton
            class="inline-flex justify-center w-full rounded-md px-4 py-2 text-base font-medium text-primary hover:bg-gray-50">
            UX / UI
            <ChevronDownIcon class="-mr-1 ml-2 h-5 w-5" aria-hidden="true" />
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
      <!--   Vidéos -->
      <Menu as="div" class="relative inline-block text-left">
        <div>
          <MenuButton
            class="inline-flex justify-center w-full rounded-md px-4 py-2 text-base font-medium text-primary hover:bg-gray-50">
            Vidéos
            <ChevronDownIcon class="-mr-1 ml-2 h-5 w-5" aria-hidden="true" />
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
    <!-- details products -->
    <div class="grid md:grid-cols-2  lg:gap-28  md:gap-10  ">
      <div>
        <div class="flex flex-row lg:gap-5 px-5 ">
          <div class="px-2">
            <button type="button"
              class="bg-[#dff1f8b0] text-[#0064D2] border border-blue-700 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-1.5 text-center inline-flex items-center">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18">
                </path>
              </svg>
              <span class="sr-only">Icon description</span>
            </button>
          </div>
          <div class="py-2">
            <ul class="flex flex-row gap-2">
              <li>
                <a href="/" class="no-underline hover:underline font-semibold text-sm leading-5 text-black">Home</a>
              </li>
              <li>/</li>
              <li>
                <a href="/shop"
                  class="no-underline hover:underline font-semibold text-sm leading-5 text-black">Desgin</a>
              </li>
              <li>/</li>
              <li>
                <a href="#" class="no-underline hover:underline font-semibold text-sm leading-5 text-[#0064D2]">Minimal
                  Zebra Logo</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="group col-span-4 px-5">
          <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
            <img :src="product.url" class="w-full h-full object-center object-cover group-hover:opacity-75" />

          </div>
          <div class="grid grid-cols-3 gap-4 mt-4">

            <img v-for="product in products" @click="changeImage(product.url)" :src="product.url" alt="">

          </div>
        </div>

      </div>

      <div>
        <div class="grid grid-cols-2 py-14 px-5 ">
          <div>
            <h1 class="font-bold text-2xl">Minimal Zebra Logo</h1>
            <p class="font-ProductSans text-sm">
              Free 2 Days Shipping | 1 Year Warranty
            </p>
          </div>
          <div class="">
            <h1 class="font-bold text-4xl lg:px-24">€580</h1>
          </div>
        </div>
        <div class="px-5">
          <div class="font-semibold text-base">Discription</div>
          <ul class="list-disc px-6 text-sm font-semibold">
            <li>15 cm (6.1-inch) Super Retina XDR display</li>
            <li>
              2MP TrueDepth front camera with Night mode, 4K Dolby Vision HDR
              recording
            </li>
            <li>A15 Bionic chip for lightning-fast performance</li>
            <li>Up to 19 hours of video playback</li>
            <li>Durable design with Ceramic Shield</li>
            <li>Industry-leading IP68 water resistance</li>
            <li>
              iOS 15 packs new features to do more with iPhone than ever before
            </li>
            <li>
              Supports MagSafe accessories for easy attachment and faster
              wireless charging
            </li>
          </ul>
        </div>
        <div class="lg:py-28 px-5">
          <div class="mb-5">
            <button type="button" @click="toggleModal = !toggleModal"
              class="text-white bg-[#0064D2] leading-6 font-medium rounded-lg text-base w-full p-4">
              Acheter Maintenant
            </button>
            <div class="fixed overflow-x-hidden overflow-y-auto inset-0 flex justify-center items-center z-50"
              v-if="toggleModal">
              <div class="relative p-4 w-[750px] h-full  ">
                <div class="relative bg-white rounded-lg h-[570px] shadow ">
                  <div class="flex justify-between items-start p-4  ">
                    <button type="button"
                      class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
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

                  <div class=" px-20 font-ProductSans">
                    <div class="text-primary text-2xl font-extrabold col-span-2 tracking-wide  mb-4">
                      Desgin Graphique
                      <div class="mt-5 text-sm font-[400] text-info">
                        Des projets suivis et créés de A à Z dans des délais raccourcis par rapport à une agence de
                        communication.
                        Des tarifs plus attractifs et totalement maîtrisés et sans surprises qu’en agences de com’ ou
                        de
                        publicité.
                        Remplissez le formulaire suivant :

                      </div>
                      <form>
                        <input type="text">
                      </form>
                    </div>


                  </div>
                </div>
              </div>
            </div>
            <div v-if="toggleModal" class="absolute z-40 insert-0 opacity-25 bg-[#2d2d2e]"></div>
          </div>

          <div class="mb-6">
            <button type="button"
              class="text-black bg-white text-base border leading-6 border-b-gray-400 font-medium rounded-lg w-full p-4">
              Je veux une conception personnalisée
            </button>
          </div>
        </div>
      </div>
    </div>
  </main>
</template>
