$(function(){$("#show_passwd").click(function(){$(this).parent().parent().find("#preview_passwd").attr("type","text"),$(this).parent().find("#hide_passwd").removeClass("d-none"),$(this).parent().find("#show_passwd").addClass("d-none")}),$("#hide_passwd").click(function(){$(this).parent().parent().find("#preview_passwd").attr("type","password"),$(this).parent().find("#hide_passwd").addClass("d-none"),$(this).parent().find("#show_passwd").removeClass("d-none")})});