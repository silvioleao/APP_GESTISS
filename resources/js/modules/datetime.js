import DateTimePicker from "tempusdominus-bootstrap-4";

window.datetimepicker = DateTimePicker;

$.fn.datetimepicker.Constructor.Default = $.extend(
    {},
    $.fn.datetimepicker.Constructor.Default,
    {
        icons: {
            type: "icons",
            time: "fa-solid fa-clock",
            date: "fa-solid fa-calendar",
            up: "fa-solid fa-arrow-up",
            down: "fa-solid fa-arrow-down",
            previous: "fa-solid fa-chevron-left",
            next: "fa-solid fa-chevron-right",
            today: "fa-solid fa-calendar-check",
            clear: "fa-solid fa-trash",
            close: "fa-solid fa-xmark",
        },
    }
);
