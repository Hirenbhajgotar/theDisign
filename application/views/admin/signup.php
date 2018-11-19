<?php include "header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col s12 m8 l8 offset-m2 offset-l2">
            <div class="section">
                 <div class="card z-depth-2">
                    <div class="card-content">
                        <h4 class="center">Signup</h4>
                        <div class="section">
                            
                            <?php echo form_open('Admin',array('id'=>'form', 'name'=>'form' )) ?>
                            <!-- <form action="" method="post" id="form"> -->
                                <div class="input-field">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="username" name="username" type="text" data-parsley-required data-parsley-length="[4, 15]" data-parsley-trigger="keyup" >
                                    <label for="username">USERNAME</label>
                                </div>
                                <?= form_error('username') ?>

                                <div class="input-field">
                                    <i class="material-icons prefix">email</i>
                                    <input id="email" name="email" type="text" data-parsley-required data-parsley-type="email" data-parsley-trigger="keyup" >
                                    <label for="email">EMAIL</label>
                                </div>
                                <?= form_error('email') ?>

                                <div class="input-field">
                                    <i class="material-icons prefix">phone</i>
                                    <input type="password" name="password" id="password" data-parsley-required data-parsley-length="[3, 22]" data-parsley-type="alphanum" data-parsley-trigger="keyup">
                                    <label for="password">PASSWORD</label>
                                </div>
                                <?= form_error('password') ?>

                                <div class="input-field">
                                    <i class="material-icons prefix">phone</i>
                                    <input type="password" name="conf_password" id="conf_password" data-parsley-required data-parsley-equalto="#password" data-parsley-trigger="keyup">
                                    <label for="conf_password">CONFIRM PASSWORD</label>
                                </div>
                                <?= form_error('conf_password') ?>
                                <!-- <input type="submit" value="LOGIN" class="btn wav"> -->
                                <br>
                                <button type="submit" class="btn waves-effect waves-light" class="validate" name="submit" id="submit">LOGIN</button>
                                Already have an account? <a href="<?= base_url('admin') ?>">Login</a>
                            <!-- </form> -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include "footer.php"; ?>