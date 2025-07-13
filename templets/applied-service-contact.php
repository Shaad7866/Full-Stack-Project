<!-- Estimate_area start  -->
<div class="Estimate_area overlay" id="Estimate_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-5">
                <div class="Estimate_info">
                    <h3>Get in Touch</h3>
                    <p>Find our best selling tiles here and contact us for more information</p>
                    <a href="tel:+917070786143" class="boxed-btn3">+91-7070786143</a>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-7">
                <div class="form">
                    <form action="#">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="input_field">
                                    <input type="text" placeholder="Your name" id="username" name="username">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="input_field">
                                    <input type="number" placeholder="Phone Number" id="userphone" name="userphone">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="input_field">
                                    <select class="wide" id="product" name="product">
                                        <option data-display="Product type">Product Category</option>
                                        <?php
                                            include 'connection.php';
                                            $category=mysqli_query($con,"SELECT * FROM category WHERE sub_category='none'");
                                            if (mysqli_num_rows($category)>0) {
                                                while ($row=mysqli_fetch_assoc($category)) {
                                        ?>
                                            <option value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
                                        <?php
                                                }
                                            }

                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="input_field">
                                    <select class="wide" id="product_size" name="product_size">
                                        <option data-display="Product size">Product size</option>
                                        <?php
                                            $psize=mysqli_query($con,"SELECT DISTINCT size FROM product_size");
                                            if (mysqli_num_rows($psize)>0) {
                                                while ($srow=mysqli_fetch_assoc($psize)) {
                                        ?>
                                             <option value="<?php echo $srow['size']; ?>"><?php echo $srow['size']; ?></option>
                                        <?php
                                                }
                                            }

                                        ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-xl-12">
                                <div class="input_field">
                                    <textarea placeholder="Message" name="description"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="input_field">
                                    <button class="boxed-btn3-line" id="sendenquiry" type="submit">Send Enquiry</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Estimate_area end  -->