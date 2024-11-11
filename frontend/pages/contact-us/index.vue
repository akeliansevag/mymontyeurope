<template>
    <div>
        <MainBanner 
            subTitle="Contact Us"
            title="Got any questions?"
            description="Our friendly team is here to help. Just fill out the form below, and we’ll be in touch with you soon."
            buttonLink=""
            buttonText="Download App"
            image="got-any-questions"
        />

        <section id="section-2" class="my-12 py-12 lg:my-14 lg:py-14">
            <div class="container">
                <div class="flex flex-col justify-center items-center gap-8 lg:w-2/3 mx-auto text-center">
                    <h2 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">Fill out this form to reach us</h2>
                </div>

                <div class="p-8 lg:p-14 bg-[#ECECEE] rounded-[30px] mt-12">
                    <div class="flex flex-col gap-4 lg:gap-8">
                        <div class="flex max-lg:flex-col gap-4 justify-between items-start">
                            <div class="flex flex-col gap-1 w-full">
                                <label for="full-name" class="text-base">Full Name</label>
                                <input v-model="form.full_name" type="text" placeholder="Full Name" id="full-name" class="w-full h-full min-h-14 py-3 px-3 bg-white border border-[#D4D4D4] rounded-lg outline-none" />
                                <div v-if="errors.full_name" class="text-xs text-red-500">{{ errors.full_name }}</div>
                            </div>
                            <div class="flex flex-col gap-1 w-full">
                                <label for="email-address" class="text-base">Email Address</label>
                                <input v-model="form.email" type="text" placeholder="Email Address" id="email-address" class="w-full h-full min-h-14 py-3 px-3 bg-white border border-[#D4D4D4] rounded-lg outline-none" />
                                <div v-if="errors.email" class="text-xs text-red-500">{{ errors.email }}</div>
                            </div>
                        </div>

                        <div class="flex max-lg:flex-col gap-4 justify-between items-start">
                            <div class="flex flex-col gap-1 w-full">
                                <label for="company-name" class="text-base">Company Name <span class="text-[#9CA3AF]">(Optional)</span></label>
                                <input v-model="form.company" type="text" placeholder="Company Name" id="company-name" class="w-full h-full min-h-14 py-3 px-3 bg-white border border-[#D4D4D4] rounded-lg outline-none">
                                <div v-if="errors.company" class="text-xs text-red-500">{{ errors.company }}</div>
                            </div>
                            <div class="flex flex-col gap-1 w-full">
                                <label for="position" class="text-base">Position <span class="text-[#9CA3AF]">(Optional)</span></label>
                                <select v-model="form.position" name="position" id="position" class="w-full h-full min-h-14 py-3 px-3 bg-white border border-[#D4D4D4] rounded-lg outline-none">
                                    <option value="" disabled class="text-[#ECECEE]">Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">2</option>
                                </select>
                                <div v-if="errors.position" class="text-xs text-red-500">{{ errors.position }}</div>
                            </div>
                        </div>

                        <div class="flex max-lg:flex-col gap-4 justify-between items-start">
                            <div class="flex flex-col gap-1 w-full">
                                <label for="mobile-number" class="text-base">Mobile Number</label>
                                <div class="relative flex flex-row items-start gap-1">
                                    <div class="flex flex-col gap-1 w-[160px]">
                                        <div @click="toggleDropdown" class="custom-dropdown w-full h-full min-h-14 py-3 px-3 bg-white border border-[#D4D4D4] rounded-lg outline-none cursor-pointer">
                                            <div id="selected-country" class="flex justify-start items-center gap-2 select-none">
                                                <img :src="`/images/flags/${selectedCountry.iso2 || 'LB' }.svg`" :alt="selectedCountry.name || 'Lebanon'" width="20" height="20">
                                                <span>+{{ selectedCountry.code || '961' }}</span>
                                            </div>
                                        </div>
                                        <input v-model="form.code" type="hidden" id="code">
                                        <div v-if="errors.code" class="text-xs text-red-500">{{ errors.code }}</div>
                                    </div>

                                    <ul v-if="showDropdown" ref="dropdownContainer" @scroll="handleScroll" class="dropdown-container shadow-black/20 shadow-md absolute top-full left-0 w-full max-h-[200px] text-sm rounded-xl bg-white text-black mt-2 overflow-auto z-50">
                                        <input v-model="searchQuery" type="text" id="search" placeholder="Search" class="sticky top-0 left-0 w-full bg-white px-4 py-2 border-b border-b-[#D4D4D4] outline-0 z-10">
                                        <template v-for="country in filteredCountries">
                                            <li v-if="country.status == 1" :key="country.id" @click="selectCountry(country)" class="flex gap-2 text-black p-2 hover:bg-[#D4D4D4] cursor-pointer">
                                                <img :src="`/images/flags/${country.iso2}.svg`" :alt="country.name" width="20" height="20" />
                                                <span class="text-xs text-[#73788B]">(+{{ country.code }})</span>
                                                <span class="text-xs">{{ country.name }}</span>
                                            </li>
                                        </template>
                                    </ul>

                                    <div class="flex flex-col gap-1 w-full">
                                        <input v-model="form.mobile" type="text" id="mobile" placeholder="Phone Number" class="w-full h-full min-h-14 py-3 px-3 bg-white border border-[#D4D4D4] rounded-lg outline-none">
                                        <div v-if="errors.mobile" class="text-xs text-red-500">{{ errors.mobile }}</div>
                                    </div>
                                </div>
                                <!-- <input type="text" placeholder="Mobile Number" id="full-name" class="w-full h-full min-h-14 py-3 px-3 bg-white border border-[#D4D4D4] rounded-lg outline-none"> -->
                            </div>
                            <div class="flex flex-col gap-1 w-full h-full">
                                <div class="flex flex-col gap-1 w-full">
                                    <label for="subject" class="text-base">Subject</label>
                                    <input v-model="form.subject" type="text" placeholder="Subject" id="subject" class="w-full h-full min-h-14 py-3 px-3 bg-white border border-[#D4D4D4] rounded-lg outline-none">
                                    <div v-if="errors.subject" class="text-xs text-red-500">{{ errors.subject }}</div>
                                </div>
                            </div>
                        </div>

                        <div class="flex max-lg:flex-col gap-4 justify-between items-start">
                            <div class="flex flex-col gap-1 w-full">
                                <label for="message" class="text-base">Your Message</label>
                                <textarea v-model="form.message" rows="10" plaveholder="Message" class="w-full h-full min-h-14 py-3 px-3 bg-white border border-[#D4D4D4] rounded-lg outline-none"></textarea>
                                <div v-if="errors.message" class="text-xs text-red-500">{{ errors.message }}</div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 lg:grid-cols-3">
                            <div class="col-span-2 flex flex-col gap-4 lg:gap-8">
                                <div class="flex flex-col gap-1 w-full">
                                    <div class="flex justify-between items-baseline gap-2">
                                        <input v-model="isAcknowledged" type="checkbox" class="inline cursor-pointer">
                                        <p class="inline">By checking this box, you confirm that you've read and accepted our <NuxtLinkLocale :to="''" class="text-primary">Privacy Policy</NuxtLinkLocale>, <NuxtLinkLocale :to="''" class="text-primary">Cookie Policy</NuxtLinkLocale>, and <NuxtLinkLocale :to="''" class="text-primary">Terms & Conditions</NuxtLinkLocale> for our website.</p>
                                    </div>
                                </div>
                                <button :disabled="!isAcknowledged" @click.prevent="handleSubmit" class="w-max py-4 px-14 text-base text-white bg-black rounded-[30px] select-none font-AeonikMedium disabled:bg-[#D4D4D4]">Submit</button>
                                <div v-if="submissionMessage" :class="{'text-red-500': isError, 'text-gray-500': !isError}">{{ submissionMessage }}</div>
                            </div>
                            <!-- <div class="lg:text-right">
                                GOOGLE RECATPCHA
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- need to be replaced -->
        <section id="section-3" class="relative my-12 py-12 lg:my-14 lg:py-36 bg-[url('/images/always-there-for-you-bg.png')] bg-no-repeat bg-cover bg-center">
            <div class="container">
                <div class="grid lg:grid-cols-2 gap-16">
                    <div class="flex flex-col justify-start items-start gap-8 text-white">
                        <h3 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">Always there for you</h3>
                        <p class="text-xl">Monday to Friday: 8:00 AM - 5:00 PM (EEST)<br />Saturday and Sunday: Closed</p>
                    </div>
                    <div class="flex flex-col justify-start items-start gap-8 text-white">
                        <img class="" src="/images/icons/phone-box-primary.svg" alt="Phone Box Blue" width="78" height="78">
                        <p class="text-xl">Have a complaint or need any assistance?<br/>Reach out to us <a href="mailto:" class="text-primary">here</a></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script setup>
	import { useCountry } from '~/composables/useCountry';

    useSeoMeta({
        title: 'Contact Us',
        description: '',

        ogTitle: 'Contact Us',
        ogDescription: '',
        ogImage: '',

        twitterTitle: 'Contact Us',
        twitterDescription: '',
        twitterCard: 'summary_large_image',
    })

    const { selectedCountry, detectCountry, countriesData } = useCountry();

    const emit = defineEmits();

    const route = useRoute();
    const currentPath = route.path;

    // Country-related State
    const countries = ref([]);
    const showDropdown = ref(false);
    const placeholder = 'Code';
    const filteredCountries = ref([]);
    const searchQuery = ref('');
    const dropdownContainer = ref(null);
    const lastLoadedIndex = ref(0);
    const searchFlag = ref(false);
    const initialCode = ref(''); // Store initial value
    const initialCountry = ref(''); // Store initial value

    // Submission State
    const submissionMessage = ref('');
    const isSubmitting = ref(false);
    const isError = ref(false);


    onMounted(async () => {
        // Load initial countries in the country code dropdown
        loadInitialCountries();

        // Detect country immediately on component mount and assign it to form.value.code
        detectCountry().then(() => {
            initialCode.value = selectedCountry.value.code
            form.value.code = selectedCountry.value.code;
        });
    });

    const isAcknowledged = ref(false)
    const form = ref({
        full_name: '',
        email: '',
        company: '',
        position: '',
        code: '',
        mobile: '',
        subject: '',
        message: '',
    });

    const errors = ref({
        full_name: '',
        email: '',
        company: '',
        position: '',
        code: '',
        mobile: '',
        subject: '',
        message: '',
    });

    const validationRules = {
        full_name: {
            required: 'Please enter your first name',
            safe: 'Your input has invalid value'
        },
        email: {
            required: 'Please enter your email address',
            email: 'Please enter a valid email address',
            safe: 'Your input has invalid value'
        },
        company: {
            safe: 'Your input has invalid value'
        },
        position: {
            safe: 'Your input has invalid value'
        },
        code: {
            required: 'Please choose your country code',
            code: 'Please enter a valid country code',
            safe: 'Your input has invalid value'
        },
        mobile: {
            required: 'Please enter your mobile number',
            numeric: 'Please enter a valid numeric phone number',
            length: 'Please enter a valid phone number',
            safe: 'Your input has invalid value'
        },
        subject: {
            required: 'Please enter your subject',
            safe: 'Your input has invalid value'
        },
        message: {
            required: 'Please enter your message',
            safe: 'Your input has invalid value'
        },
    };

    // Submitting the form
    const handleSubmit = async () => {
        if(!isAcknowledged) {
            isSubmitting.value = false; // Re-enable the button
            submissionMessage.value = 'ddddPlease confirm that you\'ve read and accepted our Privacy Policy, Cookie Policy, and Terms & Conditions'; // Re-enable the butto
            isError.value = true;
            return
        }

        // Disable the submit button
        isSubmitting.value = true;

        // Validate form fields
        const isFormValid = validateForm(form, errors, validationRules);

        // If either form or file validation fails, stop submission
        if (!isFormValid) {
            // console.log('Validation failed:', errors.value);
            isSubmitting.value = false; // Re-enable the button
            submissionMessage.value = 'Please ensure all required fields are correctly filled and try submitting again.'; // Re-enable the butto
            isError.value = true;
            return; // Stop submission if form or file validation fails
        }

        try {
            const API_ENDPOINT = 'http://backend.mymontyeurope.localhost/wp-json/contact-form-7/v1/contact-forms/11/feedback';
            const formData = new FormData();

            // Append top-level fields

            Object.keys(form.value).forEach((key) => {
                formData.append(key, form.value[key]);
            });
           
            formData.append('_wpcf7_unit_tag', 'rte');

            const response = await fetch(API_ENDPOINT, {
                method: 'POST',
                body: formData,
                headers: {
                    'Accept': 'application/json',
                    // 'Content-Type': 'multipart/form-data' // No need to set this header for FormData
                },
            });

            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            
            const data = await response.json();
            // console.log("Form submitted successfully:", data);

            if(data.status == 'validation_failed'){
                submissionMessage.value = "Error in submitting your message. Please try again later";
                isError.value = true;

                // Clear error message after 2 seconds
                setTimeout(() => {
                    submissionMessage.value = '';
                }, 2000);
                throw new Error('Validation Error');
            }

            submissionMessage.value = "Thank you for your message."
            isError.value = false;
            // Clear success message after 2 seconds
            setTimeout(() => {
                submissionMessage.value = '';
            }, 2000);

            resetForm();
            //Handle success response, such as notifying the user or redirecting
        } catch (error) {
            // console.error("Form submission error:", error);
            // Set error message
            submissionMessage.value = "Error in submitting your message. Please try again later";
            isError.value = true;

            // Clear error message after 2 seconds
            setTimeout(() => {
                submissionMessage.value = '';
            }, 2000);
        } finally {
            // Re-enable the submit button
            isSubmitting.value = false;
        }
    };

    // Resetting the form
    const resetForm = () => {
        form.value = {
            full_name: '',
            email: '',
            company: '',
            position: '',
            code: selectedCountry.value ? selectedCountry.value.code : initialCode.value,
            mobile: '',
            subject: '',
            message: '',
        };
        errors.value = {
            full_name: '',
            email: '',
            company: '',
            position: '',
            code: '',
            mobile: '',
            subject: '',
            message: '',
        };
        isAcknowledged.value = false
    };

    // Choosing Country
    const toggleDropdown = () => {
        showDropdown.value = !showDropdown.value;

        // Reset country list and lastLoadedIndex when closing the dropdown
        if (!showDropdown.value) {
            resetDropdown();
        }
    };

    const resetDropdown = () => {
        countries.value = [];
        lastLoadedIndex.value = 0;
        filteredCountries.value = [];
        searchFlag.value = false
        searchQuery.value = ''
        loadInitialCountries();
    };

    const closeDropdown = () => {
        loadInitialCountries();
    };

    const selectCountry = (country) => {
        selectedCountry.value = country;
        form.value.code = country.code;
        emit('select', country);
        showDropdown.value = false;
        resetDropdown()
    };

    const loadInitialCountries = () => {
        loadNextCountries();
    };

    const loadNextCountries = () => {
        const batchSize = 10;
        const startIndex = lastLoadedIndex.value;
        const endIndex = startIndex + batchSize;
        const nextBatch = countriesData.slice(startIndex, endIndex);

        countries.value = [...countries.value, ...nextBatch];
        lastLoadedIndex.value = endIndex;
        filteredCountries.value = countries.value;
    };

    const handleScroll = () => {
        const container = dropdownContainer.value;
        if (searchQuery.value === '' && container.scrollTop + container.clientHeight >= container.scrollHeight - 20) {
            if (!searchFlag.value) {
                loadNextCountries();
            }
        }
    };

    const searchCountries = () => {
        const searchResults = countriesData.filter((country) =>
            country.name.toLowerCase().includes(searchQuery.value.toLowerCase())
        );
        if (searchQuery.value != '') {
            filteredCountries.value = searchResults;
            searchFlag.value = true
        }
        else {
            resetDropdown();
        }
    };

    watch(searchQuery, searchCountries);
</script>

<style lang="" scoped>
	
</style>