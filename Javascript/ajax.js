document.querySelector("#bt").addEventListener("click", function(){
var xmlHttp;

if(XMLHttpRequest){
	xmlHttp = new XMLHttpRequest();
	console.log("Este navegador utiliza XMLHttpRequest")
}else{
	xmlHttp = new activeXObject("Microsoft.XMLHttp")
}
// qual a funcao que eu irei eecutar quando a requisicao estiver em estado pronto?
xmlHttp.onreadystatechange = function(){
	if(!this.readyState == 2){
		document.querySelector("img").style.display='block'
	}
	if(this.readyState == 4 && this.status== 200){
		document.querySelector("#nome").value= this.responseText
		document.querySelector("img").style.display='none'
	}
			
}

//requisicao

xmlHttp.open("GET", "arquivo.html?nome=", true)
xmlHttp.send()
})