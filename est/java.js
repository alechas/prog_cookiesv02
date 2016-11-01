function Ingresar()
{

  var pagina = "server.php";
  var user = $("#us").val();
  var pass = $("#pass").val();

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "LlamarServidor", user: user , pass: pass },
        async: true
        })
        .then(
			  function(respuesta) {
    				alert( respuesta );
  			}, 
  		function(respuesta) {
    			alert( respuesta );
  			}
		);
        
}