import { btn_nav_cadastrar, btn_nav_atualizar, btn_nav_deletar, 
        temaDefinido, menu, fechaJanelas, temas, 
        verificaTemaDefinido } from "../modules/scr-tema-menu-pdf.js";

menu(btn_nav_cadastrar, "flex", "none", "none");
menu(btn_nav_atualizar, "none", "flex", "none");
menu(btn_nav_deletar, "none", "none", "flex");

fechaJanelas();
verificaTemaDefinido();
temas();

