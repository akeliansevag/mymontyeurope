<template>
    <div>
        <MainBanner 
            subTitle="Sub Title"
            title="Title"
            description="Description"
            buttonLink=""
            buttonText="Download App"
            image="our-code-of-conduct"
            alt="Our code of conduct"
            page="Code of Conduct"
        />

        <section id="section-2" class="my-12 py-12 lg:my-14 lg:py-14">
            <div class="container">
                <div class="grid lg:grid-cols-2 gap-4">
                    <div v-for="(item, index)  in valuesItems"  :key="index" class="p-8 lg:p-14 bg-[#ECECEE] rounded-[30px]">
                        <div class="flex flex-col gap-8">
                            <img :src="`/images/icons/${ item.icon }.svg`" :alt="item.title" width="130" height="130">
                            <h2 class="font-AeonikBlack text-xl md:text-2xl xl:text-3xl 4xl:text-5xl uppercase mt-4">{{ item.title }}</h2>
                            <p class="text-xl" v-html="item.description"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script setup>
	useSeoMeta({
        title: 'Code of Conduct',
        description: '',

        ogTitle: 'Code of Conduct',
        ogDescription: '',
        ogImage: '',

        twitterTitle: 'Code of Conduct',
        twitterDescription: '',
        twitterCard: 'summary_large_image',
    })

    const valuesItems = ref([
        {icon: "equality", title: "Equality", description: "We believe in providing equal opportunities and rights to everyone, ensuring fairness and inclusivity in all our endeavors."},
        {icon: "inclusivity", title: "Inclusivity", description: "No one is left behind. We strive to include and empower individuals from all walks of life, regardless of their background or circumstances."},
        {icon: "integrity", title: "Integrity", description: "Our actions are guided by honesty, transparency, and loyalty. We uphold the highest ethical standards in all our interactions."},
        {icon: "excellence", title: "Excellence", description: "We are dedicated to delivering exceptional quality in everything we offer, striving for excellence in service and innovation."},
        {icon: "commitment", title: "Commitment", description: "True to our core values, we are unwavering in our dedication to serving our customers, partners, and communities with passion and integrity."},
        {icon: "professionalism", title: "Professionalism", description: "Operating with efficiency and responsibility, we uphold professional standards to ensure the trust and confidence of all those we serve."},
        {icon: "compliance-and-legal-responsibility", title: "Compliance & Legal Responsibility", description: "We adhere strictly to all applicable laws, regulations, and industry standards. Compliance is non-negotiable in our commitment to responsible banking practices."},
        {icon: "confidentiality-and-data-protection", title: "Confidentiality & Data Protection", description: "We safeguard customer information with the utmost care and confidentiality. Data protection and privacy are fundamental principles in our operations."},
        {icon: "customer-focus", title: "Customer Focus", description: "We prioritize the needs and interests of our customers, striving to deliver exceptional service and innovative solutions that enhance their financial well-being."},
    ])
</script>

<style lang="" scoped>
	
</style>