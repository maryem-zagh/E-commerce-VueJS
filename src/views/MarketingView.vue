<script setup>

import PackInitial from "../components/PackInitial.vue";
import PackAvance from "../components/PackAvance.vue";
import PackExpert from "../components/PackExpert.vue";


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
<template>

<main class=" bg-[url('@/assets/LooperGroup.svg')] bg-no-repeat bg-[right_top_1rem] ">
  <img src="@/assets/bg-2.png" class="block bg-no-repeat bg-cover min-h-[110px] w-full " alt="Motorbike Smoke" />
 
<div class=" py-24   ">
 


   <div class="font-bold text-5xl text-center mb-6 ">Packs Digitaux</div>
     <p class=" font-normal text-base text-center ">En fonction de vos besoins<br/>
             Soucieux de vous offrir des prestations personnalisées et parfaitement
           adaptées à vos <br/>besoins, nous avons créé 3 packs pour vous accompagner dans<br/>
           la digitalisation de vos projets</p>



</div>
<div class="flex flex-col md:flex-row mb-3  ">
  
  <div class="bg-[url('@/assets/Left-2.svg')] pt-32  lg:pt-64 lg:h-[687px] lg:w-[810px]  ">
    <img src="@/assets/looper-r.svg" alt="" class="absolute -top-64"/>
    <div class="">
    <div class="text-white font-blod text-6xl text-center mb-2">
      Pack Initial
    </div>
    <p class="font-bold text-2xl  text-white mb-12 text-center">360€ / Mois</p>
    <div class="text-center lg:px-0 px-8">
       <PackInitial />
    </div>
   
    </div>
  </div>
  <div class="py-28">
    <div class=" bg-[url('@/assets/blue-right.svg')]  lg:h-[493px] lg:w-[630px] lg:pt-24 py-20  ">
      <img src="@/assets/Pack-Initial.svg" alt="" class="absolute lg:top-14 lg:right-24 right-5 "/>
      <div class="text-right font-normal text-lg text-white lg:pr-28 pr-14 ">
        
            Idéal pour les indépendants,les auto-entrepreneurs,<br/> les artisans,
             les TPE qui souhaitent démarrer une <br/>activité digitale cohérente et génératrice
            de <br/>business.

             Définition des besoins<br/>
             Audit SEO du site Web<br/>
             Audit de concurrence marché<br/>
             Planning éditorial : définition des thématiques, planning de parution<br/>
             4 contenus par mois<br/>
               Diffusion digitale (réseaux sociaux, emailing, newsletter…)<br/>
      </div>
    </div>
  </div>
 
  
 </div>

<div class="flex flex-col md:flex-row mb-3 ">
    <div class="py-28">
    <div class=" bg-[url('@/assets/blue-right.svg')]  lg:h-[493px] lg:w-[630px] lg:pt-24 py-20 ">
       <img src="@/assets/Pack-Initial.svg" alt="" class="absolute lg:top-14 lg:left-28 left-5"/>
      <div class="text-left font-normal text-lg text-white lg:pl-28 pl-14">
           Idéal pour les indépendants, les auto-entrepreneurs,<br/> les artisans,
            les TPE qui souhaitent démarrer une<br/> activité digitale cohérente et génératrice
            de<br/> business.<br/>

                         Définition des besoins<br/>
                         Audit SEO du site Web<br/>
                         Audit de concurrence marché<br/>
                         Planning éditorial : définition des thématiques, planning de parution<br/>
                         4 contenus par mois<br/>
                         Diffusion digitale (réseaux sociaux, emailing, newsletter…)<br/>
      </div>
    </div>
  </div>
  <div class="bg-[url('@/assets/right-3.svg')]  pt-64 lg:h-[687px] lg:w-[810px]  ">
    <img src="@/assets/looper-l.svg" alt="" class="absolute right-0 -top-[420px]"/> 
    <div class="">
    <div class="text-white font-blod text-6xl text-center mb-2">
      Pack Avance
    </div>
    <p class="font-bold text-2xl  text-white mb-12 text-center">360€ / Mois</p>
    <div class="text-center">
       <PackAvance />
    </div>
   
    </div>
  </div>

 
  
 </div>
<div class="flex flex-col md:flex-row mb-3 ">
  <div class="bg-[url('@/assets/Left-5.svg')]  pt-64 lg:h-[687px] lg:w-[810px]  ">
     <img src="@/assets/Looper-5.svg" alt="" class="absolute -top-96"/>
    <div class="">
    <div class="text-white font-blod text-6xl text-center mb-2">
      Pack Expert
    </div>
    <p class="font-bold text-2xl  text-white mb-12 text-center">360€ / Mois</p>
    <div class="text-center">
      <PackExpert />
    </div>
   
    </div>
  </div>
  <div class="py-28">
    <div class=" bg-[url('@/assets/blue-right.svg')]  lg:h-[493px] lg:w-[630px] lg:pt-24 py-20  ">
       <img src="@/assets/Pack-Initial.svg" alt="" class="absolute lg:top-14 lg:right-24"/>
      <div class="text-right font-normal text-lg text-white lg:pr-28 pr-14 ">
            Idéal pour les indépendants, les auto-entrepreneurs,<br/>
             les artisans,<br/>
            les TPE qui souhaitent démarrer une <br/>
            activité digitale cohérente et génératrice<br/>
            de business.<br/>

                       Définition des besoins<br/>
                       Audit SEO du site Web<br/>
                       Audit de concurrence marché<br/>
                       Planning éditorial : définition des thématiques, planning de parution<br/>
                       4 contenus par mois<br/>
                       Diffusion digitale (réseaux sociaux, emailing, newsletter…)<br/>
      </div>
    </div>
  </div>
 
  
 </div>
 <div class="text-black font-blod  font-Sans text-3xl text-center mb-2">
            Qui nous ont donné leur confiance
 </div>
 <div class="grid lg:grid-cols-6 grid-cols-1 mb-32  px-11 gap-8">
<div>
  <img src="@/assets/Image-conf-1.svg"/>
</div>
<div>
  <img src="@/assets/Image-conf-2.svg"/>
</div>
<div>
  <img src="@/assets/Image-conf-3.svg"/>
</div>
<div>
  <img src="@/assets/Image-conf-4.svg"/>
</div>
<div>
  <img src="@/assets/Image-conf-5.svg"/>
</div>
<div>
  <img src="@/assets/Image-conf-6.svg"/>
</div>


 </div>
 <div class="text-center">
  <img src="@/assets/Looper-d.svg" alt="" class="absolute  lg:right-60 lg:-top-[325px]"/>
 </div>
</main>




</template>

