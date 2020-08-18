





//Os modelos mais atuas/usadas .
var marcaFiat=['Argo','Mobi','Palio','Strada','Toro','Uno','Sienna','Punto'];
var marcaVW=['Gol','T-Cross','Fox','Polo','Saveiro','Amarok','Golf','Up'];
var marcaGM=['Camaro','Onix','Corsa','Cruze','Opala','S10','Spin'];



function atualizarModelos(){
    
    
    //Pegar valor marca.
    var marcaSelecionada=document.getElementById("marca").value;
    
    //Pegar o select do modelo.
    var modelo=document.getElementById("modelo");
    
    //Tirar qualquer option dentro dele.

    modelo.innerHTML="";
    var vetModelos;

    //Na consulta preicso existir uma option com valor vazio para a pessoa apenas pesquisar a marca.
    var option=document.createElement("option");
    option.text="";
    modelo.add(option);

    //Verificar qual marca selecionada
    switch (1>0) {
        case marcaSelecionada=='FIAT':
            vetModelos=marcaFiat;
            break;
        case marcaSelecionada=='Volkswagen':
            vetModelos=marcaVW;
            break;
        case marcaSelecionada=='GM':
            vetModelos=marcaGM;
            break;
        
            
        default:
            break;
    }
    
    //Adicionar todos modelos como opcoes 
   
        for (const x of vetModelos) {
            var option=document.createElement("option");
            option.text=x;
            modelo.add(option);
        }


    
    


}

//Preencher a tabela com os valores do banco de dados para depois botar no index
$('#select-form').submit(function(e){
    e.preventDefault()

    let dados = new FormData(this)
    
    

    $.ajax({
        type: 'POST',
        url: 'tabela.php',
        data: dados,
        processData: false,
        cache: false,
        contentType: false,
        success: function( data ) {
            $('.tabela').html(data)
            
            
        }
    });
})



//preencher o modal com os dados do modal php
$('.botao-ajustar').click(function(e){

   
    let id = $(this).attr('data-id');

   
    
    $.ajax({
        type: 'POST',
        url: 'modal.php',
        data: {id:id},
        
       
        success: function( data ) {
            $('.modal-body').html(data)
           
            
        }
    });
})








