$(document).ready(function(){
 $("#search").on("keyup", function() {
            var icon = $(this).val().toLowerCase();
            $("#fa-icons li").each(function() {
                var find = $(this).attr('data-original-title');
                if (find) {
                    var show = find.toLowerCase();
                }
                if (show) {
                    var num = show.indexOf(icon);
                    if (num !== -1) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                }
            });
        });

        $("#search1").on("keyup", function() {
            var icon1 = $(this).val().toLowerCase();
            $("#ionicons li").each(function() {
                var find1 = $(this).attr('data-original-title');
                if (find1) {
                    var show1 = find1.toLowerCase();
                }
                if (show1) {
                    var num1 = show1.indexOf(icon1);
                    if (num1 !== -1) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                }
            });
        });


        $("#search2").on("keyup", function() {
            var icon2 = $(this).val().toLowerCase();
            $("#lineicons li").each(function() {
                var find2 = $(this).attr('data-original-title');
                if (find2) {
                    var show2 = find2.toLowerCase();
                }
                if (show2) {
                    var num2 = show2.indexOf(icon2);
                    if (num2 !== -1) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                }
            });
        });
    $("#search4").on("keyup", function() {
        var icon4 = $(this).val().toLowerCase();
        $("#glyphicons li").each(function() {
            var find4 = $(this).attr('data-original-title');
            if (find4) {
                var show4 = find4.toLowerCase();
            }
            if (show4) {
                var num4 = show4.indexOf(icon4);
                if (num4 !== -1) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            }
        });
    });
$(".panel .panel-heading .clickable1").click(function()
{
    $(this).closest('.panel-heading').next().toggle("slow");
});
});


