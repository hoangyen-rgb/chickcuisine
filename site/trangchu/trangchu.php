<!-- css banner -->
<style>
    .banner{
        position: relative;
        width: 100%;
        height: 100%;
    }
    .button {
        top: 66%;
        left: 79.5%;
        position: absolute;
        text-align: center;
        background-color: var(--red);
        padding: 15px;
        z-index: 1;
        border-radius: 5px;
        width: 170px;
    }
    .button:hover {
        transform: scale(1.1);
        transition: 0.3s;
        cursor: pointer;
    }
    .button>* {
        display: inline-block;
        vertical-align: top;
        margin: 0px 5px;
        color: white;
    }

</style>
<!-- css trang -->
<style>
    .view-more {
        display: flex;
        width: 75%;
        margin: 10px auto;
        justify-content: end;
        padding: 5px;
    }
    .view-more>p {
        color: var(--red);
        font-size: 15px;
        font-weight: bold;
        width: fit-content;
        margin-right: 10px;
    }
    .view-more>img {
        width: 20px;
        height: fit-content;
    }
    .banner {
        position: relative;
        height: 500px;
    }
    .banner img {
        width: 100%;
        height: 100%;
        border-radius: 0px 0px 10px 10px;
    }
    .special-text {
        font-family: "BR Sans Serif";
        position: absolute;
        bottom: 100px;
        left: 50%;
        transform: translate(-50%, 0px);
        z-index: 1;
        color: white;
        font-size: 35px;
        font-weight: bold;
        text-shadow: 0px 0px 5px black;
    }
    .banner>.order-button {
        bottom: 50px;
        left: 50%;
        transform: translate(-50%, 0px);
        position: absolute;
        color: white;
        border: 1px solid white;
        padding: 5px 10px;
        border-radius: 5px;
        text-shadow: 0px 0px 5px black;
        cursor: pointer;
    }
    .hot-categories {
        background-color: white;
        border-radius: 10px;
        border: 1px solid var(--gray);
        margin: 50px auto;
        width: 1100px;
        display: flex;
        justify-content: space-around;
        box-shadow: 2px 2px 2px var(--gray);
    }
    .hot-categories p {
        padding: 8px 10px;
        margin: 8px;
        border-radius: 5px;
    }
    .hot-categories .selected-hot-categories {
        background-color: var(--red);
    }
    .container {
        padding: 0px 0px;
        margin: 0;
    }
    .title {
        text-align: center;
        color: var(--red);
        font-weight: bold;
        font-size: 25px;
    }
    .div-description {
        text-align: center;
        color: var(--lightblack);
        font-size: 20px;
    }
    .products {
        margin: 20px 0px;
    }
    .flex {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }
    .product {
        padding: 10px;
        margin: 20px;
        border: 1px solid var(--gray);
        border-radius: 5px;
        width: 250px;
        display: grid;
        position: relative;
        gap: 10px 0px;
        grid-template-columns: auto auto;
        box-shadow: 2px 2px 5px var(--gray);
        cursor: pointer;
    }
    .product-image {
        margin: 20px 0px 10px;
        width: 100px;
        justify-self: center;
        grid-column: 1 / 3;
        grid-row: 1 / 2;
    }
    .product-image:hover {
        transform: scale(1.1);
        transition: 0.5s;
    }
    .product-rating {
        font-size: 20px;
        color: gold;
        text-shadow: 1px 1px 1px orange;
        grid-column: 1 / 3;
        grid-row: 2 / 3;
    }
    .product-name {
        font-size: 20px;
        color: var(--black);
        font-weight: 600;
        grid-column: 1 / 3;
        grid-row: 3 / 4;
    }
    .product-short-description {
        font-size: 15px;
        color: var(--lightblack);
        grid-column: 1 / 3;
        grid-row: 4 / 5;
    }
    .product-original-price {
        font-size: 18px;
        text-decoration: line-through;
        color: #BDBDBD;
        grid-column: 1 / 3;
        grid-row: 5 / 6;
    }
    .product-price {
        font-size: 20px;
        color: var(--black);
        grid-row: 6 / 7;
        grid-column: 1 / 2;
        margin: auto 0px;
        font-weight: 600;
    }
    .product-buttons {
        text-align: right;
        grid-row: 6 / 7;
        grid-column: 2 / 3;
        margin: auto 0px;
    }
    .product-buttons img {
        display: inline-block;
        padding: 5px;
        width: 30px;
        border-radius: 5px;
    }
    .product-buttons .product-button-cart {
        background-color: var(--red);
    }
    .product-buttons .product-button-share {
        background-color: var(--black);
    }
    .product-discount-tag {
        position: absolute;
        right: 20px;
        top: -20px;
    }
    .discount-tag {
        position: relative;
    }
    .discount-percentage {
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-weight: bold;
    }
    .categories {
        width: 1000px;
        margin: auto;
    }
    
</style>
<!-- css monanhot -->
<style>
    .monanhot{
        position: relative;
    }
    .monanhot-tieude{
        text-align: center;
        padding: 10px;
        padding-top: 10%;
    }
    .monanhot-tieude >h2{
        color: #c34439;
    }
    .monanhot-tieude >p{
        display: block;
        padding: 10px;
        width: 50%;
        margin-block-start: 0.83em;
        margin-block-end: 0.83em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        margin: auto;
}
</style>
<!-- css item sanpham -->
<style>
    .monanhot-sanpham{
        padding: 3% 8%;
        display: grid;
        grid-template-columns: auto auto auto auto;
        gap: 50px; 
        justify-content: center;
    }
    .monanhot-sanpham-item{
        position: relative;
        padding: 5%;
        border-radius: 10px;
        border: 1px solid #4e4e4e16;
        background-color: rgb(245, 245, 245)
    }
    .monanhot-sanpham-item > .image{
        width: 100%;
    }
    .monanhot-sanpham-item > h3{
        padding-top: 5%;
        text-align: center;
        font-size: 150%;
        color: #202020;
    }
    .monanhot-sanpham-item > .danhgia{
        width: 30%;
        margin: 0 35%;
    }
    .monanhot-sanpham-item > p{
        text-align: center;
        font-size: small;
        padding: 7% 0;
    }
    .monanhot-sanpham-item > .price{
        color: #c34439;
        font-weight: 700;
        padding-bottom: 15%;
    }
    .monanhot-sanpham-item-button > button{
        background-color: #c34439;
        border: none;
        color: #ffffff;
        font-weight: 600;
        padding: 5%;
        border-radius: 5px;
        width: 60%;
        cursor: pointer;
        transition: transform 0.5s;
    }
    .monanhot-sanpham-item-button > button:hover {
        transform: scale(1.1); 
    }
    .monanhot-sanpham-item-button > .cart{
        width: 17%;
        margin-left: 10%;
        cursor: pointer;
        transition: transform 0.5s;
    }
    .monanhot-sanpham-item-button > .share{
        width: 17%;
        margin-left: 2%;
        cursor: pointer;
        transition: transform 0.5s;
    }
    .monanhot-sanpham-item-button >.cart:hover {
        transform: scale(1.1); 
    }
    .monanhot-sanpham-item-button >.share:hover {
        transform: scale(1.1); 
    }
    .monanhot-sanpham-item-button{
        display: flex;
    }
    .monanhot > img{
        width: 10%;
        margin-right: 0;
        cursor: pointer;
    }
    .monanhot-sanpham-item >.sale >img{
        position: absolute;
        z-index: 1;
        width: 25%;
        margin-left: 60%;
        margin-top: -10%;
    }
</style>
<!-- css mucuathich -->
<style>
        .category{
            display: grid;
            justify-content: center;
            align-items: center;
            grid-template-columns: auto auto auto;
            gap: 3%;
        }
        .category-product{
            background-color: #c34439;
            border: 0px solid #4E4E4E;
            border-radius: 10px;
            color: #faf9f8;
            width: 300px;
            height: 100px;
            display: flex;
            align-items: center;
            margin: 10px; 
        }
        .name{
            flex-direction: column;
        }
        .arrow{
            width: 2%;
            margin: 7%;
            margin-right: 10%;
        }
        .category-product-name{
            font-size: 25px;
            color: #faf9f8;
        }
        .category-product-name-count{
            color: #faf9f8;
        }
</style>
<div class="banner">
    <img src="/chickcuisine/content/image/banner2.png" alt>
    <div class="button">
        <p>Khám phá ngay !</p>
    </div>
</div>

<div class="monanhot">
    <div class="monanhot-tieude">
        <h2>Món Ăn Bán Chạy Nhất</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolo magna aliqu</p>
    </div>

    <div class="monanhot-sanpham">
        <div class="monanhot-sanpham-item">
            <img class="/chickcuisine/content/image" src="/chickcuisine/content/image/garan.png" alt>
            <h3>Gà rán</h3>
            <img class="danhgia" src="/chickcuisine/content/image/danhgia.png" alt>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit
                            sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqu</p>
            <h3 class="price">39.000 vnđ</h3>
            <div class="monanhot-sanpham-item-button">
                <button>Mua ngay</button>
                <img class="cart" src="/chickcuisine/content/image/cart.png" alt="cart">
                <img class="share" src="/chickcuisine/content/image/share.png" alt="share">
            </div>
        </div>

        <div class="monanhot-sanpham-item">
            <img class="/chickcuisine/content/image" src="/chickcuisine/content/image/garan.png" alt>
            <h3>Gà rán</h3>
            <img class="danhgia" src="/chickcuisine/content/image/danhgia.png" alt>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit
                            sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqu</p>
            <h3 class="price">39.000 vnđ</h3>
            <div class="monanhot-sanpham-item-button">
                <button>Mua ngay</button>
                <img class="cart" src="/chickcuisine/content/image/cart.png" alt="cart">
                <img class="share" src="/chickcuisine/content/image/share.png" alt="share">
            </div>
        </div>

        <div class="monanhot-sanpham-item">
            <img class="/chickcuisine/content/image" src="/chickcuisine/content/image/garan.png" alt>
            <h3>Gà rán</h3>
            <img class="danhgia" src="/chickcuisine/content/image/danhgia.png" alt>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit
                            sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqu</p>
            <h3 class="price">39.000 vnđ</h3>
            <div class="monanhot-sanpham-item-button">
                <button>Mua ngay</button>
                <img class="cart" src="/chickcuisine/content/image/cart.png" alt="cart">
                <img class="share" src="/chickcuisine/content/image/share.png" alt="share">
            </div>
        </div>

        <div class="monanhot-sanpham-item">
            <img class="/chickcuisine/content/image" src="/chickcuisine/content/image/garan.png" alt>
            <h3>Gà rán</h3>
            <img class="danhgia" src="/chickcuisine/content/image/danhgia.png" alt>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit
                            sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqu</p>
            <h3 class="price">39.000 vnđ</h3>
            <div class="monanhot-sanpham-item-button">
                <button>Mua ngay</button>
                <img class="cart" src="/chickcuisine/content/image/cart.png" alt="cart">
                <img class="share" src="/chickcuisine/content/image/share.png" alt="share">
            </div>
        </div>

        <div class="monanhot-sanpham-item">
            <img class="/chickcuisine/content/image" src="/chickcuisine/content/image/garan.png" alt>
            <h3>Gà rán</h3>
            <img class="danhgia" src="/chickcuisine/content/image/danhgia.png" alt>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit
                            sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqu</p>
            <h3 class="price">39.000 vnđ</h3>
            <div class="monanhot-sanpham-item-button">
                <button>Mua ngay</button>
                <img class="cart" src="/chickcuisine/content/image/cart.png" alt="cart">
                <img class="share" src="/chickcuisine/content/image/share.png" alt="share">
            </div>
        </div>

        <div class="monanhot-sanpham-item">
            <img class="/chickcuisine/content/image" src="/chickcuisine/content/image/garan.png" alt>
            <h3>Gà rán</h3>
            <img class="danhgia" src="/chickcuisine/content/image/danhgia.png" alt>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit
                            sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqu</p>
            <h3 class="price">39.000 vnđ</h3>
            <div class="monanhot-sanpham-item-button">
                <button>Mua ngay</button>
                <img class="cart" src="/chickcuisine/content/image/cart.png" alt="cart">
                <img class="share" src="/chickcuisine/content/image/share.png" alt="share">
            </div>
        </div>

        <div class="monanhot-sanpham-item">
            <img class="/chickcuisine/content/image" src="/chickcuisine/content/image/garan.png" alt>
            <h3>Gà rán</h3>
            <img class="danhgia" src="/chickcuisine/content/image/danhgia.png" alt>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit
                            sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqu</p>
            <h3 class="price">39.000 vnđ</h3>
            <div class="monanhot-sanpham-item-button">
                <button>Mua ngay</button>
                <img class="cart" src="/chickcuisine/content/image/cart.png" alt="cart">
                <img class="share" src="/chickcuisine/content/image/share.png" alt="share">
            </div>
        </div>

        <div class="monanhot-sanpham-item">
            <img class="/chickcuisine/content/image" src="/chickcuisine/content/image/garan.png" alt>
            <h3>Gà rán</h3>
            <img class="danhgia" src="/chickcuisine/content/image/danhgia.png" alt>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit
                            sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqu</p>
            <h3 class="price">39.000 vnđ</h3>
            <div class="monanhot-sanpham-item-button">
                <button>Mua ngay</button>
                <img class="cart" src="/chickcuisine/content/image/cart.png" alt="cart">
                <img class="share" src="/chickcuisine/content/image/share.png" alt="share">
            </div>
        </div>

    </div>
    <img class="view-more" src="/chickcuisine/content/image/xemthem.png" alt>
</div>

<hr>

<div class="monanhot">
    <div class="monanhot-tieude">
        <h2>Sự Kiện Giảm Giá</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqu</p>
    </div>

    <div class="monanhot-sanpham">
        <div class="monanhot-sanpham-item">
            <div class="sale"><img src="/chickcuisine/content/image/sale.png" alt></div>
            <img class="/chickcuisine/content/image" src="/chickcuisine/content/image/garan.png" alt>
            <h3>Gà rán</h3>
            <img class="danhgia" src="/chickcuisine/content/image/danhgia.png" alt>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit
                            sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqu</p>
            <h3 class="price">39.000 vnđ</h3>
            <div class="monanhot-sanpham-item-button">
                <button>Mua ngay</button>
                <img class="cart" src="/chickcuisine/content/image/cart.png" alt="cart">
                <img class="share" src="/chickcuisine/content/image/share.png" alt="share">
            </div>
        </div>

        <div class="monanhot-sanpham-item">
            <div class="sale"><img src="/chickcuisine/content/image/sale.png" alt></div>
            <img class="/chickcuisine/content/image" src="/chickcuisine/content/image/garan.png" alt>
            <h3>Gà rán</h3>
            <img class="danhgia" src="/chickcuisine/content/image/danhgia.png" alt>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit
                            sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqu</p>
            <h3 class="price">39.000 vnđ</h3>
            <div class="monanhot-sanpham-item-button">
                <button>Mua ngay</button>
                <img class="cart" src="/chickcuisine/content/image/cart.png" alt="cart">
                <img class="share" src="/chickcuisine/content/image/share.png" alt="share">
            </div>
        </div>

        <div class="monanhot-sanpham-item">
            <div class="sale"><img src="/chickcuisine/content/image/sale.png" alt></div>
            <img class="/chickcuisine/content/image" src="/chickcuisine/content/image/garan.png" alt>
            <h3>Gà rán</h3>
            <img class="danhgia" src="/chickcuisine/content/image/danhgia.png" alt>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit
                            sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqu</p>
            <h3 class="price">39.000 vnđ</h3>
            <div class="monanhot-sanpham-item-button">
                <button>Mua ngay</button>
                <img class="cart" src="/chickcuisine/content/image/cart.png" alt="cart">
                <img class="share" src="/chickcuisine/content/image/share.png" alt="share">
            </div>
        </div>

        <div class="monanhot-sanpham-item">
            <div class="sale"><img src="/chickcuisine/content/image/sale.png" alt></div>
            <img class="/chickcuisine/content/image" src="/chickcuisine/content/image/garan.png" alt>
            <h3>Gà rán</h3>
            <img class="danhgia" src="/chickcuisine/content/image/danhgia.png" alt>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit
                            sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqu</p><h2></h2>
            <h3 class="price">39.000 vnđ</h3>
            <div class="monanhot-sanpham-item-button">
                <button>Mua ngay</button>
                <img class="cart" src="/chickcuisine/content/image/cart.png" alt="cart">
                <img class="share" src="/chickcuisine/content/image/share.png" alt="share">
            </div>
        </div>
    </div>
    <img class="view-more" src="/chickcuisine/content/image/xemthem.png" alt>
    <hr>
    <div class="mucuathich">
        <div class="monanhot-tieude">
            <h2>Mục Ưa Thích</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit
                            sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqu</p>
        </div>

        <div class="category">

            <div class="category-product">
                <img class="arrow" src="/chickcuisine/content/image/Arrow 1.png" alt>
                <div class="name">
                    <div class="category-product-name">
                                    Cơm
                    </div>
                    <div class="category-product-name-count">
                                    (8 món)
                    </div>
                </div>
            </div>

            <div class="category-product">
                <img class="arrow" src="/chickcuisine/content/image/Arrow 1.png" alt>
                <div class="name">
                    <div class="category-product-name">
                                    Burger
                    </div>
                    <div class="category-product-name-count">
                                    (8 món)
                    </div>
                </div>
            </div>

            <div class="category-product">
                <img class="arrow" src="/chickcuisine/content/image/Arrow 1.png" alt>
                <div class="name">
                    <div class="category-product-name">
                                    Gà Rán
                    </div>
                    <div class="category-product-name-count">
                                    (8 món)
                    </div>
                </div>
            </div>

            <div class="category-product">
                <img class="arrow" src="/chickcuisine/content/image/Arrow 1.png" alt>
                <div class="name">
                    <div class="category-product-name">
                                    Mì
                    </div>
                    <div class="category-product-name-count">
                                    (8 món)
                    </div>
                </div>
            </div>

            <div class="category-product">
                <img class="arrow" src="/chickcuisine/content/image/Arrow 1.png" alt>
                <div class="name">
                    <div class="category-product-name">
                                    Pizza
                    </div>
                    <div class="category-product-name-count">
                                    (8 món)
                    </div>
                </div>
            </div>

            <div class="category-product">
                <img class="arrow" src="/chickcuisine/content/image/Arrow 1.png" alt>
                <div class="name">
                    <div class="category-product-name">
                                    Khoai tây chiên
                    </div>
                    <div class="category-product-name-count">
                                    (8 món)
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>