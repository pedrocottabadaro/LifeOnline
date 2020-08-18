var marcaFiat=['Argo','Mobi','Palio','Strada','Toro','Uno','Sienna','Punto'];

var marcaVW=['Gol','T-Cross','Fox','Polo','Saveiro','Amarok','Golf','Up'];

var marcaGM=['Camaro','Onix','Corsa','Cruze','Opala','S10','Spin'];






function atualizarModelosCadastro(idMarca,idModelo){
    
   
  
    //Pegar valor marca.
    
    var marcaSelecionada=document.getElementById(idMarca).value;


    //Pegar o select do modelo.

    var modelo=document.getElementById(idModelo);

    
    
    //Tirar qualquer option dentro dele.

    modelo.innerHTML=""
    var vetModelos;

    //verificar qual marca selecionada
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
        var option=document.createElement("option")
        option.text=x;
        modelo.add(option);
    }

    

    modelo.removeAttribute("disabled")
    


}

