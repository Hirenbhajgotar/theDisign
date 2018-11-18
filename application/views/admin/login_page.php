<?php include "header.php"; ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col s12 m8 l8 offset-m2 offset-l2">
                    <div class="section">
                        <div class="card">
                            <div class="card-content">
                                <h4 class="center">Admin Login</h4>
                                <div class="section">
                                   
                                    <?php echo form_open('Admin',array('id'=>'form', 'name'=>'form' )) ?>
                                    <!-- <form action="" method="post" id="form"> -->
                                        <div class="input-field">
                                            <i class="material-icons prefix">account_circle</i>
                                            <input id="username" name="username" type="text" data-parsley-required data-parsley-length="[2, 5]" data-parsley-trigger="keyup" >
                                            <label for="username">USERNAME</label>
                                        </div>
                                        <?= form_error('username') ?>

                                        <div class="input-field">
                                            <i class="material-icons prefix">phone</i>
                                            <input type="text" name="password" id="password" data-parsley-required data-parsley-length="[2, 5]" data-parsley-trigger="keyup">
                                            <label for="password">PASSWORD</label>
                                        </div>
                                        <?= form_error('password') ?>
                                        <!-- <input type="submit" value="LOGIN" class="btn wav"> -->
                                        <br>
                                        <button type="submit" class="btn waves-effect waves-light" name="submit" id="submit">LOGIN</button>
                                        <a href="#!">Signup here</a>
                                    <!-- </form> -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </main>

<?php include "footer.php"; ?>
<?php
    if($error_msg = $this->session->flashdata('error_msg')){
        if(isset($error_msg)){
            $err_msg = $error_msg;
            echo "<script> $(document).ready(function(){ M.toast({html:'$err_msg'}); }); </script>";
        }  
    }
?>
