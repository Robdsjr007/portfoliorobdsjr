$(function(){
    function redimensionarJanela(){
    var alturaJanela = $(window).height();
    $('#primeiroConteudo').css('height',alturaJanela)
    $('#segundoConteudo').css('height',alturaJanela)
    console.log(alturaJanela);
}

    $('#menuInicio').click(function(){
        $('html, body').animate({scrollTop:$('#primeiroConteudo').offset().top})
    })
    $('#menuSobre').click(function(){
        $('html, body').animate({scrollTop:$('#segundoConteudo').offset().top})
    })

    redimensionarJanela()

    $(window).resize(function(){
        redimensionarJanela();
    })
})