$(document).ready(function(){
	function listerCom(){
		$.ajax({
			type: "GET",
			url: "listCommande.action",
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
						"data-prix='"+this.prixuni+"' data-quantite='"+this.qteachete+"' data-cin='"+this.cin+"' data-date='"+this.date+"' data-total='"+this.total+"'><img src='img/valid.png' alt=''>" +
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
        function eff(){
            $("#cle").val("");
            $("#qt").val("");
            $("total").val("");
            $("#idprod").val("");
            $("#stockprod").val("");
        }
        function calcul(){
            var stock = $("#qt").val();
            var stock1 = $("#stockprod").val();
            var calc = parseFloat(stock) + parseFloat(stock1);
            
            $("#total").val(calc);
        }
        function Stock(){
            var nomKey=$("#cle").val();
            $.ajax({
			type: "GET",
			url: "Stock.action",
			data:"nomKey="+nomKey,
			success: function(result){
				var tbData="";
				$.each(result.prodList, function(){
					tbData += "<option value="+this.stock+">"+this.stock+"" +
							"</option>"
				});
                                
				$("#stockprod").html(tbData);
                                
			},
			error: function(result){
				alert("Erreur!");
			}
		});
        }
         function Id(){
             var nomKey=$("#cle").val();
            $.ajax({
			type: "GET",
			url: "idList.action",
			data:"nomKey="+nomKey,
			success: function(result){
				var tbData="";
				$.each(result.prodList, function(){
					tbData += "<option value="+this.id+">"+this.id+"" +
							"</option>"
				});
                                
				$("#idprod").html(tbData);
                                
			},
			error: function(result){
				alert("Erreur!");
			}
		});
        }
function annulerCom(idAnn){
		
		$.ajax({
			type : "GET",
			url : "deleteCommande.action?idAnn="+idAnn, 
			success : function(data) {
				listerCom();
			},
			complete : function(){
				
			},
			error : function(data) {
				var notif = data.msg;
			}
		});
		
	}
function updateStock(){
    var id = $("#idprod").val();
    var total = $("#total").val();
    var cle = $("#cle").val();
    var qt = $("#qt").val();
    var stock = $("#stockprod").val();
    var notif="";
    notif="La stock de "+cle+" est "+stock+" + "+qt+" = "+total
    $.ajax({
                                    type : "POST",
                                    url : "UpdateStock.action",
                                    data : "stock=" + total+"&id="+id,
					success : function(data) {
                                             swal("Success", notif, "success");
                                            },
                                            complete : function(){
                                            eff();
                                            },
                                            error : function(data) {
                                            var notif = data.msg;
                                            swal("Erreur", notif, "error");
							}
						});
}
		$(document).on("click", "#btnSuppr", function(){
			var idAnn=$(this).attr("data-id");
                         var nomKey=$(this).attr("data-nomprod");
                         var qt = $(this).attr("data-quantite");
                         
                         $("#qt").val(qt);
                         $("#cle").val(nomKey);
                         Stock();
                         Id();
                         calcul();
			swal({
				  title: "Etes-vous sur?",
				  text: "de vouloir supprimer,l'action est ireversible!",
				  icon: "warning",
				  buttons: true,
				  dangerMode: true,
				})
				.then((willDelete) => {
				  if (willDelete) {
					  swal("Suppression reussi avec succes!", {
					      icon: "success",});
                                              
                                           calcul();
                                           updateStock();
					  annulerCom(idAnn);
				  }else{
                                      eff();
                                  }
                                 
				  });
		});
		
		$(document).on("click", "#btnVal", function(){
			var id=$(this).attr("data-id");
                        var etat = $("#etat1").val();
                        var notif="";
                        notif = "Achat éffectué"
			$.ajax({
							type : "POST",
							url : "Update.action",
							data : "etat=" + etat+"&id="+id,
							success : function(data) {
                                                            swal("Success", notif, "success");
                                                         
                                                            listerCom();
							},
							complete : function(){
								reinitialiserForm();
							},
							error : function(data) {
								var notif = data.msg;
								swal("Erreur", notif, "error");
                                                                
							}
						});
		});
	
});


