<template>
    <div>
        <section v-if="feature" id="section-1" class="my-12 py-12 lg:my-14 lg:py-14">
            <div class="container">
                <div class="flex flex-col gap-12 p-8 lg:p-14 bg-[#ECECEE] rounded-[30px]">
                    <NuxtLinkLocale :to="`/features/${ currentCategorySlug }`" class="w-max py-2 px-6 text-base text-white bg-primary rounded-[30px] select-none font-AeonikMedium">Back to {{ currentCategory }}</NuxtLinkLocale>
                    <img :src="`/images/${ feature.image }.webp`" :alt="feature.title" width="960" height="406" />
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

    const { t } = useLocale(); 
    const setError = useError();
    const router = useRouter();
    const route = useRoute();

    const currentSubCategorySlug = ref(route.params.subcategory);
    const currentCategorySlug = ref(route.params.category);
    
    const currentCategory = computed(() => {
        const allFeatures = featuresData(t);
        const flatFeatures = allFeatures.map(category => category.features).flat();

        const feature = flatFeatures.find(feature => slugify(feature.title) === currentSubCategorySlug.value);
        return feature ? allFeatures.find(category => category.features.includes(feature))?.category : null;
    });

    const feature = ref(null);

    // Fetch feature based on the subcategory slug
    const fetchFeature = async (subcategory) => {
        const feature = featuresData(t)
            .map(category => category.features)
            .flat()
            .find(feature => slugify(feature.title) === subcategory); 

        return feature;
    };

    // Update the feature and set SEO meta data
    const updateFeatures = async () => {
        try {
            feature.value = await fetchFeature(currentSubCategorySlug.value);

            if (feature.value) {
                useSeoMeta({
                    title: feature.value.title,
                    description: feature.value.excerpt || 'Features',
                    ogTitle: feature.value.title,
                    ogDescription: feature.value.excerpt || 'Features',
                    ogImage: `/images/${feature.value.image}.webp`,
                    twitterTitle: feature.value.title,
                    twitterDescription: feature.value.excerpt || 'Features',
                    twitterCard: 'summary_large_image',
                });
            } else {
                setError({ statusCode: 404 });
            }
        } catch (err) {
            setError({ statusCode: 500, message: 'An error occurred while fetching the feature' });
        }
    };

    onMounted(updateFeatures);
    watch(() => currentSubCategorySlug.value, updateFeatures);
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