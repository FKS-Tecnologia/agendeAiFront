$( document ).ready(function() {
    var url = window.location;
    $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
    $('ul.nav a').filter(function() {
        return this.href == url;
    }).parent().addClass('active');


    $('.date').datepicker({language: 'pt-BR'});
    $('.time').timepicker();

    $('[data-toggle="tooltip"]').tooltip();

    $(".switch").bootstrapSwitch({
        onText: 'Sim',
        offText: 'Não'
    });
});