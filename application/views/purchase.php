<!-- header -->
    <header id="home" class="header">
        <div class="overlay text-white text-center">
            <h2 class="display-2 font-weight-bold my-3"style="text-decoration:underline;">Choose the offer you prefer</h2>
            <div class="container">

                <button style="background-color:#FFD700;border:none;width:300px;margin-left:170px;border-radius: 8px;">
                <div class="offers">

                    <h3> <strong> GOLD</strong></h3>
                    <h4>You will pay just once with <strong>unlimited tips</strong> & <strong> 15% discount</strong> for just <strong>$170</strong> </h4>
                    
                </div>
            </button>
                <button style="background-color:#C0C0C0;border:none;width:300px;margin-left:250px;border-radius: 8px;">
                <div class="offers_code"> 

                    <h3> <strong> SILVER</strong></h3>
                    <h4>Get your code which will add <strong> $30 </strong> to your wallet </h4>
                    <select name="codes">
                        <?php $count=count($code);  ?>
                        <?php for($i=0;$i<$count;$i++) { ?>
                            <option value="<?php echo $code[$i]['id_code']; ?>">
                                <?php $code[$i]['code']; ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </button>
        </div>
    </header>
<!-- core  -->
<script src="<?php echo base_url('assets/vendors/jquery/jquery-3.4.1.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/bootstrap/bootstrap.bundle.js'); ?>"></script>

    <!-- bootstrap affix -->
    <script src="<?php echo base_url('assets/vendors/bootstrap/bootstrap.affix.js'); ?>"></script>

    <!-- wow.js -->
    <script src="<?php echo base_url('assets/vendors/bootstrap/bootstrap.affix.js'); ?>"></script>
    
    <!-- FoodHut js -->
    <script src="<?php echo base_url('assets/js/foodhut.js'); ?>"></script>
