$(function(){
    $('option[value=default]').attr('disabled', 'disabled'); // Some Laravel fix for Form::select

    tinymce.init({
        selector: '.wysiwyg',
        menubar: false,
        statusbar: false,
        height: 300
    });
});
