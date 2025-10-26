new fullpage('#fullpage', {
    licenseKey: '|"0GJ!M#i7',
    autoScrolling:true,
    scrollHorizontally: true,
    credits: { enabled: false, label: 'i will put that in the footer later for now the others dont get it if i let that stay there atm.', position: 'right' },
    onLeave: function (origin, destination, direction, trigger) {
        var leavingSection = this;
        var nav = document.querySelector('.navbar');


        if (destination.index == 2) {
            document.getElementById('DEC-Card').classList.add('animateIn');
            document.getElementById('DEC-Card').classList.remove('animateOut');
            document.getElementById('MD-Card').classList.add('animateIn');
            document.getElementById('MD-Card').classList.remove('animateOut');
            document.getElementById('AMD-Card').classList.add('animateIn');
            document.getElementById('AMD-Card').classList.remove('animateOut');
            document.getElementById('SD-Card').classList.add('animateIn');
            document.getElementById('SD-Card').classList.remove('animateOut');
        }
        if (origin.index == 2 && (direction == "down" || direction == "up")) {
            document.getElementById('DEC-Card').classList.remove('animateIn');
            document.getElementById('DEC-Card').classList.add('animateOut');
            document.getElementById('MD-Card').classList.remove('animateIn');
            document.getElementById('MD-Card').classList.add('animateOut');
            document.getElementById('AMD-Card').classList.remove('animateIn');
            document.getElementById('AMD-Card').classList.add('animateOut');
            document.getElementById('SD-Card').classList.remove('animateIn');
            document.getElementById('SD-Card').classList.add('animateOut');
        }

    }
});

// Ensure section3's container has top padding equal to the header/navbar height
function adjustSection3Padding() {
    var header = document.querySelector('header');
    var container = document.querySelector('#section3 .js-padding');
    if (!header || !container) return;
    var h = header.offsetHeight;
    // apply padding-top so the section title isn't hidden behind the fixed navbar
    container.style.paddingTop = h + 'px';
}

// Run on load and resize
window.addEventListener('load', adjustSection3Padding);
window.addEventListener('resize', adjustSection3Padding);
// Also run once immediately in case the script runs after load
adjustSection3Padding();
