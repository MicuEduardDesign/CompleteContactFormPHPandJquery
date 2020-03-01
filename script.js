$(".side").on("mouseover", function() {
    $(this).removeClass("hide");
    $(".move").css("margin-right", "40px");
    $(".fa-arrow-circle-left").css({'transform': 'rotate(' + 180 +'deg)'});
});

$(".side").on("mouseout", function() {
    $(this).addClass("hide");
    $(".move").css("margin-right", "100px");
    $(".fa-arrow-circle-left").css({'transform': 'rotate(' + 0 +'deg)'});
});

$("form").submit(function(e) {
    
    var errors = "";

    function validateEmail($email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        return emailReg.test($("#email").val());
    }

    if (!$("#email").val()) {
        errors += "Please add an email" + "<br>";
    } else {

        if( !validateEmail($("#email").val())) {
            errors += "Add a valid email adress" + "<br>";    
        }
    }

    if (!$("#subject").val()) {
        errors += "Please add a subject" + "<br>";
    }

    if (!$("#message").val()) {
        errors += "Please add a message" + "<br>";
    }

    if (errors != "") {
        $(".message-final").html('<div class="error">' + errors + '</div>');
        return false;
    } else {
        $(".message-final").html('<div class="error">' + "Message sent!" + '</div>');
        return true;
    }

});
