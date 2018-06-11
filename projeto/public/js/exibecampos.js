$(document).ready(function(){
    $('#farmaceutico').click(function () {
        $('#crfDiv').show();
        $('#enderecoDiv').hide();
    });
    $('#cidadao').click(function () {
        $('#enderecoDiv').show();
        $('#crfDiv').hide();
    });
});