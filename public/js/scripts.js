particlesJS.load('particles-js', '.particles.json', function() {
    console.log('callback - particles.js config loaded');
});

window.sr = ScrollReveal();
sr.reveal('.navbar', {
    duration: 2000,
    origin:'bottom'
});
sr.reveal('.scrollBottom', {
    duration: 2000,
    origin:'bottom'
});
sr.reveal('.showcase-left', {
    duration: 2000,
    origin:'left',
    distance: '300px',
});
sr.reveal('.showcase-right', {
    duration: 2000,
    origin:'right',
    distance: '300px',
});
