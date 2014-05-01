function getQuest(target)
{

    var val = $(target).closest('.form').find('input:checked').val();
    target = $(target).closest('.get-quest-form, div.quest');
    if( target.find('.form .select input:checked').size() )
    {
        target.find('.form').hide();
		target.find('.girl-message .message').hide();
		target.find('.girl-message .hidden').hide();
        target.find('.girl-message .hidden').eq(val - 1).show();
    }
    if(val == 1)
    {
        target.find('.medal li.medal-1').show();
    }
    else if(val == 2)
    {
        target.find('.medal li.medal-2').show();
    }
    else
    {
        target.find('.medal li.medal-3').show();
    }
}
function thisMyLvl(event, target)
{
    var e = 0;
    if(window.sliderVal >= 210000)
    {
        e = 2;
    }
    else if(window.sliderVal >= 115000)
    {
        e = 1;
    }
    event.preventDefault();
    var $table = $(target).closest('section').prev();
    var s = $table.offset().top;
    $table.find('thead td').removeClass('selected');
    $('html, body').animate({ scrollTop: s }, 1500, 'easeInOutExpo', function()
    {
        $table.find('thead td:eq(' + e + ')').addClass('selected');
    });
}
var rec = {
    init: function()
    {
        rec.$window  = $('.popup .window');
        rec.$popup   = $('.popup');
        rec.$overlay = $('.overlay');
        $(document).on('keydown', function(e)
            {
                if(e.keyCode == 27) rec.hideRec();
            }
        );
    },
    showRec: function()
    {
        var scrollPos = parseInt(rec.$window.css('top')) - 75;
        $('html, body').animate(
            {
                scrollTop: scrollPos
            },
            1500,
            'easeInOutExpo'
        );
        rec.$overlay.fadeIn(500, function()
            {
                rec.$popup.show();
                rec.$window.animate(
                    {
                        marginTop: 0,
                        opacity: 1
                    },
                    1100,
                    'easeOutExpo'
                );
                $(document).on('click', rec.hideRec);
            }
        );
    },
    hideRec: function()
    {
        rec.$window.animate(
            {
                marginTop: -100,
                opacity: 0
            },
            1100,
            'easeOutExpo'
        );
        setTimeout(function()
            {
                rec.$overlay.fadeOut(500);
                rec.$popup.hide();
            },
            700
        );
        $(document).off('click', rec.hideRec);
    }
};
// YouTube API - doesn't work
function addEmbeded(object, videoId, width, height, autoplay) {
    if (autoplay == 'true') {
        object.html("<iframe width='"+width+"' height='"+height+"' src='http://www.youtube.com/embed/"+videoId + "?autoplay=1" +"' frameborder='0' allowfullscreen></iframe>");
    } else {
        object.html("<iframe width='"+width+"' height='"+height+"' src='http://www.youtube.com/embed/"+videoId + "?autoplay=0" +"' frameborder='0' allowfullscreen></iframe>");
    }
}
$(document).ready(function()
    {
        $('input:checkbox, input:radio').styler();
        $('.scroll-down-btn, .scroll-down-btn2').on('click', function()
            {
                var scroll = $(this).data('scroll');
                var scrollPos = $('a[name=scroll-' + scroll + ']').offset().top - 10;
                $('html, body').animate({ scrollTop: scrollPos }, 1500, 'easeInOutExpo');
            }
        );
        $('.scroll-down-btn-2').on('click', function(){
                var element = $(this).data('element');
                var scrollPos = $(this).closest('.quest-parent').nextAll('.select-form-part:first').offset().top - 10;
                var $table = $(this).closest('.quest-parent').nextAll('.select-form-part:first').find('.form-table');
                $('html, body').animate({ scrollTop: scrollPos }, 1500, 'easeInOutExpo', function(){
                    $table.find('thead td').eq(element).addClass('selected');
                });
            }
        );
        $('.leaderboard .hist .show-btn').on('click', function()
            {
                var $tr = $(this).closest('tr');
                $details = $tr.next('.hidden-details').find('.hidden-wrap');
                if($details.is(':visible'))
                {
                    $details.animate({ opacity: 0 }, 400).slideUp(400);
                }
                else
                {
                    $details.slideDown(400).animate({ opacity: 1 }, 400);
                }
            }
        );
        function sliderSetValue(value)
        {
            window.sliderVal = value;
            var pos = (value > 99999) ? 3 : 2;
            value = value.toString().slice(0, pos) + ' ' + value.toString().slice(pos);
            $('.select-lvl .select-block .val').text(value);
        }
        $('.slider-vertical').slider({
            orientation: "vertical",
            range: "min",
            min: 20000,
            max: 300000,
            value: 100000,
            slide: function(e, ui) {
                sliderSetValue(ui.value);
                var hide, show;
                if(ui.value < 115000)
                {
                    hide = 'section.select-lvl .text-2, section.select-lvl .text-3';
                    show = 'section.select-lvl .text-1';
                }
                else if(ui.value < 210000)
                {
                    hide = 'section.select-lvl .text-1, section.select-lvl .text-3';
                    show = 'section.select-lvl .text-2';
                }
                else
                {
                    hide = 'section.select-lvl .text-2, section.select-lvl .text-1';
                    show = 'section.select-lvl .text-3';
                }
                $(hide).hide();
                $(show).show();
            }
        });
        sliderSetValue($('.slider-vertical' ).slider('value'));
        $(".select-form-part .counter").countdown({until: counter_time_left, layout: '{dn} <sup>{dl}</sup> : {hn} <sup>{hl}</sup> : {mn} <sup>{ml}</sup> : {sn} <sup>{sl}</sup>'});
        rec.init();
        $('.cases .read').on('click', function(e)
        {
            e.preventDefault();
            var c = $(this).data('case');
            var $text = $('.cases .text.text-' + c);
            if($text.is(':visible'))
            {
                $text.animate({ opacity: 0}, 400).slideUp(400);
            }
            else
            {
                $text.slideDown(400).animate({ opacity: 1}, 400);
            }
        });
        $.reject({
            reject : {
                msie5: true,
                msie6: true,
                msie7: true,
                msie8: true
            },
            imagePath: './img/'
        });

        $(".video").click(function(e) {
            addEmbeded($(this), $(this).attr("data-videoId"), $(this).width(), $(this).height(), 'true');
            e.returnValue;
        });

        $("#slide_more .bg-top").slideUp(0);
        $("#slide_more .wrap").slideUp(0);
        $("#slide_more .bg-bottom").slideUp(0);
        $('.video .slide_link a').click(function() {
            $("#slide_more .bg-top").slideDown(1500);
            $("#slide_more .wrap").slideDown(1500);
            $("#slide_more .bg-bottom").slideDown(1500);
            $("html, body").animate({scrollTop: $("#slide_more").offset().top}, 1500);
        });

        $('body').activity({
            'achieveTime':60
            ,'testPeriod':10
            ,useMultiMode: 1
            ,callBack: function (e) {
                ga('send', 'event', 'активность', 'активность в течение 60 сек', 'business | jquery.activity');  yaCounter12922898.reachGoal('activity-60-sec');
            }
        });

        var tmp_height = 0;
        $('section.reviews .col-item p.last').each(function() {if (tmp_height < $(this).height()) tmp_height = $(this).height();});
        $('section.reviews .col-item p.last').height(tmp_height);

        // -- Google Analytics events
        $('a[href*="novichok"]').on('click', function() {
            ga('send', 'event', 'заказ', 'клик на кнопке заказа', 'business | тариф Новичок');
        });
        $('a[href*="VIP"]').on('click', function() {
            ga('send', 'event', 'заказ', 'клик на кнопке заказа', 'business | тариф VIP');
        });
        // --
        $("iframe").each(function(){var ifr_source=$(this).attr('src');var wmode="wmode=transparent";if(ifr_source.indexOf('?')!=-1){var getQString=ifr_source.split('?');var oldString=getQString[1];var newString=getQString[0];$(this).attr('src',newString+'?'+wmode+'&'+oldString)}else $(this).attr('src',ifr_source+'?'+wmode)});
    }
);