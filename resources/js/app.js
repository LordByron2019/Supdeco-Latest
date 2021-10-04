require('alpinejs');

let pos = window.scrollY

window.addEventListener('scroll', function(e) {

    if(pos === 0){
        window.requestAnimationFrame(function() {
            let navbar = document.getElementById('navbar')
            navbar.classList.remove("navWhite")
        });
    }
    else{
        window.requestAnimationFrame(function() {
            let navbar = document.getElementById('navbar')
            navbar.classList.add("navWhite")
        });
    }
})
