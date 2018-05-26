(function ($) {
    
    $(function () {

        $(document).tooltip();

        $(".region-blockgroup-g-empreendimentos").addClass("container");

        $('.owl-item .icons-list').each(function(index, value) { 

            var subtitle = $(".owl-item .item-"+index);

            var i = 0;

            $(this).find("i").each(function(){

                subtitle = $(".owl-item .item-"+index+" .icons-list .item-"+i).text();

                $(this).attr("title", subtitle);

                i++;

            });

        });

    });

})(jQuery);