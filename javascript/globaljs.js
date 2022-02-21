/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$( document ).ready(clientesSlide);
$(window).on("load", initialize);
var countID = 0;

function initialize()
{
    $("#visaoInt0").click({data: this},abrirModal);
    $("#visaoInt1").click({data: this},abrirModal);
    $("#visaoInt2").click({data: this},abrirModal);
    $("#visaoInt3").click({data: this},abrirModal);
    $("#sairModalPromo").click(fecharModal);
    $("#sairModal").click(fecharModal);
    $("#loader").fadeOut(500);
    setTimeout(mostrarPromo,30000);
}

function mostrarPromo()
{
    if ("none" == $("#modalInterno").css("display"))
    {
        $("#modalCenter").css("display","flex");
    }
    else
    {
        setTimeout(mostrarPromo,10000);
    }   
}

function abrirModal(elemento)
{
    $("#modalInterno").css("display","flex");
    elemento = $(elemento.currentTarget);
    $("#visaoIntBig").attr("src",elemento.attr("src").replace("icon",""));
}

function fecharModal()
{
    $("#modalInterno").css("display","none");
    $("#modalCenter").css("display","none");
}

/*setTimeout(function ()
{
    window.location.reload(1);
}, 50000);*/

function clientesSlide()
{
    setInterval(animationOp,13000);
    var words = $("[data-words]").attr("data-words").split("|");
    var wordsSize = words.length;
    
    var self = $("[data-words]");
    var selfRet = $("[data-retratos]");
    
    self.append($('<span id="depoTextSpan0">'+words[0]+'</span>'));
    selfRet.append($('<img id="retCli0" alt="" src="imgs/retratos'+0+'.png"></img>'));
    
    for (var i = 1; i < wordsSize; i++)
    {
        self.append(($('<span id="depoTextSpan'+i+'">'+words[i]+'</span>')).hide());
        selfRet.append(($('<img id="retCli'+i+'" alt="" src="imgs/retratos'+i+'.png"></img>')).hide());
    }  
}
function animationOp()
{
    var loopNumber = 3;
    var idElementoText = "depoTextSpan"+countID;
    var idElementoRet = "retCli"+countID;
    $(document.getElementById(idElementoRet)).fadeOut(500);
    $(document.getElementById(idElementoText)).fadeOut(500,function()
    {
        countID++;
        if (countID == loopNumber)
        {
            countID = 0;
        }
        idElementoText = "depoTextSpan"+countID;
        $(document.getElementById(idElementoText)).fadeIn(1000);
        idElementoRet = "retCli"+countID;
        $(document.getElementById(idElementoRet)).fadeIn(1000);
    });
}