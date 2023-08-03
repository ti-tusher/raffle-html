<?php
   include ('header.php');
?>
<!-- products-section start -->
<section class="products-section mt-4 mb-30">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
    <div class="side-menu-box">
        <div class="comment-head">
            <h3 class="black">Menu</h3>
            <i class="fa fa-bars left-menu-switch"></i>
        </div>
        <ul class="side-menu">
            <li class="active-menu"><a href="http://rafflebd.com/user/dashboard">Dashboard</a></li>
            <li class=""><a href="http://rafflebd.com/user/connect">Connects</a></li>
            <li class=""><a href="http://rafflebd.com/user/profile/password">Change Password</a></li>
            <li class=""><a href="http://rafflebd.com/user/coupon">Buy Coupon</a></li>
            <li class=""><a href="http://rafflebd.com/user/my-product/create">Add Product</a></li>
            <li class=""><a href="http://rafflebd.com/user/my-product">My Products</a></li>
            <li class=""><a href="http://rafflebd.com/user/bid-product">Bidding Products</a></li>
            <li class=""><a href="http://rafflebd.com/user/bid-win">Bids Win</a></li>
            <li>
                <a href="http://rafflebd.com/logout" onclick="event.preventDefault(); document.getElementById('logout-form-side').submit();">Logout</a>
                <form id="logout-form-side" action="http://rafflebd.com/logout" method="POST" class="d-none">
                    <input type="hidden" name="_token" value="2FvC7NOHDSziiFP6q4Unzv0Oji4f3C7g530tX8q3">                </form>
            </li>
        </ul>
    </div>
</div>

            <div class="col-sm-9">
                <div class="card">
                    <div class="card-header card-design">
                        <div class="row">
                            <div class="col-8">My Profile</div>
                            <div class="col-4 text-right">
                                <a href="http://rafflebd.com/user/profile/edit">Edit</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body card-design" style="padding: 0;">
                        <table class="table table-bordered" style="margin-bottom: 0;">
                            <tbody class="">
                            <tr>
                                <td style="width: 120px;"><strong>Name</strong></td>
                                <td style="width: 10px;"><strong>:</strong></td>
                                <td>Tanvirul Islam</td>
                            </tr>
                            <tr>
                                <td><strong>Username</strong></td>
                                <td><strong>:</strong></td>
                                <td>tusher</td>
                            </tr>
                            <tr>
                                <td><strong>Mobile</strong></td>
                                <td><strong>:</strong></td>
                                <td>01911419001</td>
                            </tr>
                            <tr>
                                <td><strong>Email</strong></td>
                                <td><strong>:</strong></td>
                                <td>mtitmamun@gmail.com</td>
                            </tr>
                            <tr>
                                <td><strong>Gender</strong></td>
                                <td><strong>:</strong></td>
                                <td>Male</td>
                            </tr>
                            <tr>
                                <td><strong>Address</strong></td>
                                <td><strong>:</strong></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- products-section end -->
<?php
   include ('footer.php')
?>