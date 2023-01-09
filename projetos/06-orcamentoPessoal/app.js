class Despesa{
    constructor(ano,mes,dia,tipo,descricao,valor){
        this.ano = ano
        this.mes = mes
        this.dia = dia
        this.tipo = tipo
        this.descricao =descricao
        this.valor = valor
    } // construtor

    validarDados(){
        for(let i in this){
            if(this[i] == undefined || this[i] == '' || this[i] == null){
                return false
            }
        }
        return true
    }// ValidadarDados


} //Despesa


class BD{

    constructor(){
        let id = localStorage.getItem('id')

        if(id === null){
            localStorage.setItem('id', 0)
        }

    } // constructor

    getProximoID(){
        let proximoId = localStorage.getItem('id')
        return parseInt(proximoId) + 1
    } //getProximoID

    gravar(d){
       
       let id = this.getProximoID()

       localStorage.setItem(id, JSON.stringify(d))

       localStorage.setItem('id', id)
    } //gravar

    recuperarTodosRegistros(){
        let despesas = Array()

        let id = localStorage.getItem('id')

        //recuperar todas as despesas registradas
        for(let i = 1; i <= id; i++){
            let despesa = JSON.parse(localStorage.getItem(i))
            
            if(despesa === null){
                continue
            }
            despesas.push(despesa)
        }

        return despesas
    }


}

let bd = new BD()

function cadastrarDespesa(){
    let ano = document.getElementById('ano')
    let mes = document.getElementById('mes')
    let dia = document.getElementById('dia')
    let tipo = document.getElementById('tipo')
    let descricao = document.getElementById('descricao')
    let valor = document.getElementById('valor')

    let despesa = new Despesa(ano.value,
          mes.value,
          dia.value, 
          tipo.value, 
          descricao.value, 
          valor.value)


    if(despesa.validarDados()){
        bd.gravar(despesa)

        document.getElementById('modal_titulo').innerHTML = "Registro inserido com sucesso"
        document.getElementById('modal_titulo_div').className = 'modal-header text-success'
        document.getElementById('modal_conteudo').innerHTML = "Despesa foi cadastrada com sucesso"
        document.getElementById('modal_btn').innerHTML = 'Voltar'
        document.getElementById('modal_btn').className = 'btn btn-success'
        $('#modalRegistraDespesa').modal('show')
    }else{
        document.getElementById('modal_titulo').innerHTML = "Erro na inclusão do registro"
        document.getElementById('modal_titulo_div').className = 'modal-header text-danger'
        document.getElementById('modal_conteudo').innerHTML = "Erro na gravação, verifique se todos os campos foram preenchidos"
        document.getElementById('modal_btn').innerHTML = 'Voltar e Corrigir'
        document.getElementById('modal_btn').className = 'btn btn-danger'
        
        $('#modalRegistraDespesa').modal('show')
    }
    
}//cadastrarDespesa

function carregaListaDespesas(){
    
    let despesas = Array()
    despesas = bd.recuperarTodosRegistros()

    var listaDespesas = document.getElementById('listaDespesas')
    

    despesas.forEach(function(d){
        let linha = listaDespesas.insertRow()

        linha.insertCell(0).innerHTML = `${ d.dia}/${d.mes}/${d.ano}`
        //Ajustar o tipo
        switch(parseInt(d.tipo)){
            case 1: d.tipo = 'Alimentação'
                break
            case 2: d.tipo = 'Educação'
                break
            case 3: d.tipo = 'Lazer'
                break
            case 4: d.tipo = 'Saúde'
                break
            case 5: d.tipo = 'Transporte'
                break

        }
        linha.insertCell(1).innerHTML = d.tipo
        linha.insertCell(2).innerHTML = d.descricao
        linha.insertCell(3).innerHTML = d.valor
        
    })

  

   

    

} //carregaListaDespesas

