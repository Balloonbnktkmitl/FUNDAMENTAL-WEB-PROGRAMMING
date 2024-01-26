
function View() {
    var baredit1 = document.getElementById("bar1");
    var baredit2 = document.getElementById("bar2");
    var baredit3 = document.getElementById("bar3");
    var baredit4 = document.getElementById("bar4");
    var baredit5 = document.getElementById("bar5");
    var valbar1 = document.getElementById("balloon").value;
    var valbar2 = document.getElementById("luck").value;
    var valbar3 = document.getElementById("sila").value;
    var valbar4 = document.getElementById("earth").value;
    var valbar5 = document.getElementById("gus").value;
    if(valbar1 == "" || valbar2 == "" || valbar3 == "" || valbar4 == "" || valbar5 == "" ) {
        alert("Please fill all the field! and value between 0-100!");
        return false;
    }
    else if(valbar1 > 100 || valbar2 > 100 || valbar3 > 100 || valbar4 > 100 || valbar5 > 100 
        || valbar1 < 0 || valbar2 < 0 || valbar3 < 0 || valbar4 < 0 || valbar5 < 0) {
        alert("Please fill all the field with value between 0-100!");
        return false;
    }

    baredit1.style.width = valbar1 + "%";
    baredit2.style.width = valbar2 + "%";
    baredit3.style.width = valbar3 + "%";
    baredit4.style.width = valbar4 + "%";
    baredit5.style.width = valbar5 + "%";

}