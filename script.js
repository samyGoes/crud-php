//#region VARIÁVEIS

const btn_PDF = document.querySelector(".btnPDF");
const conteudo_PDF = document.querySelector(".tabela");

const btn_nav_cadastrar = document.querySelector("#btn-nav-cadastrar");
const btn_nav_atualizar = document.querySelector("#btn-nav-atualizar");
const btn_nav_deletar = document.querySelector("#btn-nav-deletar");
const btn_fecha = document.querySelectorAll(".btn-fecha");

const form_cadastrar = document.querySelector("#form-cadastrar");
const form_atualizar = document.querySelector("#form-atualizar");
const form_deletar = document.querySelector("#form-deletar");

const forms = document.querySelectorAll(".container");

const btn_tema_1 = document.querySelector("#tema-1");
const btn_tema_2 = document.querySelector("#tema-2");
const btn_tema_3 = document.querySelector("#tema-3");

//#endregion

function gerarPDF()
{
    btn_PDF.addEventListener("click", () =>
    {
        const info = {
            margin: [20, 20, 20, 20],
            filename: "catos.pdf",
            html2canvas: { scale: 2 },
            jsPDF: { unit: "mm", format: "a4", orientation: "portrait" }
        }
    
        html2pdf().set(info).from(conteudo_PDF).save();
    });   
}

function menu(btn, display1, display2, display3)
{
    btn.addEventListener("click", function()
    {
        form_cadastrar.style.display = display1;
        form_atualizar.style.display = display2;
        form_deletar.style.display = display3;
    });
}

function fechaJanelas()
{
    btn_fecha.forEach(btn => {
        btn.addEventListener("click", function()
        {
            forms.forEach(f => { f.style.display = "none"; });      
        });
    }); 
}

function temas(btn_tema, tema)
{
    let temas = 
    [
        /* VARIÁVEIS */ ["--fundo", "--cabecalho", "--nav", "--btns-nav", "--form", "--btns-e-nav", "--tb-cabecalho"],
        /* TEMA 1 */    ["#ffcff2", "#b587ff", "#ebaaff", "#e6cbff", "#fdc9f7", "#ffaa90", "#ffb2ce"], 
        /* TEMA 2 */    ["#ffdfcf", "#60dfa5", "#c9a16e", "#b2ffd1", "#fbe3be", "#69b573", "#bbf9d1"],
        /* TEMA 3 */    []
    ];

    btn_tema.addEventListener("click", () =>
    {
        btn_tema.style.transform = "translateY(5px)"; 
        for(let i = 0; i <= 6; i++)
        {
            document.documentElement.style.setProperty(temas[0][i], temas[tema][i]);
        }
    });
}

gerarPDF();

menu(btn_nav_cadastrar, "flex", "none", "none");
menu(btn_nav_atualizar, "none", "flex", "none");
menu(btn_nav_deletar, "none", "none", "flex");

fechaJanelas();

temas(btn_tema_1, 1);
temas(btn_tema_2, 2);
//temas(btn_tema_3, 3);

