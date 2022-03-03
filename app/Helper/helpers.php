<?php

if (!function_exists('pages')) {
    function pages() {
        $pages = \App\Models\Page::active()->get();
        return $pages;
    }
}

if (!function_exists('page')) {
    function page($page) {
        $page = \App\Models\Page::active()->where('name', $page)->first();
        return $page;
    }
}

if (!function_exists('allowRoutePages')) {
    function allowRoutePages() {
        $array = pages()->pluck('name')->toArray();
        return implode('|', $array);
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
       $mainPages = \App\Models\MainPage::where('id','!=' ,1)->get();
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
    function bottom_header() {
       $links = \App\Models\Link::parents()->with('children')->get();
        return $links;
    }
}

if (!function_exists('getSection')) {
    function getSection($uniqueName) {
       $section = \App\Models\Block::where('type', \App\Models\Block::TYPE_SECTIONS)->where('unique_name', $uniqueName)->first();
       return $section;
    }
}


