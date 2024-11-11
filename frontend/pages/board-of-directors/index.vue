<template>
    <div>
        <MainBanner 
            subTitle="Board of Directors"
            title="Leadership team"
            description="We believe in our people. By continually supporting and elevating their skills, we set the bar high and keep pushing it higher. We're dedicated to coaching and empowering our team to redefine the digital banking experience."
            buttonLink=""
            buttonText="Get Started"
            image="leadership-team"
        />

        <section id="section-2" class="my-12 py-12 lg:my-14 lg:py-14">
            <div class="container">
                <div class="flex flex-col justify-center items-center gap-12 lg:w-2/3 mx-auto text-center">
                    <h2 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">meet our board of directors and leadership team</h2>
                    <div class="flex justify-center gap-8 w-max">
                        <ScrollButton @click="show(0)":class="activeTab === 0 ? 'text-white bg-primary border-primary' : 'text-black bg-transparent border-black'" target="board-of-directors" class="w-max py-2 px-6 text-base border rounded-[30px] select-none font-AeonikMedium">Board of Directors</ScrollButton>
                        <ScrollButton @click="show(1)":class="activeTab === 1 ? 'text-white bg-primary border-primary' : 'text-black bg-transparent border-black'" target="leadership-team" class="w-max py-2 px-6 text-base border rounded-[30px] select-none font-AeonikMedium">Leadership Team</ScrollButton>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-3" class="my-12 py-12 lg:my-14 lg:py-14">
            <div class="container">
                <div class="grid lg:grid-cols-2 xl:grid-cols-3 justify-start gap-8">
                    <div v-for="(item, index) in boardOfDirectorsItems" :key="index" @click="setActive(index, 'team1')" id="board-of-directors" :class="{ 'absolute invisible opacity-0': activeTab !== 0 }" class="rounded-[30px] overflow-hidden">
                        <div :class="{ active: activeIndex.team1 === index }" class="inner relative w-full h-full">
                            <div class="front relative transition-all duration-300 ease-in-out cursor-pointer overflow-hidden z-10">
                                <img class="w-full" :src="`/images/${ item.image }.png`" :alt="item.name" width="680" height="668">
                                <div class="flex flex-col justify-center max-lg:items-center gap-2 mx-auto text-center bg-[#ECECEE] p-6">
                                    <h2 class="font-AeonikBlack text-lg md:text-xl xl:text-2xl 4xl:text-3xl uppercase">{{ item.name }}</h2>
                                    <h3 class="text-xl">{{ item.position }}</h3>
                                </div>
                                <div class="absolute top-6 right-6">
                                    <img src="/images/icons/chevron-left-box-gray.svg" alt="Chevron Left Box Gray" width="50" height="50">
                                </div>
                            </div>
                            <div class="back absolute top-0 w-full h-full py-20 px-8 text-white bg-black transition-all duration-300 ease-in-out cursor-pointer overflow-hidden">
                                <p class="text-base" v-html="item.description"></p>
                                <div class="absolute top-6 right-6">
                                    <img src="/images/icons/chevron-right-box-black.svg" alt="Chevron Right Box Black" width="50" height="50">
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div v-for="(item, index) in leadershipItems" :key="index" @click="setActive(index, 'team2')" id="leadership-team" :class="{ 'absolute invisible opacity-0': activeTab !== 1 }" class="rounded-[30px] overflow-hidden">
                        <div :class="{ active: activeIndex.team2 === index }" class="inner relative w-full h-full">
                            <div class="front relative transition-all duration-300 ease-in-out cursor-pointer overflow-hidden z-10">
                                <img class="w-full" :src="`/images/${ item.image }.png`" :alt="item.name" width="680" height="668">
                                <div class="flex flex-col justify-center max-lg:items-center gap-2 mx-auto text-center bg-[#ECECEE] p-6">
                                    <h2 class="font-AeonikBlack text-lg md:text-xl xl:text-2xl 4xl:text-3xl uppercase">{{ item.name }}</h2>
                                    <h3 class="text-xl">{{ item.position }}</h3>
                                </div>
                                <div class="absolute top-6 right-6">
                                    <img src="/images/icons/chevron-left-box-gray.svg" alt="Chevron Left Box Gray" width="50" height="50">
                                </div>
                            </div>
                            <div class="back absolute top-0 w-full h-full py-20 px-8 text-white bg-black transition-all duration-300 ease-in-out cursor-pointer overflow-hidden">
                                <p class="text-base" v-html="item.description"></p>
                                <div class="absolute top-6 right-6">
                                    <img src="/images/icons/chevron-right-box-black.svg" alt="Chevron Right Box Black" width="50" height="50">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script setup>
	useSeoMeta({
        title: 'Board of Directors',
        description: '',

        ogTitle: 'Board of Directors',
        ogDescription: '',
        ogImage: '',

        twitterTitle: 'Board of Directors',
        twitterDescription: '',
        twitterCard: 'summary_large_image',
    })

    const boardOfDirectorsItems = ref([
        {
            name: "Mountasser Hachem",
            position: "Chairman & Founder",
            description: "With over two decades of leadership in managing a group of holdings, Mr. Hachem is driven by a relentless pursuit to positively impact lives, even through risk-taking and exploring new sectors.<br /><br />Ambitious and bold, he founded Monty Group and its subsidiaries, delving into the telecommunications industry, where he has built a thriving career. His visionary approach has transformed the company into an international powerhouse with multiple branches worldwide.",
            image: "mountasser-hachem"
        },
        {
            name: "Randa Naboulsi",
            position: "Group Chief Financial Officer",
            description: "Randa Naboulsi, an ambitious and results-oriented Chief Financial Officer, earned her BBA from the University of Balamand in Lebanon in 1995, followed by an MBA from the Lebanese American University of Beirut in 2008.<br /><br />With extensive hands-on experience in Corporate Finance, Treasury, Budgeting & Forecasting, she excels in cultivating strong investor relationships.",
            image: "randa-nabulsi"
        },
        {
            name: "Susanne Hannestad",
            position: "Board Member",
            description: "With over 30 years of experience in Banking, Insurance, and Financial sectors, Mrs. Hannestad boasts a track record of successfully scaling and launching companies in global markets.<br />Her extensive expertise provides a unique edge in fintech growth and development.<br />Currently serving as a board member of Monty Mobile and MyMonty within Monty Group, she contributes valuable insights to the strategic development of both companies.",
            image: "susanne-hannestad"
        },
        {
            name: "Arvinder Gujral",
            position: "Board Member",
            description: "Armed with an MBA in Business Management, Mr. Gujral was the first Twitter employee in India to rise to the role of Managing Director for Southeast Asia and Senior Business Development for APAC.<br />With over 22 years of experience spanning Technology, Telecom, and Advertising, he has collaborated with major international players. Currently serving as a board member of MyMonty, the latest Fintech venture under Monty Group, he plays a pivotal role in expanding its digital footprint and market reach.",
            image: "arvinder-gujral"
        },
        {
            name: "Sarah Alateeqi",
            position: "Board Member",
            description: "Mrs. Alateeqi serves as the Vice Chairman and Acting CEO of AlMal Investment Company in Kuwait, bringing extensive expertise as a business leader.<br />Passionate about finance and investments, she has a diverse background that spans investment banking, private equity, and innovation consulting. Holding an MBA from the University of Chicago Booth, she has also worked in Kuwait and London, UK.<br />As a board member of MyMonty, she plays a crucial role in advancing the company's growth strategy and financial innovation.",
            image: "sarah-alateeqi"
        },
        {
            name: "Mike Quintanilla",
            position: "Board Member",
            description: "Mr. Quintanilla currently serves as the Chief Innovation Officer at GenuBank in Reno, Nevada, USA, leveraging extensive expertise in cryptocurrency and data analytics. With over 15 years in Finance and Fintech, he is recognized as an expert in Fintech strategy and blockchain implementation, having developed and supervised systems across various companies.<br />Recently joining MyMonty as a board member within Monty Group, Mr. Quintanilla brings valuable insights to drive business growth by applying his  years of accumulated expertise.",
            image: "mike-quintanilla"
        },
    ])

    const leadershipItems = ref([
        {
            name: "Susanne Hannestad",
            position: "Board Member",
            description: "With over 30 years of experience in Banking, Insurance, and Financial sectors, Mrs. Hannestad boasts a track record of successfully scaling and launching companies in global markets.<br />Her extensive expertise provides a unique edge in fintech growth and development.<br />Currently serving as a board member of Monty Mobile and MyMonty within Monty Group, she contributes valuable insights to the strategic development of both companies.",
            image: "susanne-hannestad"
        },
        {
            name: "Mountasser Hachem",
            position: "Chairman & Founder",
            description: "With over two decades of leadership in managing a group of holdings, Mr. Hachem is driven by a relentless pursuit to positively impact lives, even through risk-taking and exploring new sectors.<br /><br />Ambitious and bold, he founded Monty Group and its subsidiaries, delving into the telecommunications industry, where he has built a thriving career. His visionary approach has transformed the company into an international powerhouse with multiple branches worldwide.",
            image: "mountasser-hachem"
        },
        {
            name: "Arvinder Gujral",
            position: "Board Member",
            description: "Armed with an MBA in Business Management, Mr. Gujral was the first Twitter employee in India to rise to the role of Managing Director for Southeast Asia and Senior Business Development for APAC.<br />With over 22 years of experience spanning Technology, Telecom, and Advertising, he has collaborated with major international players. Currently serving as a board member of MyMonty, the latest Fintech venture under Monty Group, he plays a pivotal role in expanding its digital footprint and market reach.",
            image: "arvinder-gujral"
        },
        {
            name: "Randa Naboulsi",
            position: "Group Chief Financial Officer",
            description: "Randa Naboulsi, an ambitious and results-oriented Chief Financial Officer, earned her BBA from the University of Balamand in Lebanon in 1995, followed by an MBA from the Lebanese American University of Beirut in 2008.<br /><br />With extensive hands-on experience in Corporate Finance, Treasury, Budgeting & Forecasting, she excels in cultivating strong investor relationships.",
            image: "randa-nabulsi"
        },
        {
            name: "Mike Quintanilla",
            position: "Board Member",
            description: "Mr. Quintanilla currently serves as the Chief Innovation Officer at GenuBank in Reno, Nevada, USA, leveraging extensive expertise in cryptocurrency and data analytics. With over 15 years in Finance and Fintech, he is recognized as an expert in Fintech strategy and blockchain implementation, having developed and supervised systems across various companies.<br />Recently joining MyMonty as a board member within Monty Group, Mr. Quintanilla brings valuable insights to drive business growth by applying his  years of accumulated expertise.",
            image: "mike-quintanilla"
        },
        {
            name: "Sarah Alateeqi",
            position: "Board Member",
            description: "Mrs. Alateeqi serves as the Vice Chairman and Acting CEO of AlMal Investment Company in Kuwait, bringing extensive expertise as a business leader.<br />Passionate about finance and investments, she has a diverse background that spans investment banking, private equity, and innovation consulting. Holding an MBA from the University of Chicago Booth, she has also worked in Kuwait and London, UK.<br />As a board member of MyMonty, she plays a crucial role in advancing the company's growth strategy and financial innovation.",
            image: "sarah-alateeqi"
        },
    ])

    const activeIndex = ref({
        team1: null,
        team2: null,
    });

    const setActive = (index, team) => {
        // Toggle the active state: if the item is already active, remove the active state
        activeIndex.value[team] = activeIndex.value[team] === index ? null : index;
    };

	const activeTab = ref(0);

    const show = (index) => {
		activeTab.value = index;
	};
</script>

<style lang="sass" scoped>
	
</style>