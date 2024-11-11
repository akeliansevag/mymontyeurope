<template>
    <div>
        <MainBanner 
            subTitle="Sub Title"
            title="Title"
            description="Description"
            buttonLink=""
            buttonText="Get Started"
            image="unlock-the-best-of-what-we-offer"
            alt="Unlock the best of what we offer"
            page="Features"
        />

        <section id="section-2" class="my-12 py-12 lg:my-14 lg:py-14">
            <div class="container">
                <div class="relative flex flex-col justify-center items-center gap-12 lg:w-2/3 mx-auto text-center">
                    <h2 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">Features</h2>
                    <p class="text-xl">Experience the convenience of features tailored just for you</p>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-y-4 gap-x-8 w-max">
                        <template v-for="(item, index) in featuresItems" :key="index">
                            <ScrollButton @click="show(index)" :class="activeTab === index ? 'text-white bg-primary border-primary' : 'text-black bg-transparent border-black'" target="features" class="w-max min-w-32 py-2 px-6 text-base border rounded-[30px] select-none font-AeonikMedium transition-all duration-300 ease-in-out">{{ item.category }}</ScrollButton>
                        </template>
                    </div>
                </div>
                <div id="features" class="grid lg:grid-cols-2 gap-4 mt-12">
                    <template v-for="(category, index) in featuresItems" :key="index">
                        <template v-for="(item, featureIndex) in category.features" :key="featureIndex">
                            <div :id="item.category" :class="{ 'absolute invisible opacity-0': activeTab !== index }" class="flex flex-col justify-between gap-8 p-8 lg:p-14 bg-[#ECECEE] rounded-[30px]">
                                <div class="flex flex-col gap-8">
                                    <img :src="`/images/icons/${ item.icon }.svg`" :alt="item.title" width="130" height="130">
                                    <h2 class="font-AeonikBlack text-xl md:text-2xl xl:text-3xl 4xl:text-5xl uppercase mt-4">{{ item.title }}</h2>
                                    <p class="text-xl" v-html="`${item.excerpt}...`"></p>
                                </div>
                                <NuxtLinkLocale :to="`/features/${ slugify(item.title) }`">
                                    <button class="w-max ml-auto py-2 px-6 text-base text-white bg-primary rounded-[30px] select-none font-AeonikMedium">Read More</button>
                                </NuxtLinkLocale>
                            </div>
                        </template>
                    </template>
                </div>
            </div>
        </section>
    </div>
</template>
 
<script setup>
    import ScrollButton from '~/components/ScrollButton.vue';
    import slugify from '~/utils/slugify';
    import { featuresData } from '~/data/features'; // Adjust the path accordingly

    const route = useRoute();

    useSeoMeta({
        title: 'Features',
        description: '',

        ogTitle: 'Features',
        ogDescription: '',
        ogImage: '',

        twitterTitle: 'Features',
        twitterDescription: '',
        twitterCard: 'summary_large_image',
    })

    const activeTab = ref(0);

    const show = (index) => {
        activeTab.value = index;
    };

	const featuresItems = ref([]);

    const fetchData = () => {
		featuresItems.value = featuresData.map(feature => ({
			...feature,
		}));
	};
    
    // Watch the route to update activeTab based on the URL
    watchEffect(() => {
        const currentPath = route.path.split('/').pop();
        const tabIndex = featuresItems.value.findIndex(item => slugify(item.category).toLowerCase() === currentPath.toLowerCase());
        activeTab.value = tabIndex !== -1 ? tabIndex : 0; // Set active tab or default to 0 if not found
    });

    onMounted(() => {
        fetchData();

        setTimeout(() => {
            const header = document.getElementById('header');
            const headerHeight = header ? header.clientHeight : 0;
            const targetElement = document.getElementById('features');
            const currentPath = route.path.split('/').pop();

            if (targetElement && currentPath != 'features') {
                const y = targetElement.getBoundingClientRect().top + window.scrollY - headerHeight;

                window.scrollTo({
                    top: y,
                    behavior: 'smooth',
                });
            }
        },100);
    });
</script>

<style lang="" scoped>
    
</style>