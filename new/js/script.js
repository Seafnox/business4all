function validatePhone(phoneNumber) {
    var phoneNumberPattern = /^[\d\(\)\-\+]+$/;
    phoneNumber = phoneNumber.replace(/\s/, '');
    var numbers = phoneNumber.replace(/[^\d]/g, '');
    return phoneNumberPattern.test(phoneNumber) && (numbers.length > 5);
}

function disabeBtn(form, disable)
{
    if (disable)
    {
        form.find('.callback-btn').addClass('disabled-callback-btn').attr('disabled', 'disabled');
    }
    else
    {
        form.find('.callback-btn').removeClass('disabled-callback-btn').removeAttr('disabled');
    }
}
function addClass(sender)
{
    var id = sender.attr('id');
    $('.' + id + '-label').addClass('callback-error');
    sender.addClass('error');
}
function removeClass(sender)
{
    var id = sender.attr('id');
    $('.' + id + '-label').removeClass('callback-error');
    sender.removeClass('error');
}

function checkInputs(sender)
{
    var form = sender.closest('form');
    var name = sender.closest('form').find('.callback-name');
    var phone = sender.closest('form').find('.callback-tel');
    if (phone.val() === "" || name.val() === "")
    {
        disabeBtn(form, true);
    }
    else {

        disabeBtn(form, false);
    }
}

function fixedBtn()
{
    var rt = ($(window).width() - ($('#takepart-btn').offset().left + $('#takepart-btn').outerWidth()));
    if (rt < 0)
    {
        $('#takepart-fixed').css({right: '10px'});
    }
    else
    {
        $('#takepart-fixed').css({right: rt + 'px'});
    }
    if ($(document).scrollTop() > $('#takepart-btn').offset().top)
    {

        $('#takepart-fixed').removeClass('hidden');
    }
    else
    {
        $('#takepart-fixed').addClass('hidden');
    }
}

$(document).ready(function() {

    $(document).on('change keyup paste click touchend input', '.callback-tel', function() {
        checkInputs($(this));
    });

    $(document).on('change keyup paste click touchend input', '.callback-name', function() {
        checkInputs($(this));
    });

    /**
     * клик на ссылку "заказать обратный звонок"
     */
    $(document).on('click touchend', '.callback', function() {
        ga('send', 'event', 'клик', 'клик на кнопку', 'business | клик на ссылку "заказать звонок"');
        var wrapper = $(this).closest('.callback-wrapper');
        wrapper.find('.callback-block').slideDown('fast', function() {
            wrapper.find('.callback-block').find('input').val('');
        });
    });

    /**
     * отправить еще один звонок
     */
    $(document).on('click touchend', '.newRequest', function() {
        ga('send', 'event', 'клик', 'клик на кнопку', 'business | клик на ссылку "отправить еще одну заявку"');
        var wrapper = $(this).closest('.callback-wrapper');
        wrapper.find('.callback-block-message').slideUp('fast');
        wrapper.find('.callback-block').slideDown('fast', function() {
            wrapper.find('.callback-block').find('input').val('');
        });
    });


    /**
     * клик на кнопку обратного звонка
     */
    $(document).on('click touchend', '.callback-btn', function() {
        ga('send', 'event', 'клик', 'клик на кнопку', 'business | клик на кнопку обратного звонка');
        var wrapper = $(this).closest('.callback-wrapper');

        if (validatePhone(wrapper.find('.callback-tel').val()))
        {
            removeClass($(this).closest('form').find('.callback-tel'));
            if (!wrapper.find('.callback-block').is(":hidden"))
            {
                //TODO тут ajax
                if (wrapper.closest(".header")[0] == undefined) {
                    ga('send', 'event', 'заказ', 'отправка формы обратного звонка', '[форма в блоке "Действуйте прямо сейчас"]');
                } else {
                    ga('send', 'event', 'заказ', 'отправка формы обратного звонка', '[форма в шапке]');
                }

                $.ajax({
                    url: "./mail.php",
                    type: "POST",
                    data: {
                        phone: wrapper.find('.callback-tel').val(),
                        name: wrapper.find('.callback-name').val(),
                    },
                    dataType: "json"
                }).done(function(msg) {
                    if (msg[0].status === 'sent')
                    {
                        wrapper.find('.callback-block').slideUp('fast', function() {
                            // показываем сообщение
                            wrapper.find('.callback-block-message').slideDown('fast', function() {
                            });
                        });
                    }
                    else
                    {
                        wrapper.find('.callback-block').slideUp('fast', function() {
                            // показываем сообщение
                            wrapper.find('.callback-block-message-error').slideDown('fast', function() {

                            });
                        });
                    }
                });
            }
        }
        else
        {
            disabeBtn($(this), true);
            addClass($(this).closest('form').find('.callback-tel'));
        }
    });


    /**
     * клик на странице, чтоб закрыть обратный звонок
     */
    $(document).on('click touchend', 'body', function(e) {
        var wrapper = $('.callback-wrapper');

        if (!wrapper.is(e.target) // if the target of the click isn't the container...
                && wrapper.has(e.target).length === 0) // ... nor a descendant of the container
        {
            wrapper.find('.callback-block').slideUp('fast');
            wrapper.find('.callback-block-message').slideUp('fast');
            wrapper.find('.callback-block-message-error').slideUp('fast');
        }

    });
    $(document).on('keydown', function(e) {
        //ESC button
        if (e.keyCode == 27) {
            $('.callback-block').slideUp('fast');
            $('.callback-block-message').slideUp('fast');
        }
    });

    $(document).on('mouseenter', '.dark-tariff-wrapper', function() {
        $('.violet-top').animate({height: '17px'}, 'fast');
        $('.dark-orange-top').animate({height: '32px'}, 'fast');
    });
    $(document).on('mouseleave', '.dark-tariff-wrapper', function() {
        $('.violet-top').animate({height: '7px'}, 'fast');
        $('.dark-orange-top').animate({height: '12px'}, 'fast');
    });

    $(document).on('mouseenter', '.violet-tariff-wrapper', function() {
        $('.orange-top').animate({height: '15px'}, 'fast');
    });
    $(document).on('mouseleave', '.violet-tariff-wrapper', function() {
        $('.orange-top').animate({height: '5px'}, 'fast');
    });


    $(document).on('click touchend', '#takepart-btn, #rating-btn, #go-to-tariffs, #takepart-fixed', function() {
        $('html, body').animate({
            scrollTop: $("#tariffs-wrapper").offset().top + 30
        }, 2000);
    });

    $(document).on('click touchend', '#open-shop-link', function(e) {
        e.stopPropagation();
        ga('send', 'event', 'клик', 'клик на кнопку', 'business | клик на ссылку "подробнее о программе"');
        $('html, body').animate({
            scrollTop: $("#open-shop").offset().top - 10
        }, 2000);
    });
    $(document).on('click touchend', '#rating-link', function(e) {
        e.stopPropagation();
        ga('send', 'event', 'клик', 'business | клик на ссылку "рейтинг участников"');
        $('html, body').animate({
            scrollTop: $("#participants-block").offset().top + 30
        }, 2000);
    });


    $(".counter").countdown({until: counter,
        layout: '<span class="bold-text">{dn}</span> {dl}, <span class="bold-text">{hn}</span> {hl}, <span class="bold-text">{mn}</span> {ml}'});


    // -- Google Analytics events	
    $(document).on('click touchend', '.tariffs-link', function() {
        var message = 'business | тариф ' + $(this).data('tariff');
        ga('send', 'event', 'заказ', 'клик на кнопке заказа', message);
    });
    $(document).on('click touchend', '#takepart-btn', function() {
        ga('send', 'event', 'клик', 'клик на кнопку', 'business | кнопка "Принять участие"');
    });

    $(document).on('click touchend', '#takepart-fixed', function() {
        ga('send', 'event', 'клик', 'клик на кнопку', 'business | плавающая кнопку "Принять участие"');
    });
    $(document).on('click touchend', '#rating-btn', function() {
        ga('send', 'event', 'клик', 'клик на кнопку', 'business | кнопка "Попасть сюда"');
    });
    $(document).on('click touchend', '#go-to-tariffs', function() {
        ga('send', 'event', 'клик', 'клик на кнопку', 'business | кнопка "Записаться на тренинг"');
    });
    $(document).on('click touchend', '.video-item', function() {
        ga('send', 'event', 'клик', 'клик на ссылку', 'business | один из видеороликов в блоке отзывов');
    });

    $(document).on('click touchend', '.oferta', function() {
        ga('send', 'event', 'клик', 'клик на ссылку', 'business | ссылка модального окна "Оферта" под блоком тарифов');
    });
    $(document).on('click touchend', '.footer-link', function() {
        var message = 'business | ссылка модального окна ' + '"' + $(this).data('info') + '" в футере';
        ga('send', 'event', 'клик', 'клик на кнопку', message);
    });

    $(document).on('click touchend', '.bitva', function() {
        ga('send', 'event', 'клик', 'клик на ссылку', 'business | ссылка "Битва интернет-магазинов"');
    });
    $(document).on('click touchend', '.footer-icon-href', function() {
        ga('send', 'event', 'клик', 'клик на ссылку', 'business | одна из двух ссылок бесплатных материалов');
    });
    $(document).on('click touchend', '.vip-couching', function() {
        ga('send', 'event', 'клик', 'клик на ссылку', 'business | ссылка "VIP-коучинг"');
    });

    $('.video-modal').on('hide.bs.modal', function(e) {
        var videoId = $(this).data('video');
        var player = sublime(videoId);
        player.stop();
    });
    // --

    /* проверяем позицию кнопки "принять участие" */
    fixedBtn();

    /* проверяем позицию кнопки "принять участие" при прокрутке */
    $(document).scroll(function() {
        fixedBtn();
    });


    $('body').activity({
        'achieveTime': 60
        ,'testPeriod': 10
        ,useMultiMode: 1
        ,callBack: function(e) {
            ga('send', 'event', 'активность', 'активность в течение 60 сек', 'business | jquery.activity');
            yaCounter12922898.reachGoal('activity-60-sec');
        }
    });

});

