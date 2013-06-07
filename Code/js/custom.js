$(document).ready(function(){

    $('#product-page').on('click', '.bookmark.set', function(e){
        e.preventDefault();
        var productname = $(this).attr('id');
        var thisLink = $(this);
        $.ajax({
            type: 'post',
            data: {productname:productname, settoggle: 'set'},
            url: 'dataBookmark.php',
            
            success: function(result){
                thisLink.find('.ui-btn-text').text('Lesezeichen gesetzt');
                thisLink.removeClass('set').addClass('unset');
                thisLink.buttonMarkup({theme: 'b'});
            }


        });
    });
    $('#product-page').on('click', '.bookmark.unset', function(e){
        e.preventDefault();
        var productname = $(this).attr('id');
        var thisLink = $(this);
        $.ajax({
            type: 'post',
            data: {productname:productname, settoggle: 'unset'},
            url: 'dataBookmark.php',

            success: function(result){
                $('#product-page').append(result);
                thisLink.find('.ui-btn-text').text('Lesezeichen setzen');
                thisLink.removeClass('unset').addClass('set');
                thisLink.buttonMarkup({theme: 'c'})
            }


        });
    });
});