

<script src="../jQuery/jquery-3.4.1.min.js" ></script>
<script src="../jQuery/jquery.counterup.min.js" ></script>
<script src="../jQuery/jquery.waypoints.min.js" ></script>

<script src="../jQuery/jquery.easypiechart.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="script.js"></script>

<!-- function counterup jquery -->
<script>
jQuery(document).ready(function(){
    $('.counter').counterUp({
    delay: 5,
    time: 250
});
});
</script>
<!-- end function counter up -->


<!--function easypiechart jquery -->
<script>
$(function(){
  $('.chart1').easyPieChart({
            size:170,
            animate: 1000,
            lineCap:'butt',
            scaleColor: false,
            barColor: '#80b3ff',
            lineWidth: 15
  });
});
</script>
<script>
$(function(){
  $('.chart2').easyPieChart({
            size:170,
            animate: 1000,
            lineCap:'butt',
            scaleColor: false,
            barColor: '#79d279',
            lineWidth: 15
  });
});
</script>
<script>
$(function(){
  $('.chart3').easyPieChart({
            size:170,
            animate: 1000,
            lineCap:'butt',
            scaleColor: false,
            barColor: '#ff8080',
            lineWidth: 15
  });
});
</script>

<!-- end function easypiechart -->


<!-- search Bar function -->

<script>  
      $(document).ready(function(){  
           $('#search').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#employee_table tbody tr ').each(function(){  
                     var found = 'false';  
                     $(this).each(function(){  
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                          {  
                               found = 'true';  
                          }  
                     });  
                     if(found == 'true')  
                     {  
                          $(this).show();  
                     }  
                     else  
                     {  
                          $(this).hide(); 
                     }  
                });  
           }  
      });  
 </script> 


<script>  
      $(document).ready(function(){  
           $('#search').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#machine_table tbody tr ').each(function(){  
                     var found = 'false';  
                     $(this).each(function(){  
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                          {  
                               found = 'true';  
                          }  
                     });  
                     if(found == 'true')  
                     {  
                          $(this).show();  
                     }  
                     else  
                     {  
                          $(this).hide();  
                     }  
                });  
           }  
      });  
 </script>


<!-- end --> 


