jQuery(document).ready(function(){
	$('#change').load('../settings/settings.php');

	$('#logo').click(function() {
		$('#change').load('dashboard.php');
	  });

	$('#dashboard').click(function() {
		$('#change').load('dashboard.php');
	  });
	  
	$('#customer').click(function() {
		$('#change').load('../customer/customer.php');
	  });
	  
	  $('#message').click(function() {
		$('#change').load('../message/message.php');
	  });
	  
	  $('#order').click(function() {
		$('#change').load('../order/order.php');
	  });
	  
	  $('#product').click(function() {
		$('#change').load('../product/product.php');
	  });

	  $('#expenses').click(function() {
		$('#change').load('../expenses/expenses.php');
	  });

	  $('#analytics').click(function() {
		$('#change').load('../reports/reports.php');
	  });

	  $('#settings').click(function() {
		$('#change').load('../settings/index.php');
	  });
 });



  /*=======================
 counter
  ===================  */
$('.count').counterUp({
    delay: 100,
    time: 100000,
});

$(".count").waypoint(function() {
    $(".count").count();
  }, {offset:"100%", triggerOnce:true});

  
//   $(".count").waypoint(function() {
//     $(".count").count();
//     $(this).waypoint('destroy');
//   }, {offset:"100%"});













  
	






































		// // Pop Up
		// $(function() {
		// 	//defining all needed variables
		// 	var $overlay = $('.overlay');
		// 	var $mainPopUp = $('.main-popup');
		// 	var $addProduct = $('#add-product');
			
		 

		// 	$('button').on('click', function(){
		// 		$overlay.addClass('visible');
		// 		$mainPopUp.addClass('visible');
		// 		$addProduct.addClass('active');    

		// 	  });
			
		// 	  $overlay.on('click', function(){
		// 		$(this).removeClass('visible');
		// 		$mainPopUp.removeClass('visible');
		// 	  });
		// 	  $('#popup-close-button a').on('click', function(e){
		// 		e.preventDefault();
		// 		$overlay.removeClass('visible');
		// 		$mainPopUp.removeClass('visible');
		// 	  });
			  
			   
		// 	  $('input').on('submit', function(e){
		// 		e.preventDefault(); 
		// 	  });
		  

		//   });