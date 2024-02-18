const bloc_desc_mis = document.querySelector(".desc_m");
const bloc_desc_rea = document.querySelector(".desc_r");
//const essai = document.querySelector('.span_app_h2-1');
const observer_desc_m = new IntersectionObserver(entries => {

    // Loop over the entries
    entries.forEach(entry => {
        // If the element is visible
        if (entry.isIntersecting) {
           
            bloc_desc_mis.classList.add('desc-animation');
        //    bloc_desc_rea.classList.add('desc-animation');
        }
    });
});

observer_desc_m.observe(document.querySelector('.desc_m p'));
/**************************************************************************** */
const observer_desc_r = new IntersectionObserver(entries => {

    // Loop over the entries
    entries.forEach(entry => {
        // If the element is visible
        if (entry.isIntersecting) {
           
         //   bloc_desc_mis.classList.add('desc-animation');
            bloc_desc_rea.classList.add('desc-animation');
        }
    });
});

observer_desc_r.observe(document.querySelector('.desc_r p'));

/****************************************************************************** */


const techno_left = document.querySelector(".info_realisation_techno_left");
//const bloc_desc_rea = document.querySelector(".desc_r");
//const essai = document.querySelector('.span_app_h2-1');
const observer_carac_tech_left = new IntersectionObserver(entries => {

    // Loop over the entries
    entries.forEach(entry => {
        // If the element is visible
        if (entry.isIntersecting) {
           
            techno_left.classList.add('left-animation');
          //  bloc_desc_rea.classList.add('desc-animation');
        }
    });
});

observer_carac_tech_left.observe(document.querySelector('.info_realisation_techno_left p'));

/********************************************************************************* */
const techno_right = document.querySelector(".info_realisation_techno_right");
//const bloc_desc_rea = document.querySelector(".desc_r");
//const essai = document.querySelector('.span_app_h2-1');
const observer_carac_tech_right = new IntersectionObserver(entries => {

    // Loop over the entries
    entries.forEach(entry => {
        // If the element is visible
        if (entry.isIntersecting) {
           
            techno_right.classList.add('right-animation');
          //  bloc_desc_rea.classList.add('desc-animation');
        }
    });
});

observer_carac_tech_right.observe(document.querySelector('.info_realisation_techno_right p'));