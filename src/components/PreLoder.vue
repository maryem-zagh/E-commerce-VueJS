<template>
<transition name="fade">
		<div v-if="show" class="flex flex-col items-center justify-center absolute w-[100%] h-[100%] bg-white z-50">
			<div class=""></div>
		 <img alt="Vue logo" class="logo" src="@/assets/intone-market.svg" width="342" />
			
		</div>
	</transition>
</template>
<script>

export default {
	name: 'preloader',
	data(){
		return {
			show: true
		}
	},
	mounted(){
		if(Boolean(this.show)) this.showToggle()
	},
	methods: {
		showToggle(){
			setTimeout(() => {
				this.show = false
			}, 700)
		}
	}
}
</script>