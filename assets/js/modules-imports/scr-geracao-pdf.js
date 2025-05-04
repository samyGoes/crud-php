import { gerarPDF } from "../modules/scr-tema-menu-pdf.js";
import { conteudo_PDF } from "../modules/scr-conteudo-pdf.js";

gerarPDF(conteudo_PDF);
console.log("Conteudo PDF: " + conteudo_PDF);