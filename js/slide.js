window.load = slide(1);

var bgNumber = 1;

function slide(n){
    var allBgs = 4;
    document.getElementById('imageBg').style.backgroundImage = "url('../imagens/inicial/"+n+".jpg')";
    botoes(n, allBgs);
    bgNumber=n;
}

function anterior(){
    if(bgNumber>1){
        bgNumber--;
        slide(bgNumber);
    }
    
}

function proximo(){
    if(bgNumber<2){
        bgNumber++;
        slide(bgNumber);
    }
}

function botoes(n, m){
    document.getElementById('botoes').innerHTML = "";
    for(a=1;a<=m;a++){
        if(a==n){
            document.getElementById('botoes').innerHTML +="<li class='selected' onclick='slide("+n+")'></li>";
        }else{
            document.getElementById('botoes').innerHTML +="<li onclick='slide("+n+")'></li>";
        }
    }
}