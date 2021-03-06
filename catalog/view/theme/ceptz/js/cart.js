$(document).ready(function () {
        $.ajax({
            url: 'index.php?route=extension/onepagecheckout/checkout/country&country_id=162',
            dataType: 'json',
            beforeSend: function () {
            },
            complete: function () {
            },
            success: function (json) {
                html = '<option value="" selected="selected">Select Province</option>';
                if (json['zone'] && json['zone'] != '') {
                    for (i = 0; i < json['zone'].length; i++) {
                        html += '<option value="' + json['zone'][i]['zone_id'] + '"';

                        html += '>' + json['zone'][i]['name'] + '</option>';
                    }
                } else {
                    html += '<option value="0" >{{ text_none }}</option>';
                }
                $('#input-payment-zone').html(html);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    $('select[name=\'zone_id\']').on('change', function(){
        $.ajax({
            url: 'index.php?route=extension/onepagecheckout/checkout/cities&zone_id='+ $(this).val(),
            dataType: 'json',
            beforeSend: function() {
                // $('#account select[name=\'personal_details[country_id]\']').after(' <i class="fa fa-circle-o-notch fa-spin"></i>');
            },
            complete: function() {
                //$('.fa-spin').remove();
            },
            success: function(json){

                html = '<option value="">Cities</option>';

                if (json) {
                    for (i = 0; i < json.length; i++) {
                        html += '<option value="' + json[i]['city_id'] + '"';

                        html += '>' + json[i]['name'] + '</option>';
                    }
                } else {
                    html += '<option value="0" selected="selected"> Select Cities</option>';
                }
                $('select[name=\'city\']').html(html);
                $('select[name=\'city\']').fadeIn()
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
        loadShipping()

    });

    $('#city_id').on('change',function () {
        loadShipping()
        setTimeout(function(){
            AddShipping();
        },900)


    })


    $(".dec_button,.inc_button").click(function(){
         var form = $(this).data('form')
         setTimeout(function () {
             $('#'+form).submit()
         },600)
     });

    $('#button-coupon').on('click', function() {
        $.ajax({
            url: 'index.php?route=extension/total/coupon/coupon',
            type: 'post',
            data: 'coupon=' + encodeURIComponent($('input[name=\'coupon\']').val()),
            dataType: 'json',
            beforeSend: function() {
                $('#button-coupon').button('loading');
            },
            complete: function() {
                $('#button-coupon').button('reset');
            },
            success: function(json) {
                $('.alert').remove();

                if (json['error']) {
                    $('#coupon-err-message').html('<i class="fa fa-exclamation-circle"></i> ' + json['error'] + '');
                    $('#coupon-err-message').addClass('alert alert-danger')
                    $('#coupon-err-message').show()
                    $('html, body').animate({ scrollTop: 0 }, 'slow');
                }

                if (json['redirect']) {
                    location = json['redirect'];
                }
            }
        });
    });

    $(".refresh-cart").click(function () {
        $('.btn-refresh').click()
    })

    $("input[type='number']").change(function() {
       alert('asd')
        $('.btn-refresh').click()
    })


    $(".refresh-cart").click(function () {
        $('.btn-refresh').click()
    })

    $("input[type='number']").change(function() {
        $('.btn-refresh').click()
    })

})

function loadShipping(){
    $.ajax({
        url: 'index.php?route=extension/total/shipping/quote',
        type: 'post',
        data: 'country_id=162&zone_id=' + $('select[name=\'zone_id\']').val() + '&postcode=74700'+'&city='+$("#city_id").val(),
        dataType: 'json',
        beforeSend: function() {
            $('#button-quote').button('loading');
        },
        complete: function() {
            $('#button-quote').button('reset');
        },
        success: function(json) {
            $('.alert-dismissible, .text-danger').remove();

            if (json['error']) {
                if (json['error']['warning']) {
                    $('.breadcrumb').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');

                    $('html, body').animate({ scrollTop: 0 }, 'slow');
                }

                if (json['error']['country']) {
                    $('select[name=\'country_id\']').after('<div class="text-danger">' + json['error']['country'] + '</div>');
                }

                if (json['error']['zone']) {
                    $('select[name=\'zone_id\']').after('<div class="text-danger">' + json['error']['zone'] + '</div>');
                }

                if (json['error']['postcode']) {
                    $('input[name=\'postcode\']').after('<div class="text-danger">' + json['error']['postcode'] + '</div>');
                }
            }

            if (json['shipping_method']) {
                $('#modal-shipping').remove();

                html  = '<div id="modal-shipping" class="modal">';
                html += '  <div class="modal-dialog">';
                html += '    <div class="modal-content">';
                html += '      <div class="modal-header">';
                html += '        <h4 class="modal-title">{{ text_shipping_method }}</h4>';
                html += '      </div>';
                html += '      <div class="modal-body">';

                for (i in json['shipping_method']) {
                    html += '<p><strong>' + json['shipping_method'][i]['title'] + '</strong></p>';

                    if (!json['shipping_method'][i]['error']) {
                        for (j in json['shipping_method'][i]['quote']) {
                            html += '<div class="radio">';
                            html += '  <label>';

                            if (json['shipping_method'][i]['quote'][j]['code'] == '{{ shipping_method }}') {
                                html += '<input type="radio" name="shipping_method" value="' + json['shipping_method'][i]['quote'][j]['code'] + '" checked="checked" />';
                            } else {
                                html += '<input type="radio" name="shipping_method" value="' + json['shipping_method'][i]['quote'][j]['code'] + '" />';
                            }

                            html += json['shipping_method'][i]['quote'][j]['title'] + ' - ' + json['shipping_method'][i]['quote'][j]['text'] + '</label></div>';
                        }
                    } else {
                        html += '<div class="alert alert-danger alert-dismissible">' + json['shipping_method'][i]['error'] + '</div>';
                    }
                }

                html += '      </div>';
                html += '      <div class="modal-footer">';
                html += '        <button type="button" class="btn btn-default" data-dismiss="modal">{{ button_cancel }}</button>';

                html += '        <input type="button" value="button_shipping" id="button-shipping" data-loading-text="text_loading" class="btn btn-primary" disabled="disabled" />';

                html += '      </div>';
                html += '    </div>';
                html += '  </div>';
                html += '</div> ';

                $('body').append(html);

                //$('#modal-shipping').modal('show');

                $('input[name=\'shipping_method\']').on('change', function() {
                    $('#button-shipping').prop('disabled', false);
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });
}

function AddShipping(){
    $.ajax({
        url: 'index.php?route=extension/total/shipping/shipping',
        type: 'post',
        data: 'shipping_method=bargain.bargain' ,
        dataType: 'json',
        beforeSend: function() {
            $('#button-shipping').button('loading');
        },
        complete: function() {
            $('#button-shipping').button('reset');
        },
        success: function(json) {
            $('.alert-dismissible').remove();

            if (json['error']) {
                $('.breadcrumb').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');

                $('html, body').animate({ scrollTop: 0 }, 'slow');
            }

            if (json['redirect']) {
                //location = json['redirect'];
                LoadTotal()
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
    }
});


}



function LoadTotal(){
    $( ".cart-total" ).load( "index.php?route=checkout/cart/total" );
}

$(function(){
    $("#cursor-coupon").on('click',function(){
        $(".couponDiv").show();
    })
})
