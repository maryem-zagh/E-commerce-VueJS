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
  { name: 'Totes', href: '#' },
  { name: 'Backpacks', href: '#' },
  { name: 'Travel Bags', href: '#' },
  { name: 'Hip Bags', href: '#' },
  { name: 'Laptop Sleeves', href: '#' },
]
const filters = [
  {
    id: 'color',
    name: 'Color',
    options: [
      { value: 'white', label: 'White', checked: false },
      { value: 'beige', label: 'Beige', checked: false },
      { value: 'blue', label: 'Blue', checked: true },
      { value: 'brown', label: 'Brown', checked: false },
      { value: 'green', label: 'Green', checked: false },
      { value: 'purple', label: 'Purple', checked: false },
    ],
  },
  {
    id: 'category',
    name: 'Category',
    options: [
      { value: 'new-arrivals', label: 'New Arrivals', checked: false },
      { value: 'sale', label: 'Sale', checked: false },
      { value: 'travel', label: 'Travel', checked: true },
      { value: 'organization', label: 'Organization', checked: false },
      { value: 'accessories', label: 'Accessories', checked: false },
    ],
  },
  {
    id: 'size',
    name: 'Size',
    options: [
      { value: '2l', label: '2L', checked: false },
      { value: '6l', label: '6L', checked: false },
      { value: '12l', label: '12L', checked: false },
      { value: '18l', label: '18L', checked: false },
      { value: '20l', label: '20L', checked: false },
      { value: '40l', label: '40L', checked: true },
    ],
  },
]

const mobileFiltersOpen = ref(false)
</script>

<template>

    <main class="   " >

        <div class="text-center text-2xl font-[700] text-[48px] bg-[url('@/assets/shopbg.png')] h-[440px]" > 
       
       <h1>Meilleures projets créatifs</h1>
       
       <div class="flex justify-center mt-12 ">
        
        <button id="dropdown-button-2" data-dropdown-toggle="dropdown-search-city" class="flex-shrink-0  inline-flex items-center py-2.5 px-9 text-sm font-medium text-center text-gray-500 bg-gray-100 border border-gray-300 rounded-l-[30px] hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100" type="button">
           
            Toutes Catégories 
            <svg class=" text-secondary ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button> 
        
        <div class="relative w-96 ">
            <input type="search" id="location-search" class=" text-center block p-2.5 w-full z-20 text-sm text-gray-900  bg-gray-50 rounded-r-[30px] border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Recherche produit, catégory ..." required>
            
        </div>
        
    </div>
       
       
       </div> 
        
           <div class="flex flex-row mt-32 justify-center  gap-4">
           <select class="">
               <option>Modéles Graphique</option>
               <option>No</option>
               <option>Maybe</option>
           </select>
        <select>
               <option>Documents</option>
               <option>No</option>
               <option>Maybe</option>
           </select>
          <select>
               <option>Modéles 3D</option>
               <option>No</option>
               <option>Maybe</option>
           </select>
          <select>
               <option>UX / UI</option>
               <option>No</option>
               <option>Maybe</option>
           </select>
          <select>
               <option>Vidéos</option>
               <option>No</option>
               <option>Maybe</option>
           </select>



           </div>
    <div class="bg-white">
    <div>
      <!-- Mobile filter dialog -->
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

                <!-- Filters -->
                <form class="mt-4 border-t border-gray-200">
                  <h3 class="sr-only">Categories</h3>
                  <ul role="list" class="font-medium text-gray-900 px-2 py-3">
                    <li v-for="category in subCategories" :key="category.name">
                      <a :href="category.href" class="block px-2 py-3">
                        {{ category.name }}
                      </a>
                    </li>
                  </ul>

                  <Disclosure as="div" v-for="section in filters" :key="section.id" class="border-t border-gray-200 px-4 py-6" v-slot="{ open }">
                    <h3 class="-mx-2 -my-3 flow-root">
                      <DisclosureButton class="px-2 py-3 bg-white w-full flex items-center justify-between text-gray-400 hover:text-gray-500">
                        <span class="font-medium text-gray-900">
                          {{ section.name }}
                        </span>
                        <span class="ml-6 flex items-center">
                          <PlusSmIcon v-if="!open" class="h-5 w-5" aria-hidden="true" />
                          <MinusSmIcon v-else class="h-5 w-5" aria-hidden="true" />
                        </span>
                      </DisclosureButton>
                    </h3>
                    <DisclosurePanel class="pt-6">
                      <div class="space-y-6">
                        <div v-for="(option, optionIdx) in section.options" :key="option.value" class="flex items-center">
                          <input :id="`filter-mobile-${section.id}-${optionIdx}`" :name="`${section.id}[]`" :value="option.value" type="checkbox" :checked="option.checked" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500" />
                          <label :for="`filter-mobile-${section.id}-${optionIdx}`" class="ml-3 min-w-0 flex-1 text-gray-500">
                            {{ option.label }}
                          </label>
                        </div>
                      </div>
                    </DisclosurePanel>
                  </Disclosure>
                </form>
              </DialogPanel>
            </TransitionChild>
          </div>
        </Dialog>
      </TransitionRoot>

      <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative z-10 flex items-baseline justify-between pt-24 pb-6 border-b border-gray-200">
          <h1 class="text-4xl font-extrabold tracking-tight text-gray-900">New Arrivals</h1>

          <div class="flex items-center">
            <Menu as="div" class="relative inline-block text-left">
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
            </Menu>

            <button type="button" class="p-2 -m-2 ml-5 sm:ml-7 text-gray-400 hover:text-gray-500">
              <span class="sr-only">View grid</span>
              <ViewGridIcon class="w-5 h-5" aria-hidden="true" />
            </button>
            <button type="button" class="p-2 -m-2 ml-4 sm:ml-6 text-gray-400 hover:text-gray-500 lg:hidden" @click="mobileFiltersOpen = true">
              <span class="sr-only">Filters</span>
              <FilterIcon class="w-5 h-5" aria-hidden="true" />
            </button>
          </div>
        </div>

        <section aria-labelledby="products-heading" class="pt-6 pb-24">
          <h2 id="products-heading" class="sr-only">Products</h2>

          <div class="grid grid-cols-1 lg:grid-cols-4 gap-x-8 gap-y-10">
            <!-- Filters -->
            <form class="hidden lg:block">
              <h3 class="sr-only">Categories</h3>
              <ul role="list" class="text-sm font-medium text-gray-900 space-y-4 pb-6 border-b border-gray-200">
                <li v-for="category in subCategories" :key="category.name">
                  <a :href="category.href">
                    {{ category.name }}
                  </a>
                </li>
              </ul>

              <Disclosure as="div" v-for="section in filters" :key="section.id" class="border-b border-gray-200 py-6" v-slot="{ open }">
                <h3 class="-my-3 flow-root">
                  <DisclosureButton class="py-3 bg-white w-full flex items-center justify-between text-sm text-gray-400 hover:text-gray-500">
                    <span class="font-medium text-gray-900">
                      {{ section.name }}
                    </span>
                    <span class="ml-6 flex items-center">
                      <PlusSmIcon v-if="!open" class="h-5 w-5" aria-hidden="true" />
                      <MinusSmIcon v-else class="h-5 w-5" aria-hidden="true" />
                    </span>
                  </DisclosureButton>
                </h3>
                <DisclosurePanel class="pt-6">
                  <div class="space-y-4">
                    <div v-for="(option, optionIdx) in section.options" :key="option.value" class="flex items-center">
                      <input :id="`filter-${section.id}-${optionIdx}`" :name="`${section.id}[]`" :value="option.value" type="checkbox" :checked="option.checked" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500" />
                      <label :for="`filter-${section.id}-${optionIdx}`" class="ml-3 text-sm text-gray-600">
                        {{ option.label }}
                      </label>
                    </div>
                  </div>
                </DisclosurePanel>
              </Disclosure>
            </form>

            <!-- Product grid -->
            <div class="lg:col-span-3">
              <!-- Replace with your content -->
              <div class="border-4 border-dashed border-gray-200 rounded-lg h-96 lg:h-full" />
              <!-- /End replace -->
            </div>
          </div>
        </section>
      </main>
    </div>
  </div>
</main>
       

     
   
  

    

        
       
   
</template>
