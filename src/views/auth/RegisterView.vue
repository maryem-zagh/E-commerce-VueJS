<template>
    <div class="block  bg-white bg-no-repeat bg-cover min-h-[50px] w-full" />
    <main class="py-20">
      <div class="flex flex-row lg:gap-5 px-5 mb-14">
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
                    <a href="/" class="no-underline hover:underline font-semibold text-sm leading-5 text-black">Accueil</a>
                  </li>
                  
                  
                  <li>/</li>
                  <li>
                    <a href="#" class="no-underline hover:underline font-semibold text-sm leading-5 text-[#0064D2]">Connexion ys</a>
                  </li>
                </ul>
              </div>
            </div>
            <div>
              <div class="" id="user_detail2" v-if="activePhase == 1">
             <div class="mb-10 text-3xl text-center font-bold tracking-wide leading-loose text-black">Inscription<span class="font-extrabold text-5xl text-blue-600 -top-2">_</span></div>
      <form class="flex-col text-center ">
        <div class="lg:px-72 px-5 mb-5">
            <input name="field"   type="text" id="default-input"
                                class="bg-[#ffffff] text-gray-900 border border-gray-300 text-sm rounded-full block w-full p-3"
                                placeholder="Nom complet" v-model=" name"/>
    
        </div>
        <div class="lg:px-72 px-5 mb-10">
            <input name="field"   type="text" id="default-input"
                                class="bg-[#ffffff] text-gray-900 border border-gray-300 text-sm rounded-full block w-full p-3"
                                placeholder="Adresse ??lectronique" v-model="email"/>
    
        </div>
        <div class=" mb-8">
            <button  @click.prevent="goToStep(2)" class="inline-flex items-center justify-center w-80 h-11 p-3.5 bg-blue-500 rounded-full text-white">Suivant</button>
    
        </div>
        <div class="mb-8">
          <input type="checkbox" class="rounded-full" checked> J???ai lu et j???accepte les <a href="#" class="text-blue-500 ">condition g??n??rales d???utilisation</a> &<a href="#" class="text-blue-500 "> la politique de prot??ction des donn??es</a> de Intone Digitals.
    
        </div>
        <div class="">
          
            <a @click.prevent="redirectLogin()" href="#" class="text-sm font-medium leading-tight text-gray-900">J???ai d??ja un compte<font-awesome-icon icon="greater-than" class="text-secondary px-2 font-bold w-2  items-center" /></a>
          
        </div>
      </form>
      </div>
            <div class="" id="user_detail2" v-if="activePhase  == 2">
               <form class=" flex-col text-center" >
                
         <div class="grid md:grid-cols-2 grid-cols-1 gap-5 lg:px-64 px-3 mb-8">
          <div>
              <input v-model="DateOfBirth" type="date" class=" block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-full">
          </div>
          <div>
            <select v-model="location" id="location" name="location" class=" block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-full">
          <option>United States</option>
          <option selected="true">Localisation</option>
          <option>Tunisie</option>
          <option>France</option>

        </select>
          </div>
    
    
         </div>
         <div class="grid md:grid-cols-3 grid-cols-1 gap-5 lg:px-64 px-3 mb-8">
          <div>
            <select v-model="city" id="location" name="location" class=" block w-full pl-3 pr-10 py-2 text-base font-normal border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-full">
          <option></option>
          <option selected="true">Ville</option>
          <option></option>
        </select>
          </div>
          <div class="lg:col-span-2 md:col-span-2">
             <input type="text" id="default-input"  v-model="adress1"
                            class="bg-[#ffffff] text-gray-900 border border-gray-300 text-sm rounded-full block w-full p-2"
                            placeholder="Adresse 1" />
          </div>
    
    
         </div>
         <div class="lg:px-64 px-3 mb-8">
           <input type="text" id="default-input" v-model="adress2"
                            class="bg-[#ffffff] text-gray-900 border border-gray-300 text-sm rounded-full block w-full p-2"
                            placeholder="Adresse 2" />
         </div>
         <div class="grid md:grid-cols-4 grid-cols-1 gap-5 lg:px-64 px-3 mb-8">
          <div>
            <select v-model="code" id="code" name="code" class=" block w-full pl-3 pr-10 py-2 text-base font-normal border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-full">
          <option>+216</option>
          <option selected="true">+ Code</option>
          <option>+33</option>
        </select>
          </div>
          <div class="lg:col-span-3 md:col-span-3">
             <input type="text" id="number" v-model="number"
                            class="bg-[#ffffff] text-gray-900 border border-gray-300 text-sm rounded-full block w-full p-2"
                            placeholder="Num??ro de t??l??phone" />
          </div>
    
    
         </div>
         <div class="grid md:grid-cols-2 grid-cols-1 gap-5 lg:px-96 px-10">
         <button class="inline-flex items-center justify-center w-80 h-11 p-3.5 text-blue-500 border-2 bg-white shadow rounded-full">Retour</button>
          <button @click.prevent="goToStep(3)" class="inline-flex items-center justify-center w-80 h-11 p-3.5 text-white border-2 bg-blue-500 shadow rounded-full">Suivant</button>
         </div>
    </form>
            </div>
            <div class="" id="user_detail2" v-if="activePhase == 3">
            
      <form class="flex-col text-center ">
        <div class="lg:px-72 px-5 mb-5">
            <input name="field"   type="text" id="default-input" 
                                class="bg-[#ffffff] text-gray-900 border border-gray-300 text-sm rounded-full block w-full p-3"
                                placeholder="Mot de passe" v-model="password"/>
    
        </div>
        <div class="lg:px-72 px-5 mb-10">
            <input name="field"   type="text" id="default-input"
                                class="bg-[#ffffff] text-gray-900 border border-gray-300 text-sm rounded-full block w-full p-3"
                                placeholder="Confirmer mot de passe" />
    
        </div>
        
        
         <div class="grid md:grid-cols-2 grid-cols-1 gap-5 lg:px-96 px-10">
         <button class="inline-flex items-center justify-center w-80 h-11 p-3.5 text-blue-500 border-2 bg-white shadow rounded-full">Retour</button>
          <button @click.prevent="register()" href="#" class="inline-flex items-center justify-center w-80 h-11 p-3.5 text-white border-2 bg-blue-500 shadow rounded-full">Suivant</button>
         </div>
      </form>
      </div>
            </div>
            
    
    
    
    
    </main>
    
    
    
    
    
    </template>
    <script>
    import axios from 'axios';
    
    export default {
      name: "modal",
      data() {
        return {
          activePhase: 1,
            
                name: '',
                email: '',
                location:'',
                DateOfBirth:'',
                city:'',
                adress1:'',
                adress2 :'',
                code:'',
                number:'',
                password:'',
         
          toggleModal: false,
         
        };
      },
      
      methods:{
        goToStep: function(step){
          this.activePhase = step;
        },
        redirectLogin(){
            this.$router.push({
              name:"Login"
            });
            
            },
        register(){
    
            
    
      axios.post('register' ,   {name:this.name ,email:this.email,  password:this.password , location:this.location,
            DateOfBirth:this.DateOfBirth,
            city:this.city,
            adress1:this.adress1,
            adress2:this.adress2,
            code:this.code,
            number:this.number,
            password:this.password
})        
        .then((response) =>{
         
          console.log("login")
        })
    //  }))
      
     
    }
    
      },
    }
    </script>