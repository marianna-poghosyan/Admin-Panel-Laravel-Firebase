/*
 *
 *   INSPINIA - Responsive Admin Theme
 *   version 2.7.1
 *
 */
const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

$(document).ready(function () {
	$.ajax({
		url: '/guests',
		type: 'GET',
		dataType: 'JSON',
	}).done(function (data) {
		let guests = Object.values(data.data);
		renderTablesPage(guests, data.data);
	}).fail(function (res) {
		console.log(res);
	});
	let add = $('a[href^="https://www.000webhost.com"]');
	if (add.length) {
		add.parent().remove();
	}
    // Add body-small class if window less than 768px
    if ($(this).width() < 769) {
        $('body').addClass('body-small')
    } else {
        $('body').removeClass('body-small')
    }

    // MetsiMenu
    $('#side-menu').metisMenu();

    // Collapse ibox function
    $('.collapse-link').on('click', function () {
        var ibox = $(this).closest('div.ibox');
        var button = $(this).find('i');
        var content = ibox.children('.ibox-content');
        content.slideToggle(200);
        button.toggleClass('fa-chevron-up').toggleClass('fa-chevron-down');
        ibox.toggleClass('').toggleClass('border-bottom');
        setTimeout(function () {
            ibox.resize();
            ibox.find('[id^=map-]').resize();
        }, 50);
    });

    // Close ibox function
    $('.close-link').on('click', function () {
        var content = $(this).closest('div.ibox');
        content.remove();
    });

    // Fullscreen ibox function
    $('.fullscreen-link').on('click', function () {
        var ibox = $(this).closest('div.ibox');
        var button = $(this).find('i');
        $('body').toggleClass('fullscreen-ibox-mode');
        button.toggleClass('fa-expand').toggleClass('fa-compress');
        ibox.toggleClass('fullscreen');
        setTimeout(function () {
            $(window).trigger('resize');
        }, 100);
    });

    // Minimalize menu
    $('.navbar-minimalize').on('click', function (event) {
        event.preventDefault();
        $("body").toggleClass("mini-navbar");
        SmoothlyMenu();

    });

    // Full height of sidebar
    function fix_height() {
        var heightWithoutNavbar = $("body > #wrapper").height() - 61;
        $(".sidebard-panel").css("min-height", heightWithoutNavbar + "px");

        var navbarHeight = $('nav.navbar-default').height();
        var wrapperHeight = $('#page-wrapper').height();

        if (navbarHeight > wrapperHeight) {
            $('#page-wrapper').css("min-height", navbarHeight + "px");
        }

        if (navbarHeight < wrapperHeight) {
            $('#page-wrapper').css("min-height", $(window).height() + "px");
        }

        if ($('body').hasClass('fixed-nav')) {
            if (navbarHeight > wrapperHeight) {
                $('#page-wrapper').css("min-height", navbarHeight + "px");
            } else {
                $('#page-wrapper').css("min-height", $(window).height() - 60 + "px");
            }
        }

    }

    fix_height();

    // Fixed Sidebar
    $(window).bind("load", function () {
        if ($("body").hasClass('fixed-sidebar')) {
            $('.sidebar-collapse').slimScroll({
                height: '100%',
                railOpacity: 0.9
            });
        }
    });

    $(window).bind("load resize scroll", function () {
        if (!$("body").hasClass('body-small')) {
            fix_height();
        }
    });

    // Add slimscroll to element
    $('.full-height-scroll').slimscroll({
        height: '100%'
    })

	// Wizard and steps

	$("#wizard").steps();
	$("#form").steps({
		bodyTag: "fieldset",
		onStepChanging: function (event, currentIndex, newIndex)
		{
			// Always allow going backward even if the current step contains invalid fields!
			if (currentIndex > newIndex)
			{
				return true;
			}

			// Forbid suppressing "Warning" step if the user is to young
			if (newIndex === 3 && Number($("#age").val()) < 18)
			{
				return false;
			}

			var form = $(this);

			// Clean up if user went backward before
			if (currentIndex < newIndex)
			{
				// To remove error styles
				$(".body:eq(" + newIndex + ") label.error", form).remove();
				$(".body:eq(" + newIndex + ") .error", form).removeClass("error");
			}

			// Disable validation on fields that are disabled or hidden.
			form.validate().settings.ignore = ":disabled,:hidden";

			// Start validation; Prevent going forward if false
			return form.valid();
		},
		onStepChanged: function (event, currentIndex, priorIndex)
		{
			// Suppress (skip) "Warning" step if the user is old enough.
			if (currentIndex === 2 && Number($("#age").val()) >= 18)
			{
				$(this).steps("next");
			}

			// Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
			if (currentIndex === 2 && priorIndex === 3)
			{
				$(this).steps("previous");
			}
		},
		onFinishing: function (event, currentIndex)
		{
			var form = $(this);

			// Disable validation on fields that are disabled.
			// At this point it's recommended to do an overall check (mean ignoring only disabled fields)
			form.validate().settings.ignore = ":disabled";

			// Start validation; Prevent form submission if false
			return form.valid();
		},
		onFinished: function (event, currentIndex)
		{
			var form = $(this);

			// Submit form input
			form.submit();
		}
	}).validate({
		errorPlacement: function (error, element)
		{
			element.before(error);
		},
		rules: {
			confirm: {
				equalTo: "#password"
			}
		}
	});
	$('.footable').footable();



	// Calendar
	$('.i-checks').iCheck({
		checkboxClass: 'icheckbox_square-green',
		radioClass: 'iradio_square-green'
	});

	/* initialize the external events
	 -----------------------------------------------------------------*/


	$('#external-events div.external-event').each(function() {

		// store data so the calendar knows to render an event upon drop
		$(this).data('event', {
			title: $.trim($(this).text()), // use the element's text as the event title
			stick: true // maintain when user navigates (see docs on the renderEvent method)
		});

		// make the event draggable using jQuery UI
		$(this).draggable({
			zIndex: 1111999,
			revert: true,      // will cause the event to go back to its
			revertDuration: 0  //  original position after the drag
		});

	});


	/* initialize the calendar
	 -----------------------------------------------------------------*/
	var date = new Date();
	var d = date.getDate();
	var m = date.getMonth();
	var y = date.getFullYear();

	$('#calendar').fullCalendar({
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		editable: true,
		droppable: true, // this allows things to be dropped onto the calendar
		drop: function() {
			// is the "remove after drop" checkbox checked?
			if ($('#drop-remove').is(':checked')) {
				// if so, remove the element from the "Draggable Events" list
				$(this).remove();
			}
		},
		events: [
			{
				title: 'All Day Event',
				start: new Date(y, m, 1)
			},
			{
				title: 'Long Event',
				start: new Date(y, m, d-5),
				end: new Date(y, m, d-2)
			},
			{
				id: 999,
				title: 'Repeating Event',
				start: new Date(y, m, d-3, 16, 0),
				allDay: false
			},
			{
				id: 999,
				title: 'Repeating Event',
				start: new Date(y, m, d+4, 16, 0),
				allDay: false
			},
			{
				title: 'Meeting',
				start: new Date(y, m, d, 10, 30),
				allDay: false
			},
			{
				title: 'Lunch',
				start: new Date(y, m, d, 12, 0),
				end: new Date(y, m, d, 14, 0),
				allDay: false
			},
			{
				title: 'Birthday Party',
				start: new Date(y, m, d+1, 19, 0),
				end: new Date(y, m, d+1, 22, 30),
				allDay: false
			},
			{
				title: 'Click for Google',
				start: new Date(y, m, 28),
				end: new Date(y, m, 29),
				url: 'http://google.com/'
			}
		]
	});

	// Stay Page
	$("#todo, #inprogress, #completed").sortable({
		connectWith: ".connectList",
		update: function( event, ui ) {

			var todo = $( "#todo" ).sortable( "toArray" );
			var inprogress = $( "#inprogress" ).sortable( "toArray" );
			var completed = $( "#completed" ).sortable( "toArray" );
			$('.output').html("ToDo: " + window.JSON.stringify(todo) + "<br/>" + "In Progress: " + window.JSON.stringify(inprogress) + "<br/>" + "Completed: " + window.JSON.stringify(completed));
		}
	}).disableSelection();

	$('#loading-example-btn').click(function () {
		btn = $(this);
		simpleLoad(btn, true)

		// Ajax example
//                $.ajax().always(function () {
//                    simpleLoad($(this), false)
//                });

		simpleLoad(btn, false)
	});
	setInterval(function() {
		if (add.length) {
			add.parent().remove();
		}
	}, 2000)

	// Guests table

	$('.guestsTables').DataTable({
		pageLength: 25,
		responsive: true,
		dom: '<"html5buttons"B>lTfgitp',
		buttons: [
			{ extend: 'copy'},
			{extend: 'csv'},
			{extend: 'excel', title: 'ExampleFile'},
			{extend: 'pdf', title: 'ExampleFile'},

			{extend: 'print',
				customize: function (win){
					$(win.document.body).addClass('white-bg');
					$(win.document.body).css('font-size', '10px');

					$(win.document.body).find('table')
						.addClass('compact')
						.css('font-size', 'inherit');
				}
			}
		]

	});
});


// Minimalize menu when screen is less than 768px
$(window).bind("resize", function () {
    if ($(this).width() < 769) {
        $('body').addClass('body-small')
    } else {
        $('body').removeClass('body-small')
    }
});

// Toast
$('#showtoast').click(function () {
	let type = 'info';
	let title = "You have a reminder";
	let text = "Don't forget to book flight for Berlin conference.";
	showToast(type, title, text);
});

$('#showalert').click(function () {
	let type = 'error';
	let title = "You have an alert!!!";
	let text = "You have forgotten to book flight for Berlin conference!";
	showAlert(type, title, text);
});

function showToast(type, title, text) {
	toastr.options = {
		"closeButton": true,
		"debug": false,
		"progressBar": true,
		"preventDuplicates": false,
		"positionClass": "toast-top-right",
		"onclick": null,
		"showDuration": "400",
		"hideDuration": "1000",
		"timeOut": "7000",
		"extendedTimeOut": "1000",
		"showEasing": "swing",
		"hideEasing": "linear",
		"showMethod": "fadeIn",
		"hideMethod": "fadeOut"
	};
	toastr[type](text, title)
}

function showAlert() {
	toastr.options = {
		"closeButton": true,
		"debug": false,
		"progressBar": true,
		"preventDuplicates": false,
		"positionClass": "toast-top-right",
		"onclick": null,
		"showDuration": "400",
		"hideDuration": "1000",
		"timeOut": "0",
		"extendedTimeOut": "1000",
		"showEasing": "swing",
		"hideEasing": "linear",
		"showMethod": "fadeIn",
		"hideMethod": "fadeOut"
	};
	toastr[type](text, title)
}
function renderTablesPage(guests, guestsByTables) {
	let table = '';
	for (let singleTable of guests) {
		for (let i=0; i<singleTable.length; i++) {
			let star = singleTable[i]['attended'] ? '<i class="fa fa-star" aria-hidden="true"></i>' : '';
			table +=`
					<tr>
						<td>${singleTable[i]['name']}</td>
						<td>${createTableSelect(singleTable[i]['user_id'], singleTable[i]['table_id'])}</td>
						<td>${singleTable[i]['category']}</td>
						<td>${star}</td>
					</tr>
				`
		}
	}
	$("#guestsBody").html(table);

	let tables = '';
	for (let i=1; i<61; i++) {
		let attended = 0;
		let occupied = 0;
		let rows = '';
		let star = '';
		if (guestsByTables[i]) {
			attended = guestsByTables[i].length;
			for (let singleGuest of guestsByTables[i]) {
				if (singleGuest['attended']) {
					occupied++;
					star = '<i class="fa fa-star" aria-hidden="true"></i>'
				} else {
					star = ''
				}
				rows += `
					<tr>
                        <td>${singleGuest['name']} ${star}</td>
                        <td>${singleGuest['category']}</td>
                        <td class="center">
                            <i class="fa fa-times removeGuest" data-guestId="${singleGuest['user_id']}" aria-hidden="true"></i>
                        </td>
                    </tr>
				`
			}
		}
		tables += `
			<div class="col-md-4 singleTable" id="singleTable${i}">
                <div class="imageDiv">
                    <img src="img/table.png" alt="">
                    <p>
                        Table ${i} <br>
                        Attended - ${attended} <br>
                        Occupied - ${occupied}
                    </p>
                </div>
                <div class="ibox-content">

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover guestsTable2" >
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            	${rows}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
		`;
		if (i % 3 === 0) {
			tables += `<div class="col-sm-12" style="height: 10px;"></div>`
		}
	}
	$("#tables").html(tables);


}

function createTableSelect(id, table) {
	let select = `<select name="guest${id}" id="guest${id}" data-guestId="${id}" class="tableSelect">`;
	for (let i=0; i<61; i++) {
		select += table == i ? `<option value="${i}" selected>Table ${i}</option>` : `<option value="${i}">Table ${i}</option>`;
	}
	select += "</select>";
	return select;
}

function simpleLoad(btn, state) {
	if (state) {
		btn.children().addClass('fa-spin');
		btn.contents().last().replaceWith(" Loading");
	} else {
		setTimeout(function () {
			btn.children().removeClass('fa-spin');
			btn.contents().last().replaceWith(" Refresh");
		}, 2000);
	}
}

function SmoothlyMenu() {
    if (!$('body').hasClass('mini-navbar') || $('body').hasClass('body-small')) {
        // Hide menu in order to smoothly turn on when maximize menu
        $('#side-menu').hide();
        // For smoothly turn on menu
        setTimeout(
            function () {
                $('#side-menu').fadeIn(400);
            }, 200);
    } else if ($('body').hasClass('fixed-sidebar')) {
        $('#side-menu').hide();
        setTimeout(
            function () {
                $('#side-menu').fadeIn(400);
            }, 100);
    } else {
        // Remove all inline style from jquery fadeIn function to reset menu state
        $('#side-menu').removeAttr('style');
    }
}

// Google Maps
google.maps.event.addDomListener(window, 'load', init);

function init() {
	// Options for Google map
	// More info see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
	var mapOptions1 = {
		zoom: 11,
		center: new google.maps.LatLng(40.6700, -73.9400),
		// Style for Google Maps
		styles: [{"featureType":"water","stylers":[{"saturation":43},{"lightness":-11},{"hue":"#0088ff"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":99}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"color":"#808080"},{"lightness":54}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#ece2d9"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#ccdca1"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#767676"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#b8cb93"}]},{"featureType":"poi.park","stylers":[{"visibility":"on"}]},{"featureType":"poi.sports_complex","stylers":[{"visibility":"on"}]},{"featureType":"poi.medical","stylers":[{"visibility":"on"}]},{"featureType":"poi.business","stylers":[{"visibility":"simplified"}]}]
	};

	var mapOptions2 = {
		zoom: 11,
		center: new google.maps.LatLng(40.6700, -73.9400),
		// Style for Google Maps
		styles: [{"featureType":"all","elementType":"all","stylers":[{"invert_lightness":true},{"saturation":10},{"lightness":30},{"gamma":0.5},{"hue":"#435158"}]}]
	};

	var mapOptions3 = {
		center: new google.maps.LatLng(36.964645, -122.01523),
		zoom: 18,
		mapTypeId: google.maps.MapTypeId.SATELLITE,
		// Style for Google Maps
		styles: [{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#fffffa"}]},{"featureType":"water","stylers":[{"lightness":50}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"lightness":40}]}]
	};

	var mapOptions4 = {
		zoom: 11,
		center: new google.maps.LatLng(40.6700, -73.9400),
		// Style for Google Maps
		styles: [{"stylers":[{"hue":"#18a689"},{"visibility":"on"},{"invert_lightness":true},{"saturation":40},{"lightness":10}]}]
	};

	var fenway = new google.maps.LatLng(42.345573, -71.098326);
	var mapOptions5 = {
		zoom: 14,
		center: fenway,
		// Style for Google Maps
		styles: [{featureType:"landscape",stylers:[{saturation:-100},{lightness:65},{visibility:"on"}]},{featureType:"poi",stylers:[{saturation:-100},{lightness:51},{visibility:"simplified"}]},{featureType:"road.highway",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"road.arterial",stylers:[{saturation:-100},{lightness:30},{visibility:"on"}]},{featureType:"road.local",stylers:[{saturation:-100},{lightness:40},{visibility:"on"}]},{featureType:"transit",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"administrative.province",stylers:[{visibility:"off"}]/**/},{featureType:"administrative.locality",stylers:[{visibility:"off"}]},{featureType:"administrative.neighborhood",stylers:[{visibility:"on"}]/**/},{featureType:"water",elementType:"labels",stylers:[{visibility:"on"},{lightness:-25},{saturation:-100}]},{featureType:"water",elementType:"geometry",stylers:[{hue:"#ffff00"},{lightness:-25},{saturation:-97}]}]
	};

	var panoramaOptions = {
		position: fenway,
		pov: {
			heading: 10,
			pitch: 10
		}
	};
	var panorama = new google.maps.StreetViewPanorama(document.getElementById('pano'), panoramaOptions);

	// Get all html elements for map
	var mapElement1 = document.getElementById('map1');
	var mapElement2 = document.getElementById('map2');
	var mapElement3 = document.getElementById('map3');
	var mapElement4 = document.getElementById('map4');

	// Create the Google Map using elements
	var map1 = new google.maps.Map(mapElement1, mapOptions1);
	var map2 = new google.maps.Map(mapElement2, mapOptions2);
	var map3 = new google.maps.Map(mapElement3, mapOptions3);
	var map4 = new google.maps.Map(mapElement4, mapOptions4);
}

// Tables page functionality

$(document).on('change', '.tableSelect', function() {
	let table = $(this).val();
	let guest = $(this).attr('data-guestId');
	updateTables(table, guest);
});
function updateTables(table, guest) {
	$.ajax({
		url: '/guests/update',
		type: 'PUT',
		data: {_token: CSRF_TOKEN, user_id: guest, table_id: table},
		dataType: 'JSON',
	}).done(function (data) {
		let guests = Object.values(data.data);
		renderTablesPage(guests, data.data);
		let type = 'info';
		let title = "Congratulations!!";
		let text = data.message;
		showToast(type, title, text);
	}).fail(function (res) {
		console.log(res);
	});
}
$(document).on('click', '.removeGuest', function() {
	let table = 0;
	let guest = $(this).attr('data-guestId');
	updateTables(table, guest);
});
