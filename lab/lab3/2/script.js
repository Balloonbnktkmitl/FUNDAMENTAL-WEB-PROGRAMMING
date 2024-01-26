
function Swap() {
    var move1 = document.getElementById("grid1").innerHTML;
    var move2 = document.getElementById("grid2").innerHTML;
    var move3 = document.getElementById("grid3").innerHTML;
    var move4 = document.getElementById("grid4").innerHTML;
    var temp = move1;
    var temp2 = move2;
    var temp3 = move3;
    var temp4 = move4;
    move1 = temp3;
    move2 = temp;
    move3 = temp4;
    move4 = temp2;
    
    document.getElementById("grid1").innerHTML = move1;
    document.getElementById("grid2").innerHTML = move2;
    document.getElementById("grid3").innerHTML = move3;
    document.getElementById("grid4").innerHTML = move4;
}