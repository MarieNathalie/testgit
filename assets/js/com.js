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
									"<td><button id='btnCom' onclick="+"document.getElementById('id02').style.display='block'"+ " class='btn btn-sm btn-info' data-id='"+this.id+"' " +
											"data-nom='"+this.nom+"' data-code='"+this.code+"' data-prix='"+this.prix+"' " +
											"data-stock='"+this.stock+"'><img src='img/comm.png' alt=''>" +
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
        function aff(){
             var nom = $("#nomCli").val();
            
            $("#nom").val(nom);
        }
        $(document).on("click", "#client", function(){
            aff();
        });
        $(document).on("keyup", "#client", function(){
            afficheNomCli();
            aff();
        });
        $(document).on("click", "#btnCom", function(){
             aff();
            var id=$("#id").val();
            var datesave=$("#date").val();
            var heuresave=$("#heure").val();
            var idprod=$(this).attr("data-id");
            var code=$(this).attr("data-code");
            var nomprod=$(this).attr("data-nom");
            var prix1=$(this).attr("data-prix");
            var stock = $(this).attr("data-stock");
            var cin = $("#client").val();
            var prenom = $("#prenomCli").val();
            var nom = $("#nomCli").val();
            var nom1 = $("#nom").val();
            var etat = $("#etat").val();
            var notif = "";
            notif = "Veuillez remplir votre CIN"
            var notif1 = "";
            notif1 = "Vous n'êtes pas sur la liste des clients"
            
            if(cin==""){
                swal("Erreur", notif, "warning");
            }
            else if(nom1 ==""){
            swal("Erreur", notif1, "warning");
            }
            else{
                swal("Entrer le nombre des livres= "+nomprod+" que vous voulez acheter:", {
			  content: "input", 
                          buttons: true,
			  dangerMode: false,
                          
			})			
			.then((tot) => {
				if(tot==null){
					swal(`Action annuler`)	
				}
				if(tot===""||tot==null||tot=="0"){
					swal(`Action annuler`)
				}else{
					var achat = tot;
					var rest = stock - achat0
					if(rest<0){
						swal(`Stock insuffisant`)
					}else{
						
						var total=tot*prix1;
                                                
						$.ajax({
							type : "POST",
							url : "UpdateStock.action",
							data : "stock=" + rest+"&id="+idprod,
							success : function(data) {
                                                            swal(`Reste du stock: ${rest}`,`Net à Payer: ${total}`);
                                                         
                                                            listerProd();
							},
							complete : function(){
								reinitialiserForm();
							},
							error : function(data) {
								var notif = data.msg;
								swal("Erreur", notif, "error");
                                                                
							}
						});
						$.ajax({
							type : "POST",
							url : "saveCommande.action",
							data : "id=" + id +"&cin=" + cin + "&code=" + code + "&nomprod=" + nomprod+ "&nomcli=" + nom+ "&date=" + datesave + "&prixuni=" + prix1+ "&qteachete=" + tot + "&total=" + total+ "&heure="+heuresave+ "&etat="+etat,
							success : function(data) {
								NetPayer();
								//$("#btnValider").removeClass("disabled");
							},
							complete : function(){
								reinitialiserForm();
							},
							error : function(data) {
								var notif = data.msg;
								swal("Erreur", notif, "error");
							}
						});
						
						
						
					}
				    
					
				}
				
			});


            }
            
            
        });
		
});




/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


