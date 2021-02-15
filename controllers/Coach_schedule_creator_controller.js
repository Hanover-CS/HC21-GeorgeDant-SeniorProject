//personal check to make sure checkboxes are actually "saved" when checked
const check = document.getElementById("text_saved");

check.addEventListener("click", (e) => {
    e.preventDefault();

    var inputs = document.getElementById("coach_text");
    var checkboxIndex = 0;
    for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].value !== "") {
            checkboxIndex++;
            console.log(inputs[i].value);
        }
    }
    console.log(checkboxIndex);
})