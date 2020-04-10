<?php

function logined($username,$mysqli){
	$user_info = get_user_info();
	date_default_timezone_set('Asia/Tokyo');
	$date = date("Y年m月d日");
	$time = date("H時i分s秒");
	$name = ["username","date","time","platform","browser_name","browser_version"];
	$data = [$username,$date,$time,$user_info["platform"],$user_info["browser_name"],$user_info["browser_version"]];
	$query = "INSERT INTO login_history(".implode(",",$name).") VALUES('".implode("','",$data)."')";
	$mysqli->query($query);
}

function get_user_info(){
    $ua = $_SERVER['HTTP_USER_AGENT'];
    $browser_name = $browser_version = $platform = NULL;

    //Browser
    if(preg_match('/Edge/i', $ua)){
        $browser_name = 'Edge';
        if(preg_match('/Edge\/([0-9.]*)/', $ua, $match)){
            $browser_version = $match[1];
        }
    }elseif(preg_match('/(MSIE|Trident)/i', $ua)){
        $browser_name = 'IE';
        if(preg_match('/MSIE\s([0-9.]*)/', $ua, $match)){
            $browser_version = $match[1];
        }elseif(preg_match('/Trident\/7/', $ua, $match)){
            $browser_version = 11;
        }
    }elseif(preg_match('/Presto|OPR|OPiOS/i', $ua)){
        $browser_name = 'Opera';
        if(preg_match('/(Opera|OPR|OPiOS)\/([0-9.]*)/', $ua, $match)) $browser_version = $match[2];
    }elseif(preg_match('/Firefox/i', $ua)){
        $browser_name = 'Firefox';
        if(preg_match('/Firefox\/([0-9.]*)/', $ua, $match)) $browser_version = $match[1];
    }elseif(preg_match('/Chrome|CriOS/i', $ua)){
        $browser_name = 'Chrome';
        if(preg_match('/(Chrome|CriOS)\/([0-9.]*)/', $ua, $match)) $browser_version = $match[2];
    }elseif(preg_match('/Safari/i', $ua)){
        $browser_name = 'Safari';
        if(preg_match('/Version\/([0-9.]*)/', $ua, $match)) $browser_version = $match[1];
    }else{
        $browser_name = '不明';
        $browser_version = '不明';
    }

    //Platform
    if(preg_match('/ipod/i', $ua)){
        $platform = 'iPod';
    }elseif(preg_match('/iphone/i', $ua)){
        $platform = 'iPhone';
    }elseif(preg_match('/ipad/i', $ua)){
        $platform = 'iPad';
    }elseif(preg_match('/android/i', $ua)){
        $platform = 'Android';
    }elseif(preg_match('/windows phone/i', $ua)){
        $platform = 'Windows Phone';
        $platform = 'Windows Phone';
    }elseif(preg_match('/linux/i', $ua)){
        $platform = 'Linux';
    }elseif(preg_match('/macintosh|mac os/i', $ua)) {
        $platform = 'Mac';
    }elseif(preg_match('/windows/i', $ua)){
        $platform = 'Windows';
    }else{
        $platform = '不明';
    }

    return array(
        'browser_name' => $browser_name,
        'browser_version' => intval($browser_version),
        'platform' => $platform
    );
}