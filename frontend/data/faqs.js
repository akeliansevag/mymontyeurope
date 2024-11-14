import faqData from '~/locales/en-UK.json' // import the JSON data

export const faqsData = (t) => {
    return faqData.Pages["Frequently Asked Questions"]["Section 2"].map((section, sectionIndex) => ({
        topic: t(`Pages.Frequently Asked Questions.Section 2[${sectionIndex}].Topic`),
        faqsItems: section.Cards.map((card, cardIndex) => ({
            question: t(`Pages.Frequently Asked Questions.Section 2[${sectionIndex}].Cards[${cardIndex}].Question`),
            answer: t(`Pages.Frequently Asked Questions.Section 2[${sectionIndex}].Cards[${cardIndex}].Answer`)
        }))
    }));
};
