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
				"<td>"+this.id+"</td>" +
				"<td>"+this.date+"</td>" +
				"<td>"+this.heure+"</td>" +
				"<td>"+this.code+"</td>" +
				"<td>"+this.nomprod+"</td>" +
				"<td>"+this.nomcli+"</td>" +
                                "<td>"+this.cin+"</td>" +
				"<td>"+this.qteachete+"</td>" +
				"<td>"+this.prixuni+"</td>" +
                                "<td>"+this.total+"</td>" +
				"<td><button id='btnSuppr' class='btn btn-sm btn-danger' data-id='"+this.id+"' " +
						"data-code='"+this.code+"' data-nomprod='"+this.nomprod+"' data-nomcli='"+this.nomcli+"' " +
						"data-prix='"+this.prixuni+"' data-quantite='"+this.qteachete+"' data-cin='"+this.cin+"' data-date='"+this.date+"' data-date='"+this.heure+"' data-total='"+this.total+"'><img src='img/delete.png' alt=''>" +
					"</button>&nbsp;&nbsp;&nbsp;&nbsp;" +
					"<button id='btnVal' class='btn btn-sm btn-success' data-id='"+this.id+"' " +
						"data-code='"+this.code+"' data-nom='"+this.nom+"' " +
						"data-prix='"+this.prixuni+"' data-quantite='"+this.qteachete+"' data-cin='"+this.cin+"' data-date='"+this.date+"' data-total='"+this.total+"'>&nbsp;&nbsp;Valider&nbsp;&nbsp;" +
					"</button>" +
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


