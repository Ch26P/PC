
const observer = new IntersectionObserver(entries => {

    // Loop over the entries
    entries.forEach(entry => {
        // If the element is visible
        if (entry.isIntersecting) {

            entry.target.classList.add('h2-animation'); // Add the animation class
           

        }
        /*  if (!entry.isIntersecting) {
              entry.target.classList.remove('title-animation');
          }*/

    });
});


observer.observe(document.querySelector('.span_app_h2-1'));
observer.observe(document.querySelector('.span_app_h2-2'));
observer.observe(document.querySelector('.span_app_h2-3'));
observer.observe(document.querySelector('.span_app_h2-4'));
observer.observe(document.querySelector('.span_app_h2-5'));
observer.observe(document.querySelector('.span_app_h2-6'));
observer.observe(document.querySelector('.span_app_h2-7'));
observer.observe(document.querySelector('.span_app_h2-8'));
observer.observe(document.querySelector('.span_app_h2-9'));

observer.observe(document.querySelector('.span_con_h2-1'));
observer.observe(document.querySelector('.span_con_h2-2'));
observer.observe(document.querySelector('.span_con_h2-3'));
observer.observe(document.querySelector('.span_con_h2-4'));
observer.observe(document.querySelector('.span_con_h2-5'));
observer.observe(document.querySelector('.span_con_h2-6'));
observer.observe(document.querySelector('.span_con_h2-7'));
observer.observe(document.querySelector('.span_con_h2-8'));
observer.observe(document.querySelector('.span_con_h2-9'));

observer.observe(document.querySelector('.span_exp_h2-1'));
observer.observe(document.querySelector('.span_exp_h2-2'));
observer.observe(document.querySelector('.span_exp_h2-3'));
observer.observe(document.querySelector('.span_exp_h2-4'));
observer.observe(document.querySelector('.span_exp_h2-5'));
observer.observe(document.querySelector('.span_exp_h2-6'));
observer.observe(document.querySelector('.span_exp_h2-7'));
observer.observe(document.querySelector('.span_exp_h2-8'));

/****************************************************************************** */

const text_exp = document.querySelector(".text_explorer");
const observer_exp = new IntersectionObserver(entries => {

    // Loop over the entries
    entries.forEach(entry => {
        // If the element is visible
        if (entry.isIntersecting) {
           
            text_exp.classList.add('p-animation');

        }
    });
});

observer_exp.observe(document.querySelector('.span_exp_h2-1'));

/*********************************************************************** */

const text_app = document.querySelector(".text_apprendre");

const observer_app = new IntersectionObserver(entries => {

    // Loop over the entries
    entries.forEach(entry => {
        // If the element is visible
        if (entry.isIntersecting) {
           
            text_app.classList.add('p-animation');

        }
    });
});

observer_app.observe(document.querySelector('.span_app_h2-1'));

/***************************************************************************** */

const text_con = document.querySelector(".text_concevoir");

const observer_con = new IntersectionObserver(entries => {

    // Loop over the entries
    entries.forEach(entry => {
        // If the element is visible
        if (entry.isIntersecting) {
           
            text_con.classList.add('p-animation');

        }
    });
});

observer_con.observe(document.querySelector('.span_con_h2-1'));