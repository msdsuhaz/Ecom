
<div class="header_top">
    <div class="container">
        <div class="header_top-box">
            <div class="header-top-left">
                <div class="box">
                    <select tabindex="4" class="dropdown drop">
                        <option value="" class="label" value="">Dollar :</option>
                        <option value="1">Dollar</option>
                        <option value="2">Euro</option>
                    </select>
                </div>
                <div class="box1">
                    <select tabindex="4" class="dropdown">
                        <option value="" class="label" value="">English :</option>
                        <option value="1">English</option>
                        <option value="2">French</option>
                        <option value="3">German</option>
                    </select>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="cssmenu">
                <ul>
                    <li class="active"><a href="login.html">Account</a></li>
                    <li><a href="wishlist.html">Wishlist</a></li>
                    <li><a href="">Log In</a></li>
                    <li><a href="{{Route('/rag')}}">Sign Up</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="header_bottom">
    <div class="container">
        <div class="header_bottom-box">
            <div class="header_bottom_left">
                <div class="logo">
                    <a href="{{route('/')}}"><img src="{{ asset('/') }}/front-end/images/logo.png" alt=""/></a>
                </div>
                <ul class="clock">
                    <i class="clock_icon"> </i>
                    <li class="clock_desc">Justo 24/h</li>
                </ul>
                <div class="clearfix"> </div>
            </div>
            <div class="header_bottom_right">
                <div class="search">
                    <input type="text" value="Your email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your email address';}">
                    <input type="submit" value="">
                </div>
                <ul class="bag">
                    <a href="#"><i class="bag_left"> </i></a>
                    <a href="#"><li class="bag_right"><p>205.00 $</p> </li></a>
                    <div class="clearfix"> </div>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="menu">
    <div class="container">
        <div class="menu_box">
            <ul class="megamenu skyblue">
                @foreach($catagoryes as $catagorye)
                <li class="active grid"><a class="color2" href="{{Route('catagory_product')}}">{{$catagorye->catagory_name}}</a></li>
                @endforeach
                <div class="clearfix"> </div>
            </ul>
        </div>
    </div>
</div>