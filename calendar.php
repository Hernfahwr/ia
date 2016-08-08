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
            
            <div id="content">
                <div class="container">
                    <div class="row">  
                        <?php include "ac-sidebar.php";?>

                        <div class="col-md-9" > 
                            <div class="page-header-v2"> 
                                <div class="row">
                                    <div class="col-md-12">  
                                        <div class="breadcrumb">
                                            <span>คุณอยู่ที่นี่ : </span>
                                            <a href="./">หน้าแรก</a>
                                            <span class="crumbs-spacer"></span>
                                            <span class="current">คณะกรรมการตรวจสอบ</span>
                                            <span class="crumbs-spacer"></span>
                                            <span class="current">ตารางการประชุม</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
 
                            <div class="big-title">ตารางการประชุม</div>
                            <div id="my-calendar"></div>
                        </div>
                    </div> 
                </div>
            </div>

        </div>
    </body>
  <?php include "init-js.php";?>
</html>
    
<script type="application/javascript">
    $(document).ready(function () {
        $("#my-calendar").zabuto_calendar({
            ajax: {
                url: "show_data.php",
                modal: true
            }
        }); 
    });      
</script> 