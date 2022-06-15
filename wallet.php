<?php require "functions/functions.php";
$user_data = getUserData("james@mail.com");
//echo
//print_r($user_data);

  ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Testing</title>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="page-wrapper cool toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="#">pro sidebar</a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="img/avatar.png" alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">Jhon
                            <strong>Smith</strong>
                        </span>
                        <span class="user-role">Administrator</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>
                <!-- sidebar-header  -->
                <div class="sidebar-search">
                    <div>
                        <div class="input-group">
                            <input type="text" class="form-control search-menu" placeholder="Search...">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidebar-search  -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>General</span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-tachometer-alt"></i>
                                <span>Dashboard</span>
                                <span class="badge badge-pill badge-warning">New</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">Dashboard 1
                                            <span class="badge badge-pill badge-success">Pro</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Dashboard 2</a>
                                    </li>
                                    <li>
                                        <a href="#">Dashboard 3</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-shopping-cart"></i>
                                <span>E-commerce</span>
                                <span class="badge badge-pill badge-danger">3</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">Products

                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Orders</a>
                                    </li>
                                    <li>
                                        <a href="#">Credit cart</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="far fa-gem"></i>
                                <span>Components</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">General</a>
                                    </li>
                                    <li>
                                        <a href="#">Panels</a>
                                    </li>
                                    <li>
                                        <a href="#">Tables</a>
                                    </li>
                                    <li>
                                        <a href="#">Icons</a>
                                    </li>
                                    <li>
                                        <a href="#">Forms</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-chart-line"></i>
                                <span>Charts</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">Pie chart</a>
                                    </li>
                                    <li>
                                        <a href="#">Line chart</a>
                                    </li>
                                    <li>
                                        <a href="#">Bar chart</a>
                                    </li>
                                    <li>
                                        <a href="#">Histogram</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-globe"></i>
                                <span>Maps</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">Google maps</a>
                                    </li>
                                    <li>
                                        <a href="#">Open street map</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-menu">
                            <span>Extra</span>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span>Documentation</span>
                                <span class="badge badge-pill badge-primary">Beta</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-calendar"></i>
                                <span>Calendar</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-folder"></i>
                                <span>Examples</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">
                <a href="#">
                    <i class="fa fa-bell"></i>
                    <span class="badge badge-pill badge-warning notification">3</span>
                </a>
                <a href="#">
                    <i class="fa fa-envelope"></i>
                    <span class="badge badge-pill badge-success notification">7</span>
                </a>
                <a href="#">
                    <i class="fa fa-cog"></i>
                    <span class="badge-sonar"></span>
                </a>
                <a href="#">
                    <i class="fa fa-power-off"></i>
                </a>
            </div>
        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="container-fluid">
                <h2>Pro Sidebar</h2>
                <hr>

                <div class="row">
                    <div class="container-fluid col-md-5 container-fixed-lg ">
                        <div class="card">
                           

                            <form method="POST" id="deposit-form">
                                <div id="form-info"></div>
                            <div class="form-group">
                            <div class="card-body">
                                <label>Deposit amount ()</label>
                                <div>
                                    <input type="number" min="2000" name="amount" class="form-control" required>
                                </div>
                                <input type="hidden" name="email" value="<?=$user_data['data']['email']?>">
                            </div>


                            <div class="form-group">
                                <button name="deposit" type="submit" class="btn btn-primary">Deposit</button>
                                
                            </div>

                            </form>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-12 mt-4">
                        <div class="card card-default">
                            <div class="col-lg-12 col-md-12 col-12 p-0 m-0"
                                style="border-radius:5px; box-shadow: 0 0 5px rgb(167, 165, 165);">
                                <div class="col-lg-12 mt-3  m-t-30 pull-left">
                                    <div class="m-b-10 row hint-12">
                                        <div class="col-lg-12 col-12 bg-white  padding-lg-10">
                                            <div class=" row no-gutters ">
                                                <div class="col-lg-12 col-md-12 col-12">
                                                    <p class="font-weight-bold" style="color:#3f3c3c;font-size:18px;"><i
                                                            class='bx bx-book-alt' width="3%"
                                                            aria-hidden="true"></i>&nbsp;&nbsp;Wallet </p>
                                                </div>
                                                <div class=" col-lg-4 col-6 p-0 m-0">
                                                    <p class="font-weight-bold" style="font-size:15px;">Current
                                                        Balance </p>
                                                </div>
                                                <div class="heading col-lg-3 col-6 p-0 m-0">
                                                    <p class="text-center" style="color: #379ee8; font-size:25px">
                                                        <span class="text-success" style="font-weight: 500">
                                                            $
                                                            0.00</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <section id="tabs">
                                        <div class="container">
                                            <div class="row hint-13">
                                                <div class="col-lg-12 col-md-12 col-12 pt-1 p-0 m-0 ">
                                                    <nav>
                                                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                                            <a class="nav-item nav-link active" id="nav-home-tab"
                                                                data-toggle="tab" href="#nav-home" role="tab"
                                                                aria-controls="nav-home" aria-selected="true">Wallet
                                                                History</a>
                                                            <a class="nav-item nav-link" id="nav-profile-tab"
                                                                data-toggle="tab" href="#nav-profile" role="tab"
                                                                aria-controls="nav-profile"
                                                                aria-selected="false">Deposit</a>
                                                            <a class="nav-item nav-link" id="nav-contact-tab"
                                                                data-toggle="tab" href="#nav-contact" role="tab"
                                                                aria-controls="nav-contact"
                                                                aria-selected="false">Withdraw</a>
                                                        </div>
                                                    </nav>
                                                    <div class=" tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                                        <div class=" tab-pane fade show active" id="nav-home"
                                                            role="tabpanel" aria-labelledby="nav-home-tab">
                                                            <div class="row justify-content-center text-white">
                                                                <div class="col-lg-2 col-md-2 col-12 ml-2 mt-2"
                                                                    style="background:#1b1b28;border-radius:7px;box-shadow: 0 0 5px silver;">
                                                                    <p class="text-center font-weight-bold pt-2  ">0
                                                                        $</p> <br>
                                                                    <p class="text-center font-weight-bold pb-2"
                                                                        style="font-size:12px;">All</p>
                                                                </div>
                                                                <div class="col-lg-2 col-md-2 col-12 ml-2 mt-2"
                                                                    style="background:#0bbaa3;border-radius:7px;box-shadow: 0 0 5px silver;">
                                                                    <p class="text-center font-weight-bold pt-2 ">0
                                                                        $</p> <br>
                                                                    <p class="text-center font-weight-bold pb-2 "
                                                                        style="font-size:12px;">Deposited</p>
                                                                </div>
                                                                <div class="col-lg-2 col-md-2 col-12 ml-2 mt-2"
                                                                    style="background:#64bbde;border-radius:7px;box-shadow: 0 0 5px silver;">
                                                                    <p class="text-center font-weight-bold pt-2 ">0
                                                                        $</p> <br>
                                                                    <p class="text-center font-weight-bold pb-2 "
                                                                        style="font-size:12px;">Spent</p>
                                                                </div>
                                                                <div class="col-lg-2 col-md-2 col-12 ml-2 mt-2"
                                                                    style="background:#ffd164;border-radius:7px;box-shadow: 0 0 5px silver;">
                                                                    <p class="text-center font-weight-bold pt-2 ">0
                                                                        $</p> <br>
                                                                    <p class="text-center font-weight-bold pb-2 "
                                                                        style="font-size:12px;">Witdrawal</p>
                                                                </div>
                                                                <div class="col-lg-2 col-md-2 col-12 ml-2 mt-2"
                                                                    style="background:#ff8087;border-radius:7px;box-shadow: 0 0 5px silver;">
                                                                    <p class="text-center font-weight-bold pt-2 ">0
                                                                        $</p> <br>
                                                                    <p class="text-center font-weight-bold pb-2 "
                                                                        style="font-size:12px;">Deducted</p>
                                                                </div>
                                                                <div class="col-lg-12 no-padding">
                                                                    <div class="card card-default">
                                                                        <div class="card-header ">
                                                                            <div class="card-title">
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <div class="table-responsive"
                                                                                style="text-align: -webkit-center;">
                                                                                <table
                                                                                    class="table table-hover transaction_Mayor demo-table-search table-responsive-block datatable"
                                                                                    id="">
                                                                                    <thead style="background:#eff7f5;">
                                                                                        <tr>
                                                                                            <th
                                                                                                class="text-dark font-weight-bold">
                                                                                                Transaction Type
                                                                                            </th>
                                                                                            <th class=" font-weight-bold"
                                                                                                style="color:black!important;">
                                                                                                Date</th>
                                                                                            <th
                                                                                                class="text-dark font-weight-bold">
                                                                                                Amount</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                                            aria-labelledby="nav-profile-tab">
                                                            <section id="tabs">
                                                                <div class="container-fluid">
                                                                    <div class="row">
                                                                        <div class="col-lg-12 col-md-12 col-12 p-0 m-0">
                                                                            <nav>
                                                                                <h4>Select Payment Method</h4>
                                                                                <div class="nav  nav-fill pl-lg-5 pr-lg-5 "
                                                                                    id="tab-nav" role="tablist">
                                                                                    <a class="nav-set nav-item active"
                                                                                        id="tab-profile-nav"
                                                                                        data-toggle="tab"
                                                                                        href="#profile-nav" role="tab"
                                                                                        aria-controls="profile-nav"
                                                                                        aria-selected="true">
                                                                                        <div class="col-lg-10 col-md-12 col-12 pt-2 pb-2 ml-lg-4"
                                                                                            id="bank">

                                                                                            <p class="font-weight-bold rounded"
                                                                                                style="color:#3f3c3c;font-size:18px; padding-top: 20px; background-color: #379ee8; padding-bottom: 20px;">
                                                                                                <i class="fa fa-university"
                                                                                                    width="3%"
                                                                                                    aria-hidden="true"></i>&nbsp;&nbsp;Bank
                                                                                            </p>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </nav>
                                                                            <div class="tab-content py-3 px-3 px-sm-0"
                                                                                id="tabContent-nav">
                                                                                <div class="tab-pane fade show"
                                                                                    id="home-nav" role="tabpanel"
                                                                                    aria-labelledby="tab-home-nav">
                                                                                    <div
                                                                                        class="row justify-content-center">
                                                                                        <div
                                                                                            class="col-sm-12 col-lg-9 col-md-9 credit-card2 mt-3">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="tab-pane fade show active tablet_p fade pl-lg-5 pr-lg-5"
                                                                                    id="profile-nav" role="tabpanel"
                                                                                    aria-labelledby="tab-profile-nav">
                                                                                    <div class="row ml-lg-2">
                                                                                        <div
                                                                                            class="col-lg-12 col-md-12 col-12">
                                                                                            <p class="text-dark"
                                                                                                style="font-size: 12px;">
                                                                                                To send a Bank Wire
                                                                                                Transfer to Shopper
                                                                                                Mayor,please
                                                                                                make sure your
                                                                                                reference your
                                                                                                Request ID and use
                                                                                                the following bank
                                                                                                account details:</p>
                                                                                        </div>
                                                                                        <div
                                                                                            class="col-lg-8 col-md-8 col-10">
                                                                                            <span class="text-dark"
                                                                                                style="line-height: 20px;">
                                                                                                <p class="text-dark"
                                                                                                    style="font-size: 12px;">
                                                                                                    Name:
                                                                                                    &nbsp;Shopper
                                                                                                    Mayor LLC
                                                                                                    <br>
                                                                                                    Account name:
                                                                                                    &nbsp;Shopper
                                                                                                    Mayor
                                                                                                    LLC<br>
                                                                                                    Account number:
                                                                                                    &nbsp;00000000<br>
                                                                                                    Routing number:
                                                                                                    &nbsp;000000000<br>
                                                                                                    SWIFT:
                                                                                                    &nbsp;Zenith NG
                                                                                                    33<br>
                                                                                                    Bank info:
                                                                                                    &nbsp;Zenith
                                                                                                    bank<br>
                                                                                                    Address:
                                                                                                    &nbsp;Number St
                                                                                                    @ address,
                                                                                                    Nigeria
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-content">
                                                                                        <form method="POST"
                                                                                            id="form_create"
                                                                                            accept-charset="UTF-8"
                                                                                            enctype='multipart/form-data'>

                                                                                            <div class="modal-body">
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="mt-3 br-setting p-0 col-lg-12 col-md-11 col-12">
                                                                                                        <input
                                                                                                            placeholder="Bank name"
                                                                                                            class="form-control"
                                                                                                            name=""
                                                                                                            type="text">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="p-0 col-lg-5 col-md-4 co-12 br-setting mt-3">
                                                                                                        <input
                                                                                                            placeholder="Deposite Amount"
                                                                                                            id=""
                                                                                                            class="form-control"
                                                                                                            name="transaction_amount"
                                                                                                            type="text">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-lg-2 col-md-2">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="tab_input_m p-0 col-lg-5 col-md-4 col-12 br-setting mt-3">
                                                                                                        <input
                                                                                                            placeholder="Transaction ID"
                                                                                                            id="transaction_id"
                                                                                                            class="form-control"
                                                                                                            name="transaction_id"
                                                                                                            type="text">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class=" mt-3 d-flex  col-md-6 col-sm-6 col-xs-12 col-lg-6">
                                                                                                        <label
                                                                                                            style="font-size: 9px;color:grey"
                                                                                                            class=" mt-1">Receipt
                                                                                                            image</label>
                                                                                                        <div
                                                                                                            class="col-lg-12 col-md-12 col-12">
                                                                                                            <input
                                                                                                                class="btn p-1"
                                                                                                                id="receipt_image"
                                                                                                                name="receipt_image"
                                                                                                                type="file"
                                                                                                                style="background:#4a148c; color:white;font-size:10px;border-radius:5px" />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="col-lg-9 col-md-9 col-12">
                                                                                                <input class="pt-1"
                                                                                                    type="checkbox"
                                                                                                    name="verification"
                                                                                                    id="checkbox1"><label
                                                                                                    class=" ml-2 label text-dark"
                                                                                                    for="checkbox1"><span
                                                                                                        style="font-size:9px;">I
                                                                                                        certify all
                                                                                                        information
                                                                                                        provided is
                                                                                                        correct.</span></label>
                                                                                            </div>
                                                                                            <div
                                                                                                class="col-lg-4 col-md-3 col-10 pull-right ">
                                                                                                <button type="submit"
                                                                                                    class="btn p-1 pull-right"
                                                                                                    style="background:#4a148c; color:white;font-size:10px;border-radius:5px">Processed</button>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="tab-pane fade"
                                                                                    id="contact-nav" role="tabpanel"
                                                                                    aria-labelledby="tab-contact-nav">
                                                                                    <div
                                                                                        class="row justify-content-center">
                                                                                        <div
                                                                                            class="col-sm-12 col-lg-9 col-md-9 credit-card2 mt-3">
                                                                                            <form method="POST"
                                                                                                id="formid_paypal"
                                                                                                action="#"
                                                                                                accept-charset="UTF-8">
                                                                                                <input type="hidden"
                                                                                                    name="_token"
                                                                                                    value="#">
                                                                                                <div
                                                                                                    class="mt-3 br-setting form-group form-group-default d-flex">
                                                                                                    <input
                                                                                                        placeholder="Amount less then $100"
                                                                                                        value=""
                                                                                                        id="amount_paypal"
                                                                                                        class="form-control"
                                                                                                        name="amount"
                                                                                                        type="number">
                                                                                                    <span
                                                                                                        id="error_msg"></span>
                                                                                                </div>
                                                                                                <span
                                                                                                    id="error_msgs_paypal"></span>
                                                                                                <button
                                                                                                    style="background:#4a148c; color:white;font-size:10px;border-radius:5px; width:120px;border:none;padding:5px"
                                                                                                    type="submit"
                                                                                                    class="btn-paypal float-right">Deposit</button>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                                            aria-labelledby="nav-contact-tab">

                                                            <form method="POST" id="form_create2" action="#"
                                                                accept-charset="UTF-8">
                                                                <input type="hidden" name="_token" value="#">
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div
                                                                            class="form-group col-md-6 col-sm-6 col-xs-12 col-lg-6">
                                                                            <input placeholder="First Name"
                                                                                id="first_name"
                                                                                class="br-setting form-control"
                                                                                name="first_name" type="text">
                                                                        </div>
                                                                        <div
                                                                            class="form-group col-md-6 col-sm-6 col-xs-12 col-lg-6">
                                                                            <input placeholder="Last Name"
                                                                                id="last_name"
                                                                                class="br-setting form-control"
                                                                                name="last_name" type="text">
                                                                        </div>
                                                                        <div
                                                                            class="form-group col-md-6 col-sm-6 col-xs-12 col-lg-6 mt-2">
                                                                            <input placeholder="Bank Name" id="b_name"
                                                                                class="br-setting form-control"
                                                                                name="bank_name" type="text">
                                                                        </div>
                                                                        <div
                                                                            class="form-group col-md-6 col-sm-6 col-xs-12 col-lg-6 mt-2">
                                                                            <input
                                                                                placeholder="Bank Routing Transit Number"
                                                                                id="b_t_name"
                                                                                class="br-setting form-control"
                                                                                name="bank_transit_number" type="text">
                                                                        </div>
                                                                        <div
                                                                            class="form-group col-md-6 col-sm-6 col-xs-12 col-lg-6 mt-2">
                                                                            <input placeholder="Bank Account Number"
                                                                                id="b_a_name"
                                                                                class="br-setting form-control"
                                                                                name="bank_account_no" type="text">
                                                                        </div>
                                                                        <div
                                                                            class="form-group col-md-6 col-sm-6 col-xs-12 col-lg-6 mt-2">
                                                                            <input
                                                                                placeholder="Confirm Bank Account Number"
                                                                                id="c_b_a_name"
                                                                                class="br-setting form-control"
                                                                                name="bank_account_no_confirmation"
                                                                                type="text">
                                                                        </div>
                                                                        <div
                                                                            class="form-group col-md-12 col-sm-12 col-xs-12 col-lg-12 mt-2">
                                                                            <input placeholder="Bank Address"
                                                                                id="b_address"
                                                                                class="br-setting form-control"
                                                                                name="bank_address" type="text">
                                                                        </div>
                                                                        <div
                                                                            class="form-group col-md-6 col-sm-12 col-xs-12 col-lg-6 mt-2">
                                                                            <input placeholder="Other Information"
                                                                                id="remarks"
                                                                                class="br-setting form-control"
                                                                                name="remarks">
                                                                        </div>
                                                                        <div
                                                                            class="form-group col-md-6 col-sm-6 col-xs-12 col-lg-6 mt-2">
                                                                            <input placeholder="Withdrawal Amount"
                                                                                id="total_w_draw"
                                                                                class="br-setting form-control"
                                                                                name="total_withdraw" type="text">
                                                                        </div>
                                                                        <div
                                                                            class="section col-md-12 col-sm-12 col-xs-12 col-lg-12 mt-2">
                                                                            <div class="group group-primary">
                                                                                <input class="" type="checkbox"
                                                                                    name="certify"
                                                                                    id="checkbox-certify">
                                                                                <label class="label text-dark"
                                                                                    for="checkbox-certify"><span
                                                                                        style="font-size:10px;">I
                                                                                        certify all information
                                                                                        provided is
                                                                                        correct.</span></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <div class="modal-footer"
                                                                style="border-top:none!important;">
                                                                <div class="col-lg-3 col-md-3 col-8 pull-right">
                                                                    <button type="submit"
                                                                        class="p-1 btn btn-small pull-right"
                                                                        style="background:#4a148c; color:white;font-size:10px;border-radius:5px; padding:2px;">Submit</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <h5>Anything Else?</h5>
                <hr>
        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/script.js"></script>

<script type="text/javascript">

    $('#deposit-form').submit(function(e){
       // alert("yes");

        e.preventDefault();

        startLoader("processing your request...........");

        let amount = document.querySelector("#deposit-form").amount.value;
        let email = document.querySelector("#deposit-form").email.value;
        $.post({

            url : "process/deposit.php",
            data: { amount : amount, email : email},
            success: function(feedback){
                
                //console.log(feedback);

                feedback = JSON.parse(feedback);
                //console.log(feedback);

                if (feedback.code == "success") {
                payment_url = feedback.payment_url
                

                //stop loader
                stopLoader();
                location.href = payment_url;

            }
            }
        })
    })



    function startLoader(msg){
        document.querySelector("#deposit-form").amount.readOnly = true;
        document.querySelector("#deposit-form").deposit.disabled = true;

        document.querySelector("#form-info").innerHTML = `<h6>${msg}</h6>

                                                        <div class="spinner-border" role="status"><span class="sr-only">Loading...</span>
                                                        </div>`
    }




    function stopLoader(){
       // document.querySelector("#deposit-form").amount.removeAttribute("readOnly");
       // document.querySelector("#deposit-form").deposit.removeAttribute("disabled");

    }

</script>

</html>