/**
 * https://www.jqueryscript.net/form/Bootstrap-Dropdown-Select-Enhancement-Plugin-jQuery.html 를 호출 해줌 
 */
$(document).ready(function () {
    $('[name=handler_id]').removeClass("input-sm").addClass('selectpicker').data('live-search', true);
    $('.selectpicker').selectpicker({
        noneSelectedText:'할당 되지 않음',
        noneResultsText:'{0}과 일치하는 결과가 없습니다.',
        styleBase:'btn btn-sm'
    });
});