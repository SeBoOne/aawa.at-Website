var mainId = document.querySelector('main').id;

new fullpage('#' + mainId, {
    licenseKey: '|"0GJ!M#i7',
    autoScrolling:true,
    navigation: false,
    credits: { enabled: false, label: '//NOT PUBLIC YET// Made using fullpage.js', position: 'right' },
    onLeave: function (origin, destination, direction, trigger) {
        
        if (destination.index == 1) {
            var s2 = document.querySelector('#section2 .content');
            if (s2) s2.classList.add('blur-active');
        }

        if (origin.index == 1) {
            var s2 = document.querySelector('#section2 .content');
            if (s2) s2.classList.remove('blur-active');
        }

        if (direction == "down" && origin.index < 2 && destination.index == 2) {
            ['DEC-Card','MD-Card','AMD-Card','SD-Card'].forEach(function(id){
            var cards = document.getElementById(id);
            if (!cards) return;
            cards.classList.add('animateInUp');
            cards.classList.remove('animateOutDown');
            });
        }

        if (direction == "up" && origin.index > 2 && destination.index == 2) {
            ['DEC-Card', 'MD-Card', 'AMD-Card', 'SD-Card'].forEach(function(id) {
            var cards = document.getElementById(id);
            if (cards) {
                cards.classList.add('animateInDown');
                cards.classList.remove('animateOutUp');
            }
            });
        }

        if (origin.index == 2) {
            ['DEC-Card', 'MD-Card', 'AMD-Card', 'SD-Card'].forEach(function(id) {
            var cards = document.getElementById(id);
            if (cards) {
                if (direction == "down") {
                cards.classList.remove('animateInUp');
                cards.classList.add('animateOutUp');
                } else if (direction == "up") {
                cards.classList.remove('animateInDown');
                cards.classList.add('animateOutDown');
                }
            }
            });
        }

        if (destination.index == 3 || destination.index == 4) {
            var s4 = document.querySelector('#section4 .content');
            if (s4) s4.classList.add('blur-active');
        }

        if (origin.index == 3 && direction == "up") {
            var s4 = document.querySelector('#section4 .content');
            if (s4) s4.classList.remove('blur-active');
        }

    }
});

window.addEventListener('load', function(){
    setTimeout(function(){
        var s4sec = document.getElementById('section4');
        if (s4sec && s4sec.classList.contains('active')){
            var s4 = document.querySelector('#section4 .content');
            if (s4) s4.classList.add('blur-active');
        }
    }, 50);
});