"use strict";
var KTSigninGeneral = function () {
    var t, e, i;
    return {
        init: function () {
            t = document.querySelector("#kt_sign_in_form"), e = document.querySelector("#kt_sign_in_submit"), i = FormValidation.formValidation(t, {
                fields: {
                    email: {
                        validators: {
                            notEmpty: {
                                message: "Email address is required"
                            },
                            emailAddress: {
                                message: "The value is not a valid email address"
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: "The password is required"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row"
                    })
                }
            }), e.addEventListener("click", (function (n) {
                n.preventDefault(), i.validate().then((function (i) {
                    "Valid" == i ? (e.setAttribute("data-kt-indicator", "on"), e.disabled = !0, setTimeout((function () {
                        e.removeAttribute("data-kt-indicator"), e.disabled = !1, Swal.fire({
                            text: "You have successfully logged in!",
                            icon: "success",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        }).then((function (e) {
                            if (e.isConfirmed) {
                                t.querySelector('[name="email"]').value = "", t.querySelector('[name="password"]').value = "";
                                var i = t.getAttribute("data-kt-redirect-url");
                                i && (location.href = i)
                            }
                        }))
                    }), 2e3)) : Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    })
                }))
            }))
        }
    }
}();
KTUtil.onDOMContentLoaded((function () {
    KTSigninGeneral.init()
}));



"use strict";
var KTSigninGeneral = function () {
    var form, submitButton, formValidation;

    return {
        init: function () {
            form = document.querySelector("#kt_sign_in_form");
            submitButton = document.querySelector("#kt_sign_in_submit");
            formValidation = FormValidation.formValidation(form, {
                fields: {
                    identity: {
                        validators: {
                            notEmpty: {
                                message: "Email address is required"
                            },
                            emailAddress: {
                                message: "The value is not a valid email address"
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: "The password is required"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row"
                    })
                }
            });

            submitButton.addEventListener("click", function (event) {
                event.preventDefault();
                formValidation.validate().then(function (status) {
                    if (status === "Valid") {
                        submitButton.setAttribute("data-kt-indicator", "on");
                        submitButton.disabled = true;

                        // Serialize form data
                        var formData = new FormData(form);

                        // You can perform an AJAX request here to submit the form data to the server
                        // Replace the URL with your desired URL
                        var url = form.getAttribute("data-kt-redirect-url");
                        fetch(url, {
                            method: 'POST',
                            body: formData
                        })
                            .then(response => response.json())
                            .then(data => {
                                submitButton.removeAttribute("data-kt-indicator");
                                submitButton.disabled = false;
                                if (data.success) {
                                    Swal.fire({
                                        text: "You have successfully logged in!",
                                        icon: "success",
                                        buttonsStyling: false,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn btn-primary"
                                        }
                                    }).then(function (result) {
                                        if (result.isConfirmed) {
                                            form.querySelector('[name="identity"]').value = "";
                                            form.querySelector('[name="password"]').value = "";
                                            if (url) {
                                                location.href = url;
                                            }
                                        }
                                    });

                                } else {
                                    Swal.fire({
                                        text: "Login failed. Please try again.",
                                        icon: "error",
                                        buttonsStyling: false,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn btn-primary"
                                        }
                                    });
                                }
                            });
                    } else {
                        Swal.fire({
                            text: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    }
                });
            });
        }
    };
}();

KTUtil.onDOMContentLoaded(function () {
    KTSigninGeneral.init();
});
