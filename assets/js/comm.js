$(document).ready(function(){
	function listerProd(){
		$.ajax({
			type: "GET",
			url: "listProduit.action",
			success: function(result){
				var tbData="";
				$.each(result.prodList, function(){
					tbData += "<tr><td>"+this.id+"</td>" +
									"<td>"+this.code+"</td>" +
									"<td>"+this.nom+"</td>" +
									"<td>"+this.prix+"</td>" +
									"<td>"+this.stock+"</td>" +
									"<td><button id='btnEdit' onclick="+"document.getElementById('id02').style.display='block'"+ " class='btn btn-sm btn-info' data-id='"+this.id+"' " +
											"data-nom='"+this.nom+"' data-code='"+this.code+"' data-prix='"+this.prix+"' " +
											"data-stock='"+this.stock+"' data-image='"+this.image+"'><img src='img/comm.png' alt=''>" +
										"</button>&nbsp;&nbsp;&nbsp;" +
										"</td>" +
							"</tr>" 
				});
				$("#tbody").html(tbData);
			},
			error: function(result){
				alert("Erreur!");
			}
		});
	}
	listerProd();
	
	function afficheCIN(){
              $.ajax({
			type: "GET",
			url: "listClient.action",
			success: function(result){
				var tbData="";
				$.each(result.cliList, function(){
					tbData += "<option value="+this.cin+">"+this.cin+"" +
							"</option>"
				});
				$("#client").html(tbData);
			},
			error: function(result){
				alert("Erreur!");
			}
		});
	}
        afficheCIN();
	function afficheNomCli(){
            var nomKey=$("#client").val();
            $.ajax({
			type: "GET",
			url: "nomClient.action",
			data:"nomKey="+nomKey,
			success: function(result){
				var tbData="";
				$.each(result.cliList, function(){
					tbData += "<option value="+this.nom+">"+this.nom+"" +
							"</option>"
				});
                                var tbData1="";
				$.each(result.cliList, function(){
					tbData1 += "<option value="+this.prenom+">"+this.prenom+"" +
							"</option>"
				});
                                
				$("#nomCli").html(tbData);
                                $("#prenomCli").html(tbData1);
                                
			},
			error: function(result){
				alert("Erreur!");
			}
		});
        }
        afficheNomCli();
        $(document).on("click", "#client", function(){
            afficheNomCli();
        });
		
});




/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


