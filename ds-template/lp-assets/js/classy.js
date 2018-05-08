var errorBirth = document.getElementsByClassName("errorBirth")[0];

function submitYes() {
    $("#answerWrap").fadeOut(500);
    $('#howDirtyWrap').fadeOut(500).delay(500)
        .fadeIn(500).delay(500);
    $("#errorBirth").fadeOut(500);
    $("#remember").fadeOut(500);

};

function submitNo() {
    $(".errorBirth").slideDown("slow");
    errorBirth.classList.add("animateErrorBirth");
};



submitYesBtn.addEventListener("click", submitYes);
submitNoBtn.addEventListener("click", submitNo);





