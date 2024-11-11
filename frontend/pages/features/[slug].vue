<template>
    <div>
        <section v-if="feature" id="section-1" class="my-12 py-12 lg:my-14 lg:py-14">
            <div class="container">
                <div class="flex flex-col gap-12 p-8 lg:p-14 bg-[#ECECEE] rounded-[30px]">
                    <NuxtLinkLocale :to="`/features/${ currentCategory }`" class="w-max py-2 px-6 text-base text-white bg-primary rounded-[30px] select-none font-AeonikMedium">Back to {{ currentCategory }}</NuxtLinkLocale>
                    <img :src="`/images/${ feature.image }.webp`" :alt="feature.title" width="1920" height="812" />
                    <h1 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase" v-html="feature.title"></h1>
                    <div class="description flex flex-col gap-8" v-html="feature.description"></div>
                </div>
            </div>
        </section>
        <template v-else>
            <PreloaderFeatures />
        </template>
    </div>
</template>

<script setup>
    import { featuresData } from '~/data/features'; // Adjust the path accordingly
    import slugify from '~/utils/slugify'; // Assuming you have a slugify utility

    const setError = useError();
    const router = useRouter()

    // // Get the previous URL
    // const previousUrl = router.options.history.state.back

    // // Or, if you want to get it when navigating
    // router.beforeEach((to, from) => {
    //     const previousUrl = from.fullPath
    //     // console.log('Previous URL:', previousUrl)
    // })

    const route = useRoute();
    const currentSlug = ref(route.params.slug);

    // Directly find the category of the feature that matches the current slug
    const currentCategory = computed(() => {
        const feature = featuresData
            .map(category => category.features)
            .flat()  // Flatten the array of features
            .find(feature => slugify(feature.title) === currentSlug.value); // Find the feature by slug

        // If feature found, return the category, else return null or a default category
        return feature ? featuresData.find(category => category.features.includes(feature))?.category : null;
    });

    const feature = ref(null);

    const fetchFeature = async (slug) => {
        const feature = featuresData
            .map(category => category.features)
            .flat()  // Flatten the array of features
            .find(feature => slugify(feature.title) === slug); // Match slugified title
        return feature;
    };

    const updateFeatures = async () => {
        feature.value = await fetchFeature(currentSlug.value);

        if (feature.value) {
            useSeoMeta({
                title: feature.value.title, // Set the title dynamically
                description: feature.value.excerpt || 'Features',

                ogTitle: feature.value.title,
                ogDescription: feature.value.excerpt || 'Features',
                ogImage: `/images/${feature.value.image}.webp`,

                twitterTitle: feature.value.title,
                twitterDescription: feature.value.excerpt || 'Features',
                twitterCard: 'summary_large_image',
            });
        }
        else {
            // If no feature is found, set a 404 error
            setError({ statusCode: 404   });
        }
    };

    onMounted(updateFeatures);

    watch(() => currentSlug.value, updateFeatures);
</script>

<style lang="sass" scoped>
    ::v-deep .description
        p
            @apply text-xl

            &.special
                @apply font-AeonikMedium text-primary

        h2, h3, h4, h5, h6
            @apply font-AeonikBold text-xl leading-normal
</style>