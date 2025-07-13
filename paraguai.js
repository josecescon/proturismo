function search(){
    let input = document.getElementById('searchInput').value.toLowerCase();
    let x = document.getElementsByClassName('destination');

    for(let i = 0; i < x.length; i++){
        if(!x[i].innerHTML.toLowerCase().includes(input)){
            x[i].style.display = "none";
        } else {
            x[i].style.display = "list-item"; // Corrigido aqui
        }
    }
}
