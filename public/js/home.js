$( document ).ready(function() {

    if ( !jQuery.browser.mobile ) {
        $('.marketing').hide();
        $('body').css('background-color', '#282C31');

        // $('.carousel').carousel('pause');
        console.log('paused');

        var counter = 1;
        $('#btn-1').mouseover(function() {
            switch(counter) {
                case 1:
                    var newT = 510;
                    var newL = 365;
                    $('#btn-1').text('Almost had it...');
                    $('#btn-1').css('background-color', '#ff8800');
                    $('#btn-1').css('border', '1px solid #ff8800');
                    break;
                case 2:
                    var newT = 430;
                    var newL = 215;
                    $('#btn-1').text('Ugh!');
                    $('#btn-1').css('background-color', 'red');
                    $('#btn-1').css('border', '1px solid red');
                    break;
                default:
                    $('.carousel').carousel('next');
                    $('.marketing').fadeIn(4000);
                    $('body').css('background-color', '#ffffff');
                    //$('body').animate({backgroundColor: "#fff"}, 2000);
            }
            $('#btn-1').offset({ top: newT, left: newL});
            counter = counter + 1;
        });

        $('#btn-1').click(function() {
            $('.carousel').carousel('next');
        });

        // $('#btn-2').click(function() {
        //     $('.carousel').carousel('next');
        // });

        $('#btn-3').click(function() {
            $('.marketing').show();
            $('body').css('background-color', '#ffffff');
            $('html, body').animate({scrollTop: '+=505px'}, 800);
        });
        $('.carousel').carousel('pause');
    };

});
