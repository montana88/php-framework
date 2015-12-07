$('document').ready(function() {

    $('form.ajax').change(function(){

        var that = $(this);
        var url = that.attr('action');
        var type = that.attr('method');
        var data = {};

        that.find('[name]').each(function() {

            var that = $(this);
            var name = that.attr('name');

            if(that.is(':radio')) {

                if($(this).prop('checked')) {

                    var value = $(this).val();
                    data[name] = value;

                }

            } else if(that.is(':checkbox')) {

                if($(this).is(':checked')) {

                    var value = $(this).val();
                    data[name] = value;

                } else {

                    var value = '';
                    data[name] = value;

                }

            } else {

                var value = that.val();
                data[name] = value;

            }

        });

        $.ajax({
            type: type,
            data: data,
            url: url,
            success: function (response) {

                var question1 = false;
                var question2 = false;

                if($('input#no').is(':checked') && $('input#beginner').is(':checked')) {
                    $('#output').append(response);
                    $('.wrapper').hide();
                }

                if($('.lastQuestion input').is(':checked')) {

                    var frameworkId = '';

                    $('#output').append(response);

                       $('#output').find('.framework').each(function(){

                           frameworkId += $(this).attr('data-framework-name');

                       });

                    if ($('.framework')[0]){

                        $('#output').append('<div class="ui ignored warning message moreDetails"><p>Still not sure?</p><a class="ui secondary button" href="/yourframe/public/tool/details' + frameworkId + '">Get more details</a> <p>...About these frameworks</p></div>');

                    }

                    if($('#output').is(':empty')){
                        $('#output').append('<p class="white"> Too bad! there where no frameworks found based on your input <br>' +
                            '<br>' +
                            '<p class="white">mayby it&#39;s best you make it by yourself, or... </p>' +
                            '<p class="white">...want to <a href="/yourframe/public/tool/selectFramework"> retry?</a></p>');
                    }


                }

            }

        });

        return false;

    })

});