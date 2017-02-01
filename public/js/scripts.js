$(function(){
    $("#email").click(function(){
        alert("Email Enviado com Sucesso!")
    });
});
$(function() {
    $('.mask-moeda').maskMoney({symbol:'R$ ', allowNegative: false, thousands:'.', decimal:',', affixesStay: false, showSymbol: true});
});
jQuery(function($){
    $(".date-ano").mask("9999");
});
jQuery(function($){
    $(".date-comp").mask("99/99/9999");
});
jQuery(function($){
    $(".number").mask("99");
});
$('#valid').click(function(){
    alert("Cadastro Efetuado com Sucesso!");
});
$('#edit').click(function(){
    alert("Cadastro Editado com Sucesso!");
});
$('#hist').click(function(){
    alert("Historio inserido com Sucesso!");
});
$('#hist2').click(function(){
    alert("Histórico Alterado com Sucesso!");
});





$(function () {
    $('.datetime').datetimepicker({
        locale:'pt-br',
        format: 'DD/MM/YYYY'
    });
});
$(function () {
    $('.dateyear').datetimepicker({
        locale:'pt-br',
        format: 'YYYY'
    });
});