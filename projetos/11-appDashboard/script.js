$(document).ready(() => {

    $('#documentacao').on('click', () =>{
       // $('#pagina').load('documentacao.html')
       $.get('documentacao.html', data =>{
            $('#pagina').html(data)
       }) // get


    })
    
    $.post('suporte.html', data =>{
        $('#pagina').html(data)
   }) // get
})