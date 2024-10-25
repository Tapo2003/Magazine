const searchBar = document.querySelector(".search input");
searchBtn = document.querySelector(".search button");

searchBtn.onclick = ()=>{
    searchBar.focus();   
}

$(document).ready(function(){
        $("#chat-search").focus();
        // $("#fullname").focus();
});