const mobileMenu = document.querySelectorAll('.mobile-menu');
const body = document.body;
const openMenuButton = document.getElementById('openMenuButton');
const closeMenuButton = document.getElementById('closeMenuButton');
document.addEventListener('DOMContentLoaded', function() {

    if(openMenuButton){        
        openMenuButton.addEventListener('click', function() {
            if (mobileMenu.length > 0) {  
                mobileMenu[0].classList.remove("close");
                mobileMenu[0].classList.toggle('open');
                body.classList.toggle('scroll');
            }
        });
    }
    if(closeMenuButton){
        closeMenuButton.addEventListener('click', function(){            
            if (mobileMenu.length > 0) {
                mobileMenu[0].classList.remove("open");
                mobileMenu[0].classList.toggle('close');                
                body.classList.toggle('scroll');
            }
        });
    }
});

const toggleFaqs = document.querySelectorAll('div.faqs_section > div.bottom > div > h3');
if(toggleFaqs){
    toggleFaqs.forEach((toggleFaq) => {
        toggleFaq.addEventListener('click', () => {
            const parentDiv = toggleFaq.parentNode;
                  parentDiv.classList.toggle('hidden');
        });
    });
}

const toggleFaqsAccordion = document.querySelectorAll('.faqs-accordion > div > h3');
if (toggleFaqsAccordion) {
    toggleFaqsAccordion.forEach((toggleFaq) => {
        toggleFaq.addEventListener('click', () => {
            const parentDiv = toggleFaq.parentNode;            
            parentDiv.classList.toggle('hidden');
            const otherDivs = document.querySelectorAll('.faqs-accordion > div');
            otherDivs.forEach((div) => {
                if (div !== parentDiv) {
                    div.classList.add('hidden');
                }
            });
        });
    });
}