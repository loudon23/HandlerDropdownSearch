<?php
/**
 * MantisBT 의 이슈 할당시 담당자가 많을 경우 select 에서 찾기가 어려운점을 개선 하기 위한 플러그인
 * Bootstrap 의 Dropdown 과 검색기능을 합침
 * 내부적으로는 https://www.jqueryscript.net/form/Bootstrap-Dropdown-Select-Enhancement-Plugin-jQuery.html 를 가져다 씀
 * 
 * @author loudon23
 */
class HandlerDropdownSearchPlugin extends MantisPlugin {
    public function register() {
        $this->name        = 'HandlerDropdownSearch';
        $this->description = '할당하기에 Dropdown list의 검색 기능 추가 플러그인. PYL이 만들어 달라함';

        $this->version  = '1.0.0';
        $this->requires = array(
            'MantisCore' => '2.0.0',
        );

        $this->author  = 'loudon23';
        $this->contact = 'loudon23@naver.com';
        $this->url     = 'https://github.com/loudon23/HandlerDropdownSearch';
        //$this->page    = 'config_page';
    }

    function hooks() {
        return array(
            'EVENT_LAYOUT_RESOURCES' => 'resources',
        );
    }

    function resources() {
        $t_page = array_key_exists('REQUEST_URI', $_SERVER) ? basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) : basename(__FILE__);
        if($t_page == 'bug_report_page.php' || $t_page == 'bug_update_page.php') {
            return '<link rel="stylesheet" type="text/css" href="' . plugin_file( 'bootstrap-select/css/bootstrap-select.min.css' ) . '"></link>'
                .'<link rel="stylesheet" type="text/css" href="' . plugin_file( 'handler_dropdown_search.css' ) . '"></link>'
                .'<script type="text/javascript" src="' . plugin_file( 'bootstrap-select/js/bootstrap-select.min.js' ) . '"></script>'
                .'<script type="text/javascript" src="' . plugin_file( 'handler_dropdown_search.js' ) . '"></script>';
        }
    }
}