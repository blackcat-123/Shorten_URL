/**
var logo = document.getElementById("logo");

logo.addEventListener("click", ()=>{
    
    if(window.confirm("If you reload, you can delete datas.")==true){
        window.location.reload();    
    }
});

*/

var logo = document.getElementById("logo");


function confirmReload() {
 
    var confirmation = window.confirm("Are you sure you want to reload the page?");
    
    
    if (confirmation) {
        // Reload the page
        location.reload();
    }
}


logo.addEventListener("click", function (event) {
    
    event.preventDefault();

    
    confirmReload();
});

reload.addEventListener("click", function (event) {
    
    event.preventDefault();

    
    confirmReload();
});