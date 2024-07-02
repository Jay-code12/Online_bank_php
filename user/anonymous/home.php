<?php require_once("layouts/header.php"); ?>


        <br>
        <!-- ACCOUNTS SECTION -->
        <div class="m-5">
            <p>Accounts</p>
            <marquee behavior="slide" direction="right">
                <div style="display: flex; width: fit-content; margin: 0px 20px;">

                    <div
                        style="width: 250px; height: 150px; background-color: #eee; display: flex; justify-content: space-between; padding: 10px;">
                        <div
                            style="height: 100%; display: flex; flex-direction: column; justify-content: space-between; ">
                            <div>Current</div>
                            <div>**0954</div>
                        </div>
                        <div
                            style="height: 100%; display: flex; flex-direction: column; justify-content: space-between; ">
                            <div>$1,000,000</div>
                            <div>available</div>
                        </div>
                    </div>

                    <div
                        style="width: 250px; height: 150px; background-color: #eee; display: flex; justify-content: space-between; padding: 10px; margin: 0px 20px">
                        <div
                            style="height: 100%; display: flex; flex-direction: column; justify-content: space-between; ">
                            <div>Savings</div>
                            <div>**0954</div>
                        </div>
                        <div
                            style="height: 100%; display: flex; flex-direction: column; justify-content: space-between; ">
                            <div>$1,000,000</div>
                            <div>available</div>
                        </div>
                    </div>

                    <div
                        style="width: 250px; height: 150px; background-color: #eee; display: flex; justify-content: space-between; padding: 10px;">
                        <div
                            style="height: 100%; display: flex; flex-direction: column; justify-content: space-between; ">
                            <div>Check</div>
                            <div>**0954</div>
                        </div>
                        <div
                            style="height: 100%; display: flex; flex-direction: column; justify-content: space-between; ">
                            <div>$1,000,000</div>
                            <div>available</div>
                        </div>
                    </div>
                </div>
            </marquee>
        </div>  
        <!-- ACCOUNTS SECTION END -->

    </div>
    <br>

    <?php require_once("layouts/widget.php"); ?>

    <br>
    <table data-role="table" id="table-column-toggle" data-mode="" class="ui-responsive table-stroke">
        <div>
            <h4>Transactions</h4>
        </div>
        <thead>
            <tr>
                <th>Description</th>
                <th data-priority="1"><abbr title="Transactions">Amount</abbr></th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td><a href="#" data-rel="external">Citizen Kane</a>
                </td>
                <td>$1,000,000</td>
            </tr>
            <tr>
                <td><a href="#" data-rel="external">Dr. Strangelove Or How I Learned to Stop Worrying and Love the
                        Bomb</a>
                </td>
                <td>$1,000,000</td>
            </tr>
            <tr>
                <td><a href="#" data-rel="external">Citizen Kane</a>
                </td>
                <td>$1,000,000</td>
            </tr>
            <tr>
                <td><a href="#" data-rel="external">Dr. Strangelove Or How I Learned to Stop Worrying and Love the
                        Bomb</a>
                </td>
                <td>$1,000,000</td>
            </tr>
            <tr>
                <td><a href="#" data-rel="external">Citizen Kane</a>
                </td>
                <td>$1,000,000</td>
            </tr>
            <tr>
                <td><a href="#" data-rel="external">Dr. Strangelove Or How I Learned to Stop Worrying and Love the
                        Bomb</a>
                </td>
                <td>$1,000,000</td>
            </tr>
            <tr>
                <td><a href="#" data-rel="external">Citizen Kane</a>
                </td>
                <td>$1,000,000</td>
            </tr>
            <tr>
                <td><a href="#" data-rel="external">Dr. Strangelove Or How I Learned to Stop Worrying and Love the
                        Bomb</a>
                </td>
                <td>$1,000,000</td>
            </tr>
        </tbody>
    </table>
    <br>
    <div style="float: right;">
        <span>showing <small>6 of 64</small> <a href="#">View Transactions</a></span>
    </div>
    <br>
    <br>

    <div class="col-lg-5 col-md-12" style="margin: 20px 0px;">
        <div class="card text-center">

            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" id="comment" style="color: #b0002c;">Live<i
                                class="fa-solid fa-comment"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="info" style="color: #b0002c;">Email<i
                                class="mr-3 fa-solid fa-envelope"></i> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#" id="email" style="color: #b0002c;">Rate<i
                                class="fa-solid fa-face-smile"></i></a>
                    </li>
                </ul>
            </div>

            <div class="card-body1 py-5">
                <h5 class="card-title">Ticket</h5>
                <p class="card-text">Bulk urgent ticket today with our live team.</p>
                <a href="#" class="btn" style="background-color: #b0002c;  color: #eee;">Live Chat</a>
            </div>
            <div class="card-body2 py-5" style="display: none;">
                <h5 class="card-title">Email</h5>
                <p class="card-text">Having any problem, Please contact our customer service today, Thank you.</p>
                <a href="mailto: info@jordan.com" class="btn" style="background-color: #b0002c;  color: #eee;">Send
                    us an
                    Email</a>
            </div>
            <div class="card-body3 py-5" style="display: none;">
                <h5 class="card-title">Rate Us</h5>
                <p class="card-text"> how do you feel about our banking service.</p>
                <a href="#" class="btn" style="background-color: #b0002c; color: #eee;" onclick="comment();"> <i
                        class="fa-solid fa-face-smile"></i></a>
            </div>

        </div>
    </div>
</div>
    
<?php require_once("layouts/footer.php"); ?>