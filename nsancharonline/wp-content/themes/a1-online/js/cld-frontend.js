function cld_setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function cld_getCookie(cname) {
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

jQuery(document).ready(function ($) {
    var ajax_flag = 0;
    $('body').on('click', '.cld-like-dislike-trigger', function () {
        if (ajax_flag == 0) {
            var comment_id = $(this).data('comment-id');
            var trigger_type = $(this).data('trigger-type');
            var selector = $(this);
            var cld_cookie = cld_getCookie('cld_' + comment_id);
            var current_count = selector.closest('.cld-common-wrap').find('.cld-count-wrap').html();
            var new_count = parseInt(current_count) + 1;

            if (cld_cookie == '') {
                $.ajax({
                    type: 'post',
                    url: cld_js_object.admin_ajax_url,
                    data: {
                        comment_id: comment_id,
                        action: 'cld_comment_ajax_action',
                        type: trigger_type,
                        _wpnonce: cld_js_object.admin_ajax_nonce,
                    },
                    beforeSend: function (xhr) {
                        ajax_flag = 1;
                        selector.closest('.cld-common-wrap').find('.cld-count-wrap').html(new_count);
                    },
                    success: function (res) {
                        ajax_flag = 0;
                        res = $.parseJSON(res);
                        if (res.success) {
                            var cookie_name = 'cld_' + comment_id;
                            cld_setCookie(cookie_name, 1, 365);
                            var latest_count = res.latest_count;
                            selector.closest('.cld-common-wrap').find('.cld-count-wrap').html(latest_count);
                        }
                    }

                });
            }
        }
    });

    $('.cld-facebook').click(function () {
        var url = $(this).data('share-url');
        var share_text = $(this).data('share-text');

        FB.ui({
            method: 'share',
            display: 'popup',
            href: url,
            quote: share_text
        }, function (response) {
        });
    });


});