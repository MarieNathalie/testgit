$(document).ready(function(){
    function listerAchat(){
        var cin = $("#cin").val();
		$.ajax({
			type: "GET",
			url: "Tab.action",
                        data:"nomKey="+cin,
			success: function(result){
				var tbData="";
				$.each(result.comList, function(){
					tbData += "<tr class='item-row'><td class='description' style='text-align: center;'>"+this.nomprod+"</td>" +
                                                                        "<td style='text-align: center;'>"+this.prixuni+"</td>" +
									"<td style='text-align: center;'>"+this.qteachete+"</td>" +
									"<td style='text-align: center;'>"+this.total+"</td>" +
                                                                        
									
							"</tr>" 
				});
				$("#tbody").html(tbData);
			},
			error: function(result){
				alert("Erreur!");
			}
		});
	}
        listerAchat();
    function aff(){
swal("Entrer CIN du client:", {
			  content: "input", 
                          buttons: true,
			  dangerMode: false,
			})
			.then((willDelete) => {
			  if (willDelete != "") {
                              var cin = $("#cin").val(willDelete);
                              click();
                             click1();
                             listerAchat();
                           
                             
                           
			  }
                          
			  });
    }
    aff();
    function aff2(){
      $.ajax({
			type: "GET",
			url: "listClient.action",
			success: function(result){
				var tbData="";
				$.each(result.cliList, function(){
					tbData += "<option value="+this.nom+">"+this.nom+"" +
							"</option>"
				});
				$("#nomCli").html(tbData);
			},
			error: function(result){
				alert("Erreur!");
			}
		});
	}
            aff2();

function aff3(){
      $.ajax({
			type: "GET",
			url: "listClient.action",
			success: function(result){
				var tbData="";
				$.each(result.cliList, function(){
					tbData += "<option value="+this.prenom+">"+this.prenom+"" +
							"</option>"
				});
				$("#prenomCli").html(tbData);
			},
			error: function(result){
				alert("Erreur!");
			}
		});
	}
            aff3();

function click(){
     var cin = $("#cin").val();
      $.ajax({
			type: "GET",
			url: "nomClient.action",
                       data:"nomKey="+cin,
			success: function(result){
				var tbData="";
				$.each(result.cliList, function(){
					tbData += "<option value="+this.nom+">"+this.nom+"" +
							"</option>"
				});
				$("#nomCli").html(tbData);
			},
			error: function(result){
				alert("Erreur!");
			}
		});
}
function click1(){
     var cin = $("#cin").val();
      $.ajax({
			type: "GET",
			url: "nomClient.action",
                       data:"nomKey="+cin,
			success: function(result){
				var tbData="";
				$.each(result.cliList, function(){
					tbData += "<option value="+this.prenom+">"+this.prenom+"" +
							"</option>"
				});
				$("#prenomCli").html(tbData);
                                var nomCli = $("#nomCli").val();
                                 var prenomCli = $("#prenomCli").val();
                                 
                                $("#nom").val(nomCli);
                                $("#prenom").val(prenomCli);
			},
			error: function(result){
				alert("Erreur!");
			}
		});
}
});