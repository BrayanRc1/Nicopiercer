//Constante videos que nos ayuda a reproducir cuando el mouse se situa sobre el rango de video.

const videos = document.querySelectorAll('video');

videos.forEach(video => {
    video.addEventListener('mouseenter', function() {
        video.play();
    });

    video.addEventListener('mouseleave', function() {
        video.pause();
        video.currentTime = 0; 
    });
});