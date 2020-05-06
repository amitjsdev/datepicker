<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<style>
.footer-main .textwidget{
	margin-top: 24px;
}
</style>

        <section class="newsletter-block">
          <div class="container">
            <div class="newsletter-left">
			<?php  dynamic_sidebar('sidebar-13');?>
             <!-- <h3>MELD U AAN VOOR ONZE NIEUWSBRIEF:</h3>
              <div class="newsletter-field">
                <form>
                  <input type="text" placeholder="Uw e-mailadres" />
                  <input type="submit" value="INSCHRIJVEN" />
                </form>
              </div>-->
            </div>
            <div class="right-social">
              <label>VOLG ONS OP:</label>
              <a href="<?php echo get_post_meta(28, 'Facebook link', TRUE);?>" target="_blank" >
                <img src="<?php echo get_template_directory_uri();?>/images/facebook.png" alt="">
              </a>
            </div>
          </div>
        </section>

        <footer class="footer-main">
          <div class="container">
            <div class="row">
              <div class="col-sm-3">
                <div class="footer-block-1">
               <?php dynamic_sidebar('sidebar-5');?>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="footer-nav">
                  <h6 class="footer-heading">Menu</h6>
				  <?php wp_nav_menu(array('menu'=>'main-menu'));?>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="footer-nav">
                  <h6 class="footer-heading">Voorraad</h6>
				  <?php wp_nav_menu(array('menu'=>'footer-menu'));?>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="open-timing">
					<?php dynamic_sidebar('sidebar-6');?>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <div class="copyright-block">
          <div class="container">
		  <?php dynamic_sidebar('sidebar-7');?>
            </div>
          </div>
    </div>
<?php wp_footer(); ?>
</body>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/lightslider.js"></script>
   <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/owl.carousel.js"></script>
   <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/custom.js"></script>
  
<style type="text/css">
    .hidedis .notifyBar {display:none !important;}
  </style>
<script>	
var onSubmit = function(token) {
document.getElementById("huren").submit(); 
          //console.log('success!');
        };
$(document).ready(function(){

	$('.modelSubmit').click( function(e){
     var selectedModel = $("input:radio.selectedModel:checked").val();
	// alert(selectedModel);
	 if(selectedModel == "" || typeof(selectedModel) == "undefined"){
		 $(".modelError").css("display","block");
		 return false;
	 }else{
		 $(".modelError").css("display","none");
 	 }
	 var name = $("input[name=user_name]").val();
	 if(name == ""){
		 $(".nameErr").css("display","block");
		 return false;	
	 }else{
		$(".nameErr").css("display","none");
	 }
	 
	 
	 var address = $("input[name=address]").val();
	 if(address == ""){
		 $(".addErr").css("display","block");
		 return false;	
	 }else{
		$(".addErr").css("display","none");
	 }
	 
	 var post_code = $("input[name=post_code]").val();
	 if(post_code == ""){
		 $(".codeErr").css("display","block");
		 return false;	
	 }else{
		$(".codeErr").css("display","none");
	 }
	 
	 var tel_number = $("input[name=tel_number]").val();
	 if(tel_number == ""){
		 $(".telErr").css("display","block");
		 return false;	
	 }else{
		$(".telErr").css("display","none");
	 }
	 
	 var user_email = $("input[name=user_email]").val();
	 if(user_email == ""){
		 $(".emailErr").css("display","block");
		 return false;	
	 }else{
		$(".emailErr").css("display","none");
	 }
	 
	 
	 var user_email = $("input[name=user_email]").val();
	 if(user_email == ""){
		 $(".emailErr").css("display","block");
		 return false;	
	 }else{
		$(".emailErr").css("display","none");
	 }
	 
	 
	 
	 var clandeField = $(".clandeField").val();
	 if(clandeField == ""){
		 $(".startError").css("display","block");
		 return false;
	 }else{
		 $(".startError").css("display","none");
	 }
	  var EndclandeField = $(".EndclandeField").val();
	 if(EndclandeField == ""){
		 $(".endError").css("display","block");
		 return false;
	 }else{
		 $(".endError").css("display","none");
	 }
	 
	 
	  
	 var terms = $("input:checkbox.termscheck:checked").val();
	 if(terms == "" || typeof(terms) == "undefined"){
		 $(".termErr").css("display","block");
		 return false;	
	 }else{
		$(".termErr").css("display","none");
	 }
   });
  });	
	
	
$(document).ready(function(){
      if($('section').hasClass('blog-detail-block')) {
        $('body').addClass('hidedis');
      }
    });
    	
$(document).ready(function(){
    $("#singleNews a").attr("href", "javascript:void(0);");
		var modelName = $(".modelName").val();
		$(".yourtopic").val(modelName);
		
});
</script>
<script>
 
/* var lastScrollTop = 0;
$(window).scroll(function(event){
   var st = $(this).scrollTop();
   if (st > lastScrollTop){ 
        if ($('.trigger-autoload')[0]) {
     
        var offset = $(".trigger-autoload").offset().top;

        if ( st >= offset) {
             $( ".active .load-more" ).trigger( "click" );
        }
    } else {
       $(".no-record").show();
    }
    } else {
      // upscroll code
   }
   lastScrollTop = st;
}); */
 
$('.load-more').click( function(e){
$(".no-record").hide();

var new_id = 0;
	var id = $(this).attr("id");
	var container = $(this).parent(".prdctLoadmore").attr("id");
 	var postOffset = $(this).attr("data-offset");
    var new_postOffset = parseInt(postOffset) +15;
    $(this).attr("data-offset",new_postOffset);
	var cat_id = $(this).attr("data-cat_id");
    $('.'+container).find(".col-sm-4 ").removeClass("trigger-autoload");
    e.preventDefault();
	var ajaxurl = '<?php echo home_url(); ?>/ajax-product/';
	var ajaxurl =  ajaxurl;
		jQuery.ajax({
			type: "POST",
			url: ajaxurl,
			data: {
					post_offset: postOffset,
					posts_per_page: 15,
					product_cat: cat_id
			},
			cache: false,
			success: function (data) { 
 				$('.'+container).append(data);
			},
			error: function () {
			}
		});		
});
	
	$(document).ready(function(){
		var headerHeight = $('.header-main').innerHeight();
		$('.header-main').css("min-height", headerHeight +  "px");
	});
	var topspcae = $('.header-block-main').offset().top;
	$(window).scroll(function(){
		var sticky = $('.header-block-main'),
			scroll = $(window).scrollTop();
		
		if (scroll >= topspcae) sticky.addClass('fixed');
		else sticky.removeClass('fixed');
	});
</script>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script>
  $( function() {
    $( "#datepicker" ).datepicker({ dateFormat: "dd-mm-yy" });
  } );
  </script>
  
  <script>
 	
/*   $("#datepicker").datepicker({
    beforeShowDay: function(date) {
       var show = true;
       if(date.getDay()==6||date.getDay()==0||date.getDay()==1||date.getDay()==2||date.getDay()==3||date.getDay()==4) show=false
       return [show];
    }
});
  */
    
    function DateFromString(str){ 
        str = str.split(/\D+/);
		 
		str = new Date(str[2],str[1]-1,(parseInt(str[0])+7));
         return MMDDYYYY(str);
    }
    
    function MMDDYYYY(str) { 
        var ndateArr = str.toString().split(' ');
         var Months = 'Jan Feb Mar Apr May Jun Jul Aug Sep Oct Nov Dec';
   		 return  ndateArr[2]+'/'+(parseInt(Months.indexOf(ndateArr[1])/4)+1)+'/'+ndateArr[3];
    }

    function Add7Days() {
        var date = $('#start_date').val();
         var ndate = DateFromString(date);
         return ndate;
    }
   $( "#datepicker" ).datepicker({ dateFormat: "dd/mm/yy", minDate: 0}, $.datepicker.regional['nl']);
    $("#datepicker").on("change",function(date){
		setTimeout(function() {
                $( ".ui-state-default" ).removeClass( "ui-state-highlight" );
		}, 100);
		var seldate = $(this).datepicker('getDate');
        seldate = seldate.toDateString();
        seldate = seldate.split(' ');
         var weekday=new Array();
            weekday['Mon']="Monday";
            weekday['Tue']="Tuesday";
            weekday['Wed']="Wednesday";
            weekday['Thu']="Thursday";
            weekday['Fri']="Friday";
            weekday['Sat']="Saturday";
            weekday['Sun']="Sunday";
         var dayOfWeek = weekday[seldate[0]];
		if(dayOfWeek == "Friday"){
			var selected = $(this).val();
 			$('#start_date').val(selected);
 			$('#end_date').val(Add7Days());
			$('.clandeField').val(selected);
			var datePikcerVal = $('#end_date').val();
			 
 			nextdate(datePikcerVal);
			 
		}else{
			alert("Het is enkel mogelijk een vrijdag te selecteren.");
				$('#datepicker').val("");
			$('.clandeField').val("");
			 setTimeout(function() {
                $( ".ui-state-default" ).removeClass( "ui-state-active" );
            }, 100);
			return false
		}
    }); 
	
function nextdate(datePikcerVal){
  /* var d = new Date();
var month = d.getMonth()+1;
var day = d.getDate()+7;

var output = ((''+month).length<2 ? '0' : '') + month + '/' + ((''+day).length<2 ? '0' : '') + day + '/' + d.getFullYear();  */ 
console.log(datePikcerVal);
	 // $( "#datepicker2" ).datepicker({ dateFormat: "dd/mm/yy",minDate: datePikcerVal });
 	 $( "#datepicker2" ).datepicker({
			changeMonth: true,
			numberOfMonths: 1,
			dateFormat: "dd/mm/yy",
			minDate: datePikcerVal
			
		});  
}
	    $("#datepicker2").on("change",function(date){
		setTimeout(function() {
                $( ".ui-state-default" ).removeClass( "ui-state-highlight" );
		}, 100);
		var seldate = $(this).datepicker('getDate');
        seldate = seldate.toDateString();
        seldate = seldate.split(' ');
        var weekday=new Array();
            weekday['Mon']="Monday";
            weekday['Tue']="Tuesday";
            weekday['Wed']="Wednesday";
            weekday['Thu']="Thursday";
            weekday['Fri']="Friday";
            weekday['Sat']="Saturday";
            weekday['Sun']="Sunday";
        var dayOfWeek = weekday[seldate[0]];
		if(dayOfWeek == "Friday"){
			var selected = $(this).val();
			var clandeField =$('.clandeField').val();
 			var enddates = selected;
			var dates1 = enddates.split("/");
			var newDate = dates1[0]+"/"+dates1[1]+"/"+dates1[2];
			var enddate = new Date(newDate).getTime();
			
			var startdates = clandeField;
			var dates2 = startdates.split("/");
			var newDate2 = dates2[0]+"/"+dates2[1]+"/"+dates2[2];
			var startdate = new Date(newDate2).getTime();
			console.log(selected +" ppppppp "+clandeField);
			if(new Date(selected) <= new Date(clandeField)){
				alert("Het is enkel mogelijk een vrijdag te selecteren.");
				$('#datepicker').val("");
				return false;
			}else{
				$('.EndclandeField').val(selected);
			}
		}else{
			alert("Het is enkel mogelijk een vrijdag te selecteren.");
			$('.EndclandeField').val("");
			$('#datepicker2').val("");
			 setTimeout(function() {
                $( ".ui-state-default" ).removeClass( "ui-state-active" );
            }, 100);
  			return false
		}
    }); 
  </script>
<script>
/* $(document).ready(function(){
    
    function DateFromString(str){ 
        str = str.split(/\D+/);
        str = new Date(str[2],str[0]-1,(parseInt(str[1])+7));
        return MMDDYYYY(str);
    }
    
    function MMDDYYYY(str) {
        var ndateArr = str.toString().split(' ');
        var Months = 'Jan Feb Mar Apr May Jun Jul Aug Sep Oct Nov Dec';
        return (parseInt(Months.indexOf(ndateArr[1])/4)+1)+'/'+ndateArr[2]+'/'+ndateArr[3];
    }

    function Add7Days() {
        var date = $('#start_date').val();
        var ndate = DateFromString(date);
        return ndate;
    }

    $('#start_date').change(function(){
        $('#end_date').val(Add7Days());
    });

}); */
var url = window.location.href;
 var result = url.split('#');
 
 	if (url.match('#')){ console.log("here");
		$("#nav-tab a").removeClass("active");
		$(".tab-content .tab-pane").removeClass("show");
		$(".tab-content .tab-pane").removeClass("active");
		$('#nav-tab a').removeAttr("aria-selected",'true');
		console.log($('#nav-tab a[href="#' + result[1] + '"]').attr("id"));
  		$('#nav-tab a[href="#' + result[1] + '"]').addClass("active");
		$('#nav-tab a[href="#' + result[1] + '"]').attr("aria-selected",'true');
		$("#nav-tabContent #"+result[1]+"").addClass("show active");
	}
</script> 


  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js'></script>
  <script src='https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js'></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
     // var dates = ["20/04/2020", "16/04/2020", "15/04/2020", "21/04/2020"];
      var dates = $(".getDates").val();
         dates= dates.split(",");
      //var dates = [20/04/2020,16/04/2020,15/04/2020,21/04/2020];
     // var dates=[getDates];
console.log(dates);
      
      function DisableDates(date) {
        var string = jQuery.datepicker.formatDate('dd/mm/yy', date);
        return [dates.indexOf(string) == -1];
      }
$(function() {
   $("#datetimepicker2").datepicker({
         dateFormat: 'dd-mm-yy',
         minDate: new Date(),
     beforeShowDay: DisableDates
     });
});
</script>
  <script>
    $(function () {
      var d = new Date();
// 		$('#datetimepicker2').datetimepicker({
// 			format: 'DD-MM-YYYY',
//           disabledDates:[14-04-2020]
          
// 		});
		$('#datetimepicker3').datetimepicker({
			format: 'HH:mm'
          
		});

        var giftPage = $(".giftPage").val();
        if(giftPage == 1){
          $(".hideClander").html("");
        }

      $( ".product-form" ).submit(function( event ) {
        var giftPage = $(".giftPage").val();
        if(giftPage == 1){}else{
          var bookingDate = $(".bookingDate").val();
          if(bookingDate.trim() == ""){
            event.preventDefault();
            $(".errorDate").show();
            return false;
          }else{

            $(".errorDate").hide();
          }
          var bookingTime = $(".bookingTime").val();
          if(bookingTime.trim() == ""){
            event.preventDefault();
            $(".errorTime").show();
            return false;
          }else{
            $(".errorTime").hide();
          }
        }
      });
 	});
  </script>
<script>
  jQuery(document).ready(function($){
    $(".bookingDate").keyup(function(event){
      alert("Please Select date From Calender");
    });
         });
  </script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>


</html>