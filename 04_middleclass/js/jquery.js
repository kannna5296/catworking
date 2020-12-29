$(function () {
    $(".btn-gnavi").on("click", function () {
        // ハンバーガーメニューの位置を設定
        var rightVal = 0;
        if ($(this).hasClass("open")) {
            // 位置を移動させメニューを開いた状態にする
            rightVal = -window.outerWidth;
            // メニューを開いたら次回クリック時は閉じた状態になるよう設定
            $(this).removeClass("open");
        } else {
            // メニューを開いたら次回クリック時は閉じた状態になるよう設定
            $(this).addClass("open");
        }

        $("#globalnavi").stop().animate({
            right: rightVal
        }, 200);
    });
});