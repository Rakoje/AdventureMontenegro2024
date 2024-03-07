$(document).ready(function() {
    $("#mne_lang").click(function () {
        $.ajax({
            url: '../controllers/GeneralController.php',
            type: 'POST',
            data: {
                language: "mne",
                action: "changeLanguage"
            },
            success: function (response) {
                location.reload();
            },
            error: function (error) {
                $("#error-message-add-project").text("Database Error!")
            }
        });
    });

    $("#eng_lang").click(function () {
        $.ajax({
            url: '../controllers/GeneralController.php',
            type: 'POST',
            data: {
                language: "eng",
                action: "changeLanguage"
            },
            success: function (response) {
                location.reload();
            },
            error: function (error) {
                $("#error-message-add-project").text("Database Error!")
            }
        });
    });

    $("#rus_lang").click(function () {
        $.ajax({
            url: '../controllers/GeneralController.php',
            type: 'POST',
            data: {
                language: "rus",
                action: "changeLanguage"
            },
            success: function (response) {
                location.reload();
            },
            error: function (error) {
                $("#error-message-add-project").text("Database Error!")
            }
        });
    });
});
document.addEventListener('DOMContentLoaded', function () {
    const showOnScroll = document.querySelector('.animated-div');

    const options = {
        threshold: 0.5, // Adjust the threshold as needed (0 to 1)
    };

    const observer = new IntersectionObserver(function(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                showOnScroll.style.opacity = '0';
            } else {
                showOnScroll.style.opacity = '1';
            }
        });
    }, options);

    observer.observe(showOnScroll);
});

function sendEmail() {
    window.location = "mailto:milimircerovic@gmail.com";
}