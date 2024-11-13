<template>
    <div>
        <MainBanner 
            subTitle="Sub Title"
            title="Title"
            description="Description"
            buttonLink=""
            buttonText="Download App"
            image="choose-your-plans"
            alt="One app for all things money"
            page="Plans"
        />

        <section id="section-2" class="my-12 py-12 lg:my-14 lg:py-14">
            <div class="container">
                <div class="grid gap-8">
                    <!-- Loop through each plan -->
                    <template v-for="(plan, index) in plansItems" :key="index">
                        <!-- Full-width layout -->
                        <div v-if="plan.layout === 'full'" class="col-span-full flex flex-col gap-12 p-8 lg:p-14 bg-[#ECECEE] rounded-[30px]">
                            <div class="flex flex-col gap-4">
                                <h2 class="font-AeonikBlack  text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">{{ plan.category }}</h2>
                                <p class="font-AeonikBlack text-primary text-xl md:text-2xl xl:text-3xl 4xl:text-4xl uppercase">{{ plan.price }}</p>
                                <p class="text-[#D4D4D4] text-xl">{{ plan.description }}</p>
                            </div>
                            <div class="grid lg:grid-cols-2 gap-y-4 gap-x-12">
                                <div v-for="(feature, index) in plan.plansItems" :key="index" class="flex gap-4 items-baseline">
                                    <img src="/images/icons/check-box-primary.svg" alt="Check Box" width="" height="">
                                    <span class="text-xl">{{ feature }}</span>
                                </div>
                            </div>
                            <button class="ml-auto w-max py-2 px-6 text-base text-white bg-primary rounded-[30px] select-none font-AeonikMedium">{{ plan.buttonText }}</button>
                        </div>
                    </template>

                    <!-- Container for half-width plans -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <template v-for="(plan, index) in plansItems" :key="index">
                            <div v-if="plan.layout === 'half'" :class="index % 2 == 0 ? 'text-white bg-black' : 'text-black bg-[#ECECEE]'" class="flex flex-col gap-12 p-8 lg:p-14 rounded-[30px]">
                                <div class="flex flex-col gap-4">
                                    <h2 class="font-AeonikBlack  text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">{{ plan.category }}</h2>
                                    <p class="font-AeonikBlack text-primary text-xl md:text-2xl xl:text-3xl 4xl:text-4xl uppercase">{{ plan.price }}</p>
                                    <p class="text-[#D4D4D4] text-xl">{{ plan.description }}</p>
                                </div>
                                <div class="flex flex-col gap-4">
                                    <div v-for="(feature, index) in plan.plansItems" :key="index" class="flex gap-4 items-baseline">
                                        <img src="/images/icons/check-box-primary.svg" alt="Check Box" width="" height="">
                                        <span class="text-xl">{{ feature }}</span>
                                    </div>
                                </div>
                                <button class="ml-auto w-max py-2 px-6 text-base text-white bg-primary rounded-[30px] select-none font-AeonikMedium">{{ plan.buttonText }}</button>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script setup>
    import { plansData } from '~/data/plans'; // Adjust the path accordingly
	const { t } = useLocale(); 

    useSeoMeta({
        title: t('Pages.Plans.Seo.Title'),
        description: '',

        ogTitle: t('Pages.Plans.Seo.Og Title'),
        ogDescription: t('Pages.Plans.Seo.Og Description'),
        ogImage: '',

        twitterTitle: t('Pages.Plans.Seo.Twitter Title'),
        twitterDescription: t('Pages.Plans.Seo.Twitter Description'),
        twitterCard: 'summary_large_image',
    })

	const plansItems = useState('plansItems', () =>  plansData(t));
</script>

<style lang="" scoped>
	
</style>