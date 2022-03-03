window.onload = initForms;

function initForms(){
    document.querySelector("#text-box").onfocus = () => {
        this.value = "";
    }
}