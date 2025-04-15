(function ($) {
    "use strict";

    $(window).on("load", function () {
        updateCountdown();
        window.countdownInterval = setInterval(updateCountdown, 1000);
    });

    function updateCountdown() {
        var countdownDateElement = document.getElementById("countdown_date");
        var countdownDate = countdownDateElement ? countdownDateElement.textContent.trim() : "";

        if (!countdownDate) return;

        var targetDate = new Date(countdownDate).getTime();
        var now = new Date().getTime();
        var timeDifference = targetDate - now;

        var countdownSection = document.getElementById("countdown-section");
        var finishedMessage = document.getElementById("countdown-finished-message");

        if (timeDifference <= 0) {
            if (countdownSection) countdownSection.style.display = "block";
            if (finishedMessage) finishedMessage.style.display = "block";
            clearInterval(window.countdownInterval); // stop updates
            return;
        }

        const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

        document.getElementById("days").textContent = days < 10 ? `0${days}` : days;
        document.getElementById("hours").textContent = hours < 10 ? `0${hours}` : hours;
        document.getElementById("minutes").textContent = minutes < 10 ? `0${minutes}` : minutes;
        document.getElementById("seconds").textContent = seconds < 10 ? `0${seconds}` : seconds;
    }

})(jQuery);
