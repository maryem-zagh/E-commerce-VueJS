<template>
  <div class="float-container">

<div class="aside">

    <Aside/>
 
</div>

<div class="header">
  
    <Header/>
 
</div>

<div class="main" >
    <MainDashboard1/>
</div>
</div>
</template>
<script>
import  Aside  from '../../components/dashboard/Aside.vue'
import  Header  from '../../components/dashboard/Header.vue'
import MainDashboard from '../../components/dashboard/MainDashboard.vue'
import MainDashboard1 from '../../components/dashboard/MainDashboard.vue'
export default ({
  
    components: {Aside , Header , MainDashboard1}
 
})
</script>
<style>
    .float-container {
        height:100%;
        width:100%;
}

.aside {
    width: 20%;
    float: left;
}  
.header {
    width: 70%;
    float: left;
}  
.main{
    height:auto;
    float: left;
    width:70%;

}
</style>