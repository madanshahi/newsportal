jQuery(document).ready(function ($) {
// alert('test');

    if ($('#ok18-roadblock-type').length > 0 && $('#ok18-roadblock-wrap').length > 0) {
        var roadblock_template = wp.template('roadblock-template');
        var roadblock_type = $('#ok18-roadblock-type').val();
        var device_type = (isMobile) ? 'mobile' : 'desktop';
        var today = ($('#ok18-roadblock-wrap').data('today')) ? $('#ok18-roadblock-wrap').data('today') : false;
        //console.log(today);
        if (today) {
            var url = okam_js_obj.ad_api_url + '/roadblock/' + roadblock_type + '/' + device_type + '?today=' + today
        } else {
            var url = okam_js_obj.ad_api_url + '/roadblock/' + roadblock_type + '/' + device_type;
        }
        $.ajax({
            type: 'get',
            url: url,
            success: function (res) {

                if (res.status == 200) {
                    $('#ok18-roadblock-wrap').html(roadblock_template(res.data));
                    $('.ok18-loader-wrap').fadeOut(500);
                    setTimeout(function () {
                        $('.ok_roadblock').fadeOut(1000);
                    }, 10000);
                } else {
                    $('.ok18-loader-wrap').fadeOut(500);
                }

            }
        });
    }
    var ad_template = wp.template('ad-template');
    $('.okam-ad-position-wrap').each(function () {
        var alias = $(this).data('alias');
        var device_type = $(this).data('device-type');
        var ajax_call = true;
        if (isMobile) {
            if (!(device_type == 'mobile' || device_type == 'mobile-desktop')) {
                ajax_call = false;
            }
        } else {
            if (!(device_type == 'desktop' || device_type == 'mobile-desktop')) {
                ajax_call = false;
            }
        }
        if (ajax_call) {
            var today = ($(this).data('today')) ? $(this).data('today') : false;
            var country = ($(this).data('country')) ? $(this).data('country') : false;
            var limit = ($(this).data('limit')) ? $(this).data('limit') : false;
            if (today) {
                var url = okam_js_obj.ad_api_url + '/ad_position/' + alias + '?today=' + today;
            } else {
                if (country) {
                    var url = okam_js_obj.ad_api_url + '/ad_position/' + alias + '?country=' + country;
                } else {
                    var url = okam_js_obj.ad_api_url + '/ad_position/' + alias;
                    if (limit) {
                        var url = okam_js_obj.ad_api_url + '/ad_position/' + alias + '?limit=' + limit;
                    }
                }
            }
            var selector = $(this);
            $.ajax({
                type: 'get',
                url: url,
                success: function (res) {

                    if (res.status == 200) {
                        selector.html(ad_template(res.data));

                        if (selector.find('.ok18-third-party-ad').length > 0) {
                            selector.find('.ok18-third-party-ad').each(function () {
                                var loaded = $(this).data('loaded');
                                if (loaded == 'no') {
                                    var ad_url = $(this).data('ad-url');
                                    $(this).load(ad_url);
                                    $(this).data('loaded', 'yes');
                                }
                            });
                        }

                    }


                }
            });
        }
    });

    $('body').on('click', '.okam-each-ad', function (e) {
        // e.preventDefault();
        var ad_id = $(this).attr('id');
        var ad_id_array = ad_id.split('-');
        var ad_real_id = ad_id_array[2];
        var today = ($(this).closest('.okam-ad-position-wrap').data('today')) ? $(this).closest('.okam-ad-position-wrap').data('today') : false;
        var verification = $(this).data('verification');
        if (today) {
            var url = okam_js_obj.ad_api_url + '/ad_click_count/' + ad_real_id + '/?today=' + today;
        } else {
            var url = okam_js_obj.ad_api_url + '/ad_click_count/' + ad_real_id;
        }

        $.ajax({
            url: url,
            method: 'POST',
            beforeSend: function (xhr) {
                xhr.setRequestHeader('OKAM-Verification', verification);
            }
        });
    });
    $('body').on('click', '.ok-rb-link', function (e) {
        // e.preventDefault();
        var rb_id = $(this).closest('.ok_roadblock').data('roadblock-id');
        var verification = $(this).closest('.ok_roadblock').data('verification');
        var today = ($('#ok18-roadblock-wrap').data('today')) ? $('#ok18-roadblock-wrap').data('today') : false;
        if (today) {
            var url = okam_js_obj.ad_api_url + '/rb_click_count/' + rb_id + '/?today=' + today;
        } else {
            var url = okam_js_obj.ad_api_url + '/rb_click_count/' + rb_id;
        }

        $.ajax({
            url: url,
            method: 'POST',
            beforeSend: function (xhr) {
                xhr.setRequestHeader('OKAM-Verification', verification);
            }
        });
    });

});