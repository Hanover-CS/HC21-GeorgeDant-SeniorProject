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

function download() {
    var text = document.getElementById("coach_text").value;
    text = text.replace(/\n/g, "\r\n"); // To retain the Line breaks.
    var blob = new Blob([text], { type: "text/plain" });
    var anchor = document.createElement("a");
    anchor.download = "my-filename.txt";
    anchor.href = window.URL.createObjectURL(blob);
    anchor.target = "_blank";
    anchor.style.display = "none"; // just to be safe!
    document.body.appendChild(anchor);
    anchor.click();
    document.body.removeChild(anchor);
}