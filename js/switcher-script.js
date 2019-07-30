;(function($){
    "use strict";

    $(document).ready(function () {

        /*********
         Switcher Panel
         **********/
        if ($(".color_switcher_zone").length > 0) {
            //switcher
            var switchs = true;
            $(".settingBtn").on("click", function (e) {
                e.preventDefault();
                if (switchs) {
                    $(this).addClass("active");
                    $(".color_switcher_zone").animate({"right": "0px"}, 400).addClass('switcher_open');
                    switchs = false;
                } else {
                    $(this).removeClass("active");
                    $(".color_switcher_zone").animate({"right": "-366px"}, 400);
                    switchs = true;
                }
            });
            if ($("#grad_actionColors a").length > 0) {
                $("#grad_actionColors a").on("click", function (e) {
                    e.preventDefault();
                    var color = $(this).attr("href");
                    $("#grad_actionColors a").removeClass("active");
                    $(this).addClass("active");
                });
            }
        }
        /*********
         Switcher Panel ToolTip
         **********/
        /*$(function () {
            $('#age,#age1,#age2').tooltip({
                position: {
                    my: "right-30 left",
                    at: "left",
                    using: function (position, feedback) {
                        $(this).css(position);
                        $("<div>")
                            .addClass(feedback.vertical)
                            .addClass(feedback.horizontal)
                            .appendTo(this);
                    }
                }
            });
        });*/

    });

    $(document).mouseup(function(e) {
        if (e.which == 1) {
            var container = $(".switcher_open .color_switcher_inner");
            if (container) {
                $(".color_switcher_zone").animate({"right": "-366px"}, 400);
            }
        }
    });

})(jQuery);