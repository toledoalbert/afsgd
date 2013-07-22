$(function() {

    "use strict";

    /*---------------------------------------------------
        EMAIL FORM
    ---------------------------------------------------*/

    var ajaxCall = function(p_xEvent) {
            $('input[type=submit]').hide();
            $('form').append('<img src="/index/images/loading-3.gif" class="loading" />');
            p_xEvent.preventDefault();
            $.ajax('/signup/ajax_submit.php', {
                type: 'POST',
                data: $(p_xEvent.target).serialize(),
                dataType: 'json',
                complete: function(p_xResponse) {
                    var l_xResponse = $.parseJSON(p_xResponse.responseText);
                    if(l_xResponse.success === 1) {
                        $(p_xEvent.target).hide();
                        $(p_xEvent.target).next('.success').show();
                    } else {
                        $('input[type=submit]').show();
                        $('img.loading').hide();
                        $(p_xEvent.target).children('.error-message').show();
                        for(var l_sKey in l_xResponse.errors) {
                            $('input#' + l_sKey).parent('.lph').addClass('error');
                        }
                    }
                }
            });
            return false;
        };

    var display =  $.formDisplay();
    var validate = $.formValidation('.signup form', {
        'onSubmit': ajaxCall
    });

    if($.browser.webkit) {
        $('input').attr('autocomplete', 'off');
    }



    /*---------------------------------------------------
        CAROUSEL
    ---------------------------------------------------*/
    var carousel = (function() {

        var init = function() {
                clickThumb($(thumbs + ' a'));
                autoCycleOn = true;
                pauseAutoCycle('.slides'); // Pause when hoversing over a slide
                pauseAutoCycle(thumbs + ' a'); // Pause when hovering over a link
                killAutoCycle('.video-box a'); // Stop when you play a video
                $(document).ready(function() {
                    autoCycle;
                });
                slidePointer($(thumbs + '.current'));
            },

            thumbs = '.slider-thumbs li',
            thumbsList = '.slider-thumbs ul',
            pointer = "#thumbs-pointer",
            noThumbs = $(thumbs).length,
            killedAutoCycle = false,
            cycleSpeed = 5000,
            fadeSpeed = 750,
            autoCycleOn,

            // Show slide
            showSlide = function(currentThumb) {
                var id = currentThumb.attr('id').slice(0, -6); // remove "-thumb" from the id to get the name
                var content = '.slide.' + id;
                if($(content).length !== 0) {
                    $('.slide').fadeOut();
                    $(thumbs).removeClass('current');
                    $(content).fadeIn(0.5 * fadeSpeed);
                    currentThumb.addClass('current');
                    slidePointer(currentThumb);
                }
            },

            clickThumb = function(thumbLink) {
                thumbLink.click(function() {
                    var thumb = $(this).parents('li');
                    showSlide(thumb);
                    //clearInterval(autoCycle);
                    //autoCycle = setInterval(cycleAll, cycleSpeed);
                    return false;
                });
            },


            // Move arrow along
            slidePointer = function(currentThumb) {
                var thumbPositionLeft = $(currentThumb).position().left,
                    // get current li position
                    thumbWidth = $(currentThumb).outerWidth(),
                    // get current li width
                    pointerWidth = $(pointer).outerWidth(),
                    left = thumbPositionLeft + (thumbWidth / 2) - (pointerWidth / 2); // get current li width
                $(pointer).animate({
                    'left': left
                });
            },

            // Cycle selected slide
            cycleAll = function() {
                if(autoCycleOn) {
                    var nextThumb;
                    if(noThumbs > 4) {
                        if($(thumbs + '.current').index() < 4) {
                            nextThumb = $(thumbs + '.current').next();
                        } else {
                            nextThumb = $(thumbs).eq(0);
                        }
                        showSlide(nextThumb);
                    }
                }
            },

            //Auto-cycle Thumbs
            autoCycle = setInterval(cycleAll, cycleSpeed),

            // Pause the auto-cycle
            pauseAutoCycle = function(element) {
                if(autoCycleOn) {
                    $(element).hover(function() {
                        clearInterval(autoCycle);
                    }, function() {
                        if(!killedAutoCycle) {
                            autoCycle = setInterval(cycleAll, cycleSpeed);
                        }
                    });
                }
            },

            // End the cycling if they click a slide, assuming that 
            // it's a video or they're leaving the page
            killAutoCycle = function(element) {
                $(element).click(function() {
                    killedAutoCycle = true;
                    clearInterval(autoCycle);
                });
            };

        $(init);
    }());


    /*---------------------------------------------------
        PLAY VIDEO in slider
    ---------------------------------------------------*/
    $('.video-box a').click(function() {
        var link;
        if($(this).hasClass('youtube')) {
            link = 'http://www.youtube.com/embed/' + $(this).attr('data-video') + '?title=0&byline=0&portrait=0&autoplay=1&rel=0';
        } else {
            link = 'http://player.vimeo.com/video/' + $(this).attr('data-video') + '?title=0&byline=0&portrait=0&autoplay=1';
        }
        $(this).hide();
        $($(this).next()).attr('src', link).show();
        return false;
    });

    /*---------------------------------------------------
        Track Slideshow clicks
    ---------------------------------------------------*/
    $('.slide a').click(function(){ 
        var category = 'Homepage Slides',
            action = 'Click: slide ' + (parseInt($(this).parents('.slide').index()) + 1),
            opt_label = $(this).parents('.slide').attr('class').replace('slide', '').trim() + ' - ' + $(this).attr('href');
        _gaq.push(['_trackEvent', category, action, opt_label]);
    });


});