new fullpage('#fullpage', {
    licenseKey: '|"0GJ!M#i7',
    autoScrolling:true,
    scrollHorizontally: true,
    credits: { enabled: false, label: 'i will put that in the footer later for now the others dont get it if i let that stay there atm.', position: 'right' },
    onLeave: function (origin, destination, direction, trigger) {
        var leavingSection = this;

        console.log(leavingSection);

        //after leaving section 2
        if (origin.index == 1 && direction == 'down') {
            alert("Going to section 3!");
        }

        else if (origin.index == 1 && direction == 'up') {
            alert("Going to section 1!");
        }
    }
});
