<template>
    <div>
        <MainBanner 
            subTitle="Sub Title"
            title="Title"
            description="Description"
            buttonLink=""
            buttonText="Download App"
            image="see-what-sets-us-apart"
            alt="Image Alt"
            page="Why MyMonty"
        />

        <section id="section-2" class="my-12 py-12 lg:my-14 lg:py-14">
            <div class="container flex flex-col gap-4">
                <div class="p-8 lg:p-14 bg-[#ECECEE] rounded-[30px]">
                    <div class="flex flex-col justify-center items-center gap-8 lg:w-2/3 mx-auto text-center">
                        <h2 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">{{ t(`Pages.Why MyMonty.Section 2.Cards[0].Title`) }}</h2>
                        <p class="text-xl" v-html="t(`Pages.Why MyMonty.Section 2.Cards[0].Description`)"></p>
                    </div>
                    <img class="w-full mt-8" src="/images/effortless-onboarding.webp" :alt="t(`Pages.Why MyMonty.Section 2.Cards[0].Image Alt`)" width="1852" height="832">
                </div>
                <div class="p-8 lg:p-14 bg-[#ECECEE] rounded-[30px]">
                    <div class="flex flex-col justify-center items-center gap-8 lg:w-2/3 mx-auto text-center">
                        <h2 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">{{ t(`Pages.Why MyMonty.Section 2.Cards[1].Title`) }}</h2>
                        <p class="text-xl" v-html="t(`Pages.Why MyMonty.Section 2.Cards[1].Description`)"></p>
                    </div>
                    <img class="w-full mt-8" src="/images/recurring-payments.webp" :alt="t(`Pages.Why MyMonty.Section 2.Cards[1].Image Alt`)" width="1852" height="832">
                </div>
                <div class="grid lg:grid-cols-2 gap-4">
                    <div class="p-8 lg:p-14 bg-[#ECECEE] rounded-[30px]">
                        <div class="flex flex-col justify-center max-lg:items-center gap-8 max-lg:mx-auto max-lg:text-center">
                            <h2 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">{{ t(`Pages.Why MyMonty.Section 2.Cards[2].Title`) }}</h2>
                            <p class="text-xl" v-html="t(`Pages.Why MyMonty.Section 2.Cards[2].Description`)"></p>
                        </div>
                        <img class="w-full mt-8" src="/images/no-surprise-fees.webp" :alt="t(`Pages.Why MyMonty.Section 2.Cards[2].Image Alt`)" width="880" height="982">
                    </div>
                    <div class="p-8 lg:p-14 bg-[#ECECEE] rounded-[30px]">
                        <div class="flex flex-col justify-center max-lg:items-center gap-8 max-lg:mx-auto max-lg:text-center">
                            <h2 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">{{ t(`Pages.Why MyMonty.Section 2.Cards[3].Title`) }}</h2>
                            <p class="text-xl" v-html="t(`Pages.Why MyMonty.Section 2.Cards[3].Description`)"></p>
                        </div>
                        <img class="w-full mt-8" src="/images/here-for-you.webp" :alt="t(`Pages.Why MyMonty.Section 2.Cards[3].Image Alt`)" width="918" height="1027">
                    </div>
                </div>
                <div class="p-8 lg:p-14 bg-[#ECECEE] rounded-[30px]">
                    <div class="flex flex-col justify-center items-center gap-8 lg:w-2/3 mx-auto text-center">
                        <h2 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">{{ t(`Pages.Why MyMonty.Section 2.Cards[4].Title`) }}</h2>
                        <p class="text-xl" v-html="t(`Pages.Why MyMonty.Section 2.Cards[4].Description`)"></p>
                    </div>
                    <img class="w-full mt-8" src="/images/high-end-security.webp" :alt="t(`Pages.Why MyMonty.Section 2.Cards[4].Image Alt`)" width="1908" height="816">
                </div>
            </div>
        </section>
    </div>
</template>

<script setup>
    const { t } = useLocale(); 

    useSeoMeta({
        title: t('Pages.Why MyMonty.Seo.Title'),
        description: '',

        ogTitle: t('Pages.Why MyMonty.Seo.Og Title'),
        ogDescription: t('Pages.Why MyMonty.Seo.Og Description'),
        ogImage: '',

        twitterTitle: t('Pages.Why MyMonty.Seo.Twitter Title'),
        twitterDescription: t('Pages.Why MyMonty.Seo.Twitter Description'),
        twitterCard: 'summary_large_image',
    })
</script>

<style lang="" scoped>
	
</style>