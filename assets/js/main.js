new fullpage('#fullpage', {
    licenseKey: '|"0GJ!M#i7',
    autoScrolling:true,
    scrollHorizontally: true,
    credits: { enabled: false, label: 'i will put that in the footer later for now the others dont get it if i let that stay there atm.', position: 'right' },
    onLeave: function (origin, destination, direction, trigger) {
        var leavingSection = this;
        var nav = document.querySelector('.navbar');

        console.log(destination.index);


        if (destination.index == 0) {
            nav.classList.add('border-bottom');
            nav.classList.add('bg-opacity-50');
            nav.classList.remove('bg-opacity-100');
        }
        if (origin.index == 0 && direction == "down") {
            nav.classList.add('bg-opacity-100');
            nav.classList.remove('border-bottom');
            nav.classList.remove('bg-opacity-50');
        }

    }
});
