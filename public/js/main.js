$( document ).ready(function() {

    $('.date').datepicker({language: 'pt-BR'});
    $('.time').timepicker();
    $('[data-toggle="tooltip"]').tooltip();
    $(".switch").bootstrapSwitch({
        onText: 'Sim',
        offText: 'Não'
    });
});