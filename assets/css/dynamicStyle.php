<?php
    header("Content-type: text/css; charset: UTF-8");
    header("Cache-Control: must-revalidate");

    include_once dirname(__DIR__,2).'/helpers/mysql.php';
    include_once dirname(__DIR__,2).'/helpers/helper.php';
    
    $helper = new Helper();

    // Retrieving the course details
    $db = new Mysql_Driver();
    $db->connect();

    $sql = "SELECT * FROM Course";
    $result = $db->query($sql);


?>
<?php
while ($row = $db->fetch_array($result)): 
?>
/* Dynamic style for each course sections and its respective slides */

    /* Section styles */
    #<?php echo 'section-' . $row['id']?>{
        color: white;
    }

    #<?php echo 'section-' . $row['id'] . ' h1'?>, #<?php echo 'section-' . $row['id'] . ' h2'?> {
        letter-spacing: 0.2rem;
        text-shadow: 2px 4px 3px rgba(0,0,0,0.3);
    }

    #<?php echo 'section-' . $row['id'] . ' h1'?> {
        font-size: 3.5rem;
        font-weight: 650;
    }

    #<?php echo 'section-' . $row['id'] . ' h2'?> {
        font-size: 2.5em;
        font-weight: 600;
    }    
    <?php 
        $db = new Mysql_Driver();
        $db->connect();
    
        $sql1 = "SELECT * FROM Item WHERE course_id =" . $row['id'];
        $result1 = $db->query($sql1);
        $db -> close();
        while ($row1 = $db->fetch_array($result1)): 
    ?>
    /* Slide 1 styles*/
    #<?php echo 'slide1-' . $row['id'] ?>{
        background-size: cover;
        background-image: url(<?php echo $row1['item_path']?>);
    }

    <?php endwhile; ?>


    #<?php echo 'slide1-' . $row['id'] . ' .overlay' ?>{
        background-color: rgba(0, 0, 0, 0.35);
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        position: relative;
        display: flex;
        align-items: center;
    }

    #<?php echo 'slide1-' . $row['id'] . ' h2' ?> {
        border-top: 4px solid white;
        display: inline-block;
        padding: 1rem 3.5rem 0 0;
    }

    /* Slide 2 styles */
    #<?php echo 'slide2-' . $row['id'] . ' .container-fluid' ?>{
        display: flex;
        flex-wrap: wrap;
        align-content: stretch;
        height: 100%;
        padding: 0;
    }

    /* Slide 3 styles */
    #<?php echo 'slide3-' . $row['id'] ?>{

    background-size:cover;
    background-image: url(https://www.np.edu.sg/ict/PublishingImages/Pages/accountancy/3d_banner.jpg);
    /* background-image: url(<?php echo $row["course_bg3"]?>); */
    }

    <?php endwhile; ?>