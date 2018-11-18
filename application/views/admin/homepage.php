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
                                    <form action="" method="post" id="form">
                                        <div class="input-field">
                                            <i class="material-icons prefix">account_circle</i>
                                            <input id="email" name="email" type="text">
                                            <label for="email">EMAIL</label>
                                        </div>

                                        <div class="input-field">
                                            <i class="material-icons prefix">phone</i>
                                            <input type="text" name="password" id="password">
                                            <label for="password">PASSWORD</label>
                                        </div>
                                        <!-- <input type="submit" value="LOGIN" class="btn wav"> -->
                                        <br>
                                        <button type="submit" class="btn waves-effect waves-light" name="submit" id="submit">LOGIN</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </main>

<?php include "footer.php"; ?>