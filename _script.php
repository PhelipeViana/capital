<script src="CONFIG/JS/jquery.js"></script>
<script src="CONFIG/JS/firebase.js"></script>
<script src="CONFIG/JS/analitic.js"></script>
<script src="CONFIG/JS/app.js"></script>
<script src="CONFIG/JS/mascara.js"></script>
<script src="CONFIG/JS/cpf.js"></script>
<script src="CONFIG/JS/locais.js"></script>
<?php 

$validador_usuario=$_SESSION['id_usuario']; //TOKEN_USER
$endpoint="API/webservice.php";


?>	




<script>
	
	const DADOS={
		PARS:function(auth,p1=0,p2=0,p3=0,p4=0,p5=0){
			let obj={
				AUTH:auth,
				TOKEN_USER:"<?=$validador_usuario?>",
				p1:p1,
				p2:p2,
				p3:p3,
				p4:p4,
				p5:p5
			}
			return obj;
		},
		OBJ:function(auth,obj){
			obj['TOKEN_USER']="<?=$validador_usuario?>";
			obj['AUTH']=auth;

			
			return obj;
		},
		CLASSE:function(auth,cl){
			let classe=document.getElementsByClassName(cl);
			let json={};
			for(let i=0;i<classe.length;i++){
				json[classe[i].getAttribute("name")]=classe[i].value;
			}
			json['TOKEN_USER']="<?=$validador_usuario?>";
			json['AUTH']=auth;
			
			return json;
		},
		FORM:function(auth,formulario,p1=0){
			let int=$("#"+formulario).serialize();
			let usuario="<?=$validador_usuario?>";
			int+="&AUTH="+auth+"&TOKEN_USER="+usuario+"&p1="+p1;
			return int
		}

	}
	jQuery(document).ready(function($) {
		initializeMasks();
		
	});

	function initializeMasks() {
		$(".mask-credit-card").mask("9999 9999 9999 99999");
		$(".mask-month-year").mask("99/9999");
		$(".mask-date").mask("99/99/9999");
		$(".mask-cep").mask("99999-999");
		$(".mask-cpf").mask("999.999.999-99");
		$(".mask-cnpj").mask("99.999.999/9999-99");
		$(".mask-cellphone").mask("99999-9999");
		$(".mask-onlyphone").mask("99999-9999");
		$(".mask-phone").mask("(99) 99999-9999");
		$(".mask-numhab").mask("99999999999");
		$(".mask-placa").mask("999-999");



	}


	function limparFormulario(form){
		$('#'+form).each (function(){
			this.reset();
		});
	}
	

//	console.log(CPF.generate())

function CallDocRun(){
	firebase.database().ref("DOCUMENTOS").child('ATUAL').set({time:time()});

}
function relogio(){
	var tempo=new Date();
	var hora=tempo.getHours();
	var min=tempo.getMinutes();
	var seg=tempo.getSeconds();
	if(min<10){

		var min="0"+min;
	}
	if(seg<10){

		var seg="0"+seg;
	}

	let horario=hora+":"+min+":"+seg;

	setTimeout("relogio()","1000");
	return horario; 
}
/**/ 
function pegarInfoEndereco(endereco){
	$.ajax({
		url: "https://maps.googleapis.com/maps/api/geocode/json?address="+endereco+"&key=<?=$chave_mapa?>",
		type: 'GET',
		dataType: 'json',

	})
	.done(function(resp) {
		console.log(resp);
	})

}

function EscutarGeolocalizacao(){
	navigator.geolocation.watchPosition(function(position) {
		let  lat_now=position.coords.latitude;
		let  long_now=position.coords.longitude;
		captarDadosLatLong(lat_now,long_now);
	},function (error) { 
		if (error.code == error.PERMISSION_DENIED){
			alert('Favor permitir sua geolocalição');
		}
	});
}


function PegarGeolocalizacao(){
	navigator.geolocation.getCurrentPosition (function(position) {
		let  lat_now=position.coords.latitude;
		let  long_now=position.coords.longitude;
		captarDadosLatLong(lat_now,long_now);
	},function (error) { 
		if (error.code == error.PERMISSION_DENIED){
			alert('Favor permitir sua geolocalição');
		}
	});
}



function captarDadosLatLong(a,b){

	let obj={};
	let resultado="";
	$.getJSON('https://maps.googleapis.com/maps/api/geocode/json?latlng='+a+','+b+'&key=<?=$chave_mapa?>', function(json, textStatus) {
		infoApiGEO(json);


	});

}

function infoApiGEO(json){
	obj={
		local:json.results[0].formatted_address,
		latitude:json.results[0].geometry.location.lat,
		longitude:json.results[0].geometry.location.lng,
		placeId:json.results[0].place_id,
		numero:json.results[0].address_components[0].long_name,
		rua:json.results[0].address_components[1].long_name,
		bairro:json.results[0].address_components[2].long_name,
		cidade:json.results[0].address_components[3].long_name,
		estado:json.results[0].address_components[4].long_name,
		pais:json.results[0].address_components[5].long_name,
		cep:json.results[0].address_components[6].long_name,
	}
	console.log(obj)
		// $(".atual_endereco_val").val(obj.endereco);
    	// $(".atual_latitude_val").val(obj.latitude);
    	// $(".atual_longitude_val").val(obj.longitude);
    	// $(".atual_bairro_val").val(obj.bairro);
    	// $(".atual_cidade_val").val(obj.cidade);
    	// $(".atual_estado_val").val(obj.estado);
    	// $(".atual_pais_val").val(obj.pais);



    }

    function relogio(){
    	var tempo=new Date();
    	var hora=tempo.getHours();
    	var min=tempo.getMinutes();
    	var seg=tempo.getSeconds();
    	if(min<10){

    		var min="0"+min;
    	}
    	if(seg<10){

    		var seg="0"+seg;
    	}

    	let horario=hora+":"+min+":"+seg;
    	//$(".relogio").html(horario)

    	setTimeout("relogio()","1000");

    }

    function time(){
    	var tempo=new Date();
    	var hora=tempo.getHours();
    	var min=tempo.getMinutes();
    	var seg=tempo.getSeconds();
    	if(min<10){

    		var min="0"+min;
    	}
    	if(seg<10){

    		var seg="0"+seg;
    	}

    	let horario=hora+":"+min+":"+seg;

    	setTimeout("relogio()","1000");
    	return horario; 
    }


    function pegarPeloEndereco(end){


    	$.ajax({
    		url: "https://maps.googleapis.com/maps/api/geocode/json?address="+end+"&key=<?=$chave_mapa?>",
    		type: 'GET',
    		dataType: 'json',

    	})
    	.done(function(resp) {

    		console.log(resp)
    	})


    }
    function infoApiEND(json){
    	obj={
    		endereco:json.results[0].formatted_address,
    		latitude:json.results[0].geometry.location.lat,
    		longitude:json.results[0].geometry.location.lng,
    		bairro:json.results[0].address_components[1].long_name,
    		cidade:json.results[0].address_components[2].long_name,
    		estado:json.results[0].address_components[3].long_name,
    		pais:json.results[0].address_components[4].long_name


    	}

    	console.log(json);

// $(".atual_endereco_val").val(obj.local);
// $(".atual_bairro_val").val(obj.bairro);
// $(".atual_cidade_val").val(obj.cidade);
// $(".atual_numero_val").val(obj.numero);
// $(".atual_latitude_val").val(obj.latitude);
// $(".atual_longitude_val").val(obj.longitude);
// $(".atual_estado_val").val(obj.estado);
// $(".atual_endereco_html").html(obj.local);


}


</script>