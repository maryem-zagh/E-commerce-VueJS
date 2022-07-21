<script setup>
import { ref } from 'vue'
import {
  Dialog,
  DialogPanel,
  Disclosure,
  DisclosureButton,
  DisclosurePanel,
  Menu,
  MenuButton,
  MenuItem,
  MenuItems,
  TransitionChild,
  TransitionRoot,
} from '@headlessui/vue'
import { XIcon } from '@heroicons/vue/outline'
import { ChevronDownIcon, FilterIcon, MinusSmIcon, PlusSmIcon, ViewGridIcon } from '@heroicons/vue/solid'

const sortOptions = [
  { name: 'Most Popular', href: '#', current: true },
  { name: 'Best Rating', href: '#', current: false },
  { name: 'Newest', href: '#', current: false },
  { name: 'Price: Low to High', href: '#', current: false },
  { name: 'Price: High to Low', href: '#', current: false },
]
const subCategories = [
  { name: 'Identité Visuelle', href: '#' },
  { name: 'Logos', href: '#' },
  { name: '3D', href: '#' },
 
]
const subFilters = [
  { name: 'Derniers projets', href: '#' },
  { name: 'Projets en réduction', href: '#' },
  
 
]
const subPropriétés = [
  { name: 'Vecteurs', href: '#' },
  { name: 'Superposé', href: '#' },
 
 
]


const products = [
  {
    id: 1,
    name: 'Logo Zebra Brand',
    href: '#',
    imageSrc: 'src/assets/zebra.png',
    imageAlt: "Front of men's Basic Tee in black.",
    price: '$86',
    
  },
   {
    id: 1,
    name: 'Logo Zebra Brand',
    href: '#',
    imageSrc: 'src/assets/zebra2.png',
    imageAlt: "Front of men's Basic Tee in black.",
    price: '$105',
    
  },
   {
    id: 1,
    name: 'Logo Zebra Brand',
    href: '#',
    imageSrc: 'src/assets/zebra3.png',
    imageAlt: "Front of men's Basic Tee in black.",
    price: '180 €',
    
  },
   {
    id: 1,
    name: 'Logo Zebra Brand',
    href: '#',
    imageSrc: 'src/assets/zebra3.png',
    imageAlt: "Front of men's Basic Tee in black.",
    price: '180 €',
    
  },
  // More products...
]


const mobileFiltersOpen = ref(false)
</script>

<template>

    

      
      <main class="  h-full ">


         <div
            class=" bg-[url('@/assets/shopbg.png')]  pt-24 px-8 pb-4"
        >
            <div>
               
                <div
                    class=" text-center text-white md:text-[48px] text-2xl font-[700] tracking-wide mb-14"
                >
                    Meilleures projets créatifs
                </div>

                
                
                <div class="flex  justify-center  my-8">
                    <select class="flex-shrink-0  inline-flex items-center py-2.5 px-9 text-sm font-medium text-center text-gray-500 bg-gray-100 border border-gray-300 rounded-l-[30px]  focus:ring-4 focus:outline-none ">
               <option>Toutes Catégories</option>
               <option>No</option>
               <option>Maybe</option>
           </select>
        
        <div class="relative w-96 ">
            <input type="search" id="location-search" class=" text-center block p-2.5 w-full z-20 text-sm text-gray-900  bg-gray-50 rounded-r-[30px] border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Recherche produit, catégory ..." required>
            
        </div>  
                </div>
            </div>
            <!-- apropos -->
           
        </div>

           
             
<div class=" flex flex-wrap justify-center gap-x-2  ">
  <!-- grid sm:grid-cols-1 xl:grid-cols-3 gap-24 px-4 py-16 xl:p-20 justify-center -->
           <select class="border-0 ">
               <option>Modéles Graphique</option>
               <option>No</option>
               <option>Maybe</option>
           </select>
        <select  class="border-0 ">
               <option>Documents</option>
               <option>No</option>
               <option>Maybe</option>
           </select>
          <select  class="border-0 ">
               <option>Modéles 3D</option>
               <option>No</option>
               <option>Maybe</option>
           </select>
          <select  class="border-0 ">
               <option>UX / UI</option>
               <option>No</option>
               <option>Maybe</option>
           </select>
          <select  class="border-0 ">
               <option>Vidéos</option>
               <option>No</option>
               <option>Maybe</option>
           </select>
           

</div>

           





      </main>
       
      
    <div class="bg-white">
    <div>
      
      <TransitionRoot as="template" :show="mobileFiltersOpen">
        <Dialog as="div" class="relative z-40 lg:hidden" @close="mobileFiltersOpen = false">
          <TransitionChild as="template" enter="transition-opacity ease-linear duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="transition-opacity ease-linear duration-300" leave-from="opacity-100" leave-to="opacity-0">
            <div class="fixed inset-0 bg-black bg-opacity-25" />
          </TransitionChild>

          <div class="fixed inset-0 flex z-40">
            <TransitionChild as="template" enter="transition ease-in-out duration-300 transform" enter-from="translate-x-full" enter-to="translate-x-0" leave="transition ease-in-out duration-300 transform" leave-from="translate-x-0" leave-to="translate-x-full">
              <DialogPanel class="ml-auto relative max-w-xs w-full h-full bg-white shadow-xl py-4 pb-12 flex flex-col overflow-y-auto">
                <div class="px-4 flex items-center justify-between">
                  <h2 class="text-lg font-medium text-gray-900">Filters</h2>
                  <button type="button" class="-mr-2 w-10 h-10 bg-white p-2 rounded-md flex items-center justify-center text-gray-400" @click="mobileFiltersOpen = false">
                    <span class="sr-only">Close menu</span>
                    <XIcon class="h-6 w-6" aria-hidden="true" />
                  </button>
                </div>

           
                <form class="mt-4 border-t border-gray-200">
                  <h3 class="sr-only">Propriétés</h3>
                  <ul role="list" class="font-medium text-gray-900 px-2 py-3">
                      <h1 class="font-[700]">category</h1>
                    <li v-for="Propriétés in subCategories" :key="Propriétés.name">
                      <a :href="Propriétés.href" class="block px-2 py-3">
                        {{ Propriétés.name }}
                      </a>
                    </li>
                  </ul>

                 <h3 class="sr-only">Propriétés</h3>
                  <ul role="list" class="font-medium text-gray-900 px-2 py-3">
                      <h1 class="font-[700]">Filters</h1>
                    <li v-for="Propriétés in subFilters" :key="Propriétés.name">
                      <a :href="Propriétés.href" class="block px-2 py-3">
                        {{ Propriétés.name }}
                      </a>
                    </li>
                  </ul>
                  <h3 class="sr-only">Propriétés</h3>
                  <ul role="list" class="font-medium text-gray-900 px-2 py-3">
                      <h1 class="font-[700]">Propriétés</h1>
                    <li v-for="Propriétés in subPropriétés" :key="Propriétés.name">
                      <a :href="Propriétés.href" class="block px-2 py-3">
                        {{ Propriétés.name }}
                      </a>
                    </li>
                  </ul>
                  <h3 class="sr-only">Propriétés</h3>
                  <ul role="list" class="font-medium text-gray-900 px-2 py-3">
                      <h1 class="font-[700]">Prix</h1>
                    <input id="minmax-range" type="range" min="0" max="10" value="5" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
              <div class="flex flex-row gap-4">
                <div>
                  <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 ">min</label>
              <input type="text" id="small-input" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 d"/>
              </div>
              <div>
                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 ">max</label>
              <input type="text" id="small-input" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 d"/>
             </div>
             
             </div>
             <div class="flex flex-row  gap-14">
              <div>
               <button class="bg-secondary  text-white hover:bg-blue-700 font-blond py-2 px-5 rounded-lg">Valider</button>
               </div>
               <div>
               <button class="bg-white text-secondary hover:bg-blue-700 font-blond py-2 px-4 rounded-lg border border-gray-400 ">Annuler</button>
             </div>
             </div>
                  </ul>
                </form>
              </DialogPanel>
            </TransitionChild>
          </div>
        </Dialog>
      </TransitionRoot>

      <div class=" ">
         <div class="relative z-10 flex items-baseline justify-between pt-4  border-b border-gray-200">
          <h1 class="text-4xl font-extrabold tracking-tight text-gray-900"></h1>

          <div class="flex items-center">
            <!-- <Menu as="div" class="relative inline-block text-left">
              <div>
                <MenuButton class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900">
                  Sort
                  <ChevronDownIcon class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500" aria-hidden="true" />
                </MenuButton>
              </div>

              <transition enter-active-class="transition ease-out duration-100" enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100" leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100" leave-to-class="transform opacity-0 scale-95">
                <MenuItems class="origin-top-right absolute right-0 mt-2 w-40 rounded-md shadow-2xl bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                  <div class="py-1">
                    <MenuItem v-for="option in sortOptions" :key="option.name" v-slot="{ active }">
                      <a :href="option.href" :class="[option.current ? 'font-medium text-gray-900' : 'text-gray-500', active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm']">
                        {{ option.name }}
                      </a>
                    </MenuItem>
                  </div>
                </MenuItems>
              </transition>
            </Menu> -->

            <!-- <button type="button" class="p-2 -m-2 ml-5 sm:ml-7 text-gray-400 hover:text-gray-500">
              <span class="sr-only">View grid</span>
              <ViewGridIcon class="w-5 h-5" aria-hidden="true" />
            </button> -->
            <button type="button" class="p-2  ml-4 mr-5 text-gray-400 hover:text-gray-500 lg:hidden" @click="mobileFiltersOpen = true">
              <span class="sr-only">Filters</span>
              <FilterIcon class="w-5 h-5" aria-hidden="true" />
            </button>
          </div>
        </div> 

        <section aria-labelledby="products-heading" class="pt-6 pb-24">
          <h2 id="products-heading" class="sr-only">Products</h2>

          <div class="grid grid-cols-1 lg:grid-cols-4 gap-x-14 gap-y-6 lg:px-24 px-4">
          
            <form class="hidden lg:block">
              <h3 class="sr-only">Propriétés</h3>
              <ul role="list" class="text-sm font-medium text-gray-900 space-y-4 pb-6 border-b border-gray-200">
                <h1 class="font-[700]">category</h1>
                <li v-for="Propriétés in subCategories" :key="Propriétés.name">
                  <a :href="Propriétés.href">
                    {{ Propriétés.name }}
                  </a>
                </li>
              </ul>
              

               <ul role="list" class="text-sm font-medium text-gray-900 space-y-4 pb-6 border-b border-gray-200">
                <h1 class="font-[700]" >Filtres</h1>
                <li v-for="Propriétés in subFilters" :key="Propriétés.name">
                  <a :href="Propriétés.href">
                    {{ Propriétés.name }}
                  </a>
                </li>
              </ul>
               <ul role="list" class="text-sm font-medium text-gray-900 space-y-4 pb-6 border-b border-gray-200">
                <h1 class="font-[700]">Propriétés</h1>
                <li v-for="Propriétés in subPropriétés" :key="Propriétés.name">
                  <a :href="Propriétés.href">
                    {{ Propriétés.name }}
                  </a>
                </li>
              </ul>
              <ul role="list" class="text-sm font-medium text-gray-900 space-y-4 pb-6 border-b border-gray-200">
                <h1 class="font-[700]">Prix</h1>
                <input id="minmax-range" type="range" min="0" max="10" value="5" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
              <div class="flex flex-row gap-4">
                <div>
                  <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 ">min</label>
              <input type="text" id="small-input" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 d"/>
              </div>
              <div>
                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 ">max</label>
              <input type="text" id="small-input" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 d"/>
             </div>
             
             </div>
             <div class="flex flex-row gap-14">
              <div>
               <button class="bg-secondary text-white hover:bg-blue-700 font-blond py-2 px-5 rounded-lg">Valider</button>
               </div>
               <div>
               <button class="bg-white text-secondary hover:bg-blue-700 font-blond py-2 px-4 rounded-lg border border-gray-400 ">Annuler</button>
             </div>
             </div>
              </ul>
            </form>

            
            <div class="lg:col-span-3 sm:grid-cols-2 xl:grid-cols-3   ">

              
                
                    <img src="@/assets/shopseas.png" alt="shop" class="w-full  " />
                
            
    
        <div   class=" font-ProductSans grid md:grid-cols-2 xl:grid-cols-3 gap-24  py-16 ">
         
                <div
                     v-for="product in products" :key="product.id"  class="bg-white rounded-[30px] border  border-gray-300 shadow-2xl  w-full mt-0 inline-grid justify-items-center"
                >
                    
                   
                       <img :src="product.imageSrc" :alt="product.imageAlt" class=" w-full "/>
                    
                    <div
                        class="mt-2 text-stone-100 font-[400] text-center text-info " aria-hidden="true"
                    >
                        {{ product.name }}
                    </div>
                    <div
                        class="mt-2 text-stone-900 font-[700] text-center"
                    >
                      {{ product.price }}
                    </div>
                    <div class="my-4 text-center">
                        <span
                            class="text-secondary font-bold text-center text-base"
                        >
                          Acheter
                        </span>
                        
                       <font-awesome-icon  class="text-secondary font-bold" icon="check" />
                    </div>
                
               
               
                
         </div>
</div>

                
        
            </div>
          </div>
        </section>
      </div>
    </div>
  </div> 

       

     
   
  

    

        
       
   
</template>
