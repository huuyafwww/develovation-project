$(function(){
    let clipboard = new ClipboardJS('#copy-btn');
    clipboard.on('success', function(e) {
        splash("コピーしました！");
    });
    $("#input").on("keyup",function(){
        $("#output").text(
            JSON.stringify(
                JSON.parse(
                    $(this).val()
                )
            )
        );
    });
});