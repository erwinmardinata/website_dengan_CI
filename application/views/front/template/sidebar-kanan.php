<script>
$(function() {   
           $("#vote").click(function() {  
           // validate and process form here
           var rd;

           if ($("input[name='rd']:checked").length > 0){
               rd = $('input:radio[name=rd]:checked').val();
           }
           else{
               alert("Anda belum memilih salah satu");
               return false;
           }
           $.ajax({
               type: "POST", 
               url: "<?php echo site_url('content/insert_poling'); ?>",  
               data: "rd="+rd,  
               success: function() { 
                    alert("Terima Kasih Telah Berkontribusi");
               }
            });
            return false;
         });
});
</script>
<aside>
<div class="panel panel-default">
<div class="panel-heading" style="background-color:#FF9900; color: #fff;">
  <h3 class="panel-title"><span class="glyphicon glyphicon-book"></span> Poling</h3>
</div>
  <div class="list-group" style="padding: 10px">
    <p>Apa yang anda pikirkan dengan situs website ini?</p>
    <form name="poling" method="post">
      <input type="radio" name="rd" value="a" > Sangat Bagus<br>
      <input type="radio" name="rd" value="b" > Bagus<br>
      <input type="radio" name="rd" value="c" > Kurang Bagus<br>
      <input type="radio" name="rd" value="d" > Jelek<br>
      <input type="radio" name="rd" value="e" > Sangat Jelek<br><br>
      <button id="vote" class="btn btn-primary" style="padding: 5px">vote</button><br><br>
      <a href="<?php echo base_url('content/poling'); ?>">Lihat hasil</a>
    </form>
  </div>
</div>
<div class="panel panel-default">
<div class="panel-heading" style="background-color:#FF9900; color: #fff;">
  <h3 class="panel-title"><span class="glyphicon glyphicon-thumbs-up"></span> Fans Page</h3>
</div>
	<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fti.utsumbawa&amp;width&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=221625018041082" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:261px; height:310px;" allowTransparency="true"></iframe>
</div>


</aside>  