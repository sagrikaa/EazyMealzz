<script>

$(document).ready(function(){
  $('comment_form').submit(function(){     
  var formdata = $(this).serialize();       
    $.ajax({
      url: '/storeComment',
      type: "POST",
      data: {formdata, '_token': $('input[name=_token]').val()},
      success: function(response){
        alert('works');
      }
    });      
  }); 
});
</script>