LOADER = function(){
    return $('#loader').fadeToggle("fast", "swing");
};

$(function(){
    LOADER();
    tinymce.init({
        selector: '.wysiwyg',
        menubar: false,
        statusbar: false,
        height: 300
    });
});