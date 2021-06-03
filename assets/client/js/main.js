$(document).ready(function () {
    var lightbox = new SimpleLightbox('.gallery a', { /* options */ });
});

$(':radio').change(function () {
    console.log('New star rating: ' + this.value);
});

$(document).ready(function () {
    $('#datatables').DataTable();
});
$(document).ready(function () {

    $("#msg").hide();
    $('#submit_register').click(function () {
        var pass = $('#password').val();
        var pass2 = $('#repassword').val();
        if (pass != pass2) {
            $("#msg").show();
            return false;
        }
        return true;
    });
});
var btns = $('.btn-filter').click(function () {
    if (this.id == 'all') {
        $('#parent > div').fadeIn(450);
    } else {
        var $el = $('.' + this.id).fadeIn(450);
        $('#parent > div').not($el).hide();
    }
    btns.removeClass('active');
    $(this).addClass('active');
});

(function ($) {

    'use strict';

    var $filters = $('.filter [data-filter]'),
        $boxes = $('.boxes [data-category]');

    $filters.on('click', function (e) {
        e.preventDefault();
        var $this = $(this);

        $filters.removeClass('active');
        $this.addClass('active');

        var $filterColor = $this.attr('data-filter');

        if ($filterColor == 'all') {
            $boxes.removeClass('is-animated')
                .fadeOut().promise().done(function () {
                    $boxes.addClass('is-animated').fadeIn();
                });
        } else {
            $boxes.removeClass('is-animated')
                .fadeOut().promise().done(function () {
                    $boxes.filter('[data-category = "' + $filterColor + '"]')
                        .addClass('is-animated').fadeIn();
                });
        }
    });

})(jQuery);

jssor_1_slider_init = function () {

    var jssor_1_SlideshowTransitions = [
        { $Duration: 1200, x: -0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $Jease$.$InCubic, $Opacity: $Jease$.$Linear }, $Opacity: 2 },
        { $Duration: 1200, x: 0.3, $SlideOut: true, $Easing: { $Left: $Jease$.$InCubic, $Opacity: $Jease$.$Linear }, $Opacity: 2 }
    ];

    var jssor_1_options = {
        $AutoPlay: 1,
        $SlideshowOptions: {
            $Class: $JssorSlideshowRunner$,
            $Transitions: jssor_1_SlideshowTransitions,
            $TransitionsOrder: 1
        },
        $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
        },
        $ThumbnailNavigatorOptions: {
            $Class: $JssorThumbnailNavigator$,
            $Orientation: 2,
            $NoDrag: true
        }
    };

    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

    /*#region responsive code begin*/

    var MAX_WIDTH = 1800;

    function ScaleSlider() {
        var containerElement = jssor_1_slider.$Elmt.parentNode;
        var containerWidth = containerElement.clientWidth;

        if (containerWidth) {

            var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

            jssor_1_slider.$ScaleWidth(expectedWidth);
        }
        else {
            window.setTimeout(ScaleSlider, 30);
        }
    }

    ScaleSlider();

    $Jssor$.$AddEvent(window, "load", ScaleSlider);
    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
    /*#endregion responsive code end*/
};
jssor_1_slider_init();

$(document).ready(function () {
    $('#aniimated-thumbnials').lightGallery({
        thumbnail: false,
        autoplay: false,
        animateThumb: false,
        showThumbByDefault: false,
        fullScreen: false,
        share: false,
        download: false,
        rotate: false,
        rotateLeft: false,
        rotateRight: false,
        flipHorizontal: false,
        flipVertical: false,
        autoplayControls:false
    }); 
});
