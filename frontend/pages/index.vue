<template>
    <div id="homepage" class="homepage">
        <section id="section-1" class="w-screen lg:h-[calc(100vh-93px)] bg-[#ECECEE]">
            <div class="relative container flex flex-col justify-center gap-14 h-full">
                <div class="flex flex-col justify-center gap-8 lg:w-4/5 max-lg:mt-14">
                    <h1 class="font-AeonikBlack text-4xl md:text-6xl xl:text-[5.2rem] 4xl:text-8xl 5xl:text-9xl uppercase">Simple &<br />Hassle-Free<br />Digital Payment</h1>
                    <p class="lg:w-1/2 text-2xl">Empowering you with personalized financial&nbsp;solutions.</p>
                    <ScrollButton target="download" class="w-max py-2 px-6 text-base text-white bg-black rounded-[30px] select-none font-AeonikMedium">Get Started</ScrollButton>
                    <!-- <button @click="scrollToDownload" class="w-max py-2 px-6 text-base text-white bg-black rounded-[30px] select-none font-AeonikMedium">Get Started</button> -->
                </div>
                <div class="lg:absolute lg:bottom-0 lg:right-0 lg:w-[55%]">
                    <img src="/images/main-banner.png" alt="Simple & Hassle-Free Digital Payment" width="1424" height="1664">
                </div>
            </div>
        </section>

        <section id="section-2" class="my-12 py-12 lg:my-14 lg:py-14">
            <div class="container">
                <div class="flex flex-col justify-center items-center gap-8 lg:w-2/3 mx-auto text-center">
                    <h2 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">Get on board with us</h2>
                    <p class="text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pellentesque accumsan tellus, id bibendum neque pellentesque pellentesque.</p>
                    <button class="py-2 px-4 text-base text-white bg-primary rounded-[30px] select-none font-AeonikMedium">Download App</button>
                </div>
            </div>
        </section>

        <section id="section-3" class="my-12 py-12 lg:my-14 lg:py-14">
            <div class="container">
                <div class="grid lg:grid-cols-2 justify-start items-center gap-16 lg:gap-32">
                    <div class="flex flex-col justify-start items-start gap-8">
                        <h3 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">We've got you covered worldwide</h3>
                        <p class="text-left text-xl">Send, receive and request money whenever and wherever you are.</p>
                        <button class="py-2 px-6 text-base text-white bg-black rounded-[30px] select-none font-AeonikMedium">Get Started</button>
                    </div>
                    <img src="/images/get-on-board-with-us.png" alt="Get on Board With Us" width="1096" height="892">
                </div>
            </div>
        </section>    

        <section id="section-4" class="manage-your-money relative my-12 py-12 lg:my-14 lg:py-36 bg-[url('/images/manage-your-money-bg.png')] bg-no-repeat bg-cover bg-center">
            <div class="container">
                <div class="flex flex-col justify-center gap-14 h-full">
                    <img class="w-48 lg:w-96" src="/images/manage-your-money.png" alt="Manage Your Money" width="514" height="384">

                    <div class="flex flex-col justify-start items-start gap-8 text-white">
                        <h3 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">Manage your Money</h3>
                        <ul class="flex flex-col gap-4">
                            <li class="flex gap-2">
                                <img src="/images/icons/check-box-white.svg" alt="Check Box" width="21" height="20">
                                <p class="text-xl">Save & control your payments</p>
                            </li>
                            <li class="flex gap-2">
                                <img src="/images/icons/check-box-white.svg" alt="Check Box" width="21" height="20">
                                <p class="text-xl">Wire Transfers within the SEPA region</p>
                            </li>
                            <li class="flex gap-2">
                                <img src="/images/icons/check-box-white.svg" alt="Check Box" width="21" height="20">
                                <p class="text-xl">Global P2P Money Transfers</p>
                            </li>
                        </ul>
                        <button class="py-2 px-6 text-base text-black bg-white rounded-[30px] select-none font-AeonikMedium">Payments</button>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-5" class="my-12 py-12 lg:my-14 lg:py-14">
            <div class="container">
                <div class="flex flex-col justify-center items-center gap-8 lg:w-2/3 mx-auto text-center">
                    <h2 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">Request money with ease</h2>
                    <p class="text-xl">No more fuss-just send a link, and get paid quickly and effortlessly from anyone, anywhere in the world.</p>
                </div>
                <img class="w-full mt-8" src="/images/request-money-with-ease.png" alt="Request Money With Ease" width="1096" height="892">
            </div>
        </section>

        <section id="section-6" class="my-12 py-12 lg:my-14 lg:py-14">
            <div class="container">
                <div class="grid lg:grid-cols-2 justify-start items-center gap-16 lg:gap-32">
                    <div class="flex flex-col justify-start items-start gap-8 order-1 lg:order-2">
                        <h3 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">Stay protected</h3>
                        <ul class="flex flex-col gap-4">
                            <li class="flex gap-2">
                                <img src="/images/icons/check-box-black.svg" alt="Check Box" width="21" height="20">
                                <p class="text-xl">Biometric protection</p>
                            </li>
                            <li class="flex gap-2">
                                <img src="/images/icons/check-box-black.svg" alt="Check Box" width="21" height="20">
                                <p class="text-xl">Account safeguarded from hackers</p>
                            </li>
                            <li class="flex gap-2">
                                <img src="/images/icons/check-box-black.svg" alt="Check Box" width="21" height="20">
                                <p class="text-xl">No password needed</p>
                            </li>
                        </ul>
                        <button class="py-2 px-6 text-base text-white bg-black rounded-[30px] select-none font-AeonikMedium">Payments</button>
                    </div>
                    <img class="order-2 lg:order-1" src="/images/stay-protected.png" alt="Stay Protected" width="1120" height="892">
                </div>
            </div>
        </section>    

        <section id="section-7" class="my-12 py-12 lg:my-14 lg:py-14">
            <div class="container">
                <div class="flex flex-col justify-center items-center gap-8 lg:w-2/3 mx-auto text-center">
                    <h2 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">Time to go digital</h2>
                    <p class="text-xl">Manage your finances effortlessly with our intuitive mobile app. From account management to fund transfers and upcoming budget tracking, MyMonty offers a user-friendly interface tailored to your needs. Choose between EUR or GBP for seamless transactions in your preferred currency.</p>
                </div>
                <img class="w-full mt-8" src="/images/time-to-go-digital.png" alt="Time to go digital" width="2124" height="1064">
            </div>
        </section>

        <section id="section-8" class="my-12 py-12 lg:my-14 lg:py-14">
            <div class="container">
                <div class="flex flex-col justify-center items-center gap-8 lg:w-2/3 mx-auto text-center">
                    <h2 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">Get a look at our revolutionary features</h2>
                    <NuxtLinkLocale :to="'/features'">
                        <button class="py-2 px-4 text-base text-white bg-primary rounded-[30px] select-none font-AeonikMedium">View All Features</button>
                    </NuxtLinkLocale>
                </div>

                <div class="mt-8">
                    <div class="relative grid lg:grid-cols-2 justify-start items-center bg-[#E7EEF1] rounded-[30px]">
                        <img class="hidden lg:block absolute top-8 -left-4" src="/images/icons/receipt-check-box-primary.svg" alt="Receipt Check Box Primary" width="77" height="77">
                        
                        <div class="flex flex-col justify-start items-start gap-8 py-6 px-8 lg:p-12 xl:p-24">
                            <h3 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">Streamlined contactless payments</h3>
                            <p class="text-left text-xl">Enjoy the convenience of contactless payments with MyMonty EEA/UK's integration with Google Pay. Securely make purchases in-store, online, and at payment terminals with ease and speed.</p>
                        </div>
                        <div class="w-full h-full rounded-b-[30px] lg:rounded-r-[30px] lg:rounded-l-none overflow-hidden">
                            <img class="w-full h-full object-cover" src="/images/streamlined-contactless-payments.png" alt="Streamlined Contactless Payments" width="1040" height="892">
                        </div>
                    </div>

                    <div class="relative grid lg:grid-cols-2 justify-start items-center text-white bg-black rounded-[30px] mt-4">
                        <img class="hidden lg:block absolute top-8 -right-4" src="/images/icons/chat-box-primary.svg" alt="Card Chat" width="77" height="77">

                        <div class="flex flex-col justify-start items-start gap-8 py-6 px-8 lg:p-12 xl:p-24 order-1 lg:order-2">
                            <h3 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">Support around the clock</h3>
                            <p class="text-left text-xl">Count on MyMonty for reliable customer support. Our dedicated team is available during business hours, backed by an in-app bot for 24/7 assistance. Whether you have questions or need help, we're here to ensure your experience is smooth and enjoyable.</p>
                        </div>
                        <div class="w-full h-full rounded-b-[30px] lg:rounded-l-[30px] lg:rounded-r-none overflow-hidden order-2 lg:order-1">
                            <img class="w-full h-full object-cover" src="/images/support-around-the-clock.png" alt="Support Around the Clock" width="1040" height="892">
                        </div>
                    </div>
                </div>
            </div>
        </section>  

        <section id="section-9" class="relative my-12 py-12 lg:my-14 lg:py-36 bg-[url('/images/choose-your-plan-bg.png')] bg-no-repeat bg-cover bg-center">
            <div class="container">
                <div class="flex flex-col justify-center items-center gap-8 lg:w-2/3 mx-auto text-white text-center">
                    <h2 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">Choose your plan</h2>
                    <p class="text-xl">We've got you covered with plans tailored to your needs. Just pick the one that suits you best or compare plans.</p>
                    <button class="py-2 px-4 text-base text-black bg-white rounded-[30px] select-none font-AeonikMedium">View all plans</button>
                </div>

                <div class="grid lg:grid-cols-3 justify-start gap-8 xl:w-3/4 mx-auto text-white text-center mt-14">
                    <div class="flex flex-col justify-between gap-14 border border-white rounded-[30px] py-10 px-8">
                        <div>
                            <h4 class="font-AeonikBlack text-2xl md:text-3xl xl:text-4xl 4xl:text-5xl uppercase">Starter</h4>
                            <p class="text-xl mt-4">Looking to start that journey to financial freedom? <br/> Get our Starter plan and enjoy true freedom with low in store fees and a virtual/physical card.</p>
                        </div>
                        <div class="w-full px-4">
                            <button class="w-full py-2 px-4 text-base text-white bg-primary rounded-[30px] select-none font-AeonikMedium">Free</button>
                        </div>
                    </div>
                    <div class="flex flex-col justify-between gap-14 border border-white rounded-[30px] py-10 px-8">
                        <div>
                            <h4 class="font-AeonikBlack text-2xl md:text-3xl xl:text-4xl 4xl:text-5xl uppercase">Plus</h4>
                            <p class="text-xl mt-4">If you're looking for true value, try our Classic plan with zero card fees, zero monthly charges and more.</p>
                        </div>
                        <div class="w-full px-4">
                            <p class="font-AeonikMediumItalic text-[#D4D4D4] text-base">Not Available Yet</p>
                            <button class="w-full py-2 px-4 mt-2 text-base text-white bg-transparent border border-white rounded-[30px] select-none font-AeonikMediumItalic">COMING SOON</button>
                        </div>
                    </div>
                    <div class="flex flex-col justify-between gap-14 border border-white rounded-[30px] py-10 px-8">
                        <div>
                            <h4 class="font-AeonikBlack text-2xl md:text-3xl xl:text-4xl 4xl:text-5xl uppercase">Premium</h4>
                            <p class="text-xl mt-4">Step up to a truly global level. Enjoy multi-currency features and added value such as investment, health and much more.</p>
                        </div>
                        <div class="w-full px-4">
                            <p class="font-AeonikMediumItalic text-[#D4D4D4] text-base">Not Available Yet</p>
                            <button class="w-full py-2 px-4 mt-2 text-base text-white bg-transparent border border-white rounded-[30px] select-none font-AeonikMediumItalic">COMING SOON</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script setup>
    import ScrollButton from '~/components/ScrollButton.vue';

    useSeoMeta({
        title: 'Homepage',
        description: '',

        ogTitle: 'Homepage',
        ogDescription: '',
        ogImage: '',

        twitterTitle: 'Homepage',
        twitterDescription: '',
        twitterCard: 'summary_large_image',
    })
</script>