<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Boxicons -->
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <!-- My CSS -->
    <link rel="stylesheet" href="dashboard.css" />

    <title>Sell</title>
</head>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="index.html" class="brand">
            <i class="bx bxs-shopping-bags"></i>
            <span class="text">Gull-Mart</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="dashboard.php">
                    <i class="bx bxs-dashboard"></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="orders.php">
                    <i class="bx bxs-shopping-bag-alt"></i>
                    <span class="text">Orders</span>
                </a>
            </li>
            <li class="active">
                <a href="sell.php">
                    <i class="bx bxl-product-hunt"></i>
                    <span class="text">Sell</span>
                </a>
            </li>
            <li>
                <a href="token.php">
                    <i class="bx bxs-coin-stack"></i>
                    <span class="text">Token</span>
                </a>
            </li>
            <li>
                <a href="index.php">
                    <i class='bx bx-upload'></i>
                    <span class="text">Upload</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="settings.html" class="">
                    <i class='bx bx-cog'></i>
                    <span class="text">Setting</span>
                </a>
            </li>
            <li>
                <a href="#" class="logout">
                    <i class="bx bxs-log-out-circle"></i>
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
            <i class="bx bx-menu"></i>

            <input type="checkbox" id="switch-mode" hidden />
            <label for="switch-mode" class="switch-mode"></label>

            <a href="#" class="profile">
                <img src="img/people.png" />
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Sell</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Order</h3>
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
                                    <img src="img/people.png" />
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <!-- <td><span class="status completed">Completed</span></td> -->
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/people.png" />
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <!-- <td><span class="status pending">Pending</span></td> -->
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/people.png" />
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <!-- <td><span class="status process">Process</span></td> -->
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/people.png" />
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <!-- <td><span class="status pending">Pending</span></td> -->
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/people.png" />
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
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