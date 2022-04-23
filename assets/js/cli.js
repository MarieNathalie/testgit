$(document).ready(function(){
	function listerCli(){
		$.ajax({
			type: "GET",
			url: "listClient.action",
			success: function(result){
				var tbData="";
				$.each(result.cliList, function(){
					tbData += "<tr><td>"+this.id+"</td>" +
                                                                        "<td>"+this.cin+"</td>" +
									"<td>"+this.nom+"</td>" +
									"<td>"+this.prenom+"</td>" +
									"<td>"+this.sexe+"</td>" +
									"<td>"+this.tel+"</td>" +
									"<td>"+this.adresse+"</td>" +
									"<td><button id='btnEdit' onclick="+"document.getElementById('id02').style.display='block'"+ " class='btn btn-sm btn-info' data-id='"+this.id+"' " +
											"data-nom='"+this.nom+"' data-prenom='"+this.prenom+"' data-cin='"+this.cin+"' " +
											"data-sexe='"+this.sexe+"' data-adresse='"+this.adresse+"' data-tel='"+this.tel+"'><img src='img/edit.png' alt=''>" +
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
	listerCli();
	
	function reinitialiserForm(){
		$("#cin").val("");
		$("#nom").val("");
		$("#prenom").val("");
		$("#sexe").val("");
		$("#adresse").val("");
		$("#tel").val("");
	}
        function reinitialiserForm1(){
		$("#cin").val("");
		$("#nom").val("");
		$("#prenom").val("");
		$("#adresse").val("");
		$("#tel").val("");
	}
        function reinitialiserForm2(){
		$("#cin1").val("");
		$("#nom1").val("");
		$("#prenom1").val("");
		$("#sexe1").val("");
		$("#adresse1").val("");
		$("#tel1").val("");
	}
        function erreur(){
              var cinkey=$("#cin").val();
		$.ajax({
			type: "GET",
			url: "Client.action",
			data:"cinKey="+cinkey,
			success: function(result){
				var tbData="";
				$.each(result.cliList, function(){
					tbData += "<option value="+this.cin+">"+this.cin+"" +
							"</option>"
				});
				$("#cinCli").html(tbData);
			},
			error: function(result){
				alert("Erreur!");
			}
		});
	}
	function enregistrer() {
            var id = $("#id").val();
		var cin = $("#cin").val();
		var nom = $("#nom").val();
		var prenom = $("#prenom").val();
		var sexe = $("#sexe").val();
		var adresse = $("#adresse").val();
		var tel = $("#tel").val();
		var mod=$("#verifAction").val();
		var notif = "";
			notif =nom+" "+prenom+ " est enregistré avec succès";
		$.ajax({
			type : "POST",
			url : "saveClient.action",
			data : "id="+id+"&cin=" + cin +"&nom=" + nom + "&prenom=" + prenom + "&sexe=" + sexe+ "&adresse=" + adresse + "&tel=" + tel,
			success : function(data) {
                                erreur();
				listerCli();
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
		var cin = $("#cin1").val();
		var nom = $("#nom1").val();
		var prenom = $("#prenom1").val();
		var sexe = $("#sexe1").val();
		var adresse = $("#adresse1").val();
		var tel = $("#tel1").val();
		var mod=$("#verifAction").val();
		var notif = "";
			notif ="id= "+id+" est modifié avec succès";
		$.ajax({
			type : "POST",
			url : "UpdateClient.action",
			data : "id="+id+"&cin=" + cin +"&nom=" + nom + "&prenom=" + prenom + "&sexe=" + sexe+ "&adresse=" + adresse + "&tel=" + tel,
			success : function(data) {
				listerCli();
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
         $(document).on("keyup", "#cin", function(){
             erreur();
         });
        $(document).on("click", "#btnAjout", function(){
            reinitialiserForm1();
        });
	$(document).on("click", "#btnSave", function(){
		$("#verifAction").val("")
                var cin = $("#cin").val();
		var nom = $("#nom").val();
		var prenom = $("#prenom").val();
		var sexe = $("#sexe").val();
		var adresse = $("#adresse").val();
		var tel = $("#tel").val();
                
            var notif = "";
        notif = "Veuillez remplir le(s) champ(s) vide(s)"
          if(nom == ""){
            swal("Erreur", notif, "warning");
        }else if(cin==""){
            swal("Erreur", notif, "warning");
        }else if(prenom==""){
            swal("Erreur", notif, "warning");
        }else if(cin==""){
            swal("Erreur", notif, "warning");
        }
        else if(sexe==""){
            swal("Erreur", notif, "warning");
        }else if(adresse==""){
            swal("Erreur", notif, "warning");
        }
        else if(tel==""){
            swal("Erreur", notif, "warning");
        }
        else{
            
            enregistrer(); 
        }	
	});
        $(document).on("click", "#btnSave1", function(){
		$("#verifAction").val("")
                var cin = $("#cin1").val();
		var nom = $("#nom1").val();
		var prenom = $("#prenom1").val();
		var sexe = $("#sexe1").val();
		var adresse = $("#adresse1").val();
		var tel = $("#tel1").val();
                
            var notif = "";
        notif = "Veuillez remplir le(s) champ(s) vide(s)"
          if(nom == ""){
            swal("Erreur", notif, "warning");
        }else if(cin==""){
            swal("Erreur", notif, "warning");
        }else if(prenom==""){
            swal("Erreur", notif, "warning");
        }else if(cin==""){
            swal("Erreur", notif, "warning");
        }
        else if(sexe==""){
            swal("Erreur", notif, "warning");
        }else if(adresse==""){
            swal("Erreur", notif, "warning");
        }
        else if(tel==""){
            swal("Erreur", notif, "warning");
        }
        else{
            enregistrer1(); 
        }	
	});
	$(document).on("click", "#btnAnnuler", function(){
		reinitialiserForm();
	});
        $(document).on("click", "#btnAnnuler1", function(){
		reinitialiserForm2();
	});
	function supprimer(id){
		$.ajax({
			type : "GET",
			url : "deleteClient.action?id="+id, 
			success : function(data) {
				listerCli();
			},
			complete : function(){
				reinitialiserForm();
			},
			error : function(data) {
				var notif = data.msg;
			}
		});
		
	}
	$(document).on("click", "#btnDelete", function(){
		var id = $(this).attr("data-id");
                var notif="";
                notif="Client id= "+id+" "+"est supprimer avec success"
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
		var cin = $(this).attr("data-cin");
		var nom = $(this).attr("data-nom");
		var prenom = $(this).attr("data-prenom");
		var sexe = $(this).attr("data-sexe");
		var adresse = $(this).attr("data-adresse");
		var tel = $(this).attr("data-tel");
		
                $("#id1").val(id);
		$("#cin1").val(cin);
		$("#nom1").val(nom);
		$("#prenom1").val(prenom);
		$("#sexe1 option[value='"+sexe+"']").prop("selected", "selected");
		$("#adresse1").val(adresse);
		$("#tel1").val(tel);
		$("#verifAction").val("modifier")
	});
	
	
	
	
});






/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


