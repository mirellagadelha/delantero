(function ($) {
    
    $(function () {

        $("#webform-client-form-8 .webform-submit, #webform-client-form-59 .webform-submit").removeClass("btn-default").addClass("btn-default-blue");

        $( ".help-block a" ).remove();

        $(".region-blockgroup-g-empreendimentos").addClass("container");

        $(".owl-prev").html('<i class="fa fa-chevron-left"></i>');

        $(".owl-next").html('<i class="fa fa-chevron-right"></i>');

        $('#webform-client-form-8 input, #webform-client-form-59 input').click(function () {
    
            $('input:not(:checked)').parent().removeClass("active");

            $('input:checked').parent().addClass("active");
            
        });

        $('.owl-item .icons-list').each(function(index, value) { 

            var subtitle = $(".owl-item .item-"+index);

            var i = 0;

            $(this).find("i").each(function(){

                subtitle = $(".owl-item .item-"+index+" .icons-list .item-"+i).text();

                $(this).attr("title", subtitle);

                $(this).addClass("tooltip-icon");

                i++;

            });

        });

    });

    $(document).ready(function() {
            
        $('.tooltip-icon').tooltipster({
   
            trigger: 'click'

        });
        
    });

})(jQuery);