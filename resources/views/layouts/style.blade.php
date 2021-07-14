<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<!-----Link to scss------->

<link rel="stylesheet" href="{{asset('assets/scss/css/style.css')}}">
<!-- <link rel="stylesheet" href="{{asset('assets/css/login.css')}}"> -->
<link rel="stylesheet" href="{{asset('assets/scss/css/background-variant.scss')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta name="keywords" content="Space Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<!-- Online-fonts -->
<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
<!-- //Online-fonts -->
<style>
    .services {
        margin: auto;
    }

    .card {
        margin: 5px;
    }

    .card-group {
        width: 100%;
        align-items: center;
        text-align: center;
    }

    .card-title {
        font-size: 16px;
        font-weight: bolder;
        text-align: center;
    }

    .card-title:hover {
        text-decoration: none;
    }

    .section-card-title h2 {
        margin-top: 10px;
        text-align: center;
        font-weight: bolder;
    }

    * {
        margin: 0;
        padding: 0;
    }


    .dropdown {
        position: relative;
        display: inline-block;
        z-index: 1000;
    }

    /*sub-menu*/
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f5f5f5;
        z-index: 1;
        list-style: none;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    /*.dropdown-content a{
	color: black;
	padding: 10px 10px;
	text-decoration: none;
}*/

    /*--------ASIDE---------*/
    * {
        margin: 0;
        padding: 0;
        transition: all 0.3s;
    }

    #mainnav {
        padding: 10px;
        margin: 10px;
    }

    #mainnav ul {
        background: #3B5998;
        list-style: none;
        padding: 0px;
        width: 200px;
        text-align: left;
    }

    #mainnav ul li {
        position: relative;
        width: 200px;
        height: 40px;
        line-height: 40px;
        border-bottom: 1px solid #fff;
    }

    #mainnav ul .thefirst {
        background: #1D1F20;
    }

    #mainnav ul li a {
        text-decoration: none;
        color: #fff;
        font-weight: bold;
        padding: 0 16px;
        display: block;
    }

    #mainnav li:hover {
        background: #17306E;
    }

    #mainnav .sub-menu {
        position: absolute;
        left: 200px;
        top: 0px;
        width: 200px;
        display: none;
        text-align: left;
        border-left: 1px solid #fff;
        font-size: 90%;
        border-radius: 0px 10px 10px 0px;
    }

    #mainnav li:hover .sub-menu {
        display: block;
        background: #3B5998;
        color: red;
    }

    #mainnav .sub-menu2 {
        position: absolute;
        left: 200px;
        top: 0;
        width: 200px;
        border-left: 1px solid #fff;
        border-radius: 0px 10px 10px 0px;
        display: none;
    }

    #mainnav .sub-menu li:hover .sub-menu2 {
        display: block;
    }

    #mainnav .sub-menu3 {
        position: absolute;
        left: 200px;
        top: 0;
        width: 200px;
        border-left: 1px solid #fff;
        border-radius: 0px 10px 10px 0px;
        display: none;
    }

    #mainnav .sub-menu2 li:hover .sub-menu3 {
        display: block;
    }


    /*------Menu ngang------- */
    .navbar {
        /* position: fixed; */
        z-index: 1000;
        width: 100%;
    }

    .main_menu {
        line-height: inherit;

    }

    .dropdown-toggle {
        color: blue;
        font-family: 'Tahoma', sans-serif;
        font-weight: 300;
        font-size: 18px;
    }

    .dropdown-toggle:hover {
        text-decoration: none;
    }

    .main_menu>li {
        float: left;
        line-height: 20px;
        align-items: center;
        height: 25px;
    }

    .main_menu li {
        position: relative;
        list-style: none;
    }

    .main_menu>li a {
        display: block;
        text-transform: none;
        padding: 15px;
    }

    .main_menu>li>a {
        text-transform: inherit;
    }

    .main_menu>li>a {
        display: inline-block;
        padding: 20px;
    }

    .main_menu li .sub_menu {
        position: absolute;
        display: none;
        width: 200px;
        background: #f5f5f5;
        top: 0px;
        left: 100%;
        z-index: 1000;
    }

    .main_menu li:hover>.sub_menu {
        display: block;
        color: palegoldenrod;
    }

    .sub_menu li a:hover {
        text-decoration: none;
        background-color: powderblue;
    }

    .main_menu>li>.sub_menu {
        top: 48px;
        position: absolute;
        left: 0px;
    }

    .main_menu li:hover {
        background: #fcfcfc;
        color: powderblue;
    }

    footer {
        margin: auto;
        height: auto;
    }

    .content-section {
        margin-top: 10px;
    }

    /*-------Table-------- */
    .d-flex {
        display: inline-block;
    }

    .nav {
        background-color: lavender;
        border-radius: 5px;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        color: #fff;
        background-color: #3b7ddd;
        font-weight: 500;
    }

    .nav-pills .nav-link:hover {
        font-weight: 600;
    }

    #dt {
        text-align: justify;
        margin: auto;
        font-weight: 300;
        font-size: 15px;
        z-index: 1000;
    }

    #tt {
        width: 45rem;
    }


    /* nav-strai */
    * {
        margin: 0;
        padding: 0;
    }

    header,
    nav {
        /* canh giữa cách lề mỗi bên 10% */
        margin: 0;
        height: 42px;
        width: 100%;
    }

    nav {
        background: #1D6495;
        /*tô màu cho menu cha*/
        z-index: 1000;
        position: fixed;
        opacity: 0.9;
    }

    nav ul {
        display: flex;
    }

    nav>ul li {
        list-style: none;
        /* bỏ dấu chấm mặc định của li */
    }

    nav>ul li a {
        display: block;
        padding: 0 25px;
        line-height: 41px;
        color: #f1f2f3;
        text-decoration: none;
    }

    /* Khi hover đến li, tô màu cho thẻ a */
    nav ul li:hover>a {
        background: #1D6495;
        opacity: 0.7;
        text-decoration: none;
        color: yellow;
        /* transition: 0.2s; */
    }

    /*menu con*/
    /*Ẩn các menu con cấp 1,2,3*/
    nav li ul {
        display: none;
        padding: 0;
        margin: auto;
        min-width: 250px;
        position: absolute;
        z-index: 1000;
    }

    nav li>ul li {
        width: 100%;
        border: none;
        border-bottom: 1px solid #ccc;
        background: #999;
        text-align: left;
    }

    nav li>ul li:first-child a {
        border-bottom-left-radius: 0px;
        border-top-left-radius: 0px;
    }

    nav li>ul li:last-child {
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        border-right: none;
    }

    nav li>ul li:last-child a {
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
    }

    /*khi hover thì hiện menu con*/
    nav li:hover>ul {
        display: inline-block;
    }

    /*Hiển thị menu con cấp 2,3,4 bên cạnh phải*/
    nav>ul li>ul li>ul {
        margin-left: 248px;
        margin-top: -40px;
        position: fixed;
    }

    .text-end {
        margin: auto;
        margin-right: 5px;
    }

    .form-control-sm {
        border: 1px solid gray;
        width: 280px;
    }

    .form-label {
        width: 100px;
    }

    .form-label-dt {
        width: 200px;
    }

    .form-label-w {
        margin-right: 10px;
        align-items: center;
        text-align: center;
    }

    .content-tabs {
        margin: auto;
        margin-top: 10px;
        width: 98%;
        text-align: justify;
        align-items: center;
    }

    #myTabContent {
        margin: auto;
        margin-top: 10px;
        margin-bottom: 10px;
        width: 100%;
        align-items: center;

    }

    .tab-pane-top {
        margin: auto;
        width: 80%;
        align-items: center;
    }

    .container-wraper {
        padding-top: 40px;
    }

    .container-page {
        padding: 45px;
    }

    .table {
        line-height: 18px;
    }
</style>