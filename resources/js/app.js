require('alpinejs');

window.addEventListener('scroll', function(e) {

    const faireQuelqueChose = () => {

    }

    if(window.scrollY === 0){
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
