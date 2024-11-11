<template>
    <div>
        <MainBanner 
            subTitle="Sub Title"
            title="Title"
            description="Description"
            buttonLink=""
            buttonText="Download App"
            image="one-app-for-all-things-money"
            alt="One app for all things money"
            page="Who We Are"
        />

        <section id="section-2" class="my-12 py-12 lg:my-14 lg:py-14">
            <div class="container flex flex-col gap-8">
                <div class="flex flex-col justify-center items-center gap-8 lg:w-2/3 mx-auto text-center">
                    <h2 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">Who we are</h2>
                    <p class="text-xl">At MyMonty EEA/UK, we're all about simplifying financial processes. Our digital platform offers innovative, user-friendly financial services to individuals across the EEA and UK. We're all about making banking easy, secure, and accessible for everyone, especially the unbanked, underbanked, and youth, so they can enjoy personalized financial solutions.</p>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <div class="flex flex-col justify-center max-lg:items-center gap-8 mx-auto max-lg:text-center">
                        <h2 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">This is the future</h2>
                        <p class="text-xl">Once a luxury, basic banking and financial services have become a right for everyone, in a world where digital is the new norm.</p>
                    </div>
                    <div class="lg:col-span-2">
                        <img src="/images/this-is-the-future.webp" alt="This Is The Future" width="1300" height="892">
                    </div>
                </div>
            </div>
        </section>
            
        <section id="section-3" class="my-12 py-12 lg:my-14 lg:py-14">
            <div class="container">
                <div class="flex flex-col justify-center items-center gap-8 lg:w-2/3 mx-auto text-center">
                    <h2 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">Equal opportunities for all</h2>
                    <p class="text-xl">At MyMonty, we believe in leveling the playing field. Whether you're a tech enthusiast, an underserved individual, or a starter in financial services, we're here to serve you.</p>
                </div>
                <div class="lg:w-3/4 mx-auto mt-8">
                    <img src="/images/equal-opportunities-for-all.webp" alt="Equal Opportunities For All" width="1836" height="920">
                </div>
            </div>
        </section>

        <section id="section-4" class="my-12 py-12 lg:my-14 lg:py-14">
            <div class="container grid lg:grid-cols-2 gap-8">
                <div class="relative flex flex-col justify-center max-lg:items-center gap-8 mx-auto mx-lg:text-center order-1 lg:order-2">
                    <h2 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">Digital all the way</h2>
                    <p class="text-xl">Digital is at the heart of our operations. With MyMonty, you can effortlessly send, receive, and request funds with a single tap. Experience the ease of contactless transactions and embrace a seamless digital future with us!</p>
                    <img class="max-lg:hidden absolute bottom-0 -left-14 -z-10" src="/images/icons/mm.svg" alt="Digital All The Way" width="249" height="128">
                </div>
                <div class="order-2 lg:order-1">
                    <img src="/images/digital-all-the-way.webp" alt="Digital All The Way" width="978" height="947">
                </div>
            </div>
        </section>

        <section id="section-5" class="my-12 py-12 lg:my-14 lg:py-14">
            <div class="container">
                <div class="lg:w-3/4 lg:mx-auto flex flex-col justify-center gap-8">
                    <h2 class="lg:w-3/4 font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">Our culture: building on diversity</h2>
                </div>
                <div class="grid grid-cold-2 lg:grid-cols-3 gap-4 lg:w-3/4 mx-auto justify-start items-start mt-8">
                    <div class="lg:col-span-2 flex flex-col justify-center max-lg:items-center gap-8 mx-auto mx-lg:text-center">
                        <p class="text-xl">Our strength lies in our dedicated, agile, and diverse team. Together, we're committed to pushing boundaries in digital innovation, ensuring your journey towards a simpler and more connected future.</p>
                        <img class="aspect-[16/12] object-cover object-center rounded-[30px]" src="/images/our-culture-building-on-diversity-1.webp" alt="Digital All The Way" width="978" height="947">
                    </div>
                    <div class="max-lg:hidden flex flex-col gap-4 order-2 lg:order-1">
                        <img src="/images/our-culture-building-on-diversity-2.webp" alt="Digital All The Way" width="978" height="947">
                        <img src="/images/our-culture-building-on-diversity-3.webp" alt="Digital All The Way" width="978" height="947">
                    </div>
                </div>
            </div>
        </section>

        <section id="section-6" class="my-12 py-12 lg:my-14 lg:py-14">
            <div class="container flex flex-col gap-8">
                <div class="flex flex-col justify-center items-center gap-8 lg:w-2/3 mx-auto text-center">
                    <h2 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">Our offices</h2>
                    <p class="text-xl">Our strength lies in our dedicated, agile, and diverse team. Together, we're committed to pushing boundaries in digital innovation, ensuring your journey towards a simpler and more connected future.</p>
                </div>
                <div class="grid lg:grid-cols-2 gap-4 overflow-hidden text-white">
                    <div class="relative flex flex-col gap-8 p-8 lg:p-16 bg-[url('/images/uk.webp')] bg-cover bg-bottom bg-no-repeat rounded-[30px]">
                        <button class="w-max ml-auto py-2 px-6 text-base text-white bg-black rounded-[30px] select-none font-AeonikMedium">Contact Us</button>
                        <div class="flex flex-col gap-4">
                            <h2 class="font-AeonikBlack text-2xl md:text-3xl xl:text-4xl 4xl:text-5xl uppercase">United Kingdom</h2>
                            <a href="tel:+441174090583" class="flex items-start gap-2 text-xl underline underline-offset-4">
                                <img src="/images/icons/telephone-white.svg" alt="Telephone" width="28" height="28">
                                <span>+44 117 409 0583</span>
                            </a>
                            <p class="flex items-start gap-2  text-xl">
                                <img src="/images/icons/marker-pin-white.svg" alt="Marker Pin" width="28" height="28">
                                <span>Beaumont Bridge House, 181 Queen Victoria Street, London EC4V 4EG</span>
                            </p>
                        </div>
                    </div>
                    <div class="relative flex flex-col gap-8 p-8 lg:p-16 bg-[url('/images/uae.webp')] bg-cover bg-bottom bg-no-repeat rounded-[30px]">
                        <button class="w-max ml-auto py-2 px-6 text-base text-white bg-black rounded-[30px] select-none font-AeonikMedium">Contact Us</button>
                        <div class="flex flex-col gap-4">
                            <h2 class="font-AeonikBlack text-2xl md:text-3xl xl:text-4xl 4xl:text-5xl uppercase">United Arab Emirates</h2>
                            <a href="tel:+97145657743" class="flex items-start gap-2 text-xl underline underline-offset-4">
                                <img src="/images/icons/telephone-white.svg" alt="Telephone" width="28" height="28">
                                <span>+971 4 5657743</span>
                            </a>
                            <p class="flex items-start gap-2 text-xl">
                                <img src="/images/icons/marker-pin-white.svg" alt="Marker Pin" width="28" height="28">
                                <span>Unit 30, floor 20, Central Park Tower DIFC 74777 Dubai</span>    
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script setup>
	useSeoMeta({
        title: 'Who We Are',
        description: '',

        ogTitle: 'Who We Are',
        ogDescription: '',
        ogImage: '',

        twitterTitle: 'Who We Are',
        twitterDescription: '',
        twitterCard: 'summary_large_image',
    })
</script>

<style lang="" scoped>
	
</style>