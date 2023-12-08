<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>ChickCuisine</title>
    <link rel="icon" href="<?=$IMAGE_DIR?>/mini-logo.png" type="image/png">

</head>
<!-- css global -->
<style>
    :root {
        --red: #c34439;
        --black: #202020;
        --lightblack: #4E4E4E;
        --gray: #BDBDBD;
        --lightgray: #faf9f8;
        --yellow: #FFB11B;
        --green:  #56D237;
    }
    button{
        border: 1px solid var(--red);
    }
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: var(--lightgray);
        
    }
    a {
        text-decoration: none;
        color: var(--lightblack);
    }
    /* Đường gạch ngang */
    .line {
        border-bottom: 1px solid var(--gray);
        width: 100%;
        margin: 10px auto;
    }
    .vertical-line {
        border-right: 1px solid var(--gray);
        height: 100%;
        margin: auto 10px ;
    }
    .whitediv {
        background-color: white;
        border: 1px solid var(--gray);
        box-shadow: 0px 0px 5px var(--gray);
        border-radius: 10px;
    }
    main{
        padding: 0 100px;
    }
</style>
<!-- css header footer --> 
<style>
    .global-message {
        width: 350px;
        background-color: white;
        border: 1px solid var(--gray);
        box-shadow: 0px 0px 5px var(--gray);
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        position: absolute;
        top: 10px;
        left: calc(50% - 175px);
    }
    .global-message p {
        color: var(--lightblack);
        font-weight: 600;
    }
    header {
        width: 100%;
        padding: 10px 100px;
        background-color: #171717;
        display: inline-grid;
        grid-template-columns: 2fr 350px 4fr 1fr 137px;
        gap: 10px;
        justify-content: space-around;
        align-items: center;
    }
    header>* {
        text-align: center;
    }
    header * {
        font-size: 18px;
    }
    header .logo {
        width: 193px;
    }
    header .menu {
        display: flex;
    }

    header .menu a {
        color: white;
        width: 100%;
    }
    header .menu a svg {
       display: none;
    }
    header .menu a:nth-child(4) {
       display: none;
    }
    header .search-box {
        border: 1px solid var(--gray);
        padding: 5px 0px 5px 10px;
        height: 42px;
        border-radius: 21px;
        width: 100%;
        min-width: 150px;
        text-align: left;
    }
    header .search-box>* {
        margin: auto;
        vertical-align: middle;
    }
    header .search-box input {
        outline: none;
        border: none;
        background-color: unset;
        color: white;
        width: 80%;
    }
    header .search-box input::placeholder {
        color: white;
    }
    header .cart {
        text-align: right;
        padding-right: 20px;
        position: relative;
    }
    header .cart img {
        height: fit-content;
    }
    header .account {
        text-align: center;
        background-color: var(--red);
        padding: 5px;
        border-radius: 5px;
        width: 137px;
    }
    header .account:hover {
        transform: scale(1.1);
        transition: 0.3s;
        cursor: pointer;
    }
    header .account>* {
        display: inline-block;
        vertical-align: top;
        margin: 0px 5px;
        color: white;
    }
    main{
        margin-top:5%;
    }
    footer {
        width: 100%;
        margin-top: 200px;
        background-image: url('<?=$IMAGE_DIR?>/background-footer.png');

        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        padding: 10px 100px 50px;
        
    }
    footer .gallery {
        position: absolute;
        top: 0px; 
        left:8.5%;
        z-index: 1;
        display: flex;
        justify-content: space-around;
    }
    footer .gallery img {
        border-radius: 10px;
        height: fit-content;
        margin-right:3%
        
    }
    footer .about {
        color: var(--lightgray);
        font-size: 20px;
        width: 100%;
        margin: 500px auto 100px;
        text-align: center;
    }
    footer .menu-box {
        border: 1px solid white;
        position: relative;
        width: 100%;
        margin: auto;
        padding: 20px;
        display: grid;
        grid-template-columns: repeat(2, auto);
    }
    footer .logo-footer {
        width: 20%;
        position: absolute;
        top: -50px;
        left: 50%;
        transform: translateX(-50%);
        backdrop-filter: blur(50px);
    }
    footer .footer-menu {
        grid-column: 1 / 2;
        grid-row: 1 / 2;
    }
    footer .footer-menu a {
        text-decoration: none;
        color: white;
        font-size: 20px;
        margin: 0px 10px;
    }
    footer .social-icons {
        vertical-align: middle;
        text-align: right;
        grid-column: 2 / 3;
        grid-row: 1 / 2;
    }
    footer .social-icons>img {
        margin: 0px 5px;
        width: 30px;
    }
    footer .footer-line {
        grid-row: 2 / 3;
        grid-column: 1 / 3;
    }
    footer .more-info {
        grid-column: 1 / 3;
        grid-row: 3 / 4;
        text-align: right;
    }
    footer .more-info ul li {
        color: white;
        display: inline-block;
        margin: 0px 20px;
    }
    header .cart #cart-count {
        width: 18px;
        height: 18px;
        position: absolute;
        top: -5px;
        right: 5px;
        z-index: 1;
        display: none;
    }
    header .cart #cart-count.show {
        display: block;
        animation: cart-noti 0.8s ease-in-out;
    }
    @keyframes cart-noti {
    0% {
        opacity: 0;
        transform: rotate(-15deg) scale(1);
    }
    20% {
        opacity: 1;
        
    }
    60% {
        transform: rotate(15deg) scale(1.3);
    }
    80% {
        transform: rotate(-5deg) scale(1.1);
    }
    100% {
        transform: scale(1);
    }
}
    .jumpAnimate {
        animation: jump 0.8s ease-in-out;
    }
    @keyframes jump{
0%{ transform:translateY(0); }
20%{ transform:translateY(0); }
40%{ transform:translateY(-30px); }
50%{ transform:translateY(0); }
60%{ transform:translateY(-15px); }
80%{ transform:translateY(0); }
100%{ transform:translateY(0); }
}
    header .cart #cart-count p {
        color: white;
        background-color: var(--red);
        border-radius: 10px;
        font-size: 14px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: 600;
    }
    @media screen and (max-width: 720px){
        main{
            padding: 0px 15px !important;
        }
        header a > img{
            width: 150px !important;
            /* margin-bottom: 8%; */
        }
        footer .menu-box > .logo-footer{
            width: 170px !important;
            margin-top: 6%;

        }
        header{
            padding: 10px 15px  !important;
            grid-template-columns:auto auto auto auto auto;
            gap: 5px;
        }
        .search-an{
            display: block !important;
        }
        header .search-box{
            position: absolute;
            width: 50%;
            top: 75px;
            left:25%;
            display: none;
        }
        .search-box.ghim-search{
            display: block;
            z-index: 3;
        }
        header .menu {
            margin: 0 !important;
            position: absolute;
            top:59px !important;
            background-color: #202020;
            display: grid;
            grid-template-columns: auto;
            z-index: 2;
            padding: 0 !important;
            width: 45%;
            left: -100%;
        }
        .menu.open{
            left: 0;
        }
        header .menu a svg {
            margin-left: 15%;
            width: 25px;
            margin-right: 10%;
            display: block;
            
        }
        header .menu a:hover{
            background-color: #c34439;
            width: 100%; 
            
        }
        header .menu a:nth-child(4){
            display: block;
        }
        header .menu a{
            display: flex!important;
            padding: 20px 0 !important;
            width: 100%;
            transition: transform 0.5s ease-in-out;
            align-items: center !important;
            
        }
        header .cart{
            padding-right:0px !important;
        }
        header .iconmenu {
            display: block !important;
        }
        header .account{
            background-color: black;
            padding: 1px !important;
            width: 100% !important;
        }
        header .account p{
            display: none;
        }

        footer{
            padding: 10px 15px  !important;
        }
        footer .gallery {
        left:0px;
        }

        footer .gallery > img {
            width: 30% !important;

        }
        footer .gallery img:nth-child(1){
            margin-left: 3%;
        }
        footer .gallery img:nth-child(3),
        footer .gallery img:nth-child(4){
            display: none;
        }
        footer .about{
            margin: 70% auto 0px !important;
        }
        footer .menu-box{
            margin-bottom:5%;
        }
        footer .about >*{
            display: none;
            
        }
        .footer-menu {
            position: absolute !important;
            top: 0;
        }
        footer .footer-menu a{
            display: none;

        }
        footer .iconmenu {
            display: block !important;
            margin-top: 5%;
        }
        footer .logo-footer img{
            width: 89px !important;
            /* height: 34px; */
        }
        footer .more-info ul li:nth-child(1){
            margin-right: 0;
        }
        
        footer .more-info li:nth-child(2),li:nth-child(3){
            display: none !important;
        }
        
        /* Responsive main */
    }

</style>
<body>
    <header>
        <div class="iconmenu" style="display: none;"><img src="<?=$IMAGE_DIR?>/icon/more.png" alt=""></div>
        <a href="<?=$SITE_URL?>/trangchu"><img src="<?=$IMAGE_DIR?>/horizontal-logo-red.png" alt="" class="logo"></a>
        <div class="menu" id="menu">
            <a href="<?=$SITE_URL?>/trangchu"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
            <path d="M12.3335 2H10.6668C10.4828 2 10.3335 2.14924 10.3335 2.33333V2.37261L12.6668 4.23927V2.33333C12.6668 2.14924 12.5176 2 12.3335 2Z" fill="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.16675 6.33333C7.16675 5.87309 7.53988 5.5 8.00008 5.5C8.46035 5.5 8.83341 5.87309 8.83341 6.33333C8.83341 6.7936 8.46035 7.16667 8.00008 7.16667C7.53988 7.16667 7.16675 6.7936 7.16675 6.33333Z" fill="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8335 7.30679L14.3545 7.72359C14.5702 7.89605 14.8848 7.86112 15.0573 7.64545C15.2298 7.42985 15.1948 7.11519 14.9792 6.94265L9.5619 2.60887C8.64889 1.87843 7.3515 1.87843 6.43844 2.60887L1.02117 6.94265C0.805535 7.11519 0.770575 7.42985 0.943082 7.64545C1.11558 7.86112 1.43023 7.89605 1.64586 7.72359L2.16685 7.30679V14.1665H1.33352C1.05737 14.1665 0.833515 14.3903 0.833515 14.6665C0.833515 14.9426 1.05737 15.1665 1.33352 15.1665H14.6668C14.943 15.1665 15.1668 14.9426 15.1668 14.6665C15.1668 14.3903 14.943 14.1665 14.6668 14.1665H13.8335V7.30679ZM6.16685 6.33312C6.16685 5.3206 6.98763 4.49979 8.00016 4.49979C9.0127 4.49979 9.8335 5.3206 9.8335 6.33312C9.8335 7.34565 9.0127 8.16645 8.00016 8.16645C6.98763 8.16645 6.16685 7.34565 6.16685 6.33312ZM8.0331 8.83312C8.47636 8.83312 8.85823 8.83305 9.16409 8.87419C9.49183 8.91825 9.80603 9.01765 10.0608 9.27245C10.3157 9.52732 10.415 9.84145 10.4591 10.1693C10.4976 10.4559 10.5 10.8095 10.5002 11.2178C10.5002 11.2451 10.5002 11.2725 10.5002 11.3002V14.1665H9.50016V11.3331C9.50016 10.8476 9.49909 10.5337 9.46803 10.3025C9.4389 10.0856 9.39183 10.0177 9.35376 9.97959C9.31569 9.94152 9.24769 9.89445 9.03083 9.86525C8.79956 9.83419 8.48569 9.83312 8.00016 9.83312C7.51463 9.83312 7.20076 9.83419 6.96956 9.86525C6.75269 9.89445 6.68469 9.94152 6.64663 9.97959C6.60856 10.0177 6.56149 10.0856 6.53233 10.3025C6.50124 10.5337 6.50018 10.8476 6.50018 11.3331V14.1665H5.50018V11.3002C5.50015 10.857 5.50014 10.4751 5.54125 10.1693C5.58532 9.84145 5.68469 9.52732 5.93952 9.27245C6.19435 9.01765 6.50853 8.91825 6.8363 8.87419C7.1421 8.83305 7.52403 8.83312 7.96729 8.83312H8.0331Z" fill="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.16675 6.33333C7.16675 5.87309 7.53988 5.5 8.00008 5.5C8.46035 5.5 8.83341 5.87309 8.83341 6.33333C8.83341 6.7936 8.46035 7.16667 8.00008 7.16667C7.53988 7.16667 7.16675 6.7936 7.16675 6.33333Z" fill="white"/>
            </svg>Trang chủ</a>
            <a href="<?=$SITE_URL?>/thucdon"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="11" viewBox="0 0 17 11" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.4625 5.4984C13.4625 6.87079 12.9797 8.04259 12.0126 9.00963C11.0442 9.97805 9.87378 10.4623 8.50138 10.4623C7.13452 10.4623 5.96411 9.97943 4.9943 9.00963C4.02588 8.04259 3.5389 6.87079 3.5389 5.4984C3.5389 4.13015 4.0245 2.96389 4.9943 1.9927C5.96688 1.02427 7.13591 0.537295 8.50138 0.537295C9.87378 0.537295 11.0442 1.02289 12.0126 1.9927C12.9783 2.96389 13.4625 4.13015 13.4625 5.4984ZM2.26473 4.58393C2.70052 4.28648 2.91911 3.89773 2.88175 3.00816V0.721296C2.8776 0.401716 2.29793 0.362979 2.26888 0.721296L2.24674 2.57652C2.24536 2.92377 1.7238 2.93484 1.72518 2.57652L1.74731 0.657657C1.7404 0.314558 1.18701 0.279971 1.18009 0.657657C1.18009 1.19029 1.15796 2.04389 1.15796 2.57652C1.18563 2.9127 0.701416 2.95697 0.713867 2.57652L0.736003 0.670108C0.723551 0.4114 0.438558 0.318708 0.244873 0.440453C0.038737 0.571882 0.0802409 0.836123 0.0719401 1.05886L0 3.2475C0.0110677 3.88389 0.178467 4.40131 0.676514 4.62128C0.752604 4.65448 0.857747 4.68077 0.979492 4.69875L0.807943 10.0362C0.798259 10.353 1.05697 10.6117 1.35994 10.6117H1.42912C1.77083 10.6117 2.05998 10.3198 2.05029 9.96422L1.8995 4.69737C2.05859 4.67247 2.19002 4.63511 2.26473 4.58393ZM14.7671 9.87567L14.7588 5.08197C13.0779 4.11078 13.6133 0.368513 15.2956 0.389265C17.3403 0.412784 17.5824 4.60606 15.8241 5.06676L15.9541 9.89504C15.979 10.8081 14.7685 10.8925 14.7671 9.87567ZM11.3901 5.49425C11.3901 6.29389 11.1092 6.97593 10.5434 7.54177C9.97892 8.10484 9.29688 8.38845 8.49723 8.38845C7.70312 8.38845 7.02108 8.10484 6.45662 7.54177C5.89217 6.97593 5.60994 6.29389 5.60994 5.49425C5.60994 4.70014 5.89217 4.01809 6.45662 3.45502C7.02246 2.89195 7.70312 2.60834 8.49723 2.60834C10.1034 2.60972 11.3901 3.88666 11.3901 5.49425ZM12.0666 5.49425C12.0666 4.51199 11.7207 3.67222 11.0248 2.97634C10.3289 2.28046 9.48641 1.93459 8.49723 1.93459C7.51082 1.93459 6.67106 2.28046 5.97933 2.97634C5.28345 3.67222 4.93343 4.51199 4.93343 5.49425C4.93343 6.47927 5.28345 7.31903 5.97933 8.01768C6.67106 8.71495 7.51082 9.06497 8.49723 9.06497C9.48503 9.06497 10.3276 8.71495 11.0248 8.01768C11.7193 7.31765 12.0666 6.47789 12.0666 5.49425Z" fill="white" stroke="white" stroke-width="0.0012288"/>
            </svg>Thực đơn</a>
            <a href="<?=$SITE_URL?>/trangchu"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <g clip-path="url(#clip0_1400_4665)">
            <path d="M8.00051 0C3.58369 0 0.000488281 3.57868 0.000488281 7.99579C0.000488281 12.4171 3.58369 16 8.00047 16C12.4197 16 15.9999 12.4171 15.9999 7.99579C15.9999 3.57868 12.4197 0 8.00051 0ZM8.57059 12.4472C8.38478 12.6126 8.16945 12.6957 7.92552 12.6957C7.67314 12.6957 7.45299 12.614 7.26507 12.4505C7.07686 12.2873 6.98257 12.0587 6.98257 11.7651C6.98257 11.5046 7.07383 11.2853 7.25574 11.1076C7.43765 10.9299 7.6608 10.8411 7.92552 10.8411C8.18601 10.8411 8.40527 10.9299 8.58326 11.1076C8.76095 11.2853 8.85009 11.5045 8.85009 11.7651C8.84976 12.0545 8.75669 12.2819 8.57059 12.4472ZM10.8874 6.70351C10.7446 6.96823 10.5751 7.19649 10.3785 7.38896C10.1824 7.5814 9.82975 7.90484 9.32076 8.35958C9.18042 8.48789 9.06749 8.60052 8.98287 8.69748C8.89825 8.79477 8.83501 8.88357 8.79374 8.9643C8.75217 9.045 8.72027 9.12573 8.69767 9.20642C8.67507 9.28682 8.64106 9.42868 8.59497 9.63134C8.51668 10.0614 8.27063 10.2764 7.85713 10.2764C7.64209 10.2764 7.4614 10.2062 7.31413 10.0656C7.16745 9.92496 7.09428 9.71626 7.09428 9.43921C7.09428 9.09198 7.14818 8.7911 7.2557 8.53664C7.36263 8.28215 7.50567 8.059 7.68336 7.86657C7.86135 7.67413 8.10106 7.44583 8.40312 7.18111C8.66784 6.94952 8.85909 6.77487 8.97683 6.65709C9.09487 6.53905 9.19398 6.40774 9.27438 6.26318C9.35541 6.11831 9.39516 5.96141 9.39516 5.79187C9.39516 5.46091 9.2726 5.18204 9.02626 4.95466C8.78021 4.72729 8.46277 4.61344 8.07398 4.61344C7.61893 4.61344 7.28404 4.72818 7.06901 4.95766C6.85397 5.18715 6.67239 5.52504 6.52331 5.97167C6.38237 6.43909 6.11554 6.67276 5.72311 6.67276C5.49152 6.67276 5.29608 6.59114 5.13677 6.4279C4.97775 6.26466 4.89824 6.0879 4.89824 5.89757C4.89824 5.50485 5.02443 5.10671 5.27652 4.70347C5.5289 4.30022 5.89691 3.96622 6.38085 3.7018C6.8645 3.43708 7.4292 3.30455 8.07398 3.30455C8.67358 3.30455 9.20273 3.41537 9.66169 3.63674C10.1207 3.85778 10.4754 4.15866 10.7257 4.5393C10.9757 4.91965 11.1009 5.33316 11.1009 5.77979C11.1015 6.13069 11.0302 6.43879 10.8874 6.70351Z" fill="white"/>
            </g>
            <defs>
            <clipPath id="clip0_1400_4665">
            <rect width="16" height="16" fill="white"/>
            </clipPath>
            </defs>
            </svg>Giới thiệu</a>
            <a href="<?=$SITE_URL?>/lienhe"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
            <path d="M11.7275 9.14173L11.4048 9.46246C11.4048 9.46246 10.638 10.225 8.54486 8.14368C6.45175 6.06247 7.21857 5.29999 7.21857 5.29999L7.42172 5.09798C7.92223 4.60035 7.96941 3.8014 7.53272 3.21813L6.63955 2.02502C6.09911 1.30311 5.0548 1.20775 4.43536 1.82367L3.32356 2.92916C3.01641 3.23457 2.81058 3.63046 2.83554 4.06964C2.8994 5.19321 3.40775 7.61066 6.24437 10.4312C9.25248 13.4222 12.075 13.541 13.2292 13.4334C13.5943 13.3994 13.9118 13.2135 14.1676 12.9591L15.1739 11.9586C15.8531 11.2832 15.6616 10.1254 14.7925 9.653L13.4392 8.91733C12.8686 8.60715 12.1734 8.69824 11.7275 9.14173Z" fill="white"/>
            </svg>
            Liên hệ</a>
        </div>
        <div class="search-an" style="display: none;">
            <img src="<?=$IMAGE_DIR?>/icon/search.png" alt="">
        </div>
        <form class="search-box" action="<?=$SITE_URL?>/thucdon" method="get">
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path id="Vector" d="M8.02421 0C12.4559 0 16.0484 3.62885 16.0484 8.10526C16.0484 9.94489 15.4417 11.6414 14.4193 13.0017L20.4695 19.1132C20.8968 19.5448 20.8968 20.2446 20.4695 20.6763C20.081 21.0687 19.4732 21.1043 19.0448 20.7833L18.9221 20.6763L12.8717 14.5649C11.525 15.5977 9.84544 16.2105 8.02421 16.2105C3.59256 16.2105 0 12.5817 0 8.10526C0 3.62885 3.59256 0 8.02421 0ZM8.02421 2.21053C4.80119 2.21053 2.18842 4.84969 2.18842 8.10526C2.18842 11.3608 4.80119 14 8.02421 14C11.2472 14 13.86 11.3608 13.86 8.10526C13.86 4.84969 11.2472 2.21053 8.02421 2.21053Z" fill="white"/>
            </svg>                
            <input type="text" placeholder="Tìm món" name="search" <?php if(isset($search) && $search) { ?> value="<?=$search?>"<?php } ?>>
        </form>
        <a href="<?=$SITE_URL?>/giohang" class="cart">
            <svg width="30" height="30" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.851191 0C0.381095 0 0 0.368234 0 0.822466C0 1.2767 0.381095 1.64493 0.851191 1.64493H1.26947C1.6495 1.64493 1.9835 1.88836 2.0879 2.24145L4.78713 11.3699C5.10033 12.4292 6.10232 13.1595 7.24244 13.1595H15.0201C16.0642 13.1595 17.0032 12.5452 17.391 11.6084L19.9008 5.54571C20.348 4.46522 19.5244 3.28986 18.3202 3.28986H4.16842L3.72478 1.78955C3.41157 0.7303 2.40958 0 1.26947 0H0.851191Z" fill="white"/>
                <path d="M7.66075 19.7391C9.07105 19.7391 10.2143 18.6344 10.2143 17.2717C10.2143 15.9091 9.07105 14.8043 7.66075 14.8043C6.25045 14.8043 5.10718 15.9091 5.10718 17.2717C5.10718 18.6344 6.25045 19.7391 7.66075 19.7391Z" fill="white"/>
                <path d="M14.4702 19.7391C15.8805 19.7391 17.0238 18.6344 17.0238 17.2717C17.0238 15.9091 15.8805 14.8043 14.4702 14.8043C13.0599 14.8043 11.9166 15.9091 11.9166 17.2717C11.9166 18.6344 13.0599 19.7391 14.4702 19.7391Z" fill="white"/>
            </svg>
            <div id="cart-count">
                <p></p>
            </div>      
        </a>
        <!-- check nếu đã đăng nhập, chuyển sang trang tài khoảng, chưa đăng nhập, chuyển sang đăng ký -->
        <a class="account" href="<?=$SITE_URL?>/<?php if (isset($_SESSION['LOGGED_IN_USER_ID'])) { ?>taikhoan<?php } else { ?>dangky<?php } ?>">
            <svg width="16" height="20" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.75 7.5C10.9926 7.5 12 8.50735 12 9.75C12 11.4241 11.3115 12.7654 10.1818 13.6722C9.06987 14.5647 7.57962 15 6 15C4.42038 15 2.93013 14.5647 1.81823 13.6722C0.688455 12.7654 0 11.4241 0 9.75C0 8.58051 0.892315 7.61933 2.03328 7.5103L2.24997 7.5H9.75ZM6 0C7.65686 0 9 1.34314 9 3C9 4.65686 7.65686 6 6 6C4.34314 6 3 4.65686 3 3C3 1.34314 4.34314 0 6 0Z" fill="white"/>
            </svg>
                
            <p>
                <?php if (isset($_SESSION['LOGGED_IN_USER_ID'])) {
                require_once "../../dao/user.php";
                $user = get_user_by_id($_SESSION['LOGGED_IN_USER_ID']);
                extract($user);
                if ($Name) {
                    if (strlen($Name) >= 9) {
                        $Name = mb_substr($Name, 0, 6, 'UTF-8')."...";
                    }
                    echo $Name;
                } else {
                    if(strlen($Email) >= 9) {
                        $Email = mb_substr($Email, 0, 6, 'UTF-8')."...";
                    }
                    echo $Email;
                }
                } else { ?>
                    Đăng ký
                <?php } ?>
            </p>
        </a>
    </header>
    <?php require $VIEW_NAME;?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var messageElement = document.querySelector(".global-message");

            if (messageElement) {
                setTimeout(function() {
                messageElement.classList.toggle("hidden");
                }, 4000);
            }
        });
    </script>
    <footer>
        <div class="gallery">
            <img style="margin-top: -100px;" src="<?=$IMAGE_DIR?>/footer-image (1).png" alt="">
            <img style="margin-top: -25px;" src="<?=$IMAGE_DIR?>/footer-image (2).png" alt="">
            <img style="margin-top: -50px;" src="<?=$IMAGE_DIR?>/footer-image (3).png" alt="">
            <img style="margin-top: -75px;" src="<?=$IMAGE_DIR?>/footer-image (4).png" alt="">
            <img style="margin-top: -50px;" src="<?=$IMAGE_DIR?>/footer-image (5).png" alt="">
        </div>
        <div class="about">
            <p style="color: white;">ChickCuisine tự hào cung cấp những món ăn ngon nhất từ khắp nơi trên thế giới đến ngay tận bàn ăn của bạn. Chúng tôi cam kết về chất lượng và sự hài lòng của khách hàng. Hãy theo dõi chúng tôi trên các trang mạng xã hội để cập nhật thông tin mới nhất và các ưu đãi đặc biệt!
            </p>
        </div>
        <div class="menu-box">
            <img class="logo-footer" src="<?=$IMAGE_DIR?>/logo-white.png" alt="">
            <div class="footer-menu">
                <div class="iconmenu" style="display: none;"><img src="<?=$IMAGE_DIR?>/icon/more.png" alt=""></div>
                <a href="<?=$SITE_URL?>/trangchu">Trang chủ</a>
                <a href="<?=$SITE_URL?>/thucdon">Thực đơn</a>
                <a href="<?=$SITE_URL?>/gioithieu">Giới thiệu</a>
            </div>
            <div class="social-icons">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="Vector" d="M22.509 0C23.5364 0 24.5042 0.197133 25.4122 0.591398C26.3202 0.985663 27.1147 1.5233 27.7957 2.2043C28.4767 2.8853 29.0143 3.67981 29.4086 4.58781C29.8029 5.49582 30 6.46356 30 7.49104V22.4731C30 23.5006 29.8029 24.4743 29.4086 25.3943C29.0143 26.3142 28.4767 27.1147 27.7957 27.7957C27.1147 28.4767 26.3202 29.0143 25.4122 29.4086C24.5042 29.8029 23.5364 30 22.509 30H7.49104C6.46356 30 5.49582 29.8029 4.58781 29.4086C3.67981 29.0143 2.8853 28.4767 2.2043 27.7957C1.5233 27.1147 0.985663 26.3142 0.591398 25.3943C0.197133 24.4743 0 23.5006 0 22.4731V7.49104C0 6.46356 0.197133 5.49582 0.591398 4.58781C0.985663 3.67981 1.5233 2.8853 2.2043 2.2043C2.8853 1.5233 3.67981 0.985663 4.58781 0.591398C5.49582 0.197133 6.46356 0 7.49104 0H22.509ZM20.6093 6.55914H17.4552C16.8339 6.55914 16.2605 6.66667 15.7348 6.88172C15.2091 7.09677 14.7551 7.37754 14.3728 7.72401C13.9904 8.07049 13.6858 8.47073 13.4588 8.92473C13.2318 9.37873 13.1183 9.83274 13.1183 10.2867V12.1864H10.3226V15.914H13.1183V23.4409H16.8817V15.914H19.6774V12.1864H16.8817V11.2545C16.8817 10.9438 16.9952 10.7049 17.2222 10.5376C17.4492 10.3704 17.6464 10.2867 17.8136 10.2867H20.6093V6.55914Z" fill="white"/>
                </svg>
                <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="Vector" d="M22.8928 0C23.9202 0 24.888 0.197133 25.796 0.591398C26.704 0.985663 27.4985 1.5233 28.1795 2.2043C28.8605 2.8853 29.3981 3.67981 29.7924 4.58781C30.1867 5.49582 30.3838 6.46356 30.3838 7.49104V22.4731C30.3838 23.5006 30.1867 24.4743 29.7924 25.3943C29.3981 26.3142 28.8605 27.1147 28.1795 27.7957C27.4985 28.4767 26.704 29.0143 25.796 29.4086C24.888 29.8029 23.9202 30 22.8928 30H7.87483C6.84735 30 5.87961 29.8029 4.9716 29.4086C4.0636 29.0143 3.26909 28.4767 2.58809 27.7957C1.90709 27.1147 1.36945 26.3142 0.975187 25.3943C0.580922 24.4743 0.383789 23.5006 0.383789 22.4731V7.49104C0.383789 6.46356 0.580922 5.49582 0.975187 4.58781C1.36945 3.67981 1.90709 2.8853 2.58809 2.2043C3.26909 1.5233 4.0636 0.985663 4.9716 0.591398C5.87961 0.197133 6.84735 0 7.87483 0H22.8928ZM22.5343 11.2903C23.2273 10.8124 23.8366 10.1912 24.3623 9.42652C24.0278 9.56989 23.6873 9.68937 23.3408 9.78495C22.9943 9.88053 22.6419 9.95221 22.2834 10C23.072 9.49821 23.5976 8.8172 23.8605 7.95699C23.1436 8.41099 22.379 8.70968 21.5666 8.85305C20.8497 8.08841 19.9537 7.70609 18.8784 7.70609C18.3766 7.70609 17.9047 7.80167 17.4626 7.99283C17.0206 8.18399 16.6383 8.44683 16.3157 8.78136C15.9931 9.11589 15.7362 9.50418 15.5451 9.94624C15.3539 10.3883 15.2583 10.8602 15.2583 11.362C15.2583 11.5054 15.2643 11.6428 15.2763 11.7742C15.2882 11.9056 15.3061 12.043 15.33 12.1864C13.8246 12.1147 12.4268 11.7384 11.1365 11.0573C9.84616 10.3763 8.74699 9.48626 7.83899 8.3871C7.50446 8.93668 7.33719 9.546 7.33719 10.2151C7.33719 10.8363 7.48654 11.4098 7.78522 11.9355C8.08391 12.4612 8.4722 12.8913 8.9501 13.2258C8.66336 13.2258 8.38259 13.184 8.1078 13.1004C7.83301 13.0167 7.5642 12.9152 7.30135 12.7957V12.8315C7.30135 13.7157 7.58212 14.4863 8.14365 15.1434C8.70518 15.8005 9.4041 16.2246 10.2404 16.4158C9.90589 16.4875 9.58331 16.5233 9.27268 16.5233H8.93218L8.59167 16.4516C8.83062 17.1924 9.25476 17.7957 9.86408 18.2617C10.4734 18.7276 11.1843 18.9725 11.9967 18.9964C11.3754 19.4743 10.6765 19.8566 9.89992 20.1434C9.12334 20.4301 8.31688 20.5735 7.48056 20.5735C7.3133 20.5735 7.15798 20.5675 7.01461 20.5556C6.87124 20.5436 6.72788 20.5257 6.58451 20.5018C7.39693 21.0275 8.27507 21.4337 9.21891 21.7204C10.1628 22.0072 11.1484 22.1505 12.1759 22.1505C13.8485 22.1505 15.33 21.8339 16.6203 21.2007C17.9107 20.5675 18.9919 19.7551 19.8641 18.7634C20.7362 17.7718 21.3993 16.6607 21.8533 15.4301C22.3073 14.1995 22.5343 12.9749 22.5343 11.7563V11.2903Z" fill="white"/>
                </svg>                    
                <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="Vector" d="M23.2768 0C24.3043 0 25.272 0.197133 26.18 0.591398C27.088 0.985663 27.8825 1.5233 28.5635 2.2043C29.2445 2.8853 29.7822 3.67981 30.1764 4.58781C30.5707 5.49582 30.7678 6.46356 30.7678 7.49104V22.4731C30.7678 23.5006 30.5707 24.4743 30.1764 25.3943C29.7822 26.3142 29.2445 27.1147 28.5635 27.7957C27.8825 28.4767 27.088 29.0143 26.18 29.4086C25.272 29.8029 24.3043 30 23.2768 30H8.25886C7.23138 30 6.26364 29.8029 5.35564 29.4086C4.44763 29.0143 3.65313 28.4767 2.97212 27.7957C2.29112 27.1147 1.75349 26.3142 1.35922 25.3943C0.964955 24.4743 0.767822 23.5006 0.767822 22.4731V7.49104C0.767822 6.46356 0.964955 5.49582 1.35922 4.58781C1.75349 3.67981 2.29112 2.8853 2.97212 2.2043C3.65313 1.5233 4.44763 0.985663 5.35564 0.591398C6.26364 0.197133 7.23138 0 8.25886 0H23.2768ZM11.0904 11.2545H7.32696V23.4409H11.0904V11.2545ZM9.2266 10.2867C9.7284 10.2867 10.1645 10.1075 10.5348 9.7491C10.9052 9.39068 11.0904 8.94863 11.0904 8.42294C11.0904 7.89725 10.9052 7.4552 10.5348 7.09677C10.1645 6.73835 9.7284 6.55914 9.2266 6.55914C8.70092 6.55914 8.25289 6.73835 7.88252 7.09677C7.51215 7.4552 7.32696 7.89725 7.32696 8.42294C7.32696 8.94863 7.51215 9.39068 7.88252 9.7491C8.25289 10.1075 8.70092 10.2867 9.2266 10.2867ZM24.2087 16.3799C24.2087 15.5197 23.9697 14.6774 23.4918 13.853C23.0139 13.0287 22.3927 12.4014 21.628 11.9713C20.9351 11.589 20.1286 11.3859 19.2087 11.362C18.2887 11.3381 17.4584 11.4934 16.7176 11.828V11.2545H12.9542V23.4409H16.7176V15.9857L18.2589 15.233C18.45 15.1374 18.7129 15.0896 19.0474 15.0896C19.3819 15.0896 19.6328 15.1493 19.8001 15.2688C19.9435 15.3405 20.0868 15.4958 20.2302 15.7348C20.3736 15.9737 20.4452 16.1888 20.4452 16.3799V23.4409H24.2087V16.3799Z" fill="white"/>
                </svg>                    
                <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="Vector" d="M20.2235 15.0179C20.2235 14.6117 20.1638 14.1697 20.0443 13.6918H21.5497V20.9319C21.5497 21.1231 21.484 21.2784 21.3526 21.3978C21.2211 21.5173 21.0599 21.5771 20.8687 21.5771H9.07659C8.88543 21.5771 8.73011 21.5173 8.61064 21.3978C8.49116 21.2784 8.43143 21.1231 8.43143 20.9319V13.6918H9.90096C9.78148 14.1697 9.72175 14.6117 9.72175 15.0179C9.72175 15.7348 9.85914 16.4158 10.1339 17.0609C10.4087 17.7061 10.7851 18.2617 11.263 18.7276C11.7409 19.1935 12.3024 19.5639 12.9476 19.8387C13.5927 20.1135 14.2737 20.2509 14.9906 20.2509C15.7074 20.2509 16.3884 20.1135 17.0336 19.8387C17.6787 19.5639 18.2343 19.1935 18.7002 18.7276C19.1662 18.2617 19.5366 17.7061 19.8114 17.0609C20.0861 16.4158 20.2235 15.7348 20.2235 15.0179ZM14.9906 18.2796C14.5366 18.2796 14.1065 18.1959 13.7002 18.0287C13.294 17.8614 12.9416 17.6284 12.6429 17.3297C12.3442 17.0311 12.1112 16.6846 11.944 16.2903C11.7767 15.8961 11.6931 15.4719 11.6931 15.0179C11.6931 14.5639 11.7767 14.1338 11.944 13.7276C12.1112 13.3214 12.3442 12.9689 12.6429 12.6703C12.9416 12.3716 13.294 12.1386 13.7002 11.9713C14.1065 11.8041 14.5366 11.7204 14.9906 11.7204C15.4446 11.7204 15.8687 11.8041 16.263 11.9713C16.6572 12.1386 17.0037 12.3716 17.3024 12.6703C17.6011 12.9689 17.8341 13.3214 18.0013 13.7276C18.1686 14.1338 18.2522 14.5639 18.2522 15.0179C18.2522 15.4719 18.1686 15.8961 18.0013 16.2903C17.8341 16.6846 17.6011 17.0311 17.3024 17.3297C17.0037 17.6284 16.6572 17.8614 16.263 18.0287C15.8687 18.1959 15.4446 18.2796 14.9906 18.2796ZM20.8687 8.45878C21.0599 8.45878 21.2211 8.51852 21.3526 8.63799C21.484 8.75747 21.5497 8.91278 21.5497 9.10394V11.0753C21.5497 11.2664 21.484 11.4217 21.3526 11.5412C21.2211 11.6607 21.0599 11.7204 20.8687 11.7204H18.8974C18.7062 11.7204 18.5509 11.6607 18.4314 11.5412C18.312 11.4217 18.2522 11.2664 18.2522 11.0753V9.10394C18.2522 8.91278 18.312 8.75747 18.4314 8.63799C18.5509 8.51852 18.7062 8.45878 18.8974 8.45878H20.8687ZM22.625 0C23.6525 0 24.6262 0.197133 25.5461 0.591398C26.4661 0.985663 27.2666 1.5233 27.9476 2.2043C28.6286 2.8853 29.1662 3.67981 29.5605 4.58781C29.9547 5.49582 30.1519 6.46356 30.1519 7.49104V22.4731C30.1519 23.5006 29.9547 24.4743 29.5605 25.3943C29.1662 26.3142 28.6286 27.1147 27.9476 27.7957C27.2666 28.4767 26.4661 29.0143 25.5461 29.4086C24.6262 29.8029 23.6525 30 22.625 30H7.64289C6.61542 30 5.64767 29.8029 4.73967 29.4086C3.83166 29.0143 3.03716 28.4767 2.35616 27.7957C1.67515 27.1147 1.13752 26.3142 0.743253 25.3943C0.348988 24.4743 0.151855 23.5006 0.151855 22.4731V7.49104C0.151855 6.46356 0.348988 5.49582 0.743253 4.58781C1.13752 3.67981 1.67515 2.8853 2.35616 2.2043C3.03716 1.5233 3.83166 0.985663 4.73967 0.591398C5.64767 0.197133 6.61542 0 7.64289 0H22.625ZM23.521 8.45878C23.521 7.9092 23.3299 7.44325 22.9476 7.06093C22.5652 6.67861 22.0993 6.48745 21.5497 6.48745H8.43143C7.88184 6.48745 7.41589 6.67861 7.03358 7.06093C6.65126 7.44325 6.4601 7.9092 6.4601 8.45878V21.5771C6.4601 22.1266 6.65126 22.5926 7.03358 22.9749C7.41589 23.3572 7.88184 23.5484 8.43143 23.5484H21.5497C22.0993 23.5484 22.5652 23.3572 22.9476 22.9749C23.3299 22.5926 23.521 22.1266 23.521 21.5771V8.45878Z" fill="white"/>
                </svg>
            </div>
            <div class="line footer-line"></div>
            <div class="more-info">
                <ul>
                    <li>Mở cửa 6h-23h mỗi ngày</li>
                    <li>Tp. Hồ Chí Minh</li>
                    <li>Hotline: 0903252xxx</li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>
<script>
    document.querySelector('.iconmenu').addEventListener('click', function() {
    document.querySelector('.menu').classList.toggle('open');
    }); 
    document.querySelector('.footer-menu .iconmenu').addEventListener('click', function() {
    document.querySelector('.menu').classList.toggle('open');
    });
    document.querySelector('.search-an').addEventListener('click', function() {
    document.querySelector('.search-box').classList.toggle('ghim-search');
    });
</script>