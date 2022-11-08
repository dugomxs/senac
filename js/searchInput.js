let search = document.querySelector("#searchBar");
    
    search.addEventListener("keydown", function(event){
      if (event.key === "Enter") {
        searchData();
      }
    });

    function searchData() {
    window.location = 'search.php?search='+ search.value
    }