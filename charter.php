<!doctype html>
<!--[if IE 8 ]>
<html class="ie ie8" lang="en">
<![endif]-->
<!--[if (gte IE 9)|!(IE)]>
<html lang="en" class="no-js">
<![endif]-->
<html lang="en">
  <?php include "init-template.php";?>
  <body>
    <div id="container">
      <?php include "header.php";?>
      	<div class="page-header">
	        <div class="container">
	          <div class="row">
	            <div class="col-md-12">	            
	              <div class="breadcrumb">
	                <span>คุณอยู่ที่นี่ : </span>
	                <a href="./">หน้าแรก</a>
	                <span class="crumbs-spacer"></span>
	                <span class="current">กฎบัตร</span>
	              </div>
	            </div>
	          </div>
	        </div>
      	</div>
 		
 		<div id="content">
 		<div class="container">
			<ul class="nav nav-tabs responsive" >
				<li class="active"><a class="deco-none" href="#tab1"> กฎบัตรคณะกรรมการตรวจสอบ</a></li>
				<li><a href="#tab2">กฎบัตรการตรวจสอบภายใน</a></li> 
			</ul>

		    <div class="tab-content responsive">
		        <div class="tab-pane active" id="tab1"><?php include "charter-ac.php";?></div>
		        <div class="tab-pane" id="tab2"><?php include "charter-ia.php";?></div> 
		    </div>
		</div>
 		</div>

      <?php include "footer.php";?>
    </div>
  </body>  
  <?php include "init-js.php";?>
</html>
<script type="text/javascript"> 
  $(document).ready(function() {
    fakewaffle.responsiveTabs( [ 'xs', 'sm' ] );    
    $( 'ul.nav.nav-tabs  a' ).click( function ( e ) {
      e.preventDefault();
      $( this ).tab( 'show' );
    } );    
  });
</script>