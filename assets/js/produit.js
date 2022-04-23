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
											"data-stock='"+this.stock+"' data-image='"+this.image+"'><img src='img/edit.png' alt=''>" +
										"</button>&nbsp;&nbsp;&nbsp;" +
										"<button id='btnDelete' class='btn btn-sm btn-danger' data-id='"+this.id+"'><img src='img/delete.png' alt=''></button></td>" +
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
	
	function reinitialiserForm(){
		$("#id").val("");
		$("#nom").val("");
		$("#prix").val("");
		$("#stock").val("");
		$("#code").val("");
                $("#total").val("");
	}
        function reinitialiserForm1(){
		$("#id1").val("");
		$("#nom1").val("");
		$("#prix1").val("");
		$("#stock1").val("");
		$("#code1").val("");
	}
	function enregistrer() {
            var id = $("#id").val();
		var code = $("#code").val();
		var nom = $("#nom").val();
		var prix = $("#prix").val();
		var stock = $("#stock").val();
		var mod=$("#verifAction").val();
		var notif = "";
			notif ="Livre "+nom+" "+ " est enregistré avec succès";
		$.ajax({
			type : "POST",
			url : "saveProduit.action",
			data : "id="+id+"&code=" + code +"&nom=" + nom + "&prix=" + prix + "&stock=" + stock,
			success : function(data) {
				listerProd();
				swal("Successful", notif, "success");
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
        function enregistrer1() {
            var id = $("#id1").val();
		var code = $("#code1").val();
		var nom = $("#nom1").val();
		var prix = $("#prix1").val();
		var stock = $("#stock1").val();
		var mod=$("#verifAction").val();
		var notif = "";
			notif ="Livre id= "+id+ " est modifié avec succès";
		$.ajax({
			type : "POST",
			url : "UpdateProduit.action",
			data : "id="+id+"&code=" + code +"&nom=" + nom + "&prix=" + prix + "&stock=" + stock,
			success : function(data) {
				listerProd();
				swal("Successful", notif, "success");
			},
			complete : function(){
				reinitialiserForm1();
			},
			error : function(data) {
				var notif = data.msg;
				swal("Erreur", notif, "error");
			}
		});
	}
        function f(){
               var d=new Date();
                $("#date").val(d.toDateString());
            }
        function supprimer(id){
		$.ajax({
			type : "GET",
			url : "deleteProduit.action?id="+id, 
			success : function(data) {
				listerProd();
			},
			complete : function(){
				reinitialiserForm();
			},
			error : function(data) {
				var notif = data.msg;
			}
		});
		
	}
        
         function erreur(){
              $.ajax({
			type: "GET",
			url: "listProduit.action",
			success: function(result){
				var tbData="";
				$.each(result.prodList, function(){
					tbData += "<option value="+this.nom+">"+this.nom+"" +
							"</option>"
				});
				$("#nomprod").html(tbData);
			},
			error: function(result){
				alert("Erreur!");
			}
		});
	}
        erreur();
        function Stock(){
            var nomKey=$("#nom").val();
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
            var nomKey=$("#nom").val();
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
        function calcul(){
            var stock = $("#stock").val();
            var stock1 = $("#stockprod").val();
            var calc = parseFloat(stock) + parseFloat(stock1);
            
            $("#total").val(calc);
        }
        $(document).on("keyup", "#stock", function(){
            calcul();
        });
         $(document).on("keyup", "#nom", function(){
          var nom = $("#nom").val();
          
          $("#nomprod").val(nom);
          Stock();
          Id();
          calcul();
         });
        $(document).on("click", "#btnAjout", function(){
            reinitialiserForm();
        });
	$(document).on("click", "#btnSave", function(){
		$("#verifAction").val("")
                var code = $("#code").val();
		var nom = $("#nom").val();
		var prix = $("#prix").val();
                var stock = $("#stock").val();
                var stock1 = $("stockprod").val();
                var nom1 = $("#nomprod").val();
                var id = $("#idprod").val();
                 var total = $("#total").val();
                 var notif1 = "";
        notif1 = "Cette livre est déjà enregistrée. Voullez-vous augmmenter votre stock??"
            var notif = "";
        notif = "Veuillez remplir le(s) champ(s) vide(s)"
        var notif2 = "";
        notif2 = "Augmentation de stock est réussi avec succés"
          if(nom == ""){
            swal("Erreur", notif, "warning");
        }else if(code==""){
            swal("Erreur", notif, "warning");
        }else if(prix==""){
            swal("Erreur", notif, "warning");
        }else if(stock==""){
            swal("Erreur", notif, "warning");
        }
        else if(nom==nom1){
            swal({
			  text: "Cette livre est déjà enregistrée, voullez-vous augmenter votre stock??",
			  icon: "warning",
			  buttons: true,
			  dangerMode: false,
			})
			.then((tot) => {
                            if(tot){
                         swal("Success", notif2, "success")
				
				$.ajax({
                                    type : "POST",
                                    url : "UpdateStock.action",
                                    data : "stock=" + total+"&id="+id,
					success : function(data) {
                                            listerProd();
                                            },
                                            complete : function(){
                                            reinitialiserForm();
                                            },
                                            error : function(data) {
                                            var notif = data.msg;
                                            swal("Erreur", notif, "error");
							}
						});}
			  });
        }
        else{
            enregistrer(); 
        }	
	});
        $(document).on("click", "#btnSave1", function(){
		$("#verifAction").val("")
                var code = $("#code1").val();
                 var id = $("#id1").val();
		var nom = $("#nom1").val();
		var prix = $("#prix1").val();
                var stock = $("#stock1").val();
                 var stocks = $("#zero").val();;
		 var notif1 = "";
        notif1 = "Veuillez réselectioner sur la liste"
        var notif2 = "";
        notif2 = "Votre stock est nul"
            var notif = "";
        notif = "Veuillez remplir le(s) champ(s) vide(s)"
          if(nom == ""){
            swal("Erreur", notif, "warning");
        }else if(code==""){
            swal("Erreur", notif, "warning");
        }else if(prix==""){
            swal("Erreur", notif, "warning");
        }else if(stock==""){
            swal("Erreur", notif, "warning");
        }
         else if(stock == stocks){
            swal("Erreur", notif2, "warning");
        }
        else if(id==""){
            swal("Erreur", notif1, "warning");
        }
        else{
            enregistrer1(); 
        }	
	});
	$(document).on("click", "#btnAnnuler", function(){
		reinitialiserForm();
	});
        $(document).on("click", "#btnAnnuler1", function(){
		reinitialiserForm1();
	});
	
	$(document).on("click", "#btnDelete", function(){
		var id = $(this).attr("data-id");
                var notif="";
                notif="Livre id= "+id+" "+"est supprimer avec success"
		swal({
			  title: "Etes-vous sur?",
			  text: "de vouloir supprimer cet client,l'action est ireversible!",
			  icon: "warning",
			  buttons: true,
			  dangerMode: true,
			})
			.then((willDelete) => {
			  if (willDelete) {
                             swal("Successful", notif, "success");
			    supprimer(id);
			  }
			  });
	});
	$(document).on("click", "#btnEdit", function(){
		$("#verifAction").val("modifier")
                var id = $(this).attr("data-id");
		var code = $(this).attr("data-code");
		var nom = $(this).attr("data-nom");
		var prix = $(this).attr("data-prix");
		var stock = $(this).attr("data-stock");
		
                $("#id1").val(id);
		$("#code1").val(code);
		$("#nom1").val(nom);
		$("#prix1").val(prix);
		$("#stock1").val(stock);
		$("#verifAction").val("modifier")
                f();
	});
	
	
	
	
});





