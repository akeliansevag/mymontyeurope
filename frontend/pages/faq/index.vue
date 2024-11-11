<template>
    <div>
        <MainBanner 
            subTitle="FAQ"
            title="frequently asked questions"
            description="Our team is always ready to assist you or answer your inquiries. Fill out this form to reach us."
            buttonLink="contact-us"
            buttonText="Contact Us"
            image="frequently-asked-questions"
        />

        <section id="section-2" class="my-12 py-12 lg:my-14 lg:py-14">
            <div class="container flex flex-col gap-8">
                <div class="relative">
                    <input v-model="searchQuery" type="text" class="relative w-full py-4 px-12 bg-[#ECECEE] rounded-full leading-none outline-none" placeholder="Search" />
                    <img v-if="!searchQuery" src="/images/icons/search-gray.svg" class="absolute top-1/2 right-12 -translate-y-1/2" alt="Search Gray" width="20" height="20">
                    <img v-else @click="searchQuery = ''" src="/images/icons/close-gray.svg" class="absolute top-1/2 right-12 -translate-y-1/2 cursor-pointer" alt="Search Gray" width="16" height="16">
                </div>
                <div class="flex flex-col justify-center items-center gap-8 lg:w-2/3 mx-auto text-center mt-8">
                    <h2 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">{{ faqs[selectedCategoryIndex]?.topic || 'No Category Selected' }}</h2>
                </div>

                <div class="grid md:grid-cols-3 lg:grid-cols-5 items-start gap-14 md:gap-8 lg:gap-14">
                    <div class="md:col-span-1 lg:col-span-1">
                        <h2 class="font-AeonikBlack text-xl md:text-2xl xl:text-3xl 4xl:text-4xl uppercase">Topics</h2>
                        <div class="flex flex-col gap-4 lg:gap-12 mt-8">
                            <div v-for="(item, index) in faqs" :key="index" @click="selectCategory(index)" :class="['max-lg:w-max p-2 lg:p-4 rounded-2xl select-none cursor-pointer', selectedCategoryIndex === index ? 'text-white bg-primary' : 'hover:bg-[#D4D4D4]']">
                                <h3 class="text-xl font-AeonikMedium">{{ item.topic }}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="md:col-span-2 lg:col-span-4" :class="{'grid grid-cols-2 lg:grid-cols-3 gap-4': selectedFaqIndex === null}"> <!-- sm:grid-cols-2 -->
                        <template v-if="selectedCategoryIndex !== null">
                            <template v-if="showQuestions">
                                <!-- Check if there are any filtered FAQs -->
                                <template v-if="filteredFaqs.length > 0" v-for="(faq, faqIndex) in filteredFaqs" :key="faqIndex">
                                    <div @click="selectQuestion(faqIndex)" :class="['p-4 lg:p-8 rounded-2xl bg-[#ECECEE] hover:bg-[#D4D4D4] select-none cursor-pointer', { 'bg-[#D4D4D4]': faqIndex === selectedFaqIndex, 'bg-[#ECECEE]': !faqMatch(faq.question) }]">
                                        <h4 class="text-xl" :class="{'text-primary': faqMatch(faq.question)}">{{ faq.question }}</h4>
                                    </div>
                                </template>
                                <!-- Fallback if no matching questions -->
                                <div v-else class="text-center text-gray-500">
                                    <p>No matching questions found</p>
                                </div>
                            </template>
                        </template>

                        <!-- If a question is selected, display its answer -->
                        <div v-if="selectedFaqIndex !== null" class="p-4 lg:p-8 bg-[#ECECEE] rounded-2xl">
                            <h4 class="font-AeonikBold text-2xl">{{ faqs[selectedCategoryIndex].faqs[selectedFaqIndex].question }}</h4>
                            <p class="mt-4">{{ faqs[selectedCategoryIndex].faqs[selectedFaqIndex].answer }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script setup>
	useSeoMeta({
        title: 'Frequently Asked Questions',
        description: '',

        ogTitle: 'Frequently Asked Questions',
        ogDescription: '',
        ogImage: '',

        twitterTitle: 'Frequently Asked Questions',
        twitterDescription: '',
        twitterCard: 'summary_large_image',
    })

    const faqs = ref([
        {
            topic: "Open Account",
            faqs: [
                {
                    question: "How can I use MyMonty on a new device?",
                    answer: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur nihil, aut nostrum, animi obcaecati dolores fugit fugiat beatae modi deleniti dolorem nisi ullam laboriosam quasi qui molestiae error exercitationem perspiciatis dolorum fuga deserunt suscipit inventore, eligendi dolor. Blanditiis praesentium totam voluptatem quasi? Obcaecati laborum doloremque quibusdam totam neque maxime est veritatis doloribus qui, voluptatibus aliquam animi nulla nesciunt tempore id consequatur! Eligendi impedit exercitationem earum culpa ea quod rem soluta beatae nam sequi corrupti consequatur, quidem suscipit laboriosam hic eaque, voluptatum ad ipsum odit. Adipisci suscipit voluptate atque magnam voluptatibus alias blanditiis amet dolores asperiores magni, sit dicta impedit quibusdam maiores? Aliquam necessitatibus ducimus aperiam assumenda sequi deleniti error sit sint atque aspernatur temporibus nisi possimus exercitationem, veritatis reiciendis voluptate ad fugit placeat. Ipsum asperiores, hic exercitationem fugiat animi nisi quae corrupti aliquid. Tempora delectus repellat perferendis molestias iste animi, provident quaerat quasi reiciendis magni, dolores laudantium praesentium voluptatem. Natus porro quae culpa, perferendis ducimus at, incidunt, in quibusdam sed molestiae deserunt omnis pariatur nam sapiente voluptates amet officiis eum error dolores quis! Numquam voluptates sint vero accusantium animi. Ex reiciendis suscipit in quaerat quisquam doloremque facere dolor temporibus odio!"
                },
                {
                    question: "What should I do if I forget my password?",
                    answer: "Click 'Forgot Password' on the login page and follow the instructions to reset your password."
                },
                {
                    question: "How can I use MyMonty on a new device?",
                    answer: "To use MyMonty on a new device, log in with your current credentials and follow the security verification steps."
                },
                {
                    question: "What should I do if I forget my password?",
                    answer: "Click 'Forgot Password' on the login page and follow the instructions to reset your password."
                },{
                    question: "How can I use MyMonty on a new device?",
                    answer: "To use MyMonty on a new device, log in with your current credentials and follow the security verification steps."
                },
                {
                    question: "What should I do if I forget my password?",
                    answer: "Click 'Forgot Password' on the login page and follow the instructions to reset your password."
                },{
                    question: "How can I use MyMonty on a new device?",
                    answer: "To use MyMonty on a new device, log in with your current credentials and follow the security verification steps."
                },
                {
                    question: "What should I do if I forget my password?",
                    answer: "Click 'Forgot Password' on the login page and follow the instructions to reset your password."
                },
            ]
        },
        {
            topic: "Payment Instruments",
            faqs: [
                {
                    question: "How can I use MyMonty on a new device?",
                    answer: "To use MyMonty on a new device, log in with your current credentials and follow the security verification steps."
                },
                {
                    question: "What should I do if I forget my password?",
                    answer: "Click 'Forgot Password' on the login page and follow the instructions to reset your password."
                },
                {
                    question: "How can I use MyMonty on a new device?",
                    answer: "To use MyMonty on a new device, log in with your current credentials and follow the security verification steps."
                },
                {
                    question: "What should I do if I forget my password?",
                    answer: "Click 'Forgot Password' on the login page and follow the instructions to reset your password."
                },{
                    question: "How can I use MyMonty on a new device?",
                    answer: "To use MyMonty on a new device, log in with your current credentials and follow the security verification steps."
                },
                {
                    question: "What should I do if I forget my password?",
                    answer: "Click 'Forgot Password' on the login page and follow the instructions to reset your password."
                },{
                    question: "How can I use MyMonty on a new device?",
                    answer: "To use MyMonty on a new device, log in with your current credentials and follow the security verification steps."
                },
                {
                    question: "What should I do if I forget my password?",
                    answer: "Click 'Forgot Password' on the login page and follow the instructions to reset your password."
                },
            ]
        },
        {
            topic: "Setting Up",
            faqs: [
                {
                    question: "How can I use MyMonty on a new device?",
                    answer: "To use MyMonty on a new device, log in with your current credentials and follow the security verification steps."
                },
                {
                    question: "What should I do if I forget my password?",
                    answer: "Click 'Forgot Password' on the login page and follow the instructions to reset your password."
                },
                {
                    question: "How can I use MyMonty on a new device?",
                    answer: "To use MyMonty on a new device, log in with your current credentials and follow the security verification steps."
                },
                {
                    question: "What should I do if I forget my password?",
                    answer: "Click 'Forgot Password' on the login page and follow the instructions to reset your password."
                },{
                    question: "How can I use MyMonty on a new device?",
                    answer: "To use MyMonty on a new device, log in with your current credentials and follow the security verification steps."
                },
                {
                    question: "What should I do if I forget my password?",
                    answer: "Click 'Forgot Password' on the login page and follow the instructions to reset your password."
                },{
                    question: "How can I use MyMonty on a new device?",
                    answer: "To use MyMonty on a new device, log in with your current credentials and follow the security verification steps."
                },
                {
                    question: "What should I do if I forget my password?",
                    answer: "Click 'Forgot Password' on the login page and follow the instructions to reset your password."
                },
            ]
        },
    ])

    const selectedCategoryIndex = ref(0); // Default to first category
    const selectedFaqIndex = ref(null);
    const showQuestions = ref(true); // Flag to toggle questions visibility
    const searchQuery = ref(''); // Search query reactive variable

    // Select a category
    const selectCategory = (index) => {
        selectedCategoryIndex.value = index;
        selectedFaqIndex.value = null; // Reset the selected FAQ when changing categories
        showQuestions.value = true; // Ensure that questions are displayed when switching categories
    };

    // Select a specific FAQ question
    const selectQuestion = (faqIndex) => {
        selectedFaqIndex.value = faqIndex;
        showQuestions.value = false; // Hide questions and show the selected answer
    };

    // Reset selection and go back to the list of questions
    const resetSelection = () => {
        showQuestions.value = true; // Show questions again
        selectedFaqIndex.value = null; // Reset selected FAQ
    };

    // Filter FAQs based on the search query
    const filteredFaqs = computed(() => {
        if (!searchQuery.value) {
            return faqs.value[selectedCategoryIndex.value]?.faqs || [];
        }
        return faqs.value[selectedCategoryIndex.value]?.faqs.filter(faq =>
            faq.question.toLowerCase().includes(searchQuery.value.toLowerCase())
        ) || [];
    });

    // Check if a question matches the search query
    function faqMatch(question) {
        // Only check if the search query is not empty
        if (searchQuery.value.trim() === "") {
            return false; // Don't highlight any questions if there's no search query
        }
        // Check if the question contains the search query (case insensitive)
        return question.toLowerCase().includes(searchQuery.value.toLowerCase());
    }
</script>

<style lang="" scoped>
	
</style>