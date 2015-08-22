$(document).ready(function() {
    var boxWidth = 300;
    var boxHeight = 400;
    $(".html_contents img").each(function() {
        var imgWidth = $(this).width();
        var imgHeight = $(this).height();
        //比较imgBox的长宽比与img的长宽比大小
        if ((boxWidth / boxHeight) >= (imgWidth / imgHeight))
        {
            //重新设置img的width和height
            $(this).width((boxHeight * imgWidth) / imgHeight);
            $(this).height(boxHeight);
        }
        else
        {
            //重新设置img的width和height
            $(this).width(boxWidth);
            $(this).height((boxWidth * imgHeight) / imgWidth);

        }

    });
});