window.onload = () => {
    const stars = document.querySelectorAll(".la-star");
    const note = document.querySelector("#note");

    for(star of stars){
        star.addEventListener("mouseover", function(){
            resetStars();
            this.style.color = "#359c9d";
            this.classList.add("las");
            this.classList.remove("lar")

            let previousStar = this.previousElementSibling;

            while(previousStar) {
                previousStar.style.color = "#359c9d"
                previousStar.classList.add("las");
                previousStar.classList.remove("lar");

                previousStar = previousStar.previousElementSibling;
            }
        });
        star.addEventListener("click", function(){
            note.value = this.dataset.value;
        });
        star.addEventListener("mouseout", function(){
           resetStars(note.value);
        });
    }
    function resetStars(note = 0){
        for(star of stars){
            if(star.dataset.value > note) {
                //star.style.color = "black";
                star.classList.add("lar");
                star.classList.remove("las")
            }else{
                //star.style.color = "#8a8604";
                star.classList.add("las");
                star.classList.remove("lar")
            }
        }
}
}