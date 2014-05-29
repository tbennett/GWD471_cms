  <?php require_once('../../config.php'); ?>
  <?php $page_id = 'home'; ?>

  <?php
    //get all content related to the selected page
    $sql = "SELECT *
    FROM site_content
    WHERE page_name='home'";

    $myData = $db->query($sql);

    //create container for each piece of data
    while($row = $myData->fetch_assoc())
    {
      if($row['section_name'] === 'blurb')  
      {
        $blurb = $row['content'];
      }

      if($row['section_name'] === 'intro')  
      {
        $intro = $row['content'];
      }
    }
  ?>

  <?php require_once('includes/top.php'); ?>
  <?php require_once('includes/header.php'); ?>
    
    <section>
    	<h2>Intro</h2>
        <p>
        <img src="images/ceo.jpg" alt="my pic" />
        <?php echo $intro ?>
       </p>
      <p>
        <?php echo $blurb ?>
      </p>
    </section>
    
  <?php require_once('includes/footer.php'); ?>
    
</body>
</html>