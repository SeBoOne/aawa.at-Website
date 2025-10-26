var loaderStart = (typeof performance !== 'undefined' && performance.now) ? performance.now() : Date.now();

new fullpage('#fullpage', {
    licenseKey: '|"0GJ!M#i7',
    autoScrolling:true,
    scrollHorizontally: true,
    credits: { enabled: false, label: 'i will put that in the footer later for now the others dont get it if i let that stay there atm.', position: 'right' },
    onLeave: function (origin, destination, direction, trigger) {
        var leavingSection = this;
        var nav = document.querySelector('.navbar');

        if (destination.index == 1) {
            var s2 = document.querySelector('#section2 .content');
            if (s2) s2.classList.add('blur-active');
        }

        if (origin.index == 1) {
            var s2 = document.querySelector('#section2 .content');
            if (s2) s2.classList.remove('blur-active');
        }

        if (origin.index == 1 && destination.index == 2) {
            document.getElementById('DEC-Card').classList.add('animateInUp');
            document.getElementById('DEC-Card').classList.remove('animateOutDown');
            document.getElementById('MD-Card').classList.add('animateInUp');
            document.getElementById('MD-Card').classList.remove('animateOutDown');
            document.getElementById('AMD-Card').classList.add('animateInUp');
            document.getElementById('AMD-Card').classList.remove('animateOutDown');
            document.getElementById('SD-Card').classList.add('animateInUp');
            document.getElementById('SD-Card').classList.remove('animateOutDown');
        }
        if (origin.index == 3 && destination.index == 2) {
            document.getElementById('DEC-Card').classList.add('animateInDown');
            document.getElementById('DEC-Card').classList.remove('animateOutUp');
            document.getElementById('MD-Card').classList.add('animateInDown');
            document.getElementById('MD-Card').classList.remove('animateOutUp');
            document.getElementById('AMD-Card').classList.add('animateInDown');
            document.getElementById('AMD-Card').classList.remove('animateOutUp');
            document.getElementById('SD-Card').classList.add('animateInDown');
            document.getElementById('SD-Card').classList.remove('animateOutUp');
        }
        if (origin.index == 2 && direction == "down") {
            document.getElementById('DEC-Card').classList.remove('animateInUp');
            document.getElementById('DEC-Card').classList.add('animateOutUp');
            document.getElementById('MD-Card').classList.remove('animateInUp');
            document.getElementById('MD-Card').classList.add('animateOutUp');
            document.getElementById('AMD-Card').classList.remove('animateInUp');
            document.getElementById('AMD-Card').classList.add('animateOutUp');
            document.getElementById('SD-Card').classList.remove('animateInUp');
            document.getElementById('SD-Card').classList.add('animateOutUp');
        }
        if (origin.index == 2 && direction == "up") {
            document.getElementById('DEC-Card').classList.remove('animateInDown');
            document.getElementById('DEC-Card').classList.add('animateOutDown');
            document.getElementById('MD-Card').classList.remove('animateInDown');
            document.getElementById('MD-Card').classList.add('animateOutDown');
            document.getElementById('AMD-Card').classList.remove('animateInDown');
            document.getElementById('AMD-Card').classList.add('animateOutDown');
            document.getElementById('SD-Card').classList.remove('animateInDown');
            document.getElementById('SD-Card').classList.add('animateOutDown');
        }

        if (destination.index == 3) {
            var s4 = document.querySelector('#section4 .content');
            if (s4) s4.classList.add('blur-active');
        }

        if (origin.index == 3 && direction == "up") {
            var s4 = document.querySelector('#section4 .content');
            if (s4) s4.classList.remove('blur-active');
        }

    }
});


function adjustSectionPadding() {
    var header = document.querySelector('header');
    if (!header) return;
    var h = header.offsetHeight;
    var containers = document.querySelectorAll('.js-padding');
    containers.forEach(function(container){
        container.style.paddingTop = h + 'px';
    });
}

window.addEventListener('load', adjustSectionPadding);
window.addEventListener('resize', adjustSectionPadding);
adjustSectionPadding();

window.addEventListener('load', function(){
    setTimeout(function(){
        var s4sec = document.getElementById('section4');
        if (s4sec && s4sec.classList.contains('active')){
            var s4 = document.querySelector('#section4 .content');
            if (s4) s4.classList.add('blur-active');
        }
    }, 50);
});

/* siteLoader */
window.addEventListener('load', function(){
    var minVisibleMs = 3000;
    var now = (typeof performance !== 'undefined' && performance.now) ? performance.now() : Date.now();
    var elapsed = now - loaderStart;
    var wait = Math.max(0, minVisibleMs - elapsed);
    setTimeout(function(){
        var loader = document.getElementById('site-loader');
        if (!loader) return;
        loader.classList.add('site-loader--hidden');
        setTimeout(function(){
            if (loader && loader.parentNode) loader.parentNode.removeChild(loader);
        }, 600);
    }, wait);
});
