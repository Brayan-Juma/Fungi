//función que muestra el menu responsive{
    function responsiveMenu(){
        let x = document.getElementById("nav");
        if(x.className===""){
            x.className = "responsive";
    
            //creamos el elemento que cierra el menu
            let span = document.createElement("span");
            span.innerHTML = "X";
            document.getElementById("nav").appendChild(span);
    
            //quitamos el boton eliminar cuando se hace click sobre este
            span.onclick = function(){
                x.className = "";
                span.remove();
            }
        }else{
            x.className="";
        }
    }
    
    //Este codigo es para agregar una función a cada links del menu
    //responsive
    //cuando se presione en cualquier de los links del menu debe desaparecer el menu
    const links = document.querySelectorAll("#nav a");
    for(i=0; i < links.length;i++){
        links[i].onclick = function(){
            var x = document.getElementById("nav");
            x.className = "";
    
            //removemos el boton eliminar
            btnEliminar = document.querySelector("#nav span");
            btnEliminar.remove();
        }
    }
    
    //Codigo para la galeria
    const fulImgBox = document.getElementById("fulImgBox"),
    fulImg = document.getElementById("fulImg");
    function openFulImg(reference){
        fulImgBox.style.display = "flex";
        fulImg.src = reference
    }
    function closeImg(){
        fulImgBox.style.display = "none";
    }
    
    
    //Codigo para los testimonios
    (function(){
        
        const sliders = [...document.querySelectorAll('.testimony__body')];
        const buttonNext = document.querySelector('#next');
        const buttonBefore = document.querySelector('#before');
        let value;   
    
        buttonNext.addEventListener('click', ()=>{
            changePosition(1);
        });
    
        buttonBefore.addEventListener('click', ()=>{
            changePosition(-1);
        });
    
        const changePosition = (add)=>{
            const currentTestimony = document.querySelector('.testimony__body--show').dataset.id;
            value = Number(currentTestimony);
            value+= add;
    
    
            sliders[Number(currentTestimony)-1].classList.remove('testimony__body--show');
            if(value === sliders.length+1 || value === 0){
                value = value === 0 ? sliders.length  : 1;
            }
    
            sliders[value-1].classList.add('testimony__body--show');
    
        }
    
    })();