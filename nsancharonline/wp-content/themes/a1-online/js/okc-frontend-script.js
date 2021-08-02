jQuery(document).ready(function ($) {
    $('body').on('click', '.okc-captcha-reload', function () {
        var selector = $(this);
        var captcha_id = $(this).closest('.okc-captcha-wrap').find('.okc-captcha-id').val();
        $.ajax({
            type: 'post',
            url: okc_obj.ajax_url,
            data: {
                captcha_id: captcha_id,
                action: 'okc_generate_captcha',
                _wpnonce: okc_obj.ajax_nonce
            },
            beforeSend: function (xhr) {
                selector.next('.okc-ajax-loader').show();
            },
            success: function (res) {
                selector.next('.okc-ajax-loader').hide();
                res = $.parseJSON(res);
                if (res.success == 1) {
                    var question = res.question;
                    var captcha_id = res.captcha_id;
                    selector.parent().find('.okc-question').html(question);
                    selector.parent().find('.okc-captcha-id').val(captcha_id);
                }
            }
        });
    });
});