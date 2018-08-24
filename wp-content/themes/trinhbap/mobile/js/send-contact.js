//
// function ShowLoading() {
//     var element = $('body');
//     if (element.length > 0) {
//         element.append("<div class='loading-icon' style='position: fix'></div>");
//         element.css("position", "relative");
//     }
// }
//
// function HideLoading() {
//     var element = $('body');
//     if (element.length > 0) {
//         element.find(".loading-icon").remove();
//     }
// }
// //contact 1
// $('#frm-contact-v1 #Phone').keydown(function (event) {
//             // Allow special chars + arrows
//             if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9
//                 || event.keyCode == 27 || event.keyCode == 13
//                 || (event.keyCode == 65 && event.ctrlKey === true)
//                 || (event.keyCode >= 35 && event.keyCode <= 39)) {
//                 return;
//             } else {
//                 // If it's not a number stop the keypress
//                 if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105)) {
//                     event.preventDefault();
//                 }
//             }
//         });
// function SendContact() {
//     var payment = "";
//     if($('.modal-quotation-v1 #pop_payany').is(':checked')) {
//         payment = "Trả góp";
//     }
//     if($('.modal-quotation-v1 #pop_payall').is(':checked')) {
//         payment = "Trả hết";
//     }
//     $(".modal-quotation-v1 #Description").val("Cần báo giá xe : " + $(".modal-quotation-v1 .material-car input").val() + ". Hình thức: " + payment + ". Tỉnh thành: " + $(".modal-quotation-v1 .material-address input").val());
//
//     var result = $('#frm-contact-v1').valid();
//     if (result) {
//         var obj = {
//             FullName: $('#frm-contact-v1 #FullName').val(),
//             Address: $('#frm-contact-v1 #Address').val(),
//             Description: $('#frm-contact-v1 #Description').val(),
//             Email: $('#frm-contact-v1 #Email').val(),
//             Phone: $('#frm-contact-v1 #Phone').val(),
//             Type: 1
//         };
//         $.ajax({
//             url: '/Mobile/MoHome/SendContact',
//             type: 'POST',
//             data: JSON.stringify(obj),
//             dataType: 'json',
//             contentType: 'application/json; charset=utf-8',
//             success: function (data) {
//                 SendEmailContactSuccess(data);
//             },
//             beforeSend: function () {
//                 ShowLoading();
//             },
//             complete: function () {
//                 HideLoading();
//             }
//         });
//         return true;
//     }
//     return false;
// }
//
// function SendEmailContactSuccess(data) {
//     if (data == 1) {
//         alert("Cảm ơn Anh/Chị đã gửi yêu cầu báo giá, " + $('#contact-name').val() + " sẽ liên hệ lại trong thời gian sớm nhất!");
//         $("#frm-contact-v1 #FullName").val("");
//         $("#frm-contact-v1 #Address").val("");
//         $("#frm-contact-v1 #Description").val("");
//         $("#frm-contact-v1 #Email").val("");
//         $("#frm-contact-v1 #Phone").val("");
//         $('.modal-quotation-v1 .modal-close').click();
//     }
// }
//
//
// //contact 2
// $('.modal-quotation-v2 #Phone').keydown(function (event) {
//     // Allow special chars + arrows
//     if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9
//         || event.keyCode == 27 || event.keyCode == 13
//         || (event.keyCode == 65 && event.ctrlKey === true)
//         || (event.keyCode >= 35 && event.keyCode <= 39)) {
//         return;
//     } else {
//         // If it's not a number stop the keypress
//         if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105)) {
//             event.preventDefault();
//         }
//     }
// });
//
// function SendContact2() {
//     var payment = "";
//     if ($('.modal-quotation-v2 #pop_payany').is(':checked')) {
//         payment = "Trả góp";
//     }
//     if ($('.modal-quotation-v2 #pop_payall').is(':checked')) {
//         payment = "Trả hết";
//     }
//     $(".modal-quotation-v2 #Description").val("Cần báo giá xe : " + $(".modal-quotation-v2 .material-car input").val() + ". Hình thức: " + payment + ". Tỉnh thành: " + $(".modal-quotation-v2 .material-address input").val());
//
//     var result = $('#frm-contact-v2').valid();
//     if (result) {
//         var obj = {
//             FullName: $('.modal-quotation-v2 #FullName').val(),
//             Address: $('.modal-quotation-v2 #Address').val(),
//             Description: $('.modal-quotation-v2 #Description').val(),
//             Email: $('.modal-quotation-v2 #Email').val(),
//             Phone: $('.modal-quotation-v2 #Phone').val(),
//             Type: 1
//         };
//         $.ajax({
//             url: '/Mobile/MoHome/SendContact',
//             type: 'POST',
//             data: JSON.stringify(obj),
//             dataType: 'json',
//             contentType: 'application/json; charset=utf-8',
//             success: function (data) {
//                 SendEmailContactSuccessV2(data);
//             },
//             beforeSend: function () {
//                 ShowLoading();
//             },
//             complete: function () {
//                 HideLoading();
//             }
//         });
//         return true;
//     }
//     return false;
// }
//
// function SendEmailContactSuccessV2(data) {
//     if (data == 1) {
//         alert("Cảm ơn Anh/Chị đã gửi yêu cầu báo giá, " + $('#contact-name').val() + " sẽ liên hệ lại trong thời gian sớm nhất!");
//         $(".modal-quotation-v2 #FullName").val("");
//         $(".modal-quotation-v2 #Address").val("");
//         $(".modal-quotation-v2 #Description").val("");
//         $(".modal-quotation-v2 #Email").val("");
//         $(".modal-quotation-v2 #Phone").val("");
//         $('.modal-quotation-v2 .modal-close').click();
//     }
// }
//
// //driver
//
// $('.modal-test-drive-v2 #Phone').keydown(function (event) {
//     // Allow special chars + arrows
//     if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9
//         || event.keyCode == 27 || event.keyCode == 13
//         || (event.keyCode == 65 && event.ctrlKey === true)
//         || (event.keyCode >= 35 && event.keyCode <= 39)) {
//         return;
//     } else {
//         // If it's not a number stop the keypress
//         if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105)) {
//             event.preventDefault();
//         }
//     }
// });
//
// function SendContactDriver() {
//     $(".modal-test-drive-v2 #Description").val("Cần lái thử xe : " + $(".modal-test-drive-v2 .material-car input").val() + ". Tỉnh thành: " + $(".modal-test-drive-v2 .material-address input").val());
//
//     var result = $('#frm-driver-v2').valid();
//     if (result) {
//         var obj = {
//             FullName: $('.modal-test-drive-v2 #FullName').val(),
//             Address: $('.modal-test-drive-v2 #Address').val(),
//             Description: $('.modal-test-drive-v2 #Description').val(),
//             Email: $('.modal-test-drive-v2 #Email').val(),
//             Phone: $('.modal-test-drive-v2 #Phone').val(),
//             Type: 1
//         };
//         $.ajax({
//             url: '/Mobile/MoHome/SendContact',
//             type: 'POST',
//             data: JSON.stringify(obj),
//             dataType: 'json',
//             contentType: 'application/json; charset=utf-8',
//             success: function (data) {
//                 SendEmailContactSuccessD(data);
//             },
//             beforeSend: function () {
//                 ShowLoading();
//             },
//             complete: function () {
//                 HideLoading();
//             }
//         });
//         return true;
//     }
//     return false;
// }
//
// function SendEmailContactSuccessD(data) {
//     if (data == 1) {
//         alert("Cảm ơn Anh/Chị đã gửi yêu cầu lái xe thử, " + $('#contact-name').val() + " sẽ liên hệ lại trong thời gian sớm nhất!");
//         $(".modal-test-drive-v2 #FullName").val("");
//         $(".modal-test-drive-v2 #Address").val("");
//         $(".modal-test-drive-v2 #Description").val("");
//         $(".modal-test-drive-v2 #Email").val("");
//         $(".modal-test-drive-v2 #Phone").val("");
//         $('.modal-test-drive-v2 .modal-close').click();
//     }
// }
//
// //bank
//
// $('.modal-bank-v2 #Phone').keydown(function (event) {
//     // Allow special chars + arrows
//     if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9
//         || event.keyCode == 27 || event.keyCode == 13
//         || (event.keyCode == 65 && event.ctrlKey === true)
//         || (event.keyCode >= 35 && event.keyCode <= 39)) {
//         return;
//     } else {
//         // If it's not a number stop the keypress
//         if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105)) {
//             event.preventDefault();
//         }
//     }
// });
//
// function SendContactBank() {
//     var payment = "";
//     if ($('.modal-bank-v2 #pop_payany').is(':checked')) {
//         payment = "Trả góp";
//     }
//     if ($('.modal-bank-v2 #pop_payall').is(':checked')) {
//         payment = "Trả hết";
//     }
//     $(".modal-bank-v2 #Description").val("Cần báo giá ước tính trả góp : " + $(".modal-bank-v2 .material-car input").val() + ". Hình thức: " + payment + ". Tỉnh thành: " + $(".modal-bank-v2 .material-address input").val());
//
//     var result = $('#frm-bank').valid();
//     if (result) {
//         var obj = {
//             FullName: $('.modal-bank-v2 #FullName').val(),
//             Address: $('.modal-bank-v2 #Address').val(),
//             Description: $('.modal-bank-v2 #Description').val(),
//             Email: $('.modal-bank-v2 #Email').val(),
//             Phone: $('.modal-bank-v2 #Phone').val(),
//             Type: 1
//         };
//         $.ajax({
//             url: '/Mobile/MoHome/SendContact',
//             type: 'POST',
//             data: JSON.stringify(obj),
//             dataType: 'json',
//             contentType: 'application/json; charset=utf-8',
//             success: function (data) {
//                 SendEmailContactSuccessB(data);
//             },
//             beforeSend: function () {
//                 ShowLoading();
//             },
//             complete: function () {
//                 HideLoading();
//             }
//         });
//         return true;
//     }
//     return false;
// }
//
// function SendEmailContactSuccessB(data) {
//     if (data == 1) {
//         alert("Cảm ơn Anh/Chị đã gửi yêu cầu ước tính trả góp, " + $('#contact-name').val() + " sẽ liên hệ lại trong thời gian sớm nhất!");
//         $(".modal-bank-v2 #FullName").val("");
//         $(".modal-bank-v2 #Address").val("");
//         $(".modal-bank-v2 #Description").val("");
//         $(".modal-bank-v2 #Email").val("");
//         $(".modal-bank-v2 #Phone").val("");
//         $('.modal-bank-v2 .modal-close').click();
//     }
// }