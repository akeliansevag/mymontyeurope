<template>
    <div>
        <MainBanner 
            subTitle="Why MyMonty?"
            title="See what sets us apart"
            description="At MyMonty, we're committed to making basic banking services a universal right. We empower you to effortlessly send, receive, or request money with transparent pricing and no hidden&nbsp;fees."
            buttonLink=""
            buttonText="Download App"
            image="see-what-sets-us-apart"
        />

        <section id="section-5" class="my-12 py-12 lg:my-14 lg:py-14">
            <div class="container flex flex-col gap-4">
                <div class="p-8 lg:p-14 bg-[#ECECEE] rounded-[30px]">
                    <div class="flex flex-col justify-center items-center gap-8 lg:w-2/3 mx-auto text-center">
                        <h2 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">Effortless onboarding</h2>
                        <p class="text-xl">Joining us is as smooth as it gets! Our streamlined registration process swiftly provides you with an International Bank Account Number (IBAN) after our user-friendly vetting process.</p>
                    </div>
                    <img class="w-full mt-8" src="/images/effortless-onboarding.png" alt="Effortless Onboarding" width="1852" height="832">
                </div>
                <div class="p-8 lg:p-14 bg-[#ECECEE] rounded-[30px]">
                    <div class="flex flex-col justify-center items-center gap-8 lg:w-2/3 mx-auto text-center">
                        <h2 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">Recurring payments</h2>
                        <p class="text-xl">No more stressing over recurring payments when you can set them up automatically. Sit back and relax while we handle your utility bills promptly, ensuring you never miss a deadline.</p>
                    </div>
                    <img class="w-full mt-8" src="/images/recurring-payments.png" alt="Recurring Payments" width="1852" height="832">
                </div>
                <div class="grid lg:grid-cols-2 gap-4">
                    <div class="p-8 lg:p-14 bg-[#ECECEE] rounded-[30px]">
                        <div class="flex flex-col justify-center max-lg:items-center gap-8 max-lg:mx-auto max-lg:text-center">
                            <h2 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">No surprise fees</h2>
                            <p class="text-xl">Send, receive and request payments globally with no hidden fees, only transparency.</p>
                        </div>
                        <img class="w-full mt-8" src="/images/no-surprise-fees.png" alt="No surprise fees" width="880" height="982">
                    </div>
                    <div class="p-8 lg:p-14 bg-[#ECECEE] rounded-[30px]">
                        <div class="flex flex-col justify-center max-lg:items-center gap-8 max-lg:mx-auto max-lg:text-center">
                            <h2 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">Here for you</h2>
                            <p class="text-xl">Our friendly customer service team is available Monday to Friday, from 9:00 am to 5:00 pm (EEST).</p>
                        </div>
                        <img class="w-full mt-8" src="/images/here-for-you.png" alt="Here For You" width="918" height="1027">
                    </div>
                </div>
                <div class="p-8 lg:p-14 bg-[#ECECEE] rounded-[30px]">
                    <div class="flex flex-col justify-center items-center gap-8 lg:w-2/3 mx-auto text-center">
                        <h2 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">High-end security</h2>
                        <p class="text-xl">No need to remember passwords. Utilize biometric protection to safeguard your account against hackers. Just use your face to lock down your transactions securely.</p>
                    </div>
                    <img class="w-full mt-8" src="/images/high-end-security.png" alt="High-End Security" width="1908" height="816">
                </div>
            </div>
        </section>
    </div>
</template>

<script setup>
	useSeoMeta({
        title: 'Why MyMonty',
        description: '',

        ogTitle: 'Why MyMonty',
        ogDescription: '',
        ogImage: '',

        twitterTitle: 'Why MyMonty',
        twitterDescription: '',
        twitterCard: 'summary_large_image',
    })
</script>

<style lang="" scoped>
	
</style>