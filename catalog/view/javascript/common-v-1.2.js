function getURLVar(key){var value=[];var query=String(document.location).split('?');if(query[1]){var part=query[1].split('&');for(i=0;i<part.length;i++){var data=part[i].split('=');if(data[0]&&data[1]){value[data[0]]=data[1];}}if(value[key]){return value[key];}else{return'';}}}$(document).ready(function(){$('.text-danger').each(function(){var element=$(this).parent().parent();if(element.hasClass('form-group')){element.addClass('has-error');}});$('#form-currency .currency-select').on('click',function(e){e.preventDefault();$('#form-currency input[name=\'code\']').val($(this).attr('name'));$('#form-currency').submit();});$('#form-language .language-select').on('click',function(e){e.preventDefault();$('#form-language input[name=\'code\']').val($(this).attr('name'));$('#form-language').submit();});
    $('#search input[name=\'search\']').parent().find('button').on('click',function(){var url=$('base').attr('href')+'index.php?route=product/search';var value=$('header #search input[name=\'search\']').val();if(value){url+='&search='+encodeURIComponent(value);}location=url;});
    $('#search input[name=\'search\']').on('keydown',function(e){
        if(e.keyCode==13){
            $('header #search input[name=\'search\']').parent().find('.button-search').trigger('click');
        }});
    $(".button-search").on('click',function(){

        var id  = $(this).attr('id')
        if(id == 'desk_button') {
           var url='https://www.bargain.pk/search/'+$(".desk-search").val();
           console.log($(".desk-search").val())
           console.log(url)


        }  else if(id == 'mbl_button'){
            var url=$('base').attr('href')+'search/'+$(".mbl-search").val();
        }

        location=url;});$(".button-search").on('keydown',function(e){if(e.keyCode==13){$('header #search input[name=\'search\']').parent().find('button').trigger('click');}});$('#search input[name=\'search\']').on('keydown',function(e){if(e.keyCode==13){$('header #search input[name=\'search\']').parent().find('button').trigger('click');}});$('#menu .dropdown-menu').each(function(){var menu=$('#menu').offset();var dropdown=$(this).parent().offset();var i=(dropdown.left+$(this).outerWidth())-(menu.left+$('#menu').outerWidth());if(i>0){$(this).css('margin-left','-'+(i+10)+'px');}});$('#list-view').click(function(){$('#content .product-grid > .clearfix').remove();$('#content .row > .product-grid').attr('class','product-layout product-list col-xs-12');$('#grid-view').removeClass('active');$('#list-view').addClass('active');localStorage.setItem('display','list');});$('#grid-view').click(function(){var cols=$('#column-right, #column-left').length;if(cols==2){$('#content .product-list').attr('class','product-layout product-grid col-lg-6 col-md-6 col-sm-12 col-xs-12');}else if(cols==1){$('#content .product-list').attr('class','product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12');}else{$('#content .product-list').attr('class','product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12');}$('#list-view').removeClass('active');$('#grid-view').addClass('active');localStorage.setItem('display','grid');});if(localStorage.getItem('display')=='list'){$('#list-view').trigger('click');$('#list-view').addClass('active');}else{$('#grid-view').trigger('click');$('#grid-view').addClass('active');}$(document).on('keydown','#collapse-checkout-option input[name=\'email\'], #collapse-checkout-option input[name=\'password\']',function(e){if(e.keyCode==13){$('#collapse-checkout-option #button-login').trigger('click');}});});var cart={'add':function(product_id,quantity){$.ajax({url:'index.php?route=checkout/cart/add',type:'post',data:'product_id='+product_id+'&quantity='+(typeof(quantity)!='undefined'?quantity:1),dataType:'json',beforeSend:function(){$('#cart > button').button('loading');},complete:function(){$('#cart > button').button('reset');},success:function(json){$('.alert-dismissible, .text-danger').remove();if(json['redirect']){location=json['redirect'];}if(json['success']){$('#content').parent().before('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> '+json['success']+' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');setTimeout(function(){$('#cart > button').html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> '+json['total']+'</span>');},100);$('html, body').animate({scrollTop:0},'slow');$('#cart > ul').load('index.php?route=common/cart/info ul li');}},error:function(xhr,ajaxOptions,thrownError){alert(thrownError+"\r\n"+xhr.statusText+"\r\n"+xhr.responseText);}});},'update':function(key,quantity){$.ajax({url:'index.php?route=checkout/cart/edit',type:'post',data:'key='+key+'&quantity='+(typeof(quantity)!='undefined'?quantity:1),dataType:'json',beforeSend:function(){$('#cart > button').button('loading');},complete:function(){$('#cart > button').button('reset');},success:function(json){setTimeout(function(){$('#cart > button').html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> '+json['total']+'</span>');},100);if(getURLVar('route')=='checkout/cart'||getURLVar('route')=='checkout/checkout'){location='index.php?route=checkout/cart';}else{$('#cart > ul').load('index.php?route=common/cart/info ul li');}},error:function(xhr,ajaxOptions,thrownError){alert(thrownError+"\r\n"+xhr.statusText+"\r\n"+xhr.responseText);}});},
    'remove':function(key){
            $.ajax({url:'index.php?route=checkout/cart/remove',
                type:'post',
                data:'key='+key,
                dataType:'json',
                beforeSend:function(){$('#cart > button').button('loading');},
                complete:function(){$('#cart > button').button('reset');},
                success:function(json){ location.reload();setTimeout(function(){$('#cart > button').html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> '+json['total']+'</span>');},100);if(getURLVar('route')=='checkout/cart'||getURLVar('route')=='checkout/checkout'){location='index.php?route=checkout/cart';}else{$('#cart > ul').load('index.php?route=common/cart/info ul li');}},error:function(xhr,ajaxOptions,thrownError){alert(thrownError+"\r\n"+xhr.statusText+"\r\n"+xhr.responseText);}});}}
var voucher={'add':function(){},'remove':function(key){$.ajax({url:'index.php?route=checkout/cart/remove',type:'post',data:'key='+key,dataType:'json',beforeSend:function(){$('#cart > button').button('loading');},complete:function(){$('#cart > button').button('reset');},success:function(json){setTimeout(function(){$('#cart > button').html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> '+json['total']+'</span>');},100);if(getURLVar('route')=='checkout/cart'||getURLVar('route')=='checkout/checkout'){location='index.php?route=checkout/cart';}else{$('#cart > ul').load('index.php?route=common/cart/info ul li');}},error:function(xhr,ajaxOptions,thrownError){alert(thrownError+"\r\n"+xhr.statusText+"\r\n"+xhr.responseText);}});}}
var wishlist={'add':function(product_id){$.ajax({url:'index.php?route=account/wishlist/add',type:'post',data:'product_id='+product_id,dataType:'json',success:function(json){$('.alert-dismissible').remove();if(json['redirect']){location=json['redirect'];}if(json['success']){$('#content').parent().before('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> '+json['success']+' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');}$('#wishlist-total span').html(json['total']);$('#wishlist-total').attr('title',json['total']);$('html, body').animate({scrollTop:0},'slow');},error:function(xhr,ajaxOptions,thrownError){alert(thrownError+"\r\n"+xhr.statusText+"\r\n"+xhr.responseText);}});},'remove':function(){}}
var compare={'add':function(product_id){$.ajax({url:'index.php?route=product/compare/add',type:'post',data:'product_id='+product_id,dataType:'json',success:function(json){$('.alert-dismissible').remove();if(json['success']){$('#content').parent().before('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> '+json['success']+' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');$('#compare-total').html(json['total']);$('html, body').animate({scrollTop:0},'slow');}},error:function(xhr,ajaxOptions,thrownError){alert(thrownError+"\r\n"+xhr.statusText+"\r\n"+xhr.responseText);}});},'remove':function(){}}
$(document).delegate('.agree','click',function(e){e.preventDefault();$('#modal-agree').remove();var element=this;$.ajax({url:$(element).attr('href'),type:'get',dataType:'html',success:function(data){html='<div id="modal-agree" class="modal">';html+='  <div class="modal-dialog">';html+='    <div class="modal-content">';html+='      <div class="modal-header">';html+='        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';html+='        <h4 class="modal-title">'+$(element).text()+'</h4>';html+='      </div>';html+='      <div class="modal-body">'+data+'</div>';html+='    </div>';html+='  </div>';html+='</div>';$('body').append(html);$('#modal-agree').modal('show');}});});(function($){$.fn.autocomplete=function(option){return this.each(function(){this.timer=null;this.items=new Array();$.extend(this,option);$(this).attr('autocomplete','off');$(this).on('focus',function(){this.request();});$(this).on('blur',function(){setTimeout(function(object){object.hide();},200,this);});$(this).on('keydown',function(event){switch(event.keyCode){case 27:this.hide();break;default:this.request();break;}});this.click=function(event){value=$(event.target).parent().attr('data-value');if(value&&this.items[value]){this.select(this.items[value]);}}
this.show=function(){var pos=$(this).position();$(this).siblings('ul.dropdown-menu').css({top:pos.top+$(this).outerHeight(),left:pos.left});$(this).siblings('ul.dropdown-menu').show();}
this.hide=function(){$(this).siblings('ul.dropdown-menu').hide();}
this.request=function(){clearTimeout(this.timer);this.timer=setTimeout(function(object){object.source($(object).val(),$.proxy(object.response,object));},200,this);}
this.response=function(json){html='';if(json.length){for(i=0;i<json.length;i++){this.items[json[i]['value']]=json[i];}for(i=0;i<json.length;i++){if(!json[i]['category']){html+='<li	><a href="'+json[i]['href']+'">'+json[i]['name']+'</a></li>';}}var category=new Array();for(i=0;i<json.length;i++){if(json[i]['category']){if(!category[json[i]['category']]){category[json[i]['category']]=new Array();category[json[i]['category']]['name']=json[i]['category'];category[json[i]['category']]['item']=new Array();}category[json[i]['category']]['item'].push(json[i]);}}for(i in category){html+='<li class="dropdown-header">'+category[i]['name']+'</li>';for(j=0;j<category[i]['item'].length;j++){html+='<li data-value="'+category[i]['item'][j]['value']+'"><a href="#">&nbsp;&nbsp;&nbsp;'+category[i]['item'][j]['label']+'</a></li>';}}}if(html){this.show();}else{this.hide();}$(this).siblings('ul').html(html);}
$(this).after('<ul class="ui-autocomplete"></ul>');$(this).siblings('ul').delegate('a','click',$.proxy(this.click,this));});}})(window.jQuery);
$(function(){
    $(".int-dec-button").on("click", function() {
        var $button = $(this);
        var oldValue = $button.parent().find("input[type='number']").val();
        if ($button.data('operation') == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
             if (oldValue > 1) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
            }
        }
        $button.parent().find("input[type='number']").val(newVal);
        if(oldValue!=newVal && $("#id_qty").length>0){
            $.ajax({
                type: 'POST',
                url: 'index.php?route=product/qtyprice/index',
                data: $('.product-info input[type=\'text\'], .product-info input[type=\'hidden\'], input[name=\'quantity\'], .product-info input[type=\'radio\']:checked, .product-info input[type=\'checkbox\']:checked, .product-info select, .product-info textarea'),
                dataType: 'json',
                success: function(json) {
                    if (json.success) {
                        if(json.new_price.special){
                            $("#id_qty").html(json.new_price.special)
                        } else {
                            $("#id_qty").html(json.new_price.price)
                        }
                    }
                }
            });
        }

    });

});
// $('.email-service').hover(function () {
//     $(this).clearQueue();
//     $(".PosEmailService").fadeIn()
// },function(){
//     $(this).clearQueue();
//     $(".PosEmailService").hide()
// })

var isOnDiv = false;

$('.email-service').click(function () {
    isOnDiv = true;
    $(".PosEmailService").fadeIn()
});
$(".PosEmailServiceOpen").click(function(){
    $(".PosEmailService").show();
});


$(".PosEmailServiceClose").click(function(){
    isOnDiv = false;
    $(".PosEmailService").hide();
});
$(".PosEmailService").mouseleave(function () {
    isOnDiv = false;
    setTimeout(function () {
        console.log(isOnDiv)
        if(isOnDiv == false){
            $(this).clearQueue();
            $(".PosEmailService").hide();
        }

    },2500)
})





