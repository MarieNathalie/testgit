$(document).ready(function(){
	function listerCom(){
		var nomKey = $("#etat").val();
		$.ajax({
			type: "GET",
			url: "list.action",
			data:"nomKey="+nomKey,
			success: function(result){
			var tbData="";
			$.each(result.comList, function(){
				tbData += "<tr>" +
				"<td>"+this.date+"</td>" +
				"<td>"+this.heure+"</td>" +
				"<td>"+this.code+"</td>" +
				"<td>"+this.nomprod+"</td>" +
				"<td>"+this.nomcli+"</td>" +
                                "<td>"+this.cin+"</td>" +
				"<td>"+this.qteachete+"</td>" +
				"<td>"+this.prixuni+"</td>" +
                                "<td>"+this.total+"</td>" +
				
							"</tr>" 
			});
			$("#tbody").html(tbData);
			},
			error: function(result){
				alert("Erreur!");
			}
		});
		
	}
	listerCom();

	
});


