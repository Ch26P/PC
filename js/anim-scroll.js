const text_a = document.querySelector(".text_apprendre");

const observer = new IntersectionObserver(entries => {

    // Loop over the entries
    entries.forEach(entry => {
        // If the element is visible
        if (entry.isIntersecting) {

            entry.target.classList.add('h2-animation'); // Add the animation class
            text_a.classList.add('h2-animation');
        }
      /*  if (!entry.isIntersecting) {
            entry.target.classList.remove('title-animation');
        }*/

    });
});


observer.observe(document.querySelector('.s_h2-1'));
observer.observe(document.querySelector('.s_h2-2'));
observer.observe(document.querySelector('.s_h2-3'));
observer.observe(document.querySelector('.s_h2-4'));
observer.observe(document.querySelector('.s_h2-5'));
observer.observe(document.querySelector('.s_h2-6'));
observer.observe(document.querySelector('.s_h2-7'));
observer.observe(document.querySelector('.s_h2-8'));
observer.observe(document.querySelector('.s_h2-9'));

/*
observer.observe(document.querySelector('#studio .title'));
observer.observe(document.querySelector('.main-character .title'));
observer.observe(document.querySelector('#place .title'));
observer.observe(document.querySelector('#oscars .title'));
*/