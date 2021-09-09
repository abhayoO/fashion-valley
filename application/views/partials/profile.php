<?php 
    if ($this->session->flashdata("success")) {
        echo $this->session->flashdata("success");
    }
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3>Profile Details</h3>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" action="/users/update" method="post">
            <input type='hidden' name="id" value="<?= $id?>">
            <?php if($task=='view') { ?>
            <div class="form-group">
                <label class="col-sm-3 control-label">Full Name</label>
                <div class="col-sm-8 col-md-offset-1">
                    <input type="text" class="form-control" <?php echo "placeholder='".$first_name.' '.$middle_name.' '.$last_name."'" ?> <?php if($task=="view") echo "readonly" ?>>
                </div>
            </div>
            <?php  } else {  ?>
            <div class="form-group">
                <label class="col-sm-3 control-label">First Name</label>
                <div class="col-sm-8 col-md-offset-1">
                    <input type="text" class="form-control" name="first_name" placeholder="<?= $first_name ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Middle Name</label>
                <div class="col-sm-8 col-md-offset-1">
                    <input type="text" class="form-control" name="middle_name" placeholder="<?= $middle_name ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Last Name</label>
                <div class="col-sm-8 col-md-offset-1">
                    <input type="text" class="form-control" name="last_name" placeholder="<?= $last_name ?>">
                </div>
            </div>
            <?php   }   ?>
            <div class="form-group">
                <label class="col-sm-3 control-label">Mobile Number</label>
                <div class="col-sm-8 col-md-offset-1">
                    <input type="text" class="form-control" name="mob_no" placeholder="<?= $mob_no ?>" <?php if($task=="view") echo "readonly" ?>>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Email</label>
                <div class="col-sm-8 col-md-offset-1">
                    <input type="text" class="form-control" name="email" placeholder="<?= $email ?>" <?php if($task=="view") echo "readonly" ?>>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Gender</label>
                <div class="col-sm-8 col-md-offset-1">
                    <div class="row">
                        <div class="col-lg-6">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <input type="radio" name="gender" value="male" <?php if($gender=="male") echo"checked"; ?> <?php if($task=="view") echo "disabled" ?>>
                            </span>
                            <input type="text" class="form-control" name="male" value="Male" readonly>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group">
                            <span class="input-group-addon">
                                <input type="radio" name="gender" value="female" <?php if($gender=="female") echo"checked"; ?> <?php if($task=="view") echo "disabled" ?>>
                            </span>
                            <input type="text" class="form-control" name="female" value="Female" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Birthday</label>
                <div class="col-sm-8 col-md-offset-1">
                    <input type="text" class="form-control" name="dob" placeholder="<?= $dob ?>" <?php if($task=="view") echo "readonly" ?>>
                </div>
            </div>
            <?php if($task=='view') { ?>
            <a class="btn btn-default" href="/my/profile/edit" role="button">Edit</a>
            <?php   } else {    ?>
            <input type="submit" class="btn btn-primary" value="Submit">
            <a class="btn btn-default" href="/my/profile/view" role="button">Cancel</a>
            <?php   }   ?>
        </form>
    </div>
</div>