<?php include("common.php");?>
<?php
courseheader('quizzes');
 ?>

<div class="container">
  <div class="section">


    <div class="row">
      <div class="col s12 m3 lecsidebar">
        <div class="collection">
          <a href="#!" class="collection-item">Quiz - 1</a>
          <a href="#!" class="collection-item indigo-text">Quiz - 2</a>
          <a href="#!" class="collection-item">Quiz - 3</a>
          <a href="#!" class="collection-item">Quiz - 4</a>
        </div>
      </div>
      <div class="col s12 m9">
        <h5>Quiz - 1</h5><hr>
        <video width="100%" height="100%" controls>
          <source src="<?php echo $s3bucketurl;?>video.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
    </div>

  </div>
</div>
