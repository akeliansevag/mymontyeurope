import countriesData from '~/data/countries.json';

export const useCountry = () => { // (manualSelection)
    const selectedCountry = ref({});
    const countryIsEU = ref(false);
    const initialCode = ref(''); // Store the initial value
    const errors = ref({ country: null });
	// const titleTemplate = ref('%s | MontyFinance')
    // const router = useRouter();
    // const route = useRoute(); // Get the current route
    // const currentPath = ref(route.path); // Get the current path

    const detectCountry = async () => {
        try {
            const response = await fetch('/api/geoip');
            const data = await response.json();
            
            if (data && data.country) {
                const detectedCountry = countriesData.find(country => country.iso2 === data.country);
                
                if (detectedCountry) {
                    if (!selectedCountry.value || !selectedCountry.value.iso2) {
                        countryIsEU.value = detectedCountry.is_eu;
                        selectedCountry.value = detectedCountry;
                        initialCode.value = detectedCountry.code;
                    }
                    
                    // // On refresh or manually writing the url, take stay on the same path of /lb or /eu
                    // if(currentPath.value !== "/") return

                    // // Only call detectCountry if no manual selection has been made
                    // if (manualSelection.value) return;

                    // // Push the detected country to the URL based on EU membership
                    // const region = countryIsEU.value ? 'eu' : 'lb';
                    // titleTemplate.value = countryIsEU.value ? '%s | MontyFinance Europe' : '%s | MontyFinance SAL';

                    // // Dynamically set the title template based on the country
                    // useHead({
                    //     titleTemplate: titleTemplate.value
                    // });
                    
                    // // Dynamic routing to /lebanon or /europe
                    // await router.push(`${region}`); 
                } else {
                    // console.warn('Detected country not found in countries data');
                }
            } else {
                errors.value.country = 'No country data found';
            }
        } catch (error) {
            errors.value.country = 'Unable to detect country';
            // console.error('Error detecting country:', error);
        }
    };

    // const manualRoute = async (value) => {
    //     manualSelection.value = true; // Set the manual selection flag
    //     const region = value === 'eu' ? '/eu' : '/lb';
    //     titleTemplate.value = value === 'eu' ? '%s | MontyFinance Europe' : '%s | MontyFinance SAL';

    //     // Dynamically set the title template based on the country
    //     useHead({
    //         titleTemplate: titleTemplate.value
    //     });

    //     // Dynamic routing to /lebanon or /europe
    //     await router.push(`${region}`); 
    // };

    return {
        // manualSelection,
        countriesData,
        selectedCountry,
        countryIsEU,
        initialCode,
        errors,
        detectCountry,
        // manualRoute
    };
};
