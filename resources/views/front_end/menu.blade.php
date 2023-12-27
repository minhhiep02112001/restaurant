@extends('front_end._index')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style> 
#main{
    padding-top: 50px;
}
    #main .mainPage_itemCategoryHeader__3Gpjw {  width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 12px 0 12px 16px;
    box-sizing: border-box;
    line-height: 40px;
    color: #000;
    transition: all .3s;
}
#main  .mainPage_category__1ctKe .mainPage_itemBody__2FZ6t .mainPage_itemInfo__2YWc7 .mainPage_itemInfoTop__3Q9L8 .mainPage_itemDisplayPrice__LLTWN {
    display: flex;
    align-items: center;
    color: #000;
    margin-top: 5px;
}
  #main .mainPage_itemsHeaderTitle__3KjW- {
    width: 0;
    flex: 1 1;
    font-size: 18px;
    font-weight: 700;
    word-break: break-all;
    line-height: 24px;
}
#main   .mainPage_itemInfo__2YWc7 .mainPage_itemInfoTop__3Q9L8 {
    font-size: 16px;
    font-weight: 500;
}

#main   .mainPage_itemInfoBottom__2-b1z .mainPage_label__3bK3L.mainPage_popularLabel__2vtyy {
    background-color: rgba(244,67,54,.05);
    color: #f44336;
}
#main   .mainPage_itemInfoBottom__2-b1z .mainPage_label__3bK3L img {
    width: 12px;
    margin-left: 2px;
}
#main .mainPage_itemInfo__2YWc7 .mainPage_itemInfoBottom__2-b1z .mainPage_label__3bK3L {
    height: 20px;
    text-align: center;
    border-radius: 10px;
    margin-right: 6px;
    display: flex;
    align-items: center;
    padding: 0 5px;
    font-size: 12px;
}

#main .mainPage_itemCategoryHeader__3Gpjw .mainPage_cateogryFoldIcon__3GpXp i {
    font-size: 28px;
}

.iconfont_iconfont__35CjH {
    font-family: iconfont!important;
    font-size: 16px;
    font-style: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
#main .mainPage_itemCategoryHeader__3Gpjw .mainPage_cateogryFoldIcon__3GpXp i {
    font-size: 28px;
}
#main .mainPage_itemListBx__2K7pM .mainPage_category__1ctKe .mainPage_categoryItems__yeqST {
    display: flex;
    flex-wrap: wrap;
    box-sizing: border-box;
    width: 100%;
    padding: 0 16px;
    background: #fff;
    background: var(--whiteBackgroundColor,#fff);
}

#main .mainPage_itemListBx__2K7pM .mainPage_category__1ctKe .mainPage_itemBody__2FZ6t {
    min-height: 60px;
    box-sizing: border-box;
    position: relative;
    cursor: pointer;
    padding: 8px 0;
    display: flex;
    align-items: center;
    border-bottom: 1px solid hsla(0,0%,47.1%,.1);
    width: 100%;
}


#main .mainPage_category__1ctKe .mainPage_itemBody__2FZ6t .mainPage_itemInfo__2YWc7 {
    box-sizing: border-box;
    flex: 1 1;
    overflow: hidden;
    font-size: 14px;
    height: 100%;
    display: flex;
    flex-direction: column;
}

#main  .mainPage_category__1ctKe .mainPage_itemBody__2FZ6t .mainPage_itemInfo__2YWc7 .mainPage_itemInfoTop__3Q9L8 {
    flex: 1 1;
}
#main   .mainPage_itemInfo__2YWc7 .mainPage_itemInfoTop__3Q9L8 .mainPage_itemName__25d01 {
    color: #000;
    line-height: 24px;
    font-size: 17px;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    overflow: hidden;
}

.style_openSansSemiBoldFont__2yyYk {
    font-family: OpenSans-SemiBold;
    letter-spacing: -.04em;
}

#main  .mainPage_category__1ctKe .mainPage_itemBody__2FZ6t .mainPage_itemInfo__2YWc7 .mainPage_itemInfoTop__3Q9L8 .mainPage_itemDescription__3LZPD {
    word-break: break-word;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    color: #505050;
    line-height: 16.5px;
    margin-top: 4px;
}

#main .mainPage_itemInfo__2YWc7 .mainPage_itemInfoTop__3Q9L8 .mainPage_itemDisplayPrice__LLTWN {
    display: flex;
    align-items: center;
    color: #000;
    margin-top: 5px;
}

    @media screen and (min-width: 1200px){
        #main .mainPage_itemCategoryHeader__3Gpjw {
            padding: 0 0 5px 5px;
        }
        #main .mainPage_itemBody__2FZ6t .mainPage_itemInfo__2YWc7 .mainPage_itemInfoTop__3Q9L8 {
            font-size: 16px;
            font-weight: 500;
        }
        #main   .mainPage_itemInfoTop__3Q9L8 .mainPage_itemDescription__3LZPD {
            font-size: 14px;
            line-height: 18px;
            margin-bottom: 4px;
            margin-top: 8px;
        }

        #main .mainPage_itemListBx__2K7pM .mainPage_category__1ctKe .mainPage_categoryItems__yeqST {
            padding: 0 5px 0 0;
            justify-content: space-between;
        }
        #main .mainPage_itemListBx__2K7pM .mainPage_category__1ctKe .mainPage_itemBody__2FZ6t {
            width: calc(50% - 10px);
            border: 1px solid #e4e4e4;
            border-radius: 5px;
            margin-bottom: 20px;
            box-sizing: border-box;
            padding: 10px;
        }

    }
    @media screen and (max-width: 958px){
        #main  .row .row {
    margin-left: -25px; 
     margin-right: -25px;
}
#main .mainPage_itemCategoryHeader__3Gpjw{
    width: 95%;
}
    }


</style>
    <div id="main" role="main" class="vamtam-main layout-left-only  ">
        <div class="limit-wrapper">
            <div class="row page-wrapper">
                <article id="post-16416" class=" post-16416 page type-page status-publish hentry">
                    <div class="page-content pitoki">

                        <div class="row ">
                            <div class="mainPage_items__3oXG0" id="itemsContainer">
                                <div class="mainPage_itemListBx__2K7pM">
                                    <div id="Cate_popularCate"
                                        class="mainPage_category__1ctKe   menuCategoryNotHide menuCategory">
                                        <div class="mainPage_itemCategoryHeader__3Gpjw itemsAnchor" id="">
                                            <div class="mainPage_itemsHeaderTitle__3KjW-"><span>Popular Items </span>(20)
                                            </div>
                                            <div class="mainPage_cateogryFoldIcon__3GpXp"><i class="fa fa-angle-down" style="font-size:24px"></i></div>
                                        </div>
                                        <div class="mainPage_categoryItems__yeqST" style="display: flex;">
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Juicy Pork Bao(6)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="猪肉生煎包(6)">
                                                            猪肉生煎包(6)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$13.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_juicy_pork.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Dry Cooked Green Bean</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="干煸四季豆">干煸四季豆
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$13.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_green_been.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Green Onion Pan Cake(Vegetarian)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="葱油饼">葱油饼
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$9.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_green_pan_cake.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Pork Xiao Long Bao(8)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="猪肉小笼汤包(8)">
                                                            猪肉小笼汤包(8)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$15.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_xlb_8.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Pork Dumpling w.Sesame Sauce &amp; Chili Oil(8)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="红油抄手(8)">红油抄手(8)
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$11.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_woton_chilloil.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t mainPage_unavailable__2GUh4">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Dan Dan Noodle(Dry)（Spicy）</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="担担面(干)">担担面(干)
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$15.95</div><span>+</span><a
                                                                class="mainPage_soldOut__2_gLH">Sold Out</a>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_dandan.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Fresh Cucumber Garlic Sauce(Vegetarian)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="蒜泥黄瓜">蒜泥黄瓜
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$7.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_cucumber.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Juicy Chicken Bao(6)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="鸡肉生煎包(6)">
                                                            鸡肉生煎包(6)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$14.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Pork &amp; Vegetable Pot Sticker(5)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="锅贴(5)">锅贴(5)
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$9.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_pot_stckers.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Shiitake Mushroom w.Chicken Dumpling(8)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="香菇鸡肉水饺(8)">
                                                            香菇鸡肉水饺(8)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$9.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_shuijiao.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Numb &amp; Spicy Pork Xiao Long Bao(8)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="香辣小笼汤包(8)">
                                                            香辣小笼汤包(8)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$16.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_soup_dumpling2.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Spring Roll(3)(Vegetarian)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="春卷(3)">春卷(3)
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$7.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_spring_roll.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Wonton Soup</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="云吞汤">云吞汤
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$13.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_woton_soup.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Ginger &amp; Green Onion Noodle(Dry)(Vegetarian)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="葱油面(干)">葱油面(干)
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$13.95</div><span>+</span>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_ginger_and_green_onion.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Pork Xiao Long Bao(4)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="猪肉小笼汤包(4)">
                                                            猪肉小笼汤包(4)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$8.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_soup_dumpling1.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Dry Fried Chicken Wings(Spicy)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="干烹鸡翅膀">干烹鸡翅膀
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$15.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_chicken_wing.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Napa Cabbage w.Pork Dumpling(8)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="白菜猪肉水饺(8)">
                                                            白菜猪肉水饺(8)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$8.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_shuijiao.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Vegetable Dumpling(4)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="素蒸饺(4)">素蒸饺(4)
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$7.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_su_zheng_jiao.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            White Rice</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="白饭">白饭
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$3.00</div><span>+</span>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Vegetable Dumpling(8)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="素蒸饺(8)">素蒸饺(8)
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$13.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_veg_dumpling_8.jpg&quot;);">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="Cate_272"
                                        class="mainPage_category__1ctKe   menuCategoryNotHide menuCategory">
                                        <div class="mainPage_itemCategoryHeader__3Gpjw itemsAnchor" id="">
                                            <div class="mainPage_itemsHeaderTitle__3KjW-"><span>Small Plates 小菜 </span>(10)
                                            </div>
                                                    
                                            <div class="mainPage_cateogryFoldIcon__3GpXp"><i class="fa fa-angle-down" style="font-size:24px"></i></i></div>
                                        </div>
                                        <div class="mainPage_categoryItems__yeqST" style="display: flex;">
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Sliced Potato Salad w.House Dressing(Vegetarian)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="炝拌土豆丝">炝拌土豆丝
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$7.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_potato.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Jelly Fish Salad w.Green Onion Dressing</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="葱油海蜇皮">葱油海蜇皮
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$12.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_jelly_fish.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Soybean Noodle Salad(Vegetarian)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="凉拌干丝">凉拌干丝
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$8.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_soybean_salad.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Fresh Cucumber Garlic Sauce(Vegetarian)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="蒜泥黄瓜">蒜泥黄瓜
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$7.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_cucumber.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Wood &amp; Silver Ear Mushrooms In House Dressing(Vegetarian)
                                                        </div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="凉拌双耳">凉拌双耳
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$9.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_wood_ear_mushroom.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Seasoned Beef w.Special Soy Sauce</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="酱牛肉">酱牛肉
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$12.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_seasoned_beef2.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Sliced Pig Ear w.Spicy Sauce(Spicy)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="红油猪耳">红油猪耳
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$9.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_pig_ear1.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Beef Tongue Boiled In The “Thousand Year Old Sauce”(Spicy)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="牛舌">牛舌
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$12.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_beef_tongue.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Dry Fried Chicken Wings(Spicy)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="干烹鸡翅膀">干烹鸡翅膀
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$15.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_chicken_wing.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Kelp Strips Salad w. Galic </div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="凉拌海带丝">凉拌海带丝
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$8.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="Cate_276"
                                        class="mainPage_category__1ctKe   menuCategoryNotHide menuCategory">
                                        <div class="mainPage_itemCategoryHeader__3Gpjw itemsAnchor" id="">
                                            <div class="mainPage_itemsHeaderTitle__3KjW-"><span>Soup 汤品 </span>(3)</div>
                                            <div class="mainPage_cateogryFoldIcon__3GpXp"><i class="fa fa-angle-down" style="font-size:24px"></i></i></div>
                                        </div>
                                        <div class="mainPage_categoryItems__yeqST" style="display: flex;">
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Hot &amp; Sour Soup</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="酸辣汤">酸辣汤
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$10.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_hot_sour.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Wonton Soup</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="云吞汤">云吞汤
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$13.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_woton_soup.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Egg Flower Soup</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="蛋花汤">蛋花汤
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$10.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_egg_flower.jpg&quot;);">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="Cate_274"
                                        class="mainPage_category__1ctKe   menuCategoryNotHide menuCategory">
                                        <div class="mainPage_itemCategoryHeader__3Gpjw itemsAnchor" id="">
                                            <div class="mainPage_itemsHeaderTitle__3KjW-"><span>Steamed 蒸 </span>(18)</div>
                                            <div class="mainPage_cateogryFoldIcon__3GpXp"><i class="fa fa-angle-down" style="font-size:24px"></i></i></div>
                                        </div>
                                        <div class="mainPage_categoryItems__yeqST" style="display: flex;">
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Numb &amp; Spicy Pork Xiao Long Bao(4)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="香辣小笼汤包(4)">
                                                            香辣小笼汤包(4)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$9.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_num_spicy_4.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Numb &amp; Spicy Pork Xiao Long Bao(8)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="香辣小笼汤包(8)">
                                                            香辣小笼汤包(8)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$16.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_soup_dumpling2.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Beef Xiao Long Bao(4)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="牛肉小笼汤包(4)">
                                                            牛肉小笼汤包(4)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$10.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_soup_dumpling.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Beef Xiao Long Bao(8)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="牛肉小笼汤包(8)">
                                                            牛肉小笼汤包(8)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$16.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_xlb_8.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Pork Xiao Long Bao(4)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="猪肉小笼汤包(4)">
                                                            猪肉小笼汤包(4)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$8.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_soup_dumpling1.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Pork Xiao Long Bao(8)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="猪肉小笼汤包(8)">
                                                            猪肉小笼汤包(8)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$15.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_xlb_8.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Chicken Xiao Long Bao(4)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="鸡肉小笼汤包(4)">
                                                            鸡肉小笼汤包(4)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$10.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_xiaolongbao__4.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Chicken Xiao Long Bao(8)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="鸡肉小笼汤包(8)">
                                                            鸡肉小笼汤包(8)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$16.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_xlb_8.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Crab &amp; Pork Xiao Long Bao(4)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="蟹粉小笼包(4)">
                                                            蟹粉小笼包(4)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$13.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_crab_4.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Crab &amp; Pork Xiao Long Bao(8)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="蟹粉小笼包(8)">
                                                            蟹粉小笼包(8)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$25.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_crab_8.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Shrimp &amp; Loofah Xiao Long Bao(4)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="丝瓜虾仁小笼包(4)">
                                                            丝瓜虾仁小笼包(4)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$13.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_loofah_4.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Shrimp &amp; Loofah Xiao Long Bao(8)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="丝瓜虾仁小笼包(8)">
                                                            丝瓜虾仁小笼包(8)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$25.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_loofah_8.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Vegetable Dumpling(4)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="素蒸饺(4)">素蒸饺(4)
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$7.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_su_zheng_jiao.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Vegetable Dumpling(8)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="素蒸饺(8)">素蒸饺(8)
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$13.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_veg_dumpling_8.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Vegetable Bao(3)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="素菜包子(3)">
                                                            素菜包子(3)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$12.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_bao.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Pork Bao(3)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="猪肉包子(3)">
                                                            猪肉包子(3)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$12.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_bao.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Shrimp and Zucchini Squash Xiao Long Bao(4)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="意瓜虾仁小笼包(4)">
                                                            意瓜虾仁小笼包(4)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$13.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Shrimp and Zucchini Squash Xiao Long Bao(8)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="意瓜虾仁小笼包(8)">
                                                            意瓜虾仁小笼包(8)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$25.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="Cate_273"
                                        class="mainPage_category__1ctKe   menuCategoryNotHide menuCategory">
                                        <div class="mainPage_itemCategoryHeader__3Gpjw itemsAnchor" id="">
                                            <div class="mainPage_itemsHeaderTitle__3KjW-"><span>Boiled 煮 </span>(9)</div>
                                            <div class="mainPage_cateogryFoldIcon__3GpXp"><i class="fa fa-angle-down" style="font-size:24px"></i></i></div>
                                        </div>
                                        <div class="mainPage_categoryItems__yeqST" style="display: flex;">
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Napa Cabbage w.Pork Dumpling(8)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="白菜猪肉水饺(8)">
                                                            白菜猪肉水饺(8)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$8.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_shuijiao.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Shiitake Mushroom w.Chicken Dumpling(8)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="香菇鸡肉水饺(8)">
                                                            香菇鸡肉水饺(8)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$9.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_shuijiao.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Pork and Chives Dumpling(8)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="肉三鲜水饺(8)">
                                                            肉三鲜水饺(8)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$11.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_shuijiao.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Shrimp Egg Chives &amp; Wood Ear Mushroom Dumpling(8)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="虾三鲜水饺(8)">
                                                            虾三鲜水饺(8)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$12.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_shuijiao.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Pork Dumpling w.Sesame Sauce &amp; Chili Oil(8)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="红油抄手(8)">
                                                            红油抄手(8)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$11.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_woton_chilloil.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Vegetable Dumpling(8)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="素三鲜水饺(8)">
                                                            素三鲜水饺(8)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$8.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Gong Bao Chicken Dumpling(8pc)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$13.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t mainPage_unavailable__2GUh4">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Mogolian Beef Dumpling(8pc)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$15.95</div><a class="mainPage_soldOut__2_gLH">Sold
                                                                Out</a>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Beef &amp; Water Chestnut Dumpling</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$15.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="Cate_275"
                                        class="mainPage_category__1ctKe   menuCategoryNotHide menuCategory">
                                        <div class="mainPage_itemCategoryHeader__3Gpjw itemsAnchor" id="">
                                            <div class="mainPage_itemsHeaderTitle__3KjW-"><span>Pan Fried 煎 </span>(12)
                                            </div>
                                            <div class="mainPage_cateogryFoldIcon__3GpXp"><i class="fa fa-angle-down" style="font-size:24px"></i></i></div>
                                        </div>
                                        <div class="mainPage_categoryItems__yeqST" style="display: flex;">
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Juicy Pork Bao(6)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="猪肉生煎包(6)">
                                                            猪肉生煎包(6)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$13.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_juicy_pork.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Pork &amp; Vegetable Pot Sticker(5)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="锅贴(5)">锅贴(5)
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$9.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_pot_stckers.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Dry Shrimp Egg &amp; Chives Pockets(2)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="韭菜盒子(2)">
                                                            韭菜盒子(2)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$10.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_chives_pockets.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Green Onion Pan Cake(Vegetarian)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="葱油饼">葱油饼
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$9.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_green_pan_cake.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Seasoned Beef Pockets(2)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="烧饼夹肉(2)">
                                                            烧饼夹肉(2)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$12.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_beef_pockets.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Red Bean Paste Pockets(Vegetarian)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="豆沙薄饼">豆沙薄饼
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$9.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_red_bean.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Juicy Chicken Bao(6)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="鸡肉生煎包(6)">
                                                            鸡肉生煎包(6)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$14.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Juicy Beef Bao(6)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="牛肉生煎包(6)">
                                                            牛肉生煎包(6)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$15.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t mainPage_unavailable__2GUh4">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Vegetable Bao(6)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="素生煎包">素生煎包
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$13.95</div><a class="mainPage_soldOut__2_gLH">Sold
                                                                Out</a>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Numb &amp; Spicy Pork Bao(6pcs)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$15.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Shrimp &amp; Tours Bao</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$17.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Pan Fried Egg Yolk Lava Bao(4pcs)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$19.75</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="Cate_277"
                                        class="mainPage_category__1ctKe   menuCategoryNotHide menuCategory">
                                        <div class="mainPage_itemCategoryHeader__3Gpjw itemsAnchor" id="">
                                            <div class="mainPage_itemsHeaderTitle__3KjW-"><span>Noodle 面条 </span>(9)</div>
                                            <div class="mainPage_cateogryFoldIcon__3GpXp"><i class="fa fa-angle-down" style="font-size:24px"></i> </div> 
                                        </div>
                                        <div class="mainPage_categoryItems__yeqST" style="display: flex;">
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Fresh Shrimp w.Paste Noodle(Soup)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="鲜虾面(汤)">鲜虾面(汤)
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$19.95</div><span>+</span>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_shrimp_noodle.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Braised Beef Noodle(Soup)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="牛肉面(汤)">牛肉面(汤)
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$17.95</div><span>+</span>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_braised_beef.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Braised Beef Brisket Noodle(Soup)（Spicy）</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="牛腩面(汤)">牛腩面(汤)
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$18.95</div><span>+</span>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_brisket_noodle.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Zha Jiang Noodle(Dry)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="炸酱面(干)">炸酱面(干)
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$15.95</div><span>+</span>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_zha_jiang.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t mainPage_unavailable__2GUh4">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Dan Dan Noodle(Dry)（Spicy）</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="担担面(干)">担担面(干)
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$15.95</div><span>+</span><a
                                                                class="mainPage_soldOut__2_gLH">Sold Out</a>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_dandan.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Ginger &amp; Green Onion Noodle(Dry)(Vegetarian)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="葱油面(干)">葱油面(干)
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$13.95</div><span>+</span>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_ginger_and_green_onion.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            White Rice</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="白饭">白饭
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$3.00</div><span>+</span>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Seasoning Pork Intestine(soup)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$15.95</div><span>+</span>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Tomato &amp; Egg(dry)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$14.95</div><span>+</span>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="Cate_278"
                                        class="mainPage_category__1ctKe   menuCategoryNotHide menuCategory">
                                        <div class="mainPage_itemCategoryHeader__3Gpjw itemsAnchor" id="">
                                            <div class="mainPage_itemsHeaderTitle__3KjW-"><span>Fried 炸 </span>(3)</div>
                                            <div class="mainPage_cateogryFoldIcon__3GpXp"><i class="fa fa-angle-down" style="font-size:24px"></i></i></div>
                                        </div>
                                        <div class="mainPage_categoryItems__yeqST" style="display: flex;">
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Spring Roll(3)(Vegetarian)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="春卷(3)">春卷(3)
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$7.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_spring_roll.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Fried Pork Wonton(8)</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="馄饨(8)">馄饨(8)
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$10.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_fried_wonton.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Tofu w.Sweet Soy Sauce</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$13.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="Cate_279"
                                        class="mainPage_category__1ctKe   menuCategoryNotHide menuCategory">
                                        <div class="mainPage_itemCategoryHeader__3Gpjw itemsAnchor" id="">
                                            <div class="mainPage_itemsHeaderTitle__3KjW-"><span>Vegetable 青菜 </span>(5)
                                            </div>
                                            <div class="mainPage_cateogryFoldIcon__3GpXp"><i class="fa fa-angle-down" style="font-size:24px"></i></i></div>
                                        </div>
                                        <div class="mainPage_categoryItems__yeqST" style="display: flex;">
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Dry Cooked Green Bean</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="干煸四季豆">干煸四季豆
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$13.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_green_been.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Brussels Sprouts w.Truffle Salt</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="松露小包菜">松露小包菜
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$16.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_brusssels.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Okra w.Garlic Sauce</div>
                                                        <div class="mainPage_itemDescription__3LZPD" title="蒜香秋葵">蒜香秋葵
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$16.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_okra.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Saute Jalapeno with Dried Tofu</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$15.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Braised Eggplant</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$16.95</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"><span
                                                            class="mainPage_label__3bK3L mainPage_popularLabel__2vtyy">Popular<img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASXSURBVHgBrZRNaFxVGIbfc+7/nTs/mUz+SExkWttYbca2thsXtRbcRAQLRltLqViLXbgQCoILGRciIRS0WJVWKCIqXUg3bqxQN1JRq9RFF7UkqDEFk3SSyUzm58699/jOpJXG9CcBL3zMnDNzvuf73vc7F1jDU1nX9275mS25tZyRa/mzMGuWYyx+V9rZe0QpJVZzZk2AQKiCdDOek4p9ML/dfW81kDUB4IoGfAUt049kf/bVxR3pb6dPnPD+N4CGcAsGTCClQ3R1we1L73Q+z3+ijh+31gTwn9uz9dZ1Obd+//yGjlOGZz4NzwAe4mZcg+hoh2MFe0qfju3DagEqlUoZs5Nv/7seHY3LWOFU8smhQ/q2IVbPI5oCeiPAkdDiCYjy3FurBkSPZT9U7Wbj5rp45thes9u24ehAJ6t3NLpNQIwAybAlpKj1Tefz3j0BamwsJg19OBjY9ObNPaEtvKy1dTAxBybDhOpGhIy4WoKEkeioVMS9O7h6VQ9/Kxwxx05dagEPHerSjWgbnBjQrZo7lIcJ9Vu+BwGUNGoYHS1zbOVdAeLkyWLkpfXy4ODmljwXzw1priaQoixmUw5GU4i4aOkPxf2aQtSQRSGEagzv2lpKebvuCKjkcr2wCsdk2ljSU9QSPMiEIWBFSwY3YW30w2ZIGzDaoJsiPfdwdk9QuLZPbGg/ekdA3Zl9UV+vtYf24oHWj656VBo01iIgQUlswtIE6Eyu8z4oAtKdcAY3G8ke80vbqb3ml6eemDp82L2ZU19GU8V9MBqI5bKv1BJyr6wWEnp3D5PzHsX41zjrMQhRN8y1Ao5djV7UIWwfam4WIghs86cLm5ju4rIOpvJ5NwqqG1VpHiKagdXvJY3BAYGeDCUhwGF4DKMZ7Iq+o5eAfh/IVvg7QwVojpJWK29f0YF3+Xs74rgF5Qhm7ywNoSxeAliP1qsBCUriMrlgTXH/xgTVlw7PsqOJZjdRaxkW52IrPEg8+1IRFW2mMa84HKzmgTIwxER9PBxvykO9Y2koj5K1ERxnF+30IyOW/KkFCEWEgEeEER9fARAjI6Fw4x83iizsOquRVVZMfT1+TzQryEC5WURuDlGSbWW4mSQ4iSUvGnX4foQIdkk+/8L5206RQnJM6dp4lS1HGt8WvD9w+Jn0oBwmNzdS1HVQ1oNQsQHCKZvB5G11BLsbqNKB0NffSI+OFm8LaLv0+7yW7t4fVGSp4dMDgxonJGVZR2AWQgzQApou+xEZD7BDdmE2p6iKyl/NG50Y67lWfn/ZZN66mMofdq05f4fpej/WxyO+cgigZkpSe9FJHT1CHNbpNHWhqQvcW4A/ucgRTX9tHBx+B/95lgF68ycr1tBTX2iizwrrCv4EAbW/eaEvUD/OeSR4BTgEqgGhrvFm/opwsgD/CmUqVW3tmx+MuwJaZp8+PTORG9mNsPP1ekG77l/hRM2cg2x8xSlcQBgSFM5CFj9CdHka4YT+C6z7R1Jnq4/Hz45Pr8iHuzzl/PZu7b4/h/Uu64Dc0PNImD7qhOhfMKqfTWiTZ87iD+c8rhz8WeTzwZ1y/ANt4rRw1IJtiAAAAABJRU5ErkJggg=="></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="Cate_382"
                                        class="mainPage_category__1ctKe   menuCategoryNotHide menuCategory">
                                        <div class="mainPage_itemCategoryHeader__3Gpjw itemsAnchor" id="">
                                            <div class="mainPage_itemsHeaderTitle__3KjW-"><span>Dessert </span>(2)</div> 
                                            <div class="mainPage_cateogryFoldIcon__3GpXp"><i class="fa fa-angle-down" style="font-size:24px"></i></i></div>
                                        </div>
                                        <div class="mainPage_categoryItems__yeqST" style="display: flex;">
                                            <div class="menuItem mainPage_itemBody__2FZ6t mainPage_unavailable__2GUh4">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Mochi (1)</div>
                                                        <div class="mainPage_itemDescription__3LZPD"
                                                            title="Black Sesame and Coconut">Black Sesame and Coconut
                                                        </div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$5.00</div><a class="mainPage_soldOut__2_gLH">Sold
                                                                Out</a>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o__20230504181044.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Panfried Egg Yolk Lava Bao(4pc)</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$19.75</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="Cate_280"
                                        class="mainPage_category__1ctKe   menuCategoryNotHide menuCategory">
                                        <div class="mainPage_itemCategoryHeader__3Gpjw itemsAnchor" id="">
                                            <div class="mainPage_itemsHeaderTitle__3KjW-"><span>Beverage 饮料 </span>(5)
                                            </div>
                                            <div class="mainPage_cateogryFoldIcon__3GpXp"><i class="fa fa-angle-down" style="font-size:24px"></i></i></div>
                                        </div>
                                        <div class="mainPage_categoryItems__yeqST" style="display: flex;">
                                            <div class="menuItem mainPage_itemBody__2FZ6t mainPage_unavailable__2GUh4">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Saratoga Sparkling Water</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$8.00</div><a class="mainPage_soldOut__2_gLH">Sold
                                                                Out</a>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_sparking_water.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Coke</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$3.00</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_beverage_big.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Diet Coke</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$3.00</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_beverage_big.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Sprite</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$3.00</div>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                                <div class="mainPage_itemImg__1WY92"
                                                    style="background-image: url(&quot;https://pixel.menusifu.com/7a376576336a3932326f557a36374164616d517476673d3d/o_beverage_big.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="menuItem mainPage_itemBody__2FZ6t mainPage_unavailable__2GUh4">
                                                <div class="mainPage_itemInfo__2YWc7">
                                                    <div class="mainPage_itemInfoTop__3Q9L8">
                                                        <div
                                                            class="mainPage_itemName__25d01 style_openSansSemiBoldFont__2yyYk">
                                                            Thai Ice Tea</div>
                                                        <div class="mainPage_itemDisplayPrice__LLTWN">
                                                            <div>$5.00</div><a class="mainPage_soldOut__2_gLH">Sold
                                                                Out</a>
                                                        </div>
                                                    </div>
                                                    <div class="mainPage_itemInfoBottom__2-b1z"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="limit-wrapper">
                    </div>
                </article>

            </div>
        </div>
    </div>
@endsection
