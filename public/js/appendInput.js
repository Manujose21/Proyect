export const aggInput = (nodo, insert, placeholder, name, btnSubmit) =>{
    let input = document.createElement("input");
    input.setAttribute("type", "text");
    input.setAttribute("name", name);
    input.classList.add("form-control");
    input.classList.add("mb-3");

   nodo.addEventListener("click", ()=>{
        if(nodo.value == "on"){
            input.setAttribute("placeholder", placeholder);
            insert.appendChild(input);
            nodo.value = "off";
            btnSubmit.disabled = false;
        }else{
            console.log(nodo.value);
            insert.removeChild(input);
            nodo.value = "on";
            btnSubmit.disabled = true;
        }
    }) 
}

// export {aggInput};