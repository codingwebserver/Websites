document.getElementById("send").addEventListener("click", function(){
    document.getElementById("map").setAttribute("src", "https://www.google.com/maps/embed/v1/place?q=" + document.getElementById("street").value +"+" + document.getElementById("city").value + "&key=API-KEY")});
