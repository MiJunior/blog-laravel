<?php

namespace App\Helpers;
use App\Session;


class BrowserCounter{
    /**
     * returns count of browser
     */
    public static function getCountBrowser(){
        return[
            'chrome'  => Session::where('user_agent', 'LIKE', '%Chrome%')
                ->where('user_agent', 'NOT LIKE', '%Chromium%')
                ->where('user_agent', 'NOT LIKE', '%OPR/%')
                ->where('user_agent', 'NOT LIKE', '%MSI%')
                ->where('user_agent', 'NOT LIKE', '%Edge%')
                ->count(),
            'opera' => Session::where('user_agent', 'LIKE', '%OPR%')
                ->orWhere('user_agent', 'LIKE', '%Opera%')
                ->count(),
            'seamonkey' => Session::where('user_agent', 'LIKE', '%Seamonkey/%')->count(),
            'chromium' => Session::where('user_agent', 'LIKE', '%Chromium/%')->count(),
            'ie'=> Session::where('user_agent', 'LIKE', '%MSIE%')
                ->orWhere('user_agent', 'LIKE', '%Edge%')
                ->count(),
            'safari'  => Session::where('user_agent', 'LIKE', '%Safari%')
                ->where('user_agent', 'NOT LIKE', '%Chromium/%')
                ->where('user_agent', 'NOT LIKE', '%Chrome/%')
                ->count(),
        ];
    }
}