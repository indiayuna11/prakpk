session_start();

if(!isset($_SESSION['berhasil'])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Websiteku</title>
        <link rel="stylesheet" href="ecom.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <i><a href="logout.php" style="color: black; font-size: 25px;">Logout</a></i>
        <div class="header">
            <div class="header-logo"><b>IndiStore</b></div>
            <form>
                <input class="search" type="text" placeholder="Search for anything....." required>	
                <input class="button" type="button" value="Cari">		
                <span class="fa fa-cart-plus" style="font-size: 32px;"></span><a href="Order.html" style="color: black; font-size: 25px;"><b>Order</b></a>
            </form>
            <div class="header-list">
                <ul>
                    <li><a href="Jewelry & Accessories.html">Jewelry & Accessories</a></li>
                    <li><a href="Clothing & Shoes.html">Clothing & Shoes </a></li>
                    <li><a href="Home & Living.html">Home & Living </a></li>
                    <li><a href="Wedding & Party .html">Wedding & Party </a></li>
                    <li><a href="Toys & Entertainment .html">Toys & Entertainment  </a></li>
                    <li><a href="Art & Collectibles.html">Art & Collectibles  </a></li>
                    <li><a href="Vintage.html">Vintage </a></li>
                </ul>
            </div>
        </div>
        <h1>Find things you'll love. Support independent sellers. Only on IndiStore.<br>
            Popular gifts right now
        </h1>
        <div class="main">
            <div class="copy-container">
                <div class="video">
                <video width ="240" height="240" controls autoplay loop><source src="https://v-c.etsystatic.com/video/upload/ac_none,du_15,q_auto:good/15_Sec_SQ_Etsy_ksj5xw.mp4" type ="video/mp4"></video>
                <p>
                    Stay Fine Personalized <br>
                    Sale Price Rp 437,172 <br>
                    Original Rp 1,092,857" (60% off) 
                </p>
                </div>
                <div class="video">
                <video width ="240" height="240" controls autoplay loop><source src="https://v-c.etsystatic.com/video/upload/ac_none,du_15,q_auto:good/%D0%B8%D0%BC%D0%B5%D0%BD%D0%BD%D1%8B%D0%B5_%D0%BF%D0%B0%D0%B7%D0%BB%D1%8B_2_bzgvqb.mp4" type ="video/mp4"></video>
                <p>
                    Busy Puzzle<br>
                    Sale Price Rp 40,816 <br>
                    Original Rp 102,041" (60% off) 
                </p>
                </div>
                <div class="video">
                <video width ="240" height="240" controls autoplay loop><source src="https://v-c.etsystatic.com/video/upload/ac_none,du_15,q_auto:good/1_nnp8f0.mp4" type ="video/mp4"></video>
                <p>
                    Hoiaucraft<br>
                    Sale Price Rp 352,915 <br>
                    Original Rp 392,128 (10% off) 
                </p>
                </div>
                <div class="video">
                <video width ="240" height="240" controls autoplay loop><source src="https://v-c.etsystatic.com/video/upload/ac_none,du_15,q_auto:good/Watches_15_Square_sidajr.mp4" type ="video/mp4"></video>
                <p>
                    stay fine official<br>
                    Sale Price Rp 728,717 <br>
                    Original Rp 1,821,866" (60% off) 
                </p>
                </div>
            </div>
            <div class="content-list">
                <ul>
                    <li><img src="https://m.media-amazon.com/images/I/91bsoiw7OWL._AC_UL320_.jpg" width="250px" height= "250px" ><p>Spring bed<br>Rp.700.000</p></li>
                    <li><img src="https://m.media-amazon.com/images/I/71aH-SduRQL._AC_UL320_.jpg" width="250px" height= "250px" ><p>Kitchen Utensils<br>Rp.100.000</p></li>
                    <li><img src="https://i.etsystatic.com/26152401/r/il/091e15/3336265357/il_340x270.3336265357_hkx9.jpg" width="250px" height= "250px" ><p>Skincare<br>Rp.400.000</p></li>
                    <li><img src="https://i.etsystatic.com/27524646/r/il/af7339/2858514912/il_340x270.2858514912_p8ea.jpg"  width="250px" height= "250px"><p>Cute T-shirt<br>Rp.70.000</p></li>
                </ul>
            <div class="main-list">
                <ul>
                    <li><img src="https://i.etsystatic.com/17971216/r/il/be70fc/2960942719/il_340x270.2960942719_2wir.jpg" width="250px" height= "250px" ><p>Guitar<br>Rp. 1.000.000</p></li>
                    <li><img src="https://i.etsystatic.com/27049211/r/il/9e067b/3035781532/il_340x270.3035781532_b3gu.jpg" width="250px" height= "250px" ><p>Custom Tote Bag <br>Rp.80.000</p></li>
                    <li><img src="https://i.etsystatic.com/7493422/c/1923/1528/484/378/il/2cac0f/3340205052/il_340x270.3340205052_o3e3.jpg" width="250px" height= "250px" ><p>sport shoes<br>Rp.300.000</p></li>
                    <li><img src="https://i.etsystatic.com/25929147/c/2062/1639/0/0/il/d6ef59/3084553657/il_340x270.3084553657_d029.jpg"  width="250px" height= "250px"><p>Premium Quality Chiffon Hijabs<br>Rp. 50.000</p></li>
                </ul>
            </div>
        </div>
        <div class="footer">
            <div class="footer-list">
            <ul>
                <li><img src="https://wennykinanthi.files.wordpress.com/2018/03/instagram-1581266_960_720.jpg" width="80px" height= "80px" ><b><p>@sindi_ayuna</p></b></li>
                <li><img src="https://png.pngtree.com/png-clipart/20180515/ourmid/pngtree-facebook-logo-facebook-icon-png-image_3566127.png"  width="80px" height= "80px" ><b><p>Sindi_Ayuna </p></b></li>
                <li><img src="https://iconape.com/wp-content/files/aj/377674/png/377674.png"  width="80px" height= "80px" ><b><p>@AyunaSindi</p></b></li>
                <li><img src="https://cdn3.iconfinder.com/data/icons/cute-flat-social-media-icons-3/512/whatsapp.png"  width="80px" height= "80px" ><b><p>082339690818</p></b></li>
                <li><p><b>Shop</b><br>Gift cards<br>Sitemap<br>Etsy blog</p></li>
                <li><p><b>Sell</b><br>Sell on Etsy<br>Teams<br>Forums<br>Affiliates</p></li>
                <li><p><b>About</b><br>Etsy,Inc.<br>Policies<br>Investors<br>Careers<br>Press</p></li>
                <li><p><b>Help</b><br>Help Center<br>Trust and safety<br>Privacy settings</p></li>
            </ul>
            </div>
        </div>
    </body>
</html>
           
