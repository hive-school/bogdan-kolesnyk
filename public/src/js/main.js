LOADER = function(){
    return $('#loader').fadeToggle("fast", "swing");
};

$(function(){
    LOADER();
    console.log($('[data-info]').data('info'));
    $('[data-info]').popover({
        trigger: 'hover',
        //container: 'body',
        placement: 'top',
        content: $(this).data('info')
    });

    tinymce.init({
        selector: '.wysiwyg',
        menubar: false,
        statusbar: false,
        height: 300,
    });
});