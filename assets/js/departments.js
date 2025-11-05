var mainId = document.querySelector('main').id;

new fullpage('#' + mainId, {
    licenseKey: '|"0GJ!M#i7',
    autoScrolling:true,
    navigation: false,
    credits: { enabled: false, label: '//NOT PUBLIC YET// Made using fullpage.js', position: 'right' },
    onLeave: function (origin, destination, direction, trigger) {
        
        
    }
});