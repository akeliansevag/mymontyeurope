<template>
    <div>
        <MainBanner 
            subTitle="Sub Title"
            title="Title"
            description="Description"
            buttonLink=""
            buttonText="Download App"
            image="join-our-dream-team"
            alt="Join our dream team"
            page="Careers"
        />

        <section id="section-2" class="my-12 py-12 lg:my-14 lg:py-14">
            <div class="container flex flex-col gap-8">
                <div class="flex flex-col justify-center items-center gap-8 lg:w-2/3 mx-auto text-center">
                    <h2 class="font-AeonikBlack text-3xl md:text-4xl xl:text-5xl 4xl:text-6xl uppercase">Embark on Your career journey with us</h2>
                    <p class="text-xl">Our team is our biggest asset! We are dedicated to recognizing and cultivating talent from within, offering a transparent and well-defined career path for our valuable team members.<br />We heavily invest in employee training programs, workshops, and mentorship initiatives, ensuring our team is not only well-equipped for their current roles but also ready for future challenges.</p>
                </div>
                <div class="relative text-white text-center py-20 px-8 bg-[url('/images/embark-on-your-career-journey-with-us.webp')] bg-cover bg-top bg-no-repeat rounded-[30px] overflow-hidden">
                    <div class="flex flex-col justify-center items-center gap-8">
                        <h2 class="font-AeonikBlack text-3xl xl:text-4xl 4xl:text-5xl uppercase">Always there for you</h2>
                        <p class="font-AeonikBold text-2xl 4xl:text-3xl uppercase">Monday to Friday: 8:00 AM - 5:00 PM (EEST)<br />Saturday and Sunday: Closed</p>
                        <p class="text-xl">Have a complaint or need any assistance?<br />Reach out to us <a href="" class="text-primary">here</a></p>
                    </div>
                    <div class="absolute -top-20 left-50 -translate-x-1/2">
                        <img src="/images/icons/telephone-box-primary.svg" alt="Telephone Box Blue" width="78" height="78">
                    </div>
                </div>
            </div>
        </section>

        <section id="section-3" class="my-12 py-12 lg:my-14 lg:py-14">
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
                                <input v-model="form.company" type="text" placeholder="Company Name" id="full-name" class="w-full h-full min-h-14 py-3 px-3 bg-white border border-[#D4D4D4] rounded-lg outline-none">
                                <div v-if="errors.company" class="text-xs text-red-500">{{ errors.company }}</div>
                            </div>
                            <div class="flex flex-col gap-1 w-full">
                                <label for="position" class="text-base">Position</label>
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
                                <label for="country" class="text-base">Country</label>
                                <select v-model="form.country" name="country" id="country" class="w-full h-full min-h-14 py-3 px-3 bg-white border border-[#D4D4D4] rounded-lg outline-none">
                                    <option value="" disabled>Select</option>
                                    <option v-for="country in countriesData" :key="country.code" :value="country.name">
                                        {{ country.name }}
                                    </option>
                                </select>
                                <div v-if="errors.country" class="text-xs text-red-500">{{ errors.country }}</div>
                            </div>
                        </div>

                        <div class="flex max-lg:flex-col gap-4 justify-between items-start">
                            <div class="flex flex-col gap-1 w-full">
                                <label for="file" class="text-base">Upload your CV</label>
                                <div class="relative input-file">
                                    <input @change="handleFileUpload" ref="fileInputRef" type="file" name="files[]" id="file" class="opacity-0 absolute w-full h-full cursor-pointer" />
                                    <label for="file" class="flex items-center justify-center p-8 lg:p-14 bg-white border border-[#D4D4D4] rounded-lg min-h-[200px] text-center cursor-pointer">
                                        <div class="flex flex-col text-slate-400">
                                            <span class="text-lg font-AeonikBold text-primary">Click to Upload</span>
                                            <span class="mt-4 text-lg">Files Accepted (PDF, DOC, DOCX, JPG, JPEG, PNG)<br />Maximum file size: 5MB</span>
                                        </div>
                                    </label>
                                </div>
                                <div v-if="fileMessage" class="message text-xs text-red-500">{{ fileMessage }}</div>
                                <div v-if="filesArray.length > 0" class="file-info-container flex flex-col gap-2">
                                    <div v-for="(file, index) in filesArray" :key="index" class="file-info p-4 rounded-xl" :class="{ 'bg-red-100 border-red-500': file.error, 'bg-slate-100': !file.error }">
                                        <div class="flex justify-between items-center">
                                            <p>Uploaded File: {{ file.name }}</p>
                                            <div class="flex justify-between items-center gap-2">
                                                <p>File Size: {{ file.size }}</p>
                                                <img v-if="!file.error" @click="deleteFile(index)" src="/images/icons/close-red.svg" alt="Close" width="10" height="10" class="cursor-pointer" />
                                            </div>
                                        </div>
                                        <p v-if="file.error" class="text-red-500 text-sm">{{ file.error }}</p>
                                    </div>
                                </div>
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
    </div>
</template>

<script setup>
	import { useCountry } from '~/composables/useCountry';

	useSeoMeta({
        title: 'Careers',
        description: '',

        ogTitle: 'Careers',
        ogDescription: '',
        ogImage: '',

        twitterTitle: 'Careers',
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

    // File-related State
    const fileInputRef = ref(null);
    const filesArray = ref([]);
    const fileMessage = ref('');
    const MAX_FILES = 1;

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

            initialCountry.value = selectedCountry.value.name
			form.value.country = selectedCountry.value.name;
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
        country: '',
    });

    const errors = ref({
        full_name: '',
        email: '',
        company: '',
        position: '',
		code: '',
        mobile: '',
        country: '',
        file: '',
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
            required: 'Please choose your position',
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
        country: {
            required: 'Please choose your country',
            safe: 'Your input has invalid value'
        },
        file: {
            fileType: 'Invalid file type. Allowed types: pdf, doc, docx, jpg, jpeg, png',
            maxSize: 'File size exceeds the limit of 5MB',
        }
    };

    // File Uploads
    const formatFileSize = (size) => {
        if (size === 0) return '0 bytes';
        const k = 1024;
        const sizes = ['bytes', 'KB', 'MB', 'GB', 'TB'];
        const i = Math.floor(Math.log(size) / Math.log(k));
        return parseFloat((size / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
    };

    const validateFile = (file) => {
        // const allowedTypes = ['pdf', 'doc', 'docx', 'jpg', 'jpeg', 'png'];
        const allowedTypes = [
            'pdf', // PDF
            'msword', // DOC (older Word format)
            'vnd.openxmlformats-officedocument.wordprocessingml.document', // DOCX (newer Word format)
            'jpeg', // JPEG
            'png' // PNG
        ];
        const maxSize = 5 * 1024 * 1024; // 20MB

        let error = '';

        if (!allowedTypes.includes(file.type.split('/')[1])) {
            error = validationRules.file.fileType;
        } else if (file.size > maxSize) {
            error = validationRules.file.maxSize;
        }

        return error;
    };

    const isFileAlreadyAdded = (file) => {
        return filesArray.value.some(existingFile =>
            existingFile.file.name === file.name && existingFile.file.size === file.size
        );
    };

    const deleteFile = (index) => {
        // Remove the file from the filesArray
        filesArray.value.splice(index, 1);

        // Optionally clear invalid files array if needed
        // invalidFiles.value = [];

        // Update the file message if needed
        fileMessage.value = '';

        // Optional: you may want to revalidate the file count here
    };

    const handleFileUpload = (event) => {
        const selectedFiles = Array.from(event.target.files);
        const validFiles = [];
        const invalidFiles = [];

        // Check if we can still add more files
        const currentValidFileCount = filesArray.value.filter(file => !file.error).length;

        if (currentValidFileCount >= MAX_FILES) {
            fileMessage.value = `You can only upload up to ${MAX_FILES} files.`;
            return;
        }

        selectedFiles.forEach(file => {
            const error = validateFile(file);
            const isAlreadyAdded = isFileAlreadyAdded(file);

            if (error) {
                invalidFiles.push({ file, error });
            } else if (isAlreadyAdded) {
                // invalidFiles.push({ file, error: 'File already uploaded' });
            } else {
                validFiles.push(file);
            }

        });

        // Calculate the number of additional valid files we can add
        const remainingCapacity = MAX_FILES - currentValidFileCount;

        if (validFiles.length > remainingCapacity) {
            fileMessage.value = `You can only upload ${remainingCapacity} more files.`;
            return;
        }

        // Add valid files to the array
        filesArray.value = [...filesArray.value, ...validFiles.map(file => ({
            file,
            name: file.name,
            size: formatFileSize(file.size),
            error: ''
        }))];

        // Add invalid files to the array with error messages
        filesArray.value = [
            ...filesArray.value,
            ...invalidFiles.map(({ file, error }) => ({
                file,
                name: file.name,
                size: formatFileSize(file.size),
                error
            }))
        ];

        // Clear invalid files after 2 seconds
        setTimeout(() => {
            filesArray.value = filesArray.value.filter(file => !invalidFiles.some(invalid => invalid.file.name === file.file.name && invalid.file.size === file.file.size));
            invalidFiles.length = 0; // Clear the invalidFiles array
        }, 4000);

        event.target.value = '';
    };

	// Submitting the form
	const handleSubmit = async () => {
        
        if(!isAcknowledged) {
            isSubmitting.value = false; // Re-enable the button
            submissionMessage.value = 'Please confirm that you\'ve read and accepted our Privacy Policy, Cookie Policy, and Terms & Conditions'; // Re-enable the butto
            isError.value = true;
            return
        }

        // Disable the submit button
        isSubmitting.value = true;

        // Clear previous file validation errors
        fileMessage.value = '';

        // Validate form fields
        const isFormValid = validateForm(form, errors, validationRules);

        // Filter out valid files
        const validFiles = filesArray.value.filter(file => !file.error);

        // Check if there is at least one valid file
        const isFileValid = validFiles.length > 0;

        // Update file validation message if no valid files
        if (!isFileValid) {
            fileMessage.value = 'Please upload at least one valid file.';
        }

        // If either form or file validation fails, stop submission
        if (!isFormValid || !isFileValid) {
            // console.log('Validation failed:', errors.value);
            isSubmitting.value = false; // Re-enable the button
            submissionMessage.value = 'Please ensure all required fields are correctly filled and try submitting again.'; // Re-enable the butto
            isError.value = true;
            return; // Stop submission if form or file validation fails
        }

        try {
            const API_ENDPOINT = 'http://backend.mymontyeurope.localhost/wp-json/contact-form-7/v1/contact-forms/5/feedback';
            const formData = new FormData();

            // Append top-level fields

            Object.keys(form.value).forEach((key) => {
                if (key !== 'files') {
				    formData.append(key, form.value[key]);
                }
            });
            
            validFiles.forEach((file, index) => {
                formData.append(`file_${index + 1}`, file.file);
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
			country: selectedCountry.value ? selectedCountry.value.name : initialCountry.value,
        };
        errors.value = {
            full_name: '',
			email: '',
			company: '',
			position: '',
			code: '',
			mobile: '',
			country: '',
			file: '',
        };
        isAcknowledged.value = false
        filesArray.value = []; // Clear the files array
        if (fileInputRef.value) {
            fileInputRef.value.value = ''; // Clear the file input field
        }
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