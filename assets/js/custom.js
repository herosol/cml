// var sndMsg = true;
// window.onbeforeunload = confirmExit;

$(document).ready(function() {
    $(document).on('submit', '.frmAjax', function(e) {
        e.preventDefault();
        needToConfirm = true;
        var frmbtn = $(this).find("button[type='submit']");
        var frmIcon = $(this).find("button[type='submit'] i.spinner");
        var frmMsg = $(this).find("div.alertMsg:first");
        var frm = this;

        frmbtn.attr("disabled", true);
        frmMsg.hide();
        frmIcon.removeClass("hidden");
        $.ajax({
                url: $(this).attr('action'),
                data: new FormData(frm),
                processData: false,
                contentType: false,
                dataType: 'JSON',
                method: 'POST'
            })
            .done(function(rs) {
                console.log(rs);

                frmMsg.removeClass('alert alert-danger alert-sm text-white');
                if (rs.status == 1)
                    frmMsg.html(rs.msg).slideDown(500);
                else
                    frmMsg.addClass('alert alert-danger alert-sm text-white').html(rs.msg).slideDown(500);

                if (rs.scroll_to_msg)
                    $('html, body').animate({ scrollTop: frmMsg.offset().top - 300 }, 'slow');

                if ((typeof recaptcha !== 'undefined') && recaptcha)
                    grecaptcha.reset();

                if (rs.status == 1) {
                    setTimeout(function() {
                        if (rs.frm_reset) {
                            frm.reset();
                            if ((typeof recaptcha !== 'undefined') && recaptcha)
                                grecaptcha.reset();
                        }

                        if (rs.hide_msg)
                            frmMsg.slideUp(500);
                        frmIcon.addClass("hidden");
                        if (rs.redirect_url) {
                            window.location.href = rs.redirect_url;
                        } else {
                            frmbtn.attr("disabled", false);
                        }
                    }, 3000);
                } else {
                    setTimeout(function() {
                        if (rs.hide_msg)
                            frmMsg.slideUp(500);
                        frmbtn.attr("disabled", false);
                        frmIcon.addClass("hidden");
                        if (rs.redirect_url)
                            window.location.href = rs.redirect_url;
                    }, 2000);
                }
            })
            .fail(function(rs) {
                console.log(rs);
                // alert('Network error has occurred please try again!');
            })
            .always(function() {
                needToConfirm = false;
            });
    });
});

const fetchStates = (country_id, append_to) => {
    append_to = '#' + append_to;
    $.ajax({
        url: base_url + 'index/fetch_states',
        data: {
            'country_id': country_id
        },
        dataType: 'JSON',
        method: 'POST',
        success: function(rs) {
            $(append_to).html(rs.html);
        },
        complete: function() {

        }
    })
}