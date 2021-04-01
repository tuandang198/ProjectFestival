<?php if(isset($_POST['submit'])){
    
    insertFeedback();
    echo "<script>alert('Your feedback has been sent!')</script>";
}
    ?>
<div class="wrapper row3">
  <main class="hoc container clear"> 
      <div id="comments">
        <h2>Write A Comment</h2>
        <form action="" method="post">
          <div class="one_third first">
            <label for="name">Name <span>*</span></label>
            <input type="text" name="name" id="name" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="email">Mail <span>*</span></label>
            <input type="email" name="email" id="email" value="" size="22" required>
          </div>
          <div class="block clear">
            <label for="comment">Your Comment</label>
            <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
          </div>
          <div>
            <input type="submit" name="submit" value="Submit Form">
          </div>
        </form>
      </div>
    </div>
    <div class="clear"></div>
  </main>
</div>