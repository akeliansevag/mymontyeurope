<template>
     <section id="section-1" class="my-12 py-12 lg:my-14 lg:py-14">
        <div class="container">
            <div class="flex flex-col gap-12 p-8 lg:p-14 bg-[#ECECEE] rounded-[30px]">
                <NuxtLinkLocale :to="'/news'" class="w-max py-2 px-6 text-base text-white bg-primary rounded-[30px] select-none font-AeonikMedium">Back to news</NuxtLinkLocale>
                <img :src="post[0].acf.inner_image.sizes['banner-image']" class="w-full rounded-xl overflow-hidden" :alt="post[0].title.rendered" width="" height="" />
                <span>{{ new Date(post[0].date).toLocaleDateString('en-US', { month: 'short', day: '2-digit', year: 'numeric' }) }}</span>
                <h1 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase" v-html="post[0].title.rendered"></h1>
                <p class="text-xl" v-html="post[0].content.rendered"></p>
            </div>
        </div>
    </section>
</template>

<script setup>
    import he from 'he';

    const route = useRoute();
    const slug = route.params.slug;    

    const {data: post, pending, error, refresh } = await useFetch('http://backend.mymontyteuriope.localhost/wp-json/wp/v2/posts', {
        query: { slug: slug, _embed: '1', acf_format: 'standard' },
    });

    useSeoMeta({
        title: () => he.decode(post.value[0].title.rendered),
        ogTitle: () => he.decode(post.value[0].title.rendered),
        description: () => he.decode(post.value[0].excerpt.rendered).replace(/<[^>]*>/g, ''),
        ogDescription: () => he.decode(post.value[0].excerpt.rendered).replace(/<[^>]*>/g, ''),
        ogImage: () => post.value[0].acf.inner_image.sizes.large,
        twitterCard: 'summary_large_image',
    })
</script>