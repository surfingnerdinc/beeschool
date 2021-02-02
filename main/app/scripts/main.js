overlay = document.getElementById('overlay')
closemenu = document.getElementById('close-menu')

document.getElementById('open-menu').addEventListener('click', function() {
    overlay.classList.add('show-menu');
    overlay.classList.remove('hide-menu');
});

document.getElementById('close-menu').addEventListener('click', function() {
    overlay.classList.remove('show-menu');
    overlay.classList.add('hide-menu');
});
