//#region VARIÁVEIS

const btn_nav_cadastrar = document.querySelector("#btn-nav-cadastrar");
const btn_nav_atualizar = document.querySelector("#btn-nav-atualizar");
const btn_nav_deletar = document.querySelector("#btn-nav-deletar");

let temaDefinido = 1;

//#endregion

function gerarPDF(conteudo)
{
    const btn_PDF = document.querySelector(".btnPDF");
    btn_PDF.addEventListener("click", () =>
    {
        const info = {
            margin: [20, 20, 20, 20],
            filename: "lista-de-catos-cadastrados.pdf",
            html2canvas: { scale: 2 },
            jsPDF: { unit: "mm", format: "a4", orientation: "portrait" }
        }
        
        html2pdf().set(info).from(conteudo).save();
    });   
}

function menu(btn, display1, display2, display3)
{
    btn.addEventListener("click", function()
    {
        const form_cadastrar = document.querySelector("#form-cadastrar");
        const form_atualizar = document.querySelector("#form-atualizar");
        const form_deletar = document.querySelector("#form-deletar");

        form_cadastrar.style.display = display1;
        form_atualizar.style.display = display2;
        form_deletar.style.display = display3;
    });
}

function fechaJanelas()
{
    const btn_fecha = document.querySelectorAll(".btn-fecha");

    btn_fecha.forEach(btn => {
        btn.addEventListener("click", function()
        {
            const forms = document.querySelectorAll(".container");
            forms.forEach(f => { f.style.display = "none"; });      
        });
    }); 
}

function temas()
{
    const temas = 
    [
        /* VARIÁVEIS */ ["--fundo", "--cabecalho", "--nav", "--btns-nav", "--form-e-tb", "--btns-e-nav"],
        /* TEMA 1 */    ["#ffcff2", "#b587ff", "#ebaaff", "#e6cbff", "#fde4fa", "#ffaa90"], 
        /* TEMA 2 */    ["#e7ffdc", "#5befab", "#ebc594", "#b2ffd1", "#f3fdef", "#34cb7a"],
        /* TEMA 3 */    ["#cfe6ff", "#9098e7", "#aaffcd", "#c9daff", "#f7fdff", "#8ecaff"]
    ];

    const btn_tema_1 = document.querySelector("#tema-1");
    const btn_tema_2 = document.querySelector("#tema-2");
    const btn_tema_3 = document.querySelector("#tema-3");
    const set_temas =
    [
        [btn_tema_1, "1"],
        [btn_tema_2, "2"],
        [btn_tema_3, "3"] 
    ];

    // SETANDO ÚLTIMO TEMA DEFINIDO NO LOCALSTORAGE
    for(let i = 0; i < temas[0].length; i++)
    {
        document.documentElement.style.setProperty(temas[0][i], temas[temaDefinido][i]);
        set_temas[temaDefinido-1][0].style.transform = "translateY(8px)"; 
    }

    for(let j = 0; j < set_temas.length; j++)
    {
        set_temas[j][0].addEventListener("click", () =>
        {
            localStorage.setItem('tema', set_temas[j][1]);
            verificaTemaDefinido();
            set_temas[j][0].style.transform = "translateY(8px)"; 

            if(temaDefinido == 1) 
            {                
                set_temas[1][0].style.transform = "translateY(0px)"; 
                set_temas[2][0].style.transform = "translateY(0px)"; 
            }
            else if(temaDefinido == 2) 
            { 
                set_temas[0][0].style.transform = "translateY(0px)"; 
                set_temas[2][0].style.transform = "translateY(0px)"; 
            }
            else
            {
                set_temas[0][0].style.transform = "translateY(0px)"; 
                set_temas[1][0].style.transform = "translateY(0px)"; 
            }
    
            // DEFININDO NOVO TEMA
            for(let i = 0; i < temas[0].length; i++)
            {
                document.documentElement.style.setProperty(temas[0][i], temas[j+1][i]);
            }
        });
    }
}

function verificaTemaDefinido()
{
    if(localStorage.getItem('tema') == null)     { temaDefinido = 1; }
    else if(localStorage.getItem('tema') == "1") { temaDefinido = 1; }
    else if(localStorage.getItem('tema') == "2") { temaDefinido = 2; }
    else                                         { temaDefinido = 3; }
}


export { btn_nav_cadastrar, btn_nav_atualizar, btn_nav_deletar, temaDefinido, 
        gerarPDF, menu, fechaJanelas, temas, verificaTemaDefinido };
