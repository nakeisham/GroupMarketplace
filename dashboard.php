<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="dashboard.css">

    <title>Dashboard</title>
</head>

<body>



    <section id="sidebar">
        <a href="index.html" class="brand">
            <i class="bx bxs-shopping-bags"></i>
            <span class="text">Gull-Mart</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="dashboard.php">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="orders.php">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">Orders</span>
                </a>
            </li>
            <li>
                <a href="sell.php">
                    <i class='bx bxl-product-hunt'></i>
                    <span class="text">Sell</span>
                </a>
            </li>
            <li>
                <a href="token.php">
                    <i class='bx bxs-coin-stack'></i>
                    <span class="text">Tokens</span>
                </a>
            </li>
            <li>
                <a href="index.php">
                    <i class='bx bx-upload'></i>
                    <span class="text">Upload</span>
                </a>
            </li>
            <li>
                  <a href="help.php">
                    <i class='bx bxs-help-circle'></i>
                    <span class="text">Help</span>
                  </a>
			  </li>
        </ul>
        <ul class="side-menu">

            <li>
                <a href="settings.php" class="">
                    <i class='bx bx-cog'></i>
                    <span class="text">Settings</span>
                </a>
            </li>

            <li>
                <a href="logout.php" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>

            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
		<label class="token-mode"><i class='bx bxs-coin-stack'><span id="text">3000</span></i>
			</label>

            <a href="#" class="profile">
                <img src="img/people1.png">
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul>
                </div>

            </div>

            <ul class="box-info">
                <li>
                    <i class='bx bxs-calendar-check'></i>
                    <span class="text">
                        <h3>1020</h3>
                        <p>New Order</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-group'></i>
                    <span class="text">
                        <h3>2834</h3>
                        <p>Visitors</p>
                    </span>
                </li>
                <li>
                    <i class='bx bx-pound'></i>
                    <span class="text">
                        <h3>£2543</h3>
                        <p>Total Sales</p>
                    </span>
                </li>
            </ul>


            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Recent Sells</h3>

                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Date Order</th>
                                <!-- <th>Status</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="img/people1.png">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2022</td>
                                <!-- <td><span class="status completed">Completed</span></td> -->
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/people2.png">
                                    <p>John Doe</p>
                                </td>
                                <td>03-11-2022</td>
                                <!-- <td><span class="status pending">Pending</span></td> -->
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/people3.png">
                                    <p>John Doe</p>
                                </td>
                                <td>20-11-2022</td>
                                <!-- <td><span class="status process">Process</span></td> -->
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/people4.png">
                                    <p>John Doe</p>
                                </td>
                                <td>15-12-2022</td>
                                <!-- <td><span class="status pending">Pending</span></td> -->
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/people5.png">
                                    <p>John Doe</p>
                                </td>
                                <td>18-01-2023</td>
                                <!-- <td><span class="status completed">Completed</span></td> -->
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="dashboard.js"></script>
</body>

</html>
