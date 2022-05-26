<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.13.10/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="main-container">
        <nav class="nav-bar">
            <div class="logo-area">
                <i class="fas fa-wallet"></i>
                <span>myWallet</span>
            </div>
            <ul class="uk-iconnav uk-iconnav-vertical navigation">
                <li><a href="#">
                        <span uk-icon="icon: home; ratio:2"></span>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span uk-icon="icon: credit-card; ratio:2"></span>
                        <span>Manage Cards</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span uk-icon="icon: cog; ratio:2"></span>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="container uk-flex uk-flex-column">
            <div class="header uk-flex uk-flex-row uk-flex-between uk-flex-middle">
                <h1>Home</h1>
                <div class="user-area">
                    <button type="button" uk-icon="user"></button>
                    <div uk-dropdown>
                        <ul class="uk-nav uk-dropdown-nav">
                            <li> <a href="http://"> User Profile</a></li>
                            <li> <a href="http://"> Logout</a></li>
                        </ul>

                    </div>

                </div>
            </div>
            <div class="container-wrapper">
                <div class="container-top">
                    <div class="container-glass">
                        <div class="top uk-flex uk-flex-row uk-flex-between">
                            <h3>VISA</h3>
                            <i class="fab fa-cc-visa"></i>
                        </div>
                        <div class="middle">
                            <span class="card-num uk-text-large">8756 7702 0393 1737 </span>
                        </div>
                        <div class="bottom uk-flex uk-flex-row uk-flex-between">
                            <div class="bottom-left uk-flex uk-flex-column">
                                <span>Card holder name</span>
                                <span class="uk-text-small">Jane Doe</span>
                            </div>
                            <div class="bottom-right uk-flex uk-flex-column">
                                <span>Expiry date</span>
                                <span class="uk-text-small">07 / 31 / 2028</span>
                            </div>
                        </div>
                    </div>
                    <div class="container-glass">
                        <div class="top uk-flex uk-flex-row uk-flex-between">
                            <h3>MasterCard</h3>
                            <i class="fab fa-cc-mastercard"></i>
                        </div>
                        <div class="middle">
                            <span class="card-num uk-text-large">0522 6074 6760 0493 </span>
                        </div>
                        <div class="bottom uk-flex uk-flex-row uk-flex-between">
                            <div class="bottom-left uk-flex uk-flex-column">
                                <span>Card holder name</span>
                                <span class="uk-text-small">Jane Doe</span>
                            </div>
                            <div class="bottom-right uk-flex uk-flex-column">
                                <span>Expiry date</span>
                                <span class="uk-text-small">05 / 18 / 2025</span>
                            </div>
                        </div>
                    </div>
                    <div class="container-glass">
                        <div class="top uk-flex uk-flex-row uk-flex-between">
                            <h3>BitCoin</h3>
                            <i class="fab fa-bitcoin"></i>
                        </div>
                        <div class="middle uk-flex uk-flex-center">
                            <span class="card-num uk-text-large"> 1 BTC </span>
                        </div>
                        <div class="bottom uk-flex uk-flex-center">
                            <div> $30,092.80 </div>
                        </div>
                    </div>
                    <div class="container-glass">
                        <div class="top uk-flex uk-flex-row uk-flex-between">
                            <h3>Savings</h3>
                            <i class="fas fa-piggy-bank"></i>
                        </div>
                        <div class="middle uk-flex uk-flex-center">
                            <span class="card-num uk-text-large">$1,000.00 </span>
                        </div>
                        <div class="bottom uk-flex uk-flex-center">
                            <div>CASH</div>
                        </div>
                    </div>

                </div>
                <div class="container-bottom">
                    <h3>Welcome back, Ms. Jane Doe!</h3>
                    <div class="container-bottom-wrapper">
                        <div class="container-bottom-glass">
                            <div class="id">
                                <div class="left">
                                    <div class="photo"><span uk-icon="icon:user;ratio:8;"></span></div>
                                    <div class="sign uk-flex uk-flex-row">
                                        <span>Signature:</span>
                                        <span>___________</span>
                                    </div>
                                    <div class="number">
                                        <span>#</span><span>DIGI-0000-0000</span>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="right-top">
                                        <span class="id-type">Digi&trade; International</span>
                                        <span uk-icon="world"></span>
                                    </div>
                                    <div class="right-bottom">
                                        <div class="lastname">
                                            <span class="uk-text-small uk-text-light">Last Name</span>
                                            <span>DOE</span>
                                        </div>
                                        <div class="firstname">
                                            <span class="uk-text-small uk-text-light">First Name</span>
                                            <span>JANE</span>
                                        </div>
                                        <div class="address">
                                            <span class="uk-text-small uk-text-light">Address</span>
                                            <span> 13F Nice Bldg, Anywhere Street, Great City, Great Country, 0000</span>
                                        </div>
                                        <div class="birthdate">
                                            <span class="uk-text-small uk-text-light">Birthdate</span>
                                            <span>2000-00-01</span>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="container-bottom-glass">
                            <div class="card">
                                <div class="card-heading">
                                    <div class="company-area">
                                        <span> Digi&trade; Tech Inc.</span>
                                        <span uk-icon="link"></span>
                                    </div>
                                </div>
                                <div class="card-body">
                                <div class="name-area">
                                        <span class="uk-text-large">Jane Doe</span>
                                        <span class="uk-text-small">Junior Web Developer</span>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="address">
                                        <span uk-icon="location"></span>
                                        <span>IT Department, 2f Tech Bldg, Random Avenue, Great City, Amazing State, 0000</span>
                                    </div>
                                    <div class="email">
                                        <span uk-icon="mail"></span>
                                        <span>janedoe@mail.com</span>
                                    </div>
                                    <div class="telnum">
                                        <span uk-icon="receiver"></span>
                                        <span>+00-000-000-0000</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.13.10/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.13.10/dist/js/uikit-icons.min.js"></script>
</body>

</html>