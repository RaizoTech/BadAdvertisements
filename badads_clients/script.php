<!-- Bootstrap bundle JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="assets/js/pace.min.js"></script>
<script src="assets/plugins/chartjs/js/Chart.min.js"></script>
<script src="assets/plugins/chartjs/js/Chart.extension.js"></script>
<script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
<!-- Vector map JavaScript -->
<script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<!--app-->
<script src="assets/js/app.js"></script>
<script src="assets/js/index.js"></script>
<script>
  new PerfectScrollbar(".review-list")
  new PerfectScrollbar(".chat-talk")
</script>
<?php
switch ($_SESSION['subs-stats']) {
	case 'UNLPAFOM01':
		validateFooter1();
		break;

	case 'UNLPAFOM02':
		validateFooter2();
		break;

	case 'UNLPAFOM03':
		validateFooter3();
		break;

	default:
		// code...
		break;
}

function validateFooter1(){

?>
<script type="text/javascript">

	$('#dashboard').css("display","block");
	$('#ChatSupport').css("display","none");
	$('#RequestsGraphics').css("display","none");
	$('#Requests1TimeVideo').css("display","none");
	$('#RequestsList').css("display","none");
	$('#progressBar').css('display','none');
	$(document).ready( function(){
		LogoutClient();
		FetchtableSample();
		all_buttons();
		$('#limit-records').change(function(event){
			event.preventDefault();
				$('form').submit();
		});
		RealTimeChat();
		// Optionns Chat
		optionsChat();
	});
	

	setInterval( function(){
		var page = 1;
		loadData(page);
		$(document).on('click', '.pagination li a', function(event) {
        event.preventDefault();
        page = $(this).data('page');
        loadData(page);
    });
  }, 3000);
    function loadData(page) {
        // AJAX request
        $.ajax({
            url: 'real/fetch_data_request_list.php?page=' + page,
            method: 'get',
            dataType: 'json',
            success: function(response) {
                // Insert data into table
                var html = '';
                $.each(response.data, function(index, value) {
                    html += '<tr>';
                    html += '<td>' + value.request_gvcode + '</td>';
                    html += '<td>' + value.name_set + '</td>';
                    html += '<td>' + value.type_of_request + '</td>';
                    html += '<td><img src="client_request_images/' + value.img_asset + '" width="100"></td>';
                    html += '<td><img src="client_request_images/' + value.img_refference + '" width="100"></td>';
                    if(value.status === 'Pending'){
                    html += '<td><center><span class="badge bg-warning text-white w-100">' + value.status + '</span></center></td>';
                    }
                    html += '<td><center>' + value.date_request + '</center></td>';
                    html += '</tr>';
                });
                $('#table-data').html(html);
                console.log(html);
                // Insert pagination links
                var pagination_html = '';
                for (var i = 1; i <= response.total_pages; i++) {
                    pagination_html += '<li><a href="#" data-page="' + i + '">' + i + '</a></li>';
                }
                $('#pagination').html(pagination_html);

                // Set active page
                $('.pagination li').removeClass('active');
                $('.pagination li a[data-page="' + page + '"]').parent().addClass('active');
            }
        });
    }

	setInterval( function(){
		realtimeCountBuddies();
	}, 3000);

	function realtimeCountBuddies(){
		realCountVidReq();
		realCountGraphReq();
		realCountAllReq();
		realCountBrands();
	}

	function realCountBrands(){
		const xhttp = new  XMLHttpRequest();
		xhttp.onload = function(){
			document.getElementById('brand-count').innerHTML =  this.responseText;
		}
		xhttp.open("GET", "real/realtimeCountBrand.php");
		xhttp.send();
	}

	function realCountVidReq(){
		const xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			document.getElementById('vR_count').innerHTML = this.responseText;
		}
		xhttp.open("GET", "real/realtimeCountReq1.php");
		xhttp.send();
	}

	function realCountGraphReq(){
		const xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			document.getElementById('gR_count').innerHTML = this.responseText;
		}
		xhttp.open("GET", "real/realtimeCountReq2.php");
		xhttp.send();
	}

	function realCountAllReq(){
		const xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			document.getElementById('aR_count').innerHTML = this.responseText;
		}
		xhttp.open("GET", "real/realtimeCountReq3.php");
		xhttp.send();
	}

	function submit_test(){
		$('#submit-btn-test').on('click', function(event){
			event.preventDefault();
			var data_test = $('#test1').val();
			var data_trans = {data_testing: data_test};
			$.ajax({
				url: "sample_multi_query.php",
				method: "POST",
				data: data_trans,
				success: function(response){
					var toasting = new bootstrap.Toast(document.getElementById('result-test-toast'));
					toasting.show();
					$('#result-test').html(response);
				}
			});
		});
	}

	function optionsChat(){
		$.ajax({
			url: 'real/options_chat.php',
			method: 'POST',
			success: function(response){
				$('#options-admin').html(response);
			}
		});
	}
	
	function RealTimeChat(){
		// Get chat messages
      	setInterval(function() {
        	$.ajax({
          		url: 'real/get_messages.php',
          		type: 'POST',
          		success: function(data) {
            		$('#chat-box').html(data);
          		}
        	});
      	}, 1000);

      	// Send chat message
      	$('#chat-form').submit(function(e) {
        	e.preventDefault();
        	$.ajax({
          		url: 'real/send_message.php',
          		type: 'POST',
          		data: $(this).serialize(),
          		success: function(data) {
            		$('#message').val('');
          		}
        	});
      	});
	}

	function all_buttons(){
		side_button_dashboard();
		side_button_chatsupport();
		side_button_reqgraph();
		side_button_reqvid1time();
		side_button_reqlist();
		submit_test();
		submit_requestGraph();
	}

	function submit_requestGraph(){
		$('#form-submit-graphics').submit(  function(event){
			event.preventDefault();
			var formData = new FormData($(this)[0]);
			var fileInput1 = $('#reset-img-rg1');
			var fileInput2 = $('#reset-img-rg2');
        	var filePath1 = fileInput1.val();
        	var filePath2 = fileInput2.val();
        	var allowedExtensions = /(\.png|\.jpg|\.gif)$/i; 
        
        	if(!allowedExtensions.exec(filePath1) && !allowedExtensions.exec(filePath2)){
            	var toasting = new bootstrap.Toast(document.getElementById('file-upload-toast'));
            	toasting.show();
            	$('#only-images-result').html("Only PNG, JPG, and GIF files are allowed.");
            	fileInput1.val('');
            	fileInput2.val('');
            	return false;
        	}
        	else {
        		$.ajax({
					url: 'real/submit_req_graph.php',
					method: 'POST',
					data: formData,
					cache: false, 
					contentType: false,
					processData: false,
					xhr: function(){
						$('#progressBar').css('display','block');
						var xhr = new window.XMLHttpRequest();
        				xhr.upload.addEventListener('progress', function(evt) {
          					if (evt.lengthComputable) {
            					var percentComplete = evt.loaded / evt.total;
            					percentComplete = parseInt(percentComplete * 100);
            					$('#progress').css('width', percentComplete + '%');
          					}
        				}, false);
        				return xhr;
					},
					success: function(response) {
        				// handle success response\
        				var toasting = new bootstrap.Toast(document.getElementById('input-graphic-fields'));
						toasting.show();
						$('#result-input-graphics').html(response);
						// Normal Field
						$('#reset-name-rg').val('');
						$('#reset-pname-rg').val('');
						// Selected Field
						$('#reset-select-rg1').val($('#reset-select-rg1 option:first').val());
						$('#reset-select-rg2').val($('#reset-select-rg2 option:first').val());
						// Input File Field
						$('#reset-img-rg1').val('');
						$('#reset-img-rg2').val('');
						console.log(response);
      				},
      				error: function(jqXHR, textStatus, errorThrown) {
        				// handle error response
      				}
				});
        	}
		});
	}

	function side_button_dashboard(){
		$('#sideDashboard_btn1').on('click', function(event){
			event.preventDefault();
			$('#dashboard').css("display","block");
			$('#ChatSupport').css("display","none");
			$('#RequestsGraphics').css("display","none");
			$('#Requests1TimeVideo').css("display","none");
			$('#RequestsList').css("display","none");
		});
	}

	function side_button_chatsupport(){
		$('#sideChatSupport_btn1').on('click', function(event){
			event.preventDefault();
			$('#dashboard').css("display","none");
			$('#ChatSupport').css("display","block");
			$('#RequestsGraphics').css("display","none");
			$('#Requests1TimeVideo').css("display","none");
			$('#RequestsList').css("display","none");
		});
	}

	function side_button_reqgraph(){
		$('#sideRequestsGraphics_btn1').on('click', function(event){
			event.preventDefault();
			$('#dashboard').css("display","none");
			$('#ChatSupport').css("display","none");
			$('#RequestsGraphics').css("display","block");
			$('#Requests1TimeVideo').css("display","none");
			$('#RequestsList').css("display","none");
		});
	}

	function side_button_reqvid1time(){
		$('#sideRequests1TimeVideo_btn1').on('click', function(event){
			event.preventDefault();
			$('#dashboard').css("display","none");
			$('#ChatSupport').css("display","none");
			$('#RequestsGraphics').css("display","none");
			$('#Requests1TimeVideo').css("display","block");
			$('#RequestsList').css("display","none");
		});
	}

	function side_button_reqlist(){
		$('#sideRequestsList_btn1').on('click', function(event){
			event.preventDefault();
			$('#dashboard').css("display","none");
			$('#ChatSupport').css("display","none");
			$('#RequestsGraphics').css("display","none");
			$('#Requests1TimeVideo').css("display","none");
			$('#RequestsList').css("display","block");
		});
	}

	function LogoutClient(){
		$('#btn-logout-clients').on('click', function(event){
			window.location.href = "logout.php";
		});
	}

	function FetchtableSample(){
		$.ajax({
			url: "datatableSample.php",
			method: "POST",
			success: function(response) {
				$('#sample_data').html(response);
			}
		});
	}
</script>
<?php

}

function validateFooter2(){

?>
<script type="text/javascript">
	$(document).ready( function(){
		LogoutClient();
		FetchtableSample();
	});
	
	function LogoutClient(){
		$('#btn-logout-clients').on('click', function(event){
			window.location.href = "logout.php";
		});
	}

	function FetchtableSample(){
		$.ajax({
			url: "datatableSample.php",
			method: "POST",
			success: function(response) {
				$('#sample_data').html(response);
			}
		});
	}
</script>
<?php

}

function validateFooter3(){

?>
<script type="text/javascript">

	$('#dashboard').css("display","block");
	$('#ChatSupport3').css("display","none");
	$('#RequestGraphics3').css("display","none");
	$('#RequestVideoGraphs3').css("display","none");
	$('#MixedVideoGraphicsRequest3').css("display","none");
	$('#RequestedList3').css("display","none");
	$(document).ready( function(){
		LogoutClient();
		FetchtableSample();
		AllSideButtons();
	});

	function AllSideButtons() {
		Dashboard3btn();
		ChatSupport3btn();
		RequestGraphics3btn();
		RequestVideoGraphs3btn();
		MixedVideoGraphicsRequest3btn();
		RequestedList3btn();
	}

	function Dashboard3btn() {
		$('#sideDashboard_btn3').on('click', function(event){
			event.preventDefault();
			$('#dashboard').css("display","block");
			$('#ChatSupport3').css("display","none");
			$('#RequestGraphics3').css("display","none");
			$('#RequestVideoGraphs3').css("display","none");
			$('#MixedVideoGraphicsRequest3').css("display","none");
			$('#RequestedList3').css("display","none");
		});
	}

	function ChatSupport3btn() {
		$('#sideChatSupport_btn3').on('click', function(event){
			event.preventDefault();
			$('#dashboard').css("display","none");
			$('#ChatSupport3').css("display","block");
			$('#RequestGraphics3').css("display","none");
			$('#RequestVideoGraphs3').css("display","none");
			$('#MixedVideoGraphicsRequest3').css("display","none");
			$('#RequestedList3').css("display","none");
		});
	}

	function RequestGraphics3btn() {
		$('#sideRequestGraphics_btn3').on('click', function(event){
			event.preventDefault();
			$('#dashboard').css("display","none");
			$('#ChatSupport3').css("display","none");
			$('#RequestGraphics3').css("display","block");
			$('#RequestVideoGraphs3').css("display","none");
			$('#MixedVideoGraphicsRequest3').css("display","none");
			$('#RequestedList3').css("display","none");
		});
	}

	function RequestVideoGraphs3btn() {
		$('#sideRequestVideoGraphs_btn3').on('click', function(event){
			event.preventDefault();
			$('#dashboard').css("display","none");
			$('#ChatSupport3').css("display","none");
			$('#RequestGraphics3').css("display","none");
			$('#RequestVideoGraphs3').css("display","block");
			$('#MixedVideoGraphicsRequest3').css("display","none");
			$('#RequestedList3').css("display","none");
		});
	}

	function MixedVideoGraphicsRequest3btn() {
		$('#sideMixedVideoGraphicsRequest_btn3').on('click', function(event){
			event.preventDefault();
			$('#dashboard').css("display","none");
			$('#ChatSupport3').css("display","none");
			$('#RequestGraphics3').css("display","none");
			$('#RequestVideoGraphs3').css("display","none");
			$('#MixedVideoGraphicsRequest3').css("display","block");
			$('#RequestedList3').css("display","none");
		});
	}

	function RequestedList3btn() {
		$('#sideRequestedList_btn3').on('click', function(event){
			event.preventDefault();
			$('#dashboard').css("display","none");
			$('#ChatSupport3').css("display","none");
			$('#RequestGraphics3').css("display","none");
			$('#RequestVideoGraphs3').css("display","none");
			$('#MixedVideoGraphicsRequest3').css("display","none");
			$('#RequestedList3').css("display","block");
		});
	}
	
	function LogoutClient(){
		$('#btn-logout-clients').on('click', function(event){
			window.location.href = "logout.php";
		});
	}

	function FetchtableSample(){
		$.ajax({
			url: "datatableSample.php",
			method: "POST",
			success: function(response) {
				$('#sample_data').html(response);
			}
		});
	}
</script>
<?php

}


?>