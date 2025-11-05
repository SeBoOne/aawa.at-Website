var loaderStart = (typeof performance !== 'undefined' && performance.now) ? performance.now() : Date.now();

window.addEventListener('load', function(){

    var mainId = document.querySelector('main').id;
    
    if (mainId === "home-fullpage"){

        var script = document.createElement('script');
        script.src = 'assets/js/home.js';
        document.head.appendChild(script);

    } else if (mainId === "sparks-fullpage"){

        var script = document.createElement('script');
        script.src = 'assets/js/sparks.js';
        document.head.appendChild(script);

    } else if (mainId === "who-fullpage"){

        var script = document.createElement('script');
        script.src = 'assets/js/who.js';
        document.head.appendChild(script);

    } else if (mainId === "departments-fullpage"){

        var script = document.createElement('script');
        script.src = 'assets/js/departments.js';
        document.head.appendChild(script);

    }

});

/* Adjusting padding-top of Content according to nav-height*/
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
/* End of adjusting padding-top of Content according to nav-height*/

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
/* End of siteLoader */