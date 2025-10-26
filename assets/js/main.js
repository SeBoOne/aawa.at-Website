new fullpage('#fullpage', {
    licenseKey: '|"0GJ!M#i7',
    autoScrolling:true,
    scrollHorizontally: true,
    credits: { enabled: false, label: 'i will put that in the footer later for now the others dont get it if i let that stay there atm.', position: 'right' },
    onLeave: function (origin, destination, direction, trigger) {
        var leavingSection = this;
        var nav = document.querySelector('.navbar');


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

    }
});


function adjustSection3Padding() {
    var header = document.querySelector('header');
    if (!header) return;
    var h = header.offsetHeight;
    var containers = document.querySelectorAll('.js-padding');
    containers.forEach(function(container){
        container.style.paddingTop = h + 'px';
    });
}

window.addEventListener('load', adjustSection3Padding);
window.addEventListener('resize', adjustSection3Padding);
adjustSection3Padding();
