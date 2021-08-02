function ok18_setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function ok18_getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
function ok18_is_url(str) {
    var regex = /(http|https):\/\/(\w+:{0,1}\w*)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%!\-\/]))?/;
    if (!regex.test(str)) {
        return false;
    } else {
        return true;
    }
}
function update_url(query_param) {
    if (history.pushState) {
        var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + query_param;
        window.history.pushState({path: newurl}, '', newurl);
    }
}
jQuery(document).ready(function ($) {
    $('.all__menu--trigger').off().on('click', function () {

        $('body').addClass('show__side--menu').css({'overflow': 'hidden'});
        $('.black__layer').fadeIn(400);
        $('.allMenu').fadeIn(400);
    });
    $('.allMenu').off().on('click', function () {
        $('body').removeClass('show__side--menu').css({'overflow': 'auto'});
        $(this).fadeOut(400);
        $('.black__layer').fadeOut(400);
    });
    //Tranding ===========
    $('.trending__updates').off().on('click', function () {
        $('.trending__hidden').slideToggle(400);
        $('.trending__wrapp .closeThis').fadeIn(400);
        $('.search__box--main').slideUp(400);
        $('.latestUps__hidden').slideUp(400);
    });
    $('.trending__wrapp .closeThis').off().on('click', function () {
        $('.trending__hidden').slideUp(400);
    })

    //Latest recent updates
    $('.recent__updates').off().on('click', function () {
        $('.latestUps__hidden').slideToggle(400);
        $('.latestUp__wrapp .closeThis').fadeIn(400);
        $('.search__box--main').slideUp(400);
        $('.trending__hidden').slideUp(400);
    });
    $('.latestUp__wrapp .closeThis').off().on('click', function () {
        $('.latestUps__hidden').slideUp(400);
    })

    //Search Slide box
    $('.search__box').off().on('click', function () {
        $('.search__box--main').slideToggle(400);
        $('.latestUps__hidden').slideUp(400);
        $('.trending__hidden').slideUp(400);
    });
    $('.search__box--main .closeThis').off().on('click', function () {
        $('.search__box--main').slideUp(400);
    });
    //
    // $('.recent__updates').off('click').on('click', function () {
    //     $('body').addClass('show__latest').css({'overflow': 'hidden'});
    //     $('.all__latest').fadeIn(400);
    //     $('.black__layer').fadeIn(400);
    // });

    $('.toggle_cmnt').off('click').on('click', function () {
        $('body').addClass('show_cmnts_right').css({'overflow': 'hidden'});
        $('.all__cmnts').fadeIn(400);
        $('.black__layer').fadeIn(400);
    });
    $('.all__cmnts').off('click').on('click', function () {
        $('body').removeClass('show_cmnts_right').css({'overflow': 'auto'});
        $(this).fadeOut(400);
        $('.black__layer').fadeOut(400);
    });
    $('.all__latest').off('click').on('click', function () {
        $('body').removeClass('show__latest').css({'overflow': 'auto'});
        $(this).fadeOut(400);
        $('.black__layer').fadeOut(400);
    });
    $('.black__layer').off().on('click', function () {
        $('body').removeClass('show__latest').css({'overflow': 'auto'});
        $('body').removeClass('show__side--menu').css({'overflow': 'auto'});
        $('body').removeClass('show_cmnts_right').css({'overflow': 'auto'});
        $(this).fadeOut(400);
        $('.closeThis').fadeOut(400);
    });
    //Mobile menu and navigation
    $('button.menu-toggle').on('click', function () {
        $('.menu-primary-menu-container').slideToggle(200);
    });
    //Custom Responsive Tab
    $('#horizontalTab').responsiveTabs({
        startCollapsed: 'accordion',
        collapsible: true,
        rotate: false,
        setHash: true,
        active: 1
    });
    //Hide trending form the top while body has fullpage banner

    if ($('.content-area').hasClass('.ok18-with-cover')) {
        $('.ok__trending--ticker').css({
            'display': 'none'
        });
    }


    $('.if-not-registered').on('click', function () {
        $('.ok-conv-login-for-new').slideDown();
        $('.ok-conv-login-for-new').animate({
            scrollTop: 100
        }, 400);
    });

    $('.reply-btn').on('click', function () {
        $(this).parents('.user-comment-footer').next('.ok-field-for-reply').show();
    });



//Header top stick

    $(window).scroll(function () {
        var headHeight = $('header').height();
        var scrollTop = $(window).scrollTop();
        if (scrollTop > headHeight) {
            $('.nav__row').addClass('fix__this');
        } else {
            $('.nav__row').removeClass('fix__this');
        }
    });
    $('.ok-listicle-next').click(function () {
        $(this).closest('.ok-listicle-wrap').find('.ok-listicle-prev').show();
        var current_index = $('.ok-listicle-current-item').data('item-index');
        var next_index = current_index + 1;
        var total_items = $(this).data('total-items');
        if (next_index <= total_items) {
            $('.ok-each-listicle-item').hide().removeClass('ok-listicle-current-item');
            $('.ok-each-listicle-item[data-item-index="' + next_index + '"]').addClass('ok-listicle-current-item').show();
            update_url('?slide=' + next_index);
            if (next_index == total_items) {
                $(this).hide();
            }
        }

    });
    $('.ok-listicle-prev').click(function () {
        $(this).closest('.ok-listicle-wrap').find('.ok-listicle-next').show();
        var current_index = $('.ok-listicle-current-item').data('item-index');
        var prev_index = current_index - 1;
        if (prev_index > 0) {
            $('.ok-each-listicle-item').hide().removeClass('.ok-listicle-current-item');
            $('.ok-each-listicle-item[data-item-index="' + prev_index + '"]').addClass('ok-listicle-current-item').show();
            update_url('?slide=' + prev_index);
            if (prev_index == 1) {
                $(this).hide();
            }
        }

    });
    $('body').on('click', '.ok18-comment-submit-trigger', function () {
        $(this).closest('form').submit();
    });
    $('body').on('submit', '.ok18-comment-form', function (e) {
        e.preventDefault();
        var form_data = $(this).serialize();
        var selector = $(this);
        $.ajax({
            type: 'post',
            url: ok18_frontend_script_obj.ajax_url,
            data: {
                action: 'ok18_comment_action',
                _wpnonce: ok18_frontend_script_obj.ajax_nonce,
                form_data: form_data
            },
            beforeSend: function (xhr) {
                selector.find('.ok18-ajax-loader').show();
                selector.find('.ok18-comment-response').slideUp(500);
            },
            success: function (response) {
                selector.find('.ok18-ajax-loader').hide();
                response = $.parseJSON(response);
                if (response.success && response.success == 1) {
                    selector.find('.ok18-comment-response').removeClass('.ok18-error').addClass('ok18-success').html('Comment submitted successfully.').slideDown(500);
                    selector.trigger('reset');
                } else {
                    selector.find('.ok18-comment-response').removeClass('.ok18-success').addClass('ok18-error').html('Please enter all the details properly and resubmit again.').slideDown(500);
                }
            }
        });
//        console.log(form_data);

    });
    $('body').on('click', '.ok-comment-report-trigger', function () {
        var comment_id = $(this).data('comment-id');
        var report_comment_cookie = ok18_getCookie('ok18_' + comment_id);
        if (report_comment_cookie == '') {
            $.ajax({
                type: 'post',
                url: ok18_frontend_script_obj.ajax_url,
                data: {
                    action: 'ok18_report_comment_action',
                    _wpnonce: ok18_frontend_script_obj.ajax_nonce,
                    comment_id: comment_id
                },
                beforeSend: function (xhr) {

                },
                success: function (response) {

                    if (response == 'success') {

                        alert('Comment has been reported');
                        var cookie_name = 'ok18_' + comment_id;
                        ok18_setCookie(cookie_name, 1, 365);
                    }
                }
            });
        } else {

        }
    });
    $('body').on('click', '.ok-comment-replies-trigger', function () {
        var comment_id = $(this).data('comment-id');
        var selector = $(this);
        if (selector.closest('.ok18-main-comment-wrap').find('.ok18-comment-replies-wrap').html() == '') {
            $.ajax({
                type: 'post',
                url: ok18_frontend_script_obj.ajax_url,
                data: {
                    action: 'ok18_comment_replies_action',
                    _wpnonce: ok18_frontend_script_obj.ajax_nonce,
                    comment_id: comment_id

                },
                beforeSend: function (xhr) {
                    selector.parent().find('.ok18-ajax-loader').show();
                },
                success: function (res) {
                    selector.parent().find('.ok18-ajax-loader').hide();
                    selector.closest('.ok18-main-comment-wrap').find('.ok18-comment-replies-wrap').html(res);
                }
            });
        } else {
            selector.closest('.ok18-main-comment-wrap').find('.ok18-comment-replies-wrap').slideDown(500);
        }
    });
    $('body').on('click', '.ok18-hide-replies', function () {
        $(this).parent().slideUp(500);
    });
    $('body').on('click', '.ok18-comment-form-ref', function () {
// alert($('.Post__feedback').offset().top);
        $('#ok18-reply-form-tab-trigger').click();
        $('html,body').animate({
//scrollTop: $('#ok18-reply-form-tab-trigger').offset().top
            scrollTop: $('.ok18-comment-wrap').offset().top
        }, 500);
    });
    $('body').on('click', '.ok18-side-comment-add', function () {
// alert($('.Post__feedback').offset().top);
        $('.closeThis').click();
        $('.ok18-comment-form-ref').click();
    });
    $('body').on('click', '.ok-comment-reply-form-trigger', function () {
        $(this).closest('.ok18-main-comment-outer-wrap').find('.ok18-comment-reply-form-wrap').show();
    });
    $('body').on('click', '.ok18-comment-reply-close', function () {
        $(this).parent().hide();
    });
    //list view /grid view

    $('.list-view').off().on('click', function () {
        $(this).addClass('active');
        $('.grid-view').removeClass('active');
        $('.list__post').removeClass('show_grid--view').addClass('show_list--view');
    });
    $('.grid-view').off().on('click', function () {
        $(this).addClass('active');
        $('.list-view').removeClass('active');
        $('.list__post').removeClass('show_list--view').addClass('show_grid--view');
    });
    //$('.ok18-nepali-calendar').nepaliDatePicker();
    $('#ok18-search-from').nepaliDatePicker();
    $('#ok18-search-to').nepaliDatePicker();
    //also read in between
    $('body').on('click', '.inr_related--post .list_title', function () {
        $('.ok18-related-list').slideToggle(400);
        $(this).toggleClass('collapse');
    });
    /**
     * Popular post ajax
     */
    $('.ok18-detail-popular').click(function () {
        var selector = $(this);
        $('.ok18-detail-popular').removeClass('ok18-popular-active');
        $(this).addClass('ok18-popular-active');
        var duration = $(this).data('popular-duration');
        $.ajax({
            type: 'get',
            url: ok18_frontend_script_obj.ajax_url,
            data: {
                action: 'ok18_detail_popular_action',
                _wpnonce: ok18_frontend_script_obj.ajax_nonce,
                duration: duration
            },
            beforeSend: function (xhr) {
                selector.closest('.ok18-lokpriye-wrap').find('.ok18-ajax-loader').show();
            },
            success: function (res) {
                selector.closest('.ok18-lokpriye-wrap').find('.ok18-ajax-loader').hide();
                selector.closest('.ok18-lokpriye-wrap').find('.ok18-lokpriye-posts-wrap').html(res);
            }
        });
    });
    /*
     * Pradesh Ajax
     * 
     */
    $('.ok18-category-ajax-fetch-trigger').click(function () {
        var selector = $(this);
        $(this).closest('.ok18-category-fetch-wrap').find('.ok18-category-ajax-fetch-trigger').removeClass('ok18-active-category');
        $(this).addClass('ok18-active-category');
        var category_slug = $(this).data('category-slug');
        $.ajax({
            type: 'get',
            url: ok18_frontend_script_obj.ajax_url,
            data: {
                action: 'ok18_category_ajax_action',
                _wpnonce: ok18_frontend_script_obj.ajax_nonce,
                category_slug: category_slug
            },
            beforeSend: function (xhr) {
                selector.closest('.ok18-category-fetch-outer-wrap').find('.ok18-ajax-loader').show();
            },
            success: function (res) {
                selector.closest('.ok18-category-fetch-outer-wrap').find('.ok18-ajax-loader').hide();
                selector.closest('.ok18-category-fetch-outer-wrap').find('.ok18-category-ajax-news-wrap').html(res);
            }
        });
    });
    /**
     * Emoji actions
     */
    $('body').on('click', '.ok18-emoji-trigger', function () {
        var emoji_name = $(this).data('emoji');
        var post_id = $(this).data('post-id');
        var emoji_count = $(this).data('emoji-count');
        var cookie_check = 'ok_emoji_' + post_id;
        if (ok18_getCookie(cookie_check) == '') {
            ok18_setCookie(cookie_check, 1);
            $.ajax({
                type: 'post',
                url: ok18_frontend_script_obj.ajax_url,
                data: {
                    action: 'ok18_emoji_action',
                    _wpnonce: ok18_frontend_script_obj.ajax_nonce,
                    post_id: post_id,
                    emoji_name: emoji_name
                },
                beforeSend: function (xhr) {
                },
                success: function (res) {
                    res = $.parseJSON(res);
                    if (res.status == 200) {
                        var reactions = res.reactions;
                        var reaction_name;
                        for (reaction_name in reactions) {
                            $('.ok18-emoji-' + reaction_name + '-per').html(reactions[reaction_name] + '%');
                        }
                    }

                }
            });
        }

    });
    /**
     * In between content append
     */
    if ($('.ok18-related-posts-wrap').length > 0) {
        var related_posts = $('.ok18-related-posts-wrap').html();
        if (related_posts != '') {
            var p_count = 0;
            $('.ok18-single-post-content-wrap p').each(function () {
                p_count++;
                if (p_count == 3) {
                    $(this).after(related_posts);
                }
            });
        }
    }

    if ($('.ok18-inbetween-ad').length > 0) {
        setTimeout(function () {
            var in_between_ad = $('.ok18-inbetween-ad').html();
            if (in_between_ad != '') {
                var p_count = 0;
                $('.ok18-single-post-content-wrap p').each(function () {
                    p_count++;
                    if (p_count == 2) {
                        $(this).after(in_between_ad);
                    }
                });
            }
        }, 5000);
    }
    if ($('.ok18-fullwidth-inbetween-ad').length > 0) {
        setTimeout(function () {
            var in_between_ad = $('.ok18-fullwidth-inbetween-ad').html();
            if (in_between_ad != '') {
                var p_count = 0;
                $('.ok18-single-post-content-wrap p').each(function () {
                    p_count++;
                    if (p_count == 4) {
                        $(this).after(in_between_ad);
                    }
                });
            }
        }, 3000);
    }

    /**
     * Comments load more
     */
    $('body').on('click', '.ok18-comment-load-more', function (e) {
        var offset = $(this).data('offset');
        var post_id = $(this).data('post-id');
        var selector = $(this);
        $.ajax({
            type: 'get',
            url: ok18_frontend_script_obj.ajax_url,
            data: {
                action: 'ok18_comments_load_action',
                _wpnonce: ok18_frontend_script_obj.ajax_nonce,
                post_id: post_id,
                offset: offset
            },
            beforeSend: function (xhr) {
                selector.next('.ok18-ajax-loader').show();
            },
            success: function (res) {
                selector.next('.ok18-ajax-loader').hide();
                if (!(res == 'empty' || res == 0)) {
                    offset = parseInt(offset) + 20;
                    selector.data('offset', offset);
                    $('.ok18-comments-list-wrap').append(res);
                } else {
                    selector.remove();
                }

            }
        });
    });
    /**
     * Roadblock skip
     */
    $('body').on('click', '.ok_roadblok_skip', function () {
        $('.ok_roadblock').fadeOut(1000);
    });
    if ($('.ok_roadblok_skip').length > 0) {
        setTimeout(function () {
            $('.ok_roadblock').fadeOut(1000);
        }, 10000);
    }

    /**
     *  Comment box open if comment count is 0
     */
    if ($('.ok-comment-count').length > 0) {
        var comment_count = $('.ok-comment-count').html();
        if (comment_count == '0') {
            $('#ok18-reply-form-tab-trigger').click();
        }
    }

    /**
     * 
     */
    $('#primary-menu .menu-item a').click(function () {
        if ($(this).attr('href')) {
            var href = $(this).attr('href');
            if (ok18_is_url(href)) {
                var menu_label = $(this).html();
                gtag('event', menu_label, {'event_category': 'MenuClick', 'event_label': menu_label})
                console.log(menu_label);
            }
        }
    });

    if ($('#ok18-main-post-id').length > 0) {
        var post_id = $('#ok18-main-post-id').val();

        /**
         * Emoji Fetch
         */
        var emoji_template = wp.template('emoji-template');
        var emoji_api_url = ok18_frontend_script_obj.api_url + 'emoji/' + post_id;
        $.ajax({
            type: 'get',
            url: emoji_api_url,
            beforeSend: function (xhr) {

            },
            success: function (res) {
                $('.post__emo.flex-box').html(emoji_template(res.data));
            }
        });

        /*
         * Comments ajax fetch 
         */
        var comment_template = wp.template('comment-template');

        var limit = (isMobile) ? 10 : 50;
        var offset = 0;
        var comments_api_url = ok18_frontend_script_obj.api_url + 'comments/' + post_id + '/0';
        var popular_url = ok18_frontend_script_obj.api_url + 'comments/popular/' + post_id;
        // console.log(ok18_frontend_script_obj.api_url + 'comments/' + post_id + '/0', );
        $.ajax({
            type: 'get',
            url: comments_api_url,
            data: {
                limit: limit,
                offset: offset
            },
            beforeSend: function (xhr) {

            },
            success: function (res) {
                $('#tab-1').html(comment_template(res.data));
                $('.ok18-hidden-comments').html(comment_template(res.data));
                $('.ok18-comments-count').html(res.total_comments);
                if (res.total_comments == 0) {
                    $('#ok18-reply-form-tab-trigger').click();
                }
            }
        });
        $.ajax({
            type: 'get',
            url: popular_url,
            success: function (res) {
                $('#tab-2').html(comment_template(res.data));
            }
        });

        if ($('.ok18-comment-load-more').length > 0) {
            if (isMobile) {
                $('.ok18-comment-load-more').attr('data-offset', 10);
            }
        }


    }

    if ($('#ok18-date-holder').length > 0) {
        var today = $('#ok18-date-holder').data('today');
        if (today != '') {
            var url = ok18_frontend_script_obj.api_url + 'today' + '?today=' + today;
        } else {
            var url = ok18_frontend_script_obj.api_url + 'today';
        }
        $.ajax({
            type: 'get',
            url: url,
            success: function (res) {
                if (res.status == 200) {
                    $('#ok18-date-holder').html(res.data);
                    $('#ok18-data-holder-sticky').html(res.data);
                }
            }
        });
    }


    $('.ok18-most-commented').each(function () {
        var selector = $(this);
        var limit = $(this).data('limit');
        var most_commented_api_url = ok18_frontend_script_obj.api_url + 'most_commented';
        var template = $(this).data('template');
        var most_commented_template = wp.template(template);

        $.ajax({
            type: 'get',
            url: most_commented_api_url,
            data: {
                limit: limit

            },
            beforeSend: function (xhr) {

            },
            success: function (res) {
                selector.html(most_commented_template(res.data));

            }
        });

    });

    //Close footer fixed ad
    $('.close-ad').off().on('click', function () {
        $(this).parent('.footer-absolute').fadeOut();
    });
    if ($('.okc-question').length > 0) {
        $('.okc-question').each(function () {
            if ($(this).html() == '') {
                $(this).closest('.okc-captcha-wrap').find('.okc-captcha-reload').click();
            }
        });
    }

    /**
     * Go to all comments section
     */
    $('body').on('click', '.ok18-all-comments-ref', function () {
        $('body,html').animate({
            scrollTop: $('.ok18-comment-wrap').offset().top
        }, 800);
    });

    $('.ok-ad-reload').on('click', function () {
        $(this).parent('.small-adv-wrap').next('.big-adv-inner-wrap').fadeIn();
    });

    $('.close-big-add').on('click', function () {
        $(this).parent('.big-adv-inner-wrap').fadeOut();
    });


});