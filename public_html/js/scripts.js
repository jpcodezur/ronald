$(document).ready(function () {
    //var $container = $('#wrap');
    var $container = $('#wrap').imagesLoaded(function () {
        var isotope = $container.isotope({
            itemSelector: '.box',
            masonry: {
                columnWidth: 250
            }
        });
    });

    $container.imagesLoaded(function () {
        $container.isotope('layout');
    });

    $container.infinitescroll({
        navSelector: '#page_nav', // selector for the paged navigation 
        nextSelector: '#page_nav a', // selector for the NEXT link (to page 2)
        itemSelector: '.box', // selector for all items you'll retrieve
        bufferPx : 1,
        extraScrollPx: 0, 
        loading: {
            finishedMsg: 'No more pages to load.',
            img: 'http://i.imgur.com/qkKy8.gif'
        }
    },
    // call Isotope as a callback
    function (newElements) {
        $container.isotope('appended', $(newElements));
        $('.mpc-filter').each(function(){
            if($(this).attr("selected")){
                var filterValue = $(this).attr('data-filter');
                $container.isotope({filter: filterValue});
            }
        });
    }
    );

    $(document).on('click', '.mpc-filter', function (e) {
        e.preventDefault();
        $("#nav").find(".mpc-filter").each(function(){
            if($(this).hasClass("mpc-active")){
                $(this).removeClass("mpc-active");
                $(this).removeClass("active");
            }
        })
        $('.mpc-filter').attr("selected",false);
        $(this).attr("selected",true);
        $(this).addClass("mpc-active");
        $(this).addClass("active");
        var filterValue = $(this).attr('data-filter');
        $container.isotope({filter: filterValue});
    });
});