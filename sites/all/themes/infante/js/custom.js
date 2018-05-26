(function ($) {
    $(function () {

        

        $('.owl-item .icons-list').each(function(index, value) { 
            var subtitle = $(".owl-item .item-"+index);
            $(this).find("i").each(function(){
                var teste = (subtitle+" .subtitle");
                console.log(teste);
            });
        });

        

    });

})(jQuery);