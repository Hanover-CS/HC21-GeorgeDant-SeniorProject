const Coach_sch_view = document.getElementById("coach-schedule-button");
const Player_sch_view = document.getElementById("player-schedule-button");

Player_sch_view.addEventListener("click", (e) => {
    e.preventDefault();
    location.assign("Player_schedule_creator.html")
})

// Coach_sch_view.addEventListener("click", (e) => {
//     e.preventDefault();
//     location.assign("")
// })
