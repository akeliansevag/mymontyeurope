import faqData from '~/locales/en-UK.json' // import the JSON data

export const faqsData = (t) => {
    return faqData.Pages["Frequently Asked Questions"]["Section 2"]["Faqs"].map((section, sectionIndex) => ({
        topic: t(`Pages.Frequently Asked Questions.Section 2.Faqs[${sectionIndex}].Topic`),
        faqsItems: section.Cards.map((card, cardIndex) => ({
            question: t(`Pages.Frequently Asked Questions.Section 2.Faqs[${sectionIndex}].Cards[${cardIndex}].Question`),
            answer: t(`Pages.Frequently Asked Questions.Section 2.Faqs[${sectionIndex}].Cards[${cardIndex}].Answer`)
        }))
    }));
};
