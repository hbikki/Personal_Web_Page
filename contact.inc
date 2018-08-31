
<p id="connnta"> Contact </p>
<div class="container">
  <form action="insert.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="fname">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name='name' placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name='email' placeholder="Your email..">
      </div>
    </div>
        <div class="row">
      <div class="col-25">
        <label for="lname">Phone No</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name='contact' placeholder="Your Phone no..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Message</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name='message' placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
