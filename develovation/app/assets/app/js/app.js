var is_full_screen = false;
var token;

var fixed_full_screen_btn = $("#fixed-full-screen-btn");
var fixed_full_screen_icon = fixed_full_screen_btn.find("i");

// If Dom Loaded
$(function(){

    // Get a IP Address
    get_ip();

    // Get Token to All Form Input Element
    set_token_in_all_forms();

    // Toggle a Full Screen
    full_screen_btn_click_event();

    // Run All "a-tag" Prefetch
    prefetch();
});

/**
 * Get a IP Address
 * $.getJSON Sample(Get IP ADDRESS)
 */
function get_ip()
{
    $.getJSON(
        "http://localhost:8888/github/develovation-project/develovation/api/get/ip/",
        null,
        function(data){
            let ip_address = data["ip"];
        }
    );
}

/**
 * If Full Screen Button Click,Toggle a Full Screen
 */
function full_screen_btn_click_event()
{
    fixed_full_screen_btn.on("click",function(){
        if(!is_full_screen)
        {
            run_full_screen();
        }
        else
        {
            exit_full_screen();
        }
    });
}

/**
 * Run Full Screen
 */
function run_full_screen()
{
    fixed_full_screen_icon.addClass("fa-compress-arrows-alt");
    fixed_full_screen_icon.removeClass("fa-expand-arrows-alt");
    is_full_screen = true;
    $('html').fullscreen();
}

/**
 * Exit Full Screen
 */
function exit_full_screen()
{
    fixed_full_screen_icon.addClass("fa-expand-arrows-alt");
    fixed_full_screen_icon.removeClass("fa-compress-arrows-alt");
    is_full_screen = false;
    $.fullscreen.exit();
    /* Or
    fixed_full_screen_icon.addClass("fa-expand-arrows-alt");
    fixed_full_screen_icon.removeClass("fa-compress-arrows-alt");
    */
}

/**
 * If Dom Loaded,Get Token to All Form Input Element
 */
function set_token_in_all_forms()
{
    let temp_token = $("#main-js").data("token");
    let form = $("form");
    (
        form.length === 0
        ||
        $.getJSON(
            "http://localhost:8888/github/develovation-project/develovation/api/get/token/",
            {
                "temp_token":temp_token
            },
            function(data){
                token = data["token"];
                for(let i = 0;i < form.length;i++)
                {
                    form.eq(i).append(
                        $("<input>",
                            {
                                type:"hidden",
                                name:"token",
                                value:token
                            }
                        )
                        
                    );
                }
            }
        )
    );
}

/**
 * If Dom Loaded,Run All "a-tag" Prefetch
 */
function prefetch()
{
    let a = $("a");
    let temp_hrefs = [];
    for(let i = 0;i < a.length;i++)
    {
        let target_href = a.eq(i).attr("href");
        (
            (
                target_href.indexOf("#") > -1
                ||
                temp_hrefs.indexOf(target_href) > -1
            )
            ||
            $("<link>",
                {
                    rel:"prefetch",
                    href:target_href,
                }
            ).appendTo('head')
        );
        temp_hrefs.push(target_href);
    }
}
