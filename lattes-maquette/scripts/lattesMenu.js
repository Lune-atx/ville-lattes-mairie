let lattesMenu = {
    header : document.getElementById("lattesHeader"),
    burger : document.getElementById("lattesBurger"),
    nav : document.getElementById("lattesNav"),
    menu : document.getElementsByClassName("lattesNavArea_menu"),
    init : () => {
        // Ecouteur pour l'ouverture du menu mobile
        lattesMenu.burger.addEventListener("click", lattesMenu.handleDisplayNavArea);
        // Ecouteurs pour les sous menu de rang 1 + indication menu déroulant
        for(let menu of lattesMenu.menu){
            // on rajoute la flèche pour les menus déroulant   
            if(menu.querySelector("ul")){         
                menu.addEventListener("click", lattesMenu.handleDisplaySubNav);
                lattesMenu.handleMenuDisplay(menu);
            }            
        }
    },
    handleMenuDisplay : (menu) => {
        // On récupère le lien, on le coupe pour insérer la flèche et on recolle en enlevant les virgules
        let oldMenuPart1 = menu.querySelector("a").outerHTML;
        let oldMenuPart1Splited = oldMenuPart1.split("</a>");
        let newMenuPPart1 = oldMenuPart1Splited+`<i class="fas fa-sort-down"></i>`+`</a>`;
        let oldMenuPart2 = menu.querySelector("ul").outerHTML;
        menu.innerHTML = newMenuPPart1.replace(',',' ')+oldMenuPart2;
    },
    handleDisplayNavArea : () => {
        // Affiche et masque le menu mobile
        lattesMenu.nav.classList.toggle("lattesNavArea--display");
        // Switch burger-croix
        lattesMenu.burger.classList.toggle("fa-bars");
        lattesMenu.burger.classList.toggle("fa-times");
    },
    handleDisplaySubNav : (e) => {
        e.preventDefault();
        let target = e.target;
        // On s'assure de séléctionner l'ensemble du sous-menu et non un de ses composant
        while(!target.classList.contains("lattesNavArea_menu")){
            target = target.parentNode;
        }
        console.log(target);
        // On regarde tout les menus pour fermer tout les éventuelles sous-menu et retirer la surbrillance du menu précédement selectionné 
        for(let menu of lattesMenu.menu){
                menu.classList.remove("lattesNavArea_menu--selected");          
            // Si les menu possèdent des sous-menus (sauf si c'est celui de la cible) :
            if(menu.querySelector("ul") && menu !==target){
                menu.querySelector("ul").classList.remove("lattesSubNav--display");                
            }
        }
        // On rajoute la surbrillance sur la cible
        target.classList.toggle("lattesNavArea_menu--selected");
        // S'il contient un sous-menu alors on toggle
        if(target.querySelector("ul")){           
            target.querySelector("ul").classList.toggle("lattesSubNav--display");
        }
    }
}

document.addEventListener('DOMContentLoaded', lattesMenu.init);