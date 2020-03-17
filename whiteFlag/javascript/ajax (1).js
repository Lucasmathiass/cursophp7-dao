document.querySelector("#bt").addEventListener("click", function(event){
	event.preventDefault();

if(XMLHttpRequest){
	xmlHttp = new XMLHttpRequest();
	console.log("Este navegador utiliza XMLHttpRequest")
}else{
	xmlHttp = new activeXObject("Microsoft.XMLHttp")
}
// qual a funcao que eu irei eecutar quando a requisicao estiver em estado pronto?
xmlHttp.onreadystatechange = function(){
	if(this.readyState == 4 && this.status== 200){
		
	}
			
}

//requisicao

xmlHttp.open("GET", "", true)
xmlHttp.send()
})
