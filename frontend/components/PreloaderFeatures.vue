<template>
	<div v-if="preloader" class="preloader my-12 py-12 lg:my-14 lg:py-14">
        <div class="container">
            <div class="flex flex-col gap-12 p-8 lg:p-14 bg-[#ECECEE] rounded-[30px] animate-pulse">
                <div class="w-5/12 h-10 bg-gradient-to-r from-gray-300 to-gray-200 rounded-[30px] shimmer"></div>
                <div class="h-44 md:h-72 lg:h-80 xl:h-96 bg-gradient-to-r from-gray-300 to-gray-200 rounded-[30px] shimmer"></div>
                <div class="w-2/3 h-16 bg-gradient-to-r from-gray-300 to-gray-200 rounded-[30px] shimmer"></div>
                <div class="w-full h-56 bg-gradient-to-r from-gray-300 to-gray-200 rounded-[30px] shimmer"></div>
            </div>
        </div>
    </div>
</template>

<script setup>
	const preloader = ref(true);
	
	setTimeout(() => {
		preloader.value = false;
	}, 1000);
</script>

<style scoped lang="sass">
	.preloader 
		display: flex
		align-items: center
		justify-content: center
		@apply w-full h-full z-50 bg-no-repeat bg-center min-h-[40vh]

	.shimmer
		background-size: 200% 100%
		animation: shimmer 1.5s linear infinite

	@keyframes shimmer
		0% 
			background-position: 200% 0
		
		100% 
			background-position: -200% 0
				
</style>
