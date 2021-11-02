<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo ROOT_DIR; ?>js/jquery.js"></script>
<script src="<?php echo ROOT_DIR; ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo ROOT_DIR; ?>js/Chart.min.js"></script>
<script src="<?php echo ROOT_DIR; ?>js/script.js"></script>
<script src="<?php echo ROOT_DIR; ?>landing/js/landing.js"></script>

<script>
    $('.close-interactive-x').on('click', function (e) {
        $('.notification-view-sect').addClass("d-none");
    });

    let wrongAnswerRotate = document.querySelector("#wrongAnswerRotate")

    wrongAnswerRotate.addEventListener("click", function () {
        document.querySelector(".flip-card-card").classList.add("incorrect-answer-rotate")
        this.classList.add("incorrect-answer")

        setTimeout(() => {
            document.querySelector(".flip-card-card").classList.remove("incorrect-answer-rotate")
            this.classList.remove("incorrect-answer")
        }, 3000)
    })

    let rightAnswerRotate = document.querySelector("#rightAnswerRotate")

    rightAnswerRotate.addEventListener("click", function () {
        document.querySelector(".flip-card-card").classList.add("animate__animated")
        document.querySelector(".flip-card-card").classList.add("animate__fadeOutRight")
        this.classList.add("correct-answer");

        setTimeout(() => {
            document.querySelector(".flip-card-card").classList.remove("animate__animated")
            document.querySelector(".flip-card-card").classList.remove("animate__fadeOutRight")
            this.classList.remove("correct-answer")
        }, 3000)
    })

</script>