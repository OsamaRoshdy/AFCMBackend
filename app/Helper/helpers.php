<?php

if (!function_exists('eventDate')) {
    function eventDate($date) {
        $date = \Carbon\Carbon::create($date);
//        $pages = \App\Models\Page::active()->get();
        return $date;
    }
}

if (!function_exists('getParentCategories')) {
    function getParentCategories() {
        $categories = \App\Models\Category::parent()->active()->get();
        return $categories;
    }
}

if (!function_exists('aside')) {
    function aside() {
        return config('admin');
    }
}

if (!function_exists('slug_ar')) {
    function slug_ar($string, $separator = '-') {
        if (is_null($string)) {
            return "";
        }

        $string = trim($string);

        $string = mb_strtolower($string, "UTF-8");;

        $string = preg_replace("/[^a-z0-9_\sءاأإآؤئبتثجحخدذرزسشصضطظعغفقكلمنهويةى]#u/", "", $string);

        $string = preg_replace("/[\s-]+/", " ", $string);

        $string = preg_replace("/[\s_]/", $separator, $string);

        return $string;    }
}

if (!function_exists('getMainPages')) {
    function getMainPages() {
       $mainPages = \App\Models\MainPage::where('id','!=' ,1)->active()->get();
        return $mainPages;
    }
}

if (!function_exists('getMainPage')) {
    function getMainPage($id) {
       $mainPage = \App\Models\MainPage::find($id);
        return $mainPage;
    }
}

if (!function_exists('bottom_header')) {
    function bottom_header($mainPage) {
        $links = \App\Models\Link::parents()->where('menu_link_id', $mainPage)->with('children')->active()->get();
        return $links;
    }
}

if (!function_exists('getSection')) {
    function getSection($uniqueName) {
       $section = \App\Models\Block::where('type', \App\Models\Block::TYPE_SECTIONS)->where('unique_name', $uniqueName)->first();
       return $section;
    }
}


if (!function_exists('getPartnerFooter')) {
    function getPartnerFooter() {
       $partners = \App\Models\Partner::footer()->orderBy('sort', 'asc')->take(4)->get();
       return $partners;
    }
}

if (!function_exists('getLinksFooter')) {
    function getLinksFooter() {
       $links = \App\Models\Link::where('menu_link_id', 4)->orderBy('sort', 'asc')->get();
        return $links;
    }
}


