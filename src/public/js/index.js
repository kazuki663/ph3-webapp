"use strict";

$(function () {
    $("#modal-open").click(function () {
        $("#modal-overlay").fadeIn();
    });
    $("#modal-close").click(function () {
        $("#modal-overlay").fadeOut();
    });
});

// ここから完了画面とloading画面

$(function () {
    $("#finish-btn").click(function () {
        $("#loading-overlay").fadeIn();
        $("#modal-overlay").fadeOut();
        setTimeout(function () {
            $("#loading-overlay").fadeOut();
        }, 3000);
        setTimeout(function () {
            $("#finish-overlay").fadeIn();
        }, 3000);
        // $('loading').addClass('active');
    });
});

$("#finish-close").click(function () {
    $("#finish-overlay").fadeOut();
});

// ここからチェックボックス
let check = document.getElementsByClassName("content-options");
let checks = Array.from(check);

checks.forEach(function (btn) {
    btn.addEventListener("click", function () {
        btn.classList.toggle("on-content-options");
        btn.classList.toggle("content-options");
    });
});

let bigcheck = document.getElementById("Bigcheck");

bigcheck.addEventListener("click", function () {
    bigcheck.classList.toggle("off-bigcheck");
    bigcheck.classList.toggle("bigcheck");
});

// ここからカレンダー

let studyday = document.getElementById("study-box");
let fp = flatpickr(studyday);
