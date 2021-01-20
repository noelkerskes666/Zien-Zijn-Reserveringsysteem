
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

const deleteRow = function(id) {
    const confirmed = confirm('Weet je zeker dat je deze afspraak wilt verwijderen? Dit kan niet meer ongedaan worden gemaakt!')
    if(confirmed) {
        fetch('/zienzijn/remove_afspraak.php?id=' + id).then(response => {
            if(response.ok) {
                response.text().then(text => {
                    alert(text);

                    window.location.reload();
                })

            }
        });
    }
}

function myFunction() {
    var x = document.getElementById("adult_select").value;
    document.getElementById("demo").innerHTML = "You selected: " + x;
}
