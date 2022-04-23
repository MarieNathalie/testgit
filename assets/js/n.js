$(document).ready(function(){
    
    function reinitialiserForm(){
		$("#nom").val("");
		$("#prenom").val("");
		$("#email").val("");
		$("#password").val("");
		$("#pss").val("");
		$("#mail").val("");
                $("#pswd").val("");
	}
	function enregistrer() {
		var nom = $("#nom").val();
		var prenom = $("#prenom").val();
		var email = $("#email").val();
		var password = $("#password").val();
		var notif = "";
			notif =nom+" "+prenom+ " est enregistré avec succès";
		$.ajax({
			type : "POST",
			url : "saveUser.action",
			data : "nom=" + nom + "&prenom=" + prenom + "&email=" + email+ "&password=" + password,
			success : function(data) {
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
         function Email(){
            $.ajax({
			type: "GET",
			url: "useList.action",
			success: function(result){
				var tbData="";
				$.each(result.useList, function(){
					tbData += "<option value="+this.email+">"+this.email+"" +
							"</option>"
				});
                                
				$("#emailuse").html(tbData);
                                
			},
			error: function(result){
				alert("Erreur!");
			}
		});
        }
           Email(); 
 function Id(){
            $.ajax({
			type: "GET",
			url: "useList.action",
			success: function(result){
				var tbData="";
				$.each(result.useList, function(){
					tbData += "<option value='doudou@liferay.com'>doudou@liferay.com" +
							"</option>"
				});
                                
				$("#iduse").html(tbData);
                                
			},
			error: function(result){
				alert("Erreur!");
			}
		});
        }
           Id(); 

            $(document).on("keyup", "#email", function(){
               Email();
               Id();
            });
        $(document).on("click", "#btnSave", function(){
            $("#verifAction").val("")
            var nom = $("#nom").val();
            var prenom = $("#prenom").val();
            var email = $("#email").val();
             var emailuse = $("#emailuse").val();
            var password = $("#password").val();
            var pss = $("#pss").val();
            var notif = "";
            var notif1 = "";
            var notif2 = "";
            var notif3 = "";
            notif = "Veuillez remplir le(s) champ(s) vide(s)"  
            notif1 = "Verifier votre mot de passe"
            notif2= "Votre mot de passe est simple, veuillez saisir au moins 8 caractères"
            notif= email+ " existe déjà"
            if(nom == ""){
                 swal("Erreur", notif, "warning");
            }
            else if(prenom == ""){
                 swal("Erreur", notif, "warning");
            }
            else if(email == ""){
                 swal("Erreur", notif, "warning");
            }
            else if(password == ""){
                 swal("Erreur", notif, "warning");
            }
            else if(pss == ""){
                 swal("Erreur", notif, "warning");
            }
             else if(password != pss){
                 swal("Erreur", notif1, "warning");
            }
            else if(email != emailuse){
                 swal("Erreur", notif3, "warning");
            }
            else{
            enregistrer(); 
            
            }
            
        });
});


