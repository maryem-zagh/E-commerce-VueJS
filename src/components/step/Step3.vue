<template>
<div class="lg:px-16" id="step3" >
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
                    
            <div class="px-5  text-xl font-normal leading-8 text-blue-600">
              Spécif  ications du projet
            </div>
            <span class="h-0.5 w-9 bg-blue-600 lg:w-1/1 px-5 "></span>
             <div class="px-5">
                       <div class="w-8 h-8  rounded-full bg-[#0059C8] text-white flex justify-center items-center">
                        <a href="# " class="">
                            <h1 class="text-2xl text-white">3</h1>
                        </a>
                    </div>
                      </div>
                      
                    
            <div class=" px-3 text-xl font-normal leading-8 text-blue-600">
              Paiement
            </div>
           
              
                    </div>
           <div class="grid lg:grid-cols-2 lg:py-16 gap-8">
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
                    <div class="grid lg:grid-cols-2 mb-4">
                      <div>
                          <Menu as="div" class="relative inline-block text-left">
        <div>
          <MenuButton
            class="inline-flex justify-center w-52 rounded-lg px-4 border-2 py-1.5 text-base font-medium text-black hover:bg-gray-50">
            EXP
            <ChevronDownIcon class="-mr-3 -ml-32 h-5 w-96 text-secondary" aria-hidden="true" />
          </MenuButton>
        </div>

        <transition enter-active-class="transition ease-out duration-100"
          enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100"
          leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100"
          leave-to-class="transform opacity-0 scale-95">
          <MenuItems
            class="origin-top-left absolute left-0 mt-2 w-52 z-50 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
            <div class="py-1">
              
              <MenuItem v-slot="{ active }">
              <a href="#" :class="[
                active ? 'bg-gray-100 text-gray-900' : 'text-gray-700',
                'block px-4 py-2 text-sm',
              ]">License</a>
              </MenuItem>
              <MenuItem v-slot="{ active }">
              <a href="#" :class="[
                active ? 'bg-gray-100 text-gray-900' : 'text-gray-700',
                'block px-4 py-2 text-sm',
              ]">License</a>
              </MenuItem>
              
            </div>
          </MenuItems>
        </transition>
      </Menu>
                      </div>
                      <div class="lg:justify-end"><input type="text" id="last_name"
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
                    <button  @click.prevent="goToStep(4)"  class="text-white bg-[#0064D2] leading-6 font-medium rounded-full text-base w-[365px] p-2">Effectuer</button>
                   </div>
                   <div class="text-center">
                    <button  @click.prevent="goToStep(2)"  class="text-black bg-[#F4F4F4] leading-6 font-medium rounded-full text-base w-[365px] p-2">Retour</button>
                   </div>
                </div>
           </div>
        </div>
        </template>
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