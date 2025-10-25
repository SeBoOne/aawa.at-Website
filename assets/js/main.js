new fullpage('#fullpage', {
    licenseKey: '|"0GJ!M#i7',
    autoScrolling:true,
    scrollHorizontally: true,
    credits: { enabled: false, label: 'i will put that in the footer later for now the others dont get it if i let that stay there atm.', position: 'right' },
    onLeave: function (origin, destination, direction, trigger) {
        var leavingSection = this;
        var nav = document.querySelector('.navbar');


        if (destination.index == 0) {
        }
        if (origin.index == 0 && direction == "down") {
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
