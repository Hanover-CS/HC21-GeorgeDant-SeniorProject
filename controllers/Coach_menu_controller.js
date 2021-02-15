const Coach_sch_edit = document.getElementById("edit-coach-schedule-button");
const Coach_player_sch_view = document.getElementById("view-player-schedule-button");

Coach_sch_edit.addEventListener("click", (e) => {
    e.preventDefault();
    location.assign("Coach_schedule_creator.html")
})

// Coach_sch_view.addEventListener("click", (e) => {
//     e.preventDefault();
//     location.assign("")
// })