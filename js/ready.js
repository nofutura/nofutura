$(document).ready(function() {

    console.log('YERT');
        var $item = $('.carousel-item'); 
        var $wHeight = $(window).height();
        $item.eq(0).addClass('active');
        $item.height($wHeight); 
        $item.addClass('full-screen');

        $('.carousel img').each(function() {
        var $src = $(this).attr('src');
        var $color = $(this).attr('data-color');
        $(this).parent().css({
            'background-image' : 'radial-gradient(circle, rgba(2,0,36,0) 0%, rgba(32,32,32,1) 100%), url(' + $src + ')',
            'background-color' : $color
        });
        $(this).remove();
        });

        $(window).on('resize', function (){
        $wHeight = $(window).height();
        $item.height($wHeight);

        });

        $('.carousel').carousel({
        interval: 6000,
        pause: "false"
        });


        var min_w = 300;
        var vid_w_orig;
        var vid_h_orig;

        $(function() {

            vid_w_orig = parseInt($('video').attr('width'));
            vid_h_orig = parseInt($('video').attr('height'));


            $(window).resize(function () { 
                fitVideo(); 
            });

            $(window).trigger('resize');

        });

        function fitVideo() {

            $('#video-viewport').width($('.carousel-item').width());
            $('#video-viewport').height($('.carousel-item').height());


            var scale_h = $('.carousel-item').width() / vid_w_orig;
            var scale_v = $('.carousel-item').height() / vid_h_orig;
            var scale = scale_h > scale_v ? scale_h : scale_v;

            if (scale * vid_w_orig < min_w) {scale = min_w / vid_w_orig;};

            $('video').width(scale * vid_w_orig);
            $('video').height(scale * vid_h_orig);

            $('#video-viewport').scrollLeft(($('video').width() - $('.carousel-item').width()) / 2);
            $('#video-viewport').scrollTop(($('video').height() - $('.carousel-item').height()) / 2);

        };

        $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 100) {
            $(".navbar").addClass("site-header");
        } else {
            $(".navbar").removeClass("site-header");
        }
        });

        $('.navbar-toggler-icon').click(function(){
            console.log('yert yert');
          $('.navbar').toggleClass('menu-bg');
          }); 
      
        $('.grid').masonry({
        itemSelector: '.grid-item',
        percentPosition: true,
        columnWidth: '.grid-sizer',
        gutter: 10
        });
	
		//$grid.imagesLoaded().progress( function() {
		//$grid.masonry();
        //});
        window.addEventListener('load', AOS.refresh)
      
});