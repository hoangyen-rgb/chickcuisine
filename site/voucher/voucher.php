<style>
  ul{
    padding: 0 5%;
  }
  main{
    padding: 0px 100px;
    font-family: Segoe UI;
  }
  main .menucon ul{
    width: 100%;
    display: flex;
  }

  main ul > li:nth-child(2){
    margin: 0 24%;
    
  }
  main ul > li img {
    filter: invert(70%);
    margin-right: 5%;
  }
  main ul > li {
    display: flex;
    list-style: none;
    width: 100%;
    color: #4E4E4E;
    font-size: 20px;
    font-weight: 600;
    align-items: center;
    justify-content: center;
    padding: 1%;
    
  }
  .menucon {
    border-radius: 10px;
    border: 1px solid #BDBDBD;
    background: #FFF;
    box-shadow: 4px 4px 4px 0px rgba(0, 0, 0, 0.25);
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
  }
  main ul li:nth-child(2){
    width: 120%;
  }
  main ul li a {
    text-decoration: none;
    color: #4E4E4E;
    
    
  }
  .menucon ul li.ghim {
    background: #C34439;
    border-radius: 5px;
  }
  
  .menucon ul li.ghim img {
    filter: invert(0);
  }
  
  .menucon ul li.ghim a {
    color: #FFF;
  }
  

  .mrt-3 {
    margin-top: 3%;
  }
  .score-your {
  display: flex;
  justify-content: flex-end;
  color: #4E4E4E;
  font-size: 24px;
  font-style: normal;
  font-weight: 600;
  align-items: center;
  padding: 2% 0 2% 0;
}
/* .score-your  p{
  margin-top: 100%;
} */
.score-your p:nth-child(2) {
  align-self: flex-end;
  display: flex;
  margin-left: 2%;
  justify-content: flex-end;
  text-align: right;
}
.score-your img{
  margin-left: 0.5%;
}
.title{
  color: #C34439;
  font-size: 24px;
  font-style: normal;
  font-weight: 600;
  display: grid;
  grid-template-columns: 10% auto;
  align-items: center;
}
.title p:nth-child(2){
  height: 1px;
  background: #BDBDBD;
  
}
.voucher{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  grid-row-gap: 20px;
}
.discount-frame{
  position: relative;
  color: #4E4E4E;
  font-size: 16px;
  font-weight: 600;
}
.content-voucher > p{
  position: absolute;
  left: 12%;
}
.content-voucher> p:nth-child(1) {
  top: 5%;
}
.content-voucher> p:nth-child(2){
  font-size: 44px;
  top:20%;
}
.content-voucher> p:nth-child(3){
  font-weight: 400;
  bottom: 27%;
}
.content-voucher> p:nth-child(4){
  font-weight: 400;
  bottom: 7%;
  color: #BDBDBD
}
.content-voucher> p:nth-child(5){
  font-size: 24px;
  bottom: 80%;
  left: 74%;
  color: #C34439;
}
.content-voucher> p:nth-child(6){
  bottom: 40%;
  left: 70%;
}
.content-voucher> p:nth-child(6) input{
  width: 66px;
  height: 38px;
  flex-shrink: 0;
  border-radius: 5px;
  background: #C34439;
  color: #FFF;
  font-size: 24px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
  border: 0;
  cursor: pointer;
  }
.xem-them{
  color: #C34439;
  font-size: 20px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
  text-align: right;
  padding: 2% 0 2% 0;
}
.xem-them img{
  width: 18px;
  height: 15px;
}
@media screen and (max-width: 720px) {
  main{
    padding: 0 25px !important;
  }
  .menucon{
    box-shadow: none;
    border: none;
  }
  .menucon ul{
    padding: 0;
  }
  .menucon ul li:nth-child(1){
    width: 45%;
  }
  .menucon ul li:nth-child(2), li:nth-child(3){
    display: none;
  }
  .title p:nth-child(1){
    font-size: 20px;
  }
  .responsive-score{
    position: relative;
  }
  .score-your{
    position: absolute;
    right: 0;
    top: 20%;
  }
  .score-your p:nth-child(1){
    display: none;
  }
  .voucher{
  justify-content: none;
  justify-content: center;
  }
  .title{
    grid-template-columns: 20% auto;
  }
  .xem-them{
  margin-top: 8%;
  }
}
</style>
<main>
  <div class="responsive-score">
    <div class="menucon">
    <ul>
        <li>
            <img src="<?=$IMAGE_DIR?>/icon/Vector.png" alt="">
            <a href="#">Giỏ hàng</a>
        </li>
        <li>
            <img src="<?=$IMAGE_DIR?>/icon/Vector.png">
            <a href="#">Kho mã giảm giá</a>
        </li>
        <li>
            <img src="<?=$IMAGE_DIR?>/icon/Vector.png">
            <a href="#">Sổ địa chỉ</a>
        </li>
    </ul>
  </div>
  <div class="score-your">
      <p>Điểm của bạn:</p>
      <p style="color: #C34439;">1000</p>
      <p><img src="<?=$IMAGE_DIR?>/icon/Group 20 1.png"></p>
  </div>
  </div>
<div class="content">
    <div class="title">
        <p>Của Bạn</p>
        <p></p>
    </div>
    <div class="voucher mrt-3">
        <div class="discount-frame">
            <img src="<?=$IMAGE_DIR?>/voucher.png" width="100%">
            <div class="content-voucher">
                <p>Hết hạn: 27/10/2023</p>
                <p>25.000%</p>
                <p>Tối thiểu: 70,000 vnđ</p>
                <p><a>Ấn để xem chi tiết</a></p>
            </div>
        </div>
        <div class="discount-frame">
            <img src="<?=$IMAGE_DIR?>/voucher.png" width="100%">
            <div class="content-voucher">
                <p>Hết hạn: 27/10/2023</p>
                <p>25.000%</p>
                <p>Tối thiểu: 70,000 vnđ</p>
                <p><a>Ấn để xem chi tiết</a></p>
            </div>
        </div>
        <div class="discount-frame">
            <img src="<?=$IMAGE_DIR?>/voucher.png" width="100%">
            <div class="content-voucher">
                <p>Hết hạn: 27/10/2023</p>
                <p>25.000%</p>
                <p>Tối thiểu: 70,000 vnđ</p>
                <p><a>Ấn để xem chi tiết</a></p>
            </div>
        </div>
    </div>
    <div class="xem-them">
        <p>Xem thêm <img src="<?=$IMAGE_DIR?>/icon/Group 20 1.png" alt=""></p>
    </div>
</div>
<!-- content-đổi điểm -->
<div class="content">
    <div class="title">
        <p>Của Bạn</p>
        <p></p>
    </div>
    <div class="voucher mrt-3">
        <div class="discount-frame">
            <img src="<?=$IMAGE_DIR?>/voucher.png" width="100%">
            <div class="content-voucher">
                <p>Hết hạn: 27/10/2023</p>
                <p>25.000%</p>
                <p>Tối thiểu: 70,000 vnđ</p>
                <p><a>Ấn để xem chi tiết</a></p>
                <p>1000 <img src="<?=$IMAGE_DIR?>/icon/Group 20 1.png"></p>
                <p><input type="button" value="Đổi">
            </div>
        </div>
        <div class="discount-frame">
            <img src="<?=$IMAGE_DIR?>/voucher.png" width="100%">
            <div class="content-voucher">
                <p>Hết hạn: 27/10/2023</p>
                <p>25.000%</p>
                <p>Tối thiểu: 70,000 vnđ</p>
                <p><a>Ấn để xem chi tiết</a></p>
                <p>1000 <img src="<?=$IMAGE_DIR?>/icon/Group 20 1.png"></p>
                <p><input type="button" value="Đổi">
            </div>
        </div>
        <div class="discount-frame">
            <img src="<?=$IMAGE_DIR?>/voucher.png" width="100%">
            <div class="content-voucher">
                <p>Hết hạn: 27/10/2023</p>
                <p>25.000%</p>
                <p>Tối thiểu: 70,000 vnđ</p>
                <p><a>Ấn để xem chi tiết</a></p>
                <p>1000 <img src="<?=$IMAGE_DIR?>/icon/Group 20 1.png"></p>
                <p><input type="button" value="Đổi">
            </div>
        </div>
        <div class="discount-frame">
            <img src="<?=$IMAGE_DIR?>/voucher.png" width="100%">
            <div class="content-voucher">
                <p>Hết hạn: 27/10/2023</p>
                <p>25.000%</p>
                <p>Tối thiểu: 70,000 vnđ</p>
                <p><a>Ấn để xem chi tiết</a></p>
                <p>1000 <img src="<?=$IMAGE_DIR?>/icon/Group 20 1.png"></p>
                <p><input type="button" value="Đổi">
            </div>
        </div>
        <div class="discount-frame">
            <img src="<?=$IMAGE_DIR?>/voucher.png" width="100%">
            <div class="content-voucher">
                <p>Hết hạn: 27/10/2023</p>
                <p>25.000%</p>
                <p>Tối thiểu: 70,000 vnđ</p>
                <p><a>Ấn để xem chi tiết</a></p>
                <p>1000 <img src="<?=$IMAGE_DIR?>/icon/Group 20 1.png"></p>
                <p><input type="button" value="Đổi">
            </div>
        </div>
        <div class="discount-frame">
            <img src="<?=$IMAGE_DIR?>/voucher.png" width="100%">
            <div class="content-voucher">
                <p>Hết hạn: 27/10/2023</p>
                <p>25.000%</p>
                <p>Tối thiểu: 70,000 vnđ</p>
                <p><a>Ấn để xem chi tiết</a></p>
                <p>1000 <img src="<?=$IMAGE_DIR?>/icon/Group 20 1.png"></p>
                <p><input type="button" value="Đổi">
            </div>
        </div>
        
      
        
    </div>
    <div class="xem-them">
        <p>Xem thêm <img src="<?=$IMAGE_DIR?>/icon/Group 20 1.png" alt=""></p>
    </div>
</div> 
</main>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const firstItem = document.querySelector('.menucon ul li:first-child');
      firstItem.classList.add('ghim');
    });
    const menuItems = document.querySelectorAll('.menucon ul li');
    menuItems.forEach(item => {
      item.addEventListener('click', function() {
        menuItems.forEach(item => item.classList.remove('ghim'));
        this.classList.add('ghim');
      });
    });
  </script>