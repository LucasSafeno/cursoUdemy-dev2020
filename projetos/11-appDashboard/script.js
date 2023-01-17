$(document).ready(() => {

    $('#documentacao').on('click', () =>{
       // $('#pagina').load('documentacao.html')
       $.get('documentacao.html', data =>{
            $('#pagina').html(data)
       }) // get


    })
    
    $.get('suporte.html', data =>{
        $('#pagina').html(data)
   }) // get
})