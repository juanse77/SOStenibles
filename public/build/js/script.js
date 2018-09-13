function gustar(i){
    
    if($("#corazon"+i).hasClass("like")){
    
        $("#corazon"+i).removeClass("like");
    
        $("#likes"+i).text(function(j, texto){
            var likes = parseInt(texto);
            likes--;
            return likes;
        });
    
    }else{
    
        $("#corazon"+i).addClass("like");
    
        $("#likes"+i).text(function(j, texto){
            var likes = parseInt(texto);
            likes++;
            return likes;
        });
    
    }

}

function copiarAPortapapeles(){
    var aux = document.createElement("input");

    aux.setAttribute("value", document.getElementById("codigoLogo").value);  
    document.body.appendChild(aux);
    
    aux.select();  
    
    document.execCommand("copy");
    document.body.removeChild(aux);
}