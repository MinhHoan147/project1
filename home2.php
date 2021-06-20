
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <script type = "text/javascript" >
         function validateForm()  {
            alert("All datas are valid!, send it to the server!")
            return true;
         }
      </script>
    
</head>

<body>
       <?php
        session_start();
        //tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
        //nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
        if (!isset($_SESSION['username'])) {
            header('Location: login.html');
         }
       ?>

    <div id="main">
         <div id="header">
             <ul id="nav">
                 <li><img style="width: 160px;  padding-bottom: 11px;" src="http://demopurevietnamtravel.webtravel.vn/files/files/Logo%20cty/image-(1).png" alt="logo"></li>
                 <li><a href="#">Trang chủ</a></li>
                 <li><a href="about.html">Giới thiệu</a></li>
                 <li>
                    <a href="#">
                        Ẩm Thực
                        <i class= "font1 ti-angle-down"></i>
                    </a>
                    <ul class="subnav">
                        <li><a href="atmb.html">Miền Bắc</a></li>
                        <li><a href="atmtrung.html">Miền Trung</a></li>
                        <li><a href="atmn.html">Miền Nam</a></li>
                    </ul>
                 </li>
                 <li>
                     <a href="#">
                         Khám phá 
                         <i class= "font1 ti-angle-down"></i>
                     </a>
                     <ul class="subnav">
                         <li><a href="mb1.html">Miền Bắc</a></li>
                         <li><a href="mtrung1.html">Miền Trung</a></li>
                         <li><a href="mn.html">Miền Nam</a></li>
                     </ul>
                </li>
            </ul>
             
            <div id="mobile-menu" class="mobile-menu-btn">
                 <i class="mobile-menu-icon ti-menu"></i>
             </div>

         </div>

        <!-- slider part -->
         <div id="slider" style="background: url('https://cdn.getyourguide.com/img/location/58c7ac81a9694.jpeg/88.jpg') top center / cover no-repeat;" >

         </div>


         <div id="content">
             <!-- about-section -->
             <div class="about-section">
            <div class="content-section">
                <h2 class="section-heading">Việt Nam</h2>
                <p class="section-sub-heading">We love this country</p>
                <p class="about-text">
                  Có người nói: "Bạn chẳng cần đi du lịch đâu xa cho tốn kém, bạn chỉ cần đi hết đất nước Việt Nam".

                  Khám phá và trải nghiệm được tất cả những gì ở trên mảnh đất hình chữ S là bạn đã có tương đối “vốn” trong tâm thức của mình! Về mặt nào đó, tôi cho nhận xét của họ là có lý. Nếu bạn cùng Pure VietNam Travel khám phá đất nước, con người Việt Nam hẳn bạn sẽ có dịp so sánh với những điểm bạn từng đặt chân tới ở những quốc gia khác trên thế giới.
                  Việt Nam thân thiện chân chất không chỉ với người trong nước mà ngay bạn bè quốc tế cũng phải thừa nhận đặc điểm này. Việt Nam quyến rũ nhân loại bằng ngay cả những món ăn giản dị trong đời sống thường nhật không chỉ là sự đơn giản trong chế biến mà còn là những thức ăn dưỡng sinh phù hợp với mọi người… và còn rất nhiều những điều thú vị khác đang chờ đón. Hãy để chúng tôi giúp các bạn có những cái nhìn phong phú hơn về dải đất hình chữ S này.
                </p>
                <div class="about-img">
                    <img style="width: 100%; margin-top: 20px; border-radius: 5px;" src="/assets/img/slider/about-img.jpg" alt="about-img">
                </div>
            </div>
          </div>
            <!-- tour-section -->
            <div class="tour-section">
                <div class="content-section">
                    <h2 class="section-heading">KHÁM PHÁ</h2>
                    <p class="section-sub-heading">Finding something new</p>
                 
                    <div class="places-list">
                    
                      <div class="place-items">
                        <img src="https://www.guidevietnam.org/wp-content/uploads/2020/07/Sapa-trong-may-mu.jpg" alt="ảnh 1" class="place-img">
                        <div class="place-body">
                        <h2 class="place-heading">Sapa - Thành phố trong sương</h2>
                        <p>Vietnam is one of Southeast Asia’s most beautiful countries, attracting travellers to its lush mountains, bustling cities and golden sand beaches. Despite rapid modernisation in Vietnam’s urban centres of Hanoi and Ho Chi Minh, time-honoured traditions remain intact amongst the locals.</p>
                        <a href=""><button type="button" class="btn btn-success">Khám phá</button></a>
                        </div>
                        
                      </div>

                      <div class="place-items">
                        <img src="https://nld.mediacdn.vn/2020/3/13/dsc7339-15840709916941262751452.jpg" alt="ảnh 2" class="place-img">
                        <div class="place-body">
                        <h2 class="place-heading">Hội an - Nơi thời gian ngưng đọng</h2>
                        <p>Vietnam is one of Southeast Asia’s most beautiful countries, attracting travellers to its lush mountains, bustling cities and golden sand beaches. Despite rapid modernisation in Vietnam’s urban centres of Hanoi and Ho Chi Minh, time-honoured traditions remain intact amongst the locals.</p>
                        <a href=""><button type="button" class="btn btn-success">Khám phá</button></a>
                        </div>
                        

                      </div>

                      <div class="place-items">
                        <img src="https://owa.bestprice.vn/images/articles/uploads/chia-se-kinh-nghiem-di-du-lich-phu-quoc-bang-xe-may-tu-a-z-5eb0dcf5d236b.jpg" alt="ảnh 3" class="place-img">
                        <div class="place-body">
                        <h2 class="place-heading">Phú quốc - Thiên đường nghỉ dưỡng</h2>
                        <p>Vietnam is one of Southeast Asia’s most beautiful countries, attracting travellers to its lush mountains, bustling cities and golden sand beaches. Despite rapid modernisation in Vietnam’s urban centres of Hanoi and Ho Chi Minh, time-honoured traditions remain intact amongst the locals.</p>
                        <a href=""><button type="button" class="btn btn-success">Khám phá</button></a>
                        </div>
                       
                        </div>


                        

                  <div class="show-more-places">
                      <span class="about-more-places">Còn rất nhiều địa điểm khác đang chờ các bạn cùng khám phá trên khắp dải đất hình chữ S !</span>
                      <a href=""><button type="button" class="btn btn-info">Show more</button></a>
                  </div>

                          <div class="clear"></div>

                         </div>

                </div>

                
                     </div>
                  

            <!-- contact-section -->
            <div class="contact-section">
            <div class="content-section">
                <h2 class="section-heading">LIÊN HỆ</h2>
                <p class="section-sub-heading">Contact us</p>
              
                <div class="container">
                    <div class="row">
                        <div class="col col-icon">
                          <p>
                              <i class="ti-location-pin"></i>Location: Hanoi, VietNam
                          </p>

                          <p>
                            <i class="ti-world"></i>Website: purevietnamtravel.com.vn
                          </p>

                          <p>
                            <i class="ti-email"></i>Email: infor@purevietnamtravel.com.vn
                          </p>
                        </div>
                        <div class="col col-form" >
                             <form action="welcome_get.php" method="POST" >
                              <div class="row" style="padding-bottom: 3px;">
                                <div class="col-6" style="padding-left: 15px; padding-right: 0px;">
                                     <input class="input-contact"  type="text" id="name" name="name"  placeholder="Name" required>
                                </div>
                                <div class="col-6" style="padding-left: 5px;">
                                     <input class="input-contact" type="email" id="email" name="email"  placeholder="Email" required >
                                </div>
                              </div>
                            <div class="row">
                                 <div class="col">
                                     <input class="input-contact" type="text" id="message" name="message" placeholder="Message" required >
                                 </div>
                            </div>
                             <button class="submit-btn" type="submit">SEND</button>
                             <button><a href="register.html">register</a></button>
                             <button><a href="login.html">login</a></button>
                             <button><a href="logout.php">logout</a></button>

                            </form>
                        </div>
                      </div>
                  </div>
                
              </div>
            </div>
         </div>
        

         </div> 

         <div id="footer-img">
            <div class="content-section">
                <img style="width: 100%;" src="assets/img/footer/vietnam.jpg" alt="footer-img">
            </div> 
            
         </div>

         <div id="footer">
            <i class="ti-facebook"></i>
            <i class="ti-instagram"></i>
            <i class="ti-youtube"></i>
            <i class="ti-twitter"></i>
            <div class="end">
                <p>Power by <a href="">Pure VietNam Travel</a></p>
            </div>
            
        </div>

    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<script>

    var header = document.getElementById("header");
    var mobileMenu = document.getElementById("mobile-menu");

     mobileMenu.onclick = function(){
     var isClosed = header.clientHeight === 55;
     if(isClosed){
         header.style.height = "auto";
     }else{
         header.style.height = "55px";
     }

     }

    //  const form = document.forms[0];

    //    form.addEventListener("submit", function(event) {
    //    event.preventDefault();
    //    new FormData(form);
    //    });

    //     form.addEventListener("formdata", event => {
    //     const data = event.formData;

    //     console.log(data)
    //     //get the data
    //     const entries = [...data.entries()];
    //     console.log(entries);

    //     const values = [...data.values()];
    //     console.log(values);

    //   });
      
       
    var menuItems = document.querySelectorAll('#nav li a[href*="#"]');

    for(var i = 0 ; i < menuItems.length; i++){
        var menuItem = menuItems[i];
      

        menuItem.onclick=function(event){
           
           var isParentMenu = this.nextElementSibling && this.nextElementSibling.classList.contains('subnav');
            if(isParentMenu){
                event.preventDefault();
            }else {
               header.style.height = null;
            }


        }
    }
</script>
</body>
</html>