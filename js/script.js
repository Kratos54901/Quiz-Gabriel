var escolha; 
$(document).ready(function(){
    $('#verificar').click(function () {
        $.post("./ajax/verificar.php",{escolha}, function(resposta){
            if(resposta!=false){
                $('#certo').modal('show')
                $('.teste').html(resposta);
            }else{
                $('#errado').modal('show')
            }
        });
        $('#verificar').addClass("disabled")
        $('#btn1').removeClass("disabled")
        $('#btn2').removeClass("disabled")
    })

    $('#btn2').click(function () {
        $.post("./ajax/verificar.php",{add:1}, function(){
            location.reload();
        });
    })
    
    $('#btn1').click(function () {
        $.post("./ajax/verificar.php",{rem:1}, function(){
            location.reload();
        });
    })
});
function verificar(esc) {
    escolha=esc;
    $('#btn1').addClass("disabled")
    $('#btn2').addClass("disabled")
    $('#verificar').removeClass("disabled");
};