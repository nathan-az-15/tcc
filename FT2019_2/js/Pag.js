/*******************************************************
	
	JS - Página - V1

--------------------------------------------------------

	Todos os direitos reservados.
	Desenvolvido por Rodrigo Lima Nogueira Santos.
	
*******************************************************/


/*******************************************************
	Effects
*******************************************************/

/* Mudar de questão */

$(document).ready(function(){

    // Inicial
    $("#iniciar").on("click", function(){

        $("#inicial").css("left", "-100%");
        $("#quiz").css("right", "0");

        cronometro();

    });

    // 1 -> 2
    $("#btnQ1").on("click", function(){

        $("#q1").css("right", "100%");
        $("#q2").css("right", "0");

    });

    // 2 -> 3
    $("#btnQ2").on("click", function(){
        
        $("#q2").css("right", "100%");
        $("#q3").css("right", "0");

    });

    // 3 -> 4
    $("#btnQ3").on("click", function(){
        
        $("#q3").css("right", "100%");
        $("#q4").css("right", "0");

    });

    // 4 -> 5
    $("#btnQ4").on("click", function(){

        $("#q4").css("right", "100%");
        $("#q5").css("right", "0");

    });

    // 5 -> 6
    $("#btnQ5").on("click", function(){

        $("#q5").css("right", "100%");
        $("#q6").css("right", "0");

    });

    // 6 -> 7
    $("#btnQ6").on("click", function(){

        $("#q6").css("right", "100%");
        $("#q7").css("right", "0");

    });

    // 7 -> 8
    $("#btnQ7").on("click", function(){

        $("#q7").css("right", "100%");
        $("#q8").css("right", "0");

    });

    // 8 -> 9
    $("#btnQ8").on("click", function(){

        $("#q8").css("right", "100%");
        $("#q9").css("right", "0");

    });

    // 9 -> 10
    $("#btnQ9").on("click", function(){

        $("#q9").css("right", "100%");
        $("#q10").css("right", "0");

    });

    // 10 -> 11
    $("#btnQ10").on("click", function(){

        $("#q10").css("right", "100%");
        $("#q11").css("right", "0");

    });

    // 11 -> 12
    $("#btnQ11").on("click", function(){

        $("#q11").css("right", "100%");
        $("#q12").css("right", "0");

    });

    // 12 -> 13
    $("#btnQ12").on("click", function(){

        $("#q12").css("right", "100%");
        $("#q13").css("right", "0");

    });

    // 13 -> 14
    $("#btnQ13").on("click", function(){

        $("#q13").css("right", "100%");
        $("#q14").css("right", "0");

    });

    // 14 -> 15
    $("#btnQ14").on("click", function(){

        $("#q14").css("right", "100%");
        $("#q15").css("right", "0");

    });

    // 15 -> 16
    $("#btnQ15").on("click", function(){

        $("#q15").css("right", "100%");
        $("#q16").css("right", "0");

    });

    // 16 -> 17
    $("#btnQ16").on("click", function(){

        $("#q16").css("right", "100%");
        $("#q17").css("right", "0");

    });

    // 17 -> 18
    $("#btnQ17").on("click", function(){

        $("#q17").css("right", "100%");
        $("#q18").css("right", "0");

    });

    // 18 -> 19
    $("#btnQ18").on("click", function(){

        $("#q18").css("right", "100%");
        $("#q19").css("right", "0");

    });

    // 19 -> 20
    $("#btnQ19").on("click", function(){

        $("#q19").css("right", "100%");
        $("#q20").css("right", "0");

    });

    // 20 -> final
    $("#btnQFinal").on("click", function(){

        parar();
		
		var seg = document.getElementById("segundo").innerHTML;
		var min = document.getElementById("minuto").innerHTML;
		var hora = document.getElementById("hora").innerHTML;
		
        var soma = 0;
        
		var R1 = parseFloat($("#R1").val());
		var R2 = parseFloat($("#R2").val()); 
		var R3 = parseFloat($("#R3").val());
		var R4 = parseFloat($("#R4").val()); 
		var R5 = parseFloat($("#R5").val());
		var R6 = parseFloat($("#R6").val()); 
		var R7 = parseFloat($("#R7").val());
		var R8 = parseFloat($("#R8").val()); 
		var R9 = parseFloat($("#R9").val());
		var R10 = parseFloat($("#R10").val()); 
		var R11 = parseFloat($("#R11").val());
		var R12 = parseFloat($("#R12").val()); 
		var R13 = parseFloat($("#R13").val());
		var R14 = parseFloat($("#R14").val()); 
		var R15 = parseFloat($("#R15").val());
		var R16 = parseFloat($("#R16").val()); 
		var R17 = parseFloat($("#R17").val());
		var R18 = parseFloat($("#R18").val()); 
		var R19 = parseFloat($("#R19").val());
		var R20 = parseFloat($("#R20").val()); 
		
		soma = R1 + R2 + R3 + R4 + R5 + R6 + R7 + R8 + R9 + R10 + R11 + R12 + R13 + R14 + R15 + R16 + R17 + R18 + R19 + R20;
		
        window.open("Resultado.php?r="+soma+"&s="+seg+"&m="+min+"&h="+hora, "_self");

    });

});

/* Alternativas */

function verifica(Q, R, C){ 

    var c = 0;
    var e = 0;
    var total = 0;

        switch(Q){

            case 1:
    
                if(R != C){
                    
                   $("#q1 .alt").addClass("AE");
                   $("#R1_1").removeClass("AE").addClass("AC");

                   if($("#R1").val() == ""){
                        $("#R1").val("0"); 
                   }
    
                   
                   
                }else{
    
                    $("#R1_1").addClass("AC");

                    if($("#R1").val() == ""){
                        $("#R1").val("1"); 
                   }
                }
    
            break;
    
            case 2:
        
                if(R != C){
    
                    $("#q2 .alt").addClass("AE");
                    $("#R2_3").removeClass("AE").addClass("AC");

                    if($("#R2").val() == ""){
                        $("#R2").val("0"); 
                   }
    
                     
    
                }else{
                  
                    $("#R2_3").addClass("AC");
                    
                    if($("#R2").val() == ""){
                        $("#R2").val("1"); 
                   }    
                }
            
            break;
    
            case 3:
        
                if(R != C){
    
                    $("#q3 .alt").addClass("AE");
                    $("#R3_4").removeClass("AE").addClass("AC");

                    if($("#R3").val() == ""){
                        $("#R3").val("0"); 
                   }                     
    
                }else{
                  
                    $("#R3_4").addClass("AC");
    
                    if($("#R3").val() == ""){
                        $("#R3").val("1"); 
                   }    
                }
            
            break;
    
            case 4:
        
                if(R != C){
    
                    $("#q4 .alt").addClass("AE");
                    $("#R4_3").removeClass("AE").addClass("AC");

                    if($("#R4").val() == ""){
                        $("#R4").val("0"); 
                   }                     
    
                }else{
                  
                    $("#R4_3").addClass("AC");
    
                    if($("#R4").val() == ""){
                        $("#R4").val("1"); 
                   }    
                }
            
            break;
            
            case 5:
        
                if(R != C){
    
                    $("#q5 .alt").addClass("AE");
                    $("#R5_2").removeClass("AE").addClass("AC");

                    if($("#R5").val() == ""){
                        $("#R5").val("0"); 
                   }                     
    
                }else{
                  
                    $("#R5_2").addClass("AC");
    
                    if($("#R5").val() == ""){
                        $("#R5").val("1"); 
                   }    
                }
            
            break;
    
            case 6:
        
                if(R != C){
    
                    $("#q6 .alt").addClass("AE");
                    $("#R6_3").removeClass("AE").addClass("AC");

                    if($("#R6").val() == ""){
                        $("#R6").val("0"); 
                   }                     
    
                }else{
                  
                    $("#R6_3").addClass("AC");
    
                    if($("#R6").val() == ""){
                        $("#R6").val("1"); 
                   }    
                }
            
            break;
    
            case 7:
        
                if(R != C){
    
                    $("#q7 .alt").addClass("AE");
                    $("#R7_1").removeClass("AE").addClass("AC");

                    if($("#R7").val() == ""){
                        $("#R7").val("0"); 
                   }                     
    
                }else{
                  
                    $("#R7_1").addClass("AC");
    
                    if($("#R7").val() == ""){
                        $("#R7").val("1"); 
                   }    
                }
            
            break;
    
            case 8:
        
                if(R != C){
    
                    $("#q8 .alt").addClass("AE");
                    $("#R8_4").removeClass("AE").addClass("AC");

                    if($("#R8").val() == ""){
                        $("#R8").val("0"); 
                   }                     
    
                }else{
                  
                    $("#R8_4").addClass("AC");
    
                    if($("#R8").val() == ""){
                        $("#R8").val("1"); 
                   }    
                }
            
            break;
    
            case 9:
        
                if(R != C){
    
                    $("#q9 .alt").addClass("AE");
                    $("#R9_1").removeClass("AE").addClass("AC");

                    if($("#R9").val() == ""){
                        $("#R9").val("0"); 
                   }                     
    
                }else{
                  
                    $("#R9_1").addClass("AC");
    
                    if($("#R9").val() == ""){
                        $("#R9").val("1"); 
                   }    
                }
            
            break;
    
            case 10:
        
                if(R != C){
    
                    $("#q10 .alt").addClass("AE");
                    $("#R10_2").removeClass("AE").addClass("AC");

                    if($("#R10").val() == ""){
                        $("#R10").val("0"); 
                   }                     
    
                }else{
                  
                    $("#R10_2").addClass("AC");
    
                    if($("#R10").val() == ""){
                        $("#R10").val("1"); 
                   }    
                }
            
            break;
    
            case 11:
        
                if(R != C){
    
                    $("#q11 .alt").addClass("AE");
                    $("#R11_3").removeClass("AE").addClass("AC");

                    if($("#R11").val() == ""){
                        $("#R11").val("0"); 
                   }                     
    
                }else{
                  
                    $("#R11_3").addClass("AC");
    
                    if($("#R11").val() == ""){
                        $("#R11").val("1"); 
                   }    
                }
            
            break;
    
            case 12:
        
                if(R != C){
    
                    $("#q12 .alt").addClass("AE");
                    $("#R12_1").removeClass("AE").addClass("AC");

                    if($("#R12").val() == ""){
                        $("#R12").val("0"); 
                   }                     
    
                }else{
                  
                    $("#R12_1").addClass("AC");
    
                    if($("#R12").val() == ""){
                        $("#R12").val("1"); 
                   }    
                }
            
            break;
    
            case 13:
        
                if(R != C){
    
                    $("#q13 .alt").addClass("AE");
                    $("#R13_2").removeClass("AE").addClass("AC");

                    if($("#R13").val() == ""){
                        $("#R13").val("0"); 
                   }                     
    
                }else{
                  
                    $("#R13_2").addClass("AC");
    
                    if($("#R13").val() == ""){
                        $("#R13").val("1"); 
                   }    
                }
            
            break;
    
            case 14:
        
                if(R != C){
    
                    $("#q14 .alt").addClass("AE");
                    $("#R14_1").removeClass("AE").addClass("AC");

                    if($("#R14").val() == ""){
                        $("#R14").val("0"); 
                   }                     
    
                }else{
                  
                    $("#R14_1").addClass("AC");
    
                    if($("#R14").val() == ""){
                        $("#R14").val("1"); 
                   }    
                }
            
            break;
    
            case 15:
        
                if(R != C){
    
                    $("#q15 .alt").addClass("AE");
                    $("#R15_4").removeClass("AE").addClass("AC");

                    if($("#R15").val() == ""){
                        $("#R15").val("0"); 
                   }                     
    
                }else{
                  
                    $("#R15_4").addClass("AC");
    
                    if($("#R15").val() == ""){
                        $("#R15").val("1"); 
                   }    
                }
            
            break;
    
            case 16:
        
                if(R != C){
    
                    $("#q16 .alt").addClass("AE");
                    $("#R16_2").removeClass("AE").addClass("AC");

                    if($("#R16").val() == ""){
                        $("#R16").val("0"); 
                   }                     
    
                }else{
                  
                    $("#R16_2").addClass("AC");
    
                    if($("#R16").val() == ""){
                        $("#R16").val("1"); 
                   }    
                }
            
            break;
    
            case 17:
        
                if(R != C){
    
                    $("#q17 .alt").addClass("AE");
                    $("#R17_2").removeClass("AE").addClass("AC");

                    if($("#R17").val() == ""){
                        $("#R17").val("0"); 
                   }                     
    
                }else{
                  
                    $("#R17_2").addClass("AC");
    
                    if($("#R17").val() == ""){
                        $("#R17").val("1"); 
                   }    
                }
            
            break;
    
            case 18:
        
                if(R != C){
    
                    $("#q18 .alt").addClass("AE");
                    $("#R18_1").removeClass("AE").addClass("AC");

                    if($("#R18").val() == ""){
                        $("#R18").val("0"); 
                   }                     
    
                }else{
                  
                    $("#R18_1").addClass("AC");
    
                    if($("#R18").val() == ""){
                        $("#R18").val("1"); 
                   }    
                }
            
            break;
    
            case 19:
        
                if(R != C){
    
                    $("#q19 .alt").addClass("AE");
                    $("#R19_3").removeClass("AE").addClass("AC");

                    if($("#R19").val() == ""){
                        $("#R19").val("0"); 
                   }                     
    
                }else{
                  
                    $("#R19_3").addClass("AC");
    
                    if($("#R19").val() == ""){
                        $("#R19").val("1"); 
                   }    
                }
            
            break;
    
            case 20:
        
                if(R != C){
    
                    $("#q20 .alt").addClass("AE");
                    $("#R20_4").removeClass("AE").addClass("AC");

                    if($("#R20").val() == ""){
                        $("#R20").val("0"); 
                   }                     
    
    
                }else{
                  
                    $("#R20_4").addClass("AC");
    
                    if($("#R20").val() == ""){
                        $("#R20").val("1"); 
                   }    
                }
            
            break;	
    
        }  

        /*alert(e);
        alert(m);

        var total = 0;
        total = e + m;

        if(total>20){
            ver(a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t);
        }*/

    
    }
    
    /* Cronômetro */
    
    var intervalo;
    
    function cronometro(){
    
        var h = 0;
        var m = 0;
        var s = 1;
    
        intervalo = window.setInterval(function(){
    
            if(s == 60){
                m++; 
                s = 0;
            }
    
            if(m == 60){
                h++; 
                s = 0; 
                m = 0;
            }
    
            if(h < 10){
                document.getElementById("hora").innerHTML = "0" + h + ":";
            }else{
                document.getElementById("hora").innerHTML = h + ":";
            }
    
            if(m < 10){
                document.getElementById("minuto").innerHTML = "0" + m + ":";
            }else{
                document.getElementById("minuto").innerHTML = m + ":";	
            }
    
            if(s < 10){
                document.getElementById("segundo").innerHTML = "0" + s;
            }else{
                document.getElementById("segundo").innerHTML = s;
            }
    
            s++;
    
        },1000);

    

    

}

function parar(){

    window.clearInterval(intervalo);

}

/*function ver(a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t){
	
    var a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t;

    var xmlhttp = new XMLHttpRequest();
	
	xmlhttp.onreadystatechange = function() {  // Apenas para verificação do funcionamento
		if (this.readyState == 4 && this.status == 200) {
			alert (this.responseText);
		}
	};

    xmlhttp.open("GET", "Acertos.php?a=" + a, true); 
    xmlhttp.send();
    
	
}*/