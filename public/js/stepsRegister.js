document.addEventListener('DOMContentLoaded', function() {
    const step1 = document.getElementById('step1');
    const step2 = document.getElementById('step2');
    const step3 = document.getElementById('step3');
    const nextBtn1 = document.querySelector('#step1 .next-step');
    const nextBtn2 = document.querySelector('#step2 .next-step');
    const prevBtn2 = document.querySelector('#step2 .prev-step');
    const prevBtn3 = document.querySelector('#step3 .prev-step');

    nextBtn1.addEventListener('click', function() {
        step1.style.display = 'none';
        step2.style.display = 'block';
    });

    nextBtn2.addEventListener('click', function() {
        step2.style.display = 'none';
        step3.style.display = 'block';
    });

    prevBtn2.addEventListener('click', function() {
        step2.style.display = 'none';
        step1.style.display = 'block';
    });

    prevBtn3.addEventListener('click', function() {
        step3.style.display = 'none';
        step2.style.display = 'block';
    });
});