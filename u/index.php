<?php
require_once './_user.php';
require_once './include/header.php';
?>
<div class="navbar"style="background-color: #9c28b1;box-shadow: 4px 10px 15px grey;">
    <?php
    require_once './include/navbar.php';
    $_SESSION['go_to'] = "";
    ?>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-3"> 
        </div><!--end of col-->
        <div class="col-sm-9">
            <?php
//            $me = $user->viewMe();
            ?>
        </div><!--end of col-->
    </div><!--End of row-->

    <div class="row">
        <div class="col-sm-3"> 
            <div class="well">

            </div>
        </div><!--end of col-->
        <div class="col-sm-9">
            <div>
                <?php
                if (isset($_GET['details'])) {
                    $id = $_GET['details'];
                    $match = $user->viewById($id);
                    if ($match != null) {
                        foreach ($match as $row) {
                            //$id = $row['id'];
                            $fullname = $row['fullname'];
                            $gender = $row['gender'];
                            $min_age = $row['min_age'];
                            $max_age = $row['max_age'];
                            $location = $row['location'];
                            $dob = $row['dob'];
                            $email = $row['email'];
                            //$password = $row['password'];
                            $drinking = $row['drinking'];
                            $religion = $row['religion'];
                            $ethnicity = $row['ethnicity'];
                            $employment = $row['employment'];
                            $build = $row['build'];
                            $smoking = $row['smoking'];
                            $children = $row['children'];
                            $education = $row['education'];
                            $profession = $row['profession'];
                            $essay = $row['essay'];
                            $image = $row['image'];
                            ?>
                            Name: <?php echo $fullname ?> 
                            <br/>
                            Gender: <?php echo $gender ?>
                            <br/>
                            D.O.B: <?php echo $dob ?>
                            <br/>
                            Location: <?php echo $location ?>
                            <br/>
                            Drinks: <?php echo $drinking ?>
                            <br/>
                            Religion: <?php echo $religion ?>
                            <br/>
                            Ethnicity: <?php echo $ethnicity ?>
                            <br/>
                            Employment: <?php echo $employment ?>
                            <br/>
                            Build: <?php echo $build ?>
                            <br/>
                            Smokes: <?php echo $smoking ?>
                            <br/> 
                            Children: <?php echo $children ?>
                            <br/>
                            Education: <?php echo $education ?>
                            <br/>
                            Profession: <?php echo $profession ?>
                            <br/>
                            Self description: <?php echo $essay ?>
                            <br/>
                            <img src="../img/profile_pic/<?php echo $image ?>" width="500px" alt="" style="margin: 5px auto 5px auto; text-align: center;"/>
                            <?php
                        }
                    }
                }
                ?>
                <hr/>
            </div>
            <?php
            $match = $user->viewMatch();
            if ($match != null) {
                foreach ($match as $row) {
                    $essay = $row['essay'];
                    $image = $row['image'];
                    $fullname = $row['fullname'];
                    $id = $row['id'];
                    $gender = $row['gender'];
                    $fullname = $row['fullname'];
                    $min_age = $row['min_age'];
                    $max_age = $row['max_age'];
                    ?>
                    <div class='img-thumbnail pull-left'style='margin:5.7px;min-height:200px;margin-right:6px;' 
                         data-toggle='tooltip'  title='<?php echo $essay; ?>'data-placement='top'> 
                        <img src='../img/profile_pic/<?php echo $image; ?>'width='190px' height='190px'/>
                        <!--center horizontally and hide overlappin-->
                        <div class='thumbnail-caption'style='text-align:center;font-family:impact;font-size:18px;'>
                            <?php echo $fullname ?>
                        </div>
                        <hr>
                        <div style="text-align: center;">
                            <?php
                            if ((isset($_SESSION['subscription']) && $_SESSION['subscription'] == 'premium') || $_SESSION['interest'] == 4) {
                                ?>
                                <a  class="btn btn-primary" href='index.php?details=<?php echo $id ?>'>See Details</a>

                                <?php
                            } else {
                                $_SESSION['go_to'] = "index.php?details=+$id";
                                ?> 
                                <button class="btn btn-primary" data-toggle="modal" data-target="#subscribe_modal"
                                        style="cursor: pointer;"> See Details
                                </button> 
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div><!--end of col-->
    </div><!--End of row-->
</div><!--End of container-->
<?php
require_once './include/footer.php';
