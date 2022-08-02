// JavaScript Document

$(document).ready(function () {
	"use strict";
	$(window).scroll(function () {
		if ($(document).scrollTop() > 50) {
			$('.myNavbar').slideUp(500);
		} else {
			$('.myNavbar').slideDown("slow");
		}
	});
	$(function () {
		$('[data-toggle="tooltip"]').tooltip();
	});	
});