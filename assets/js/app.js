var PageController = {
    init: function () {
        this.fixJumboTron();
        $(".alert").hide();
        $('.answer').each(function () {
            $(this).prop("checked", false)
        })
    },
    fixJumboTron: function () {
        $(".jumbotron").height($(window).height() - 100)
        $("#questions").height($(window).height() - 150)

    },
    form_submit: function () {
        $(".alert").hide();
        var any_checked = false;
        var correct_answer = false;

        $('.answer').each(function () {
            if ($(this).val() == 1 && $(this).is(':checked')) {
                correct_answer = true;
            }
            if ($(this).is(':checked')) {
                any_checked = true;
            }
        })

        if (any_checked == false) {
            $(".alert-warning").slideToggle();
            return false;
        }

        if (correct_answer == false) {
            $('.alert-danger').slideToggle();
            $("#submit").attr('disabled', true);
        }
        if (correct_answer && any_checked) {
            $('#exampleModal').modal({
                keyboard: false,
                backdrop: 'static'
            })
        }
    }
}

$(document).ready(function () {
    PageController.init();
    $("#next").click(function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $("#questions").offset().top
        }, 800);
    })

    $("#submit").click(function (e) {
        e.preventDefault();
        PageController.form_submit();
    })
})

