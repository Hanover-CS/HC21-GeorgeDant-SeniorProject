//personal check to make sure checkboxes are actually "saved" when checked
const check = document.getElementById("checkbox_saved");

check.addEventListener("click", (e) => {
    e.preventDefault();

    var form = document.getElementById("Player_sch");
    var inputs = form.getElementsByTagName("input");
    var checkboxIndex = 0;
    for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].checked) {
            checkboxIndex++;
            console.log(inputs[i].value);
            console.log(inputs[i].id);
        }
    }
    console.log(checkboxIndex);
})
