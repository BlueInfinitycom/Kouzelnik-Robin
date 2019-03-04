"use strict";
var trace=console.log.bind(console);
        $(document).ready(function(){
            $("#menuContainer a").click(function(e){
                let _item=e.currentTarget;
                let _href=$(_item).attr("href");
                let _bookmark_name="#robin"+_href.substr(1,_href.length);
                let _ypos=Math.floor($(_bookmark_name).position().top);
                    scrollPage(_ypos);
            });

            $("#btBio,#btMikromagie,#btKids").click(function(e){
                let _carouselItem=e.currentTarget;
                let _itemTop;
                let _id=$(_carouselItem).attr("id");

                switch(_id){
                    case "btBio" : _itemTop=Math.floor($("#robinBio").position().top); break; 
                    case "btMikromagie" : _itemTop=Math.floor($("#robinMikromagie").position().top); break; 
                    case "btKids" : _itemTop=Math.floor($("#robinKids").position().top); break;
                }

                scrollPage(_itemTop);
            });

            function scrollPage(pageYpos){
                $("html,body").animate({scrollTop:pageYpos-50},1000,"swing",function(){trace("konec")});
                $(".navbar-collapse").collapse('hide');
            }

            function customCarousel(){
                let _items=$("#carouselContainer .contentContainer").children().length;
                let _container=$("#carouselContainer .contentContainer .item");
                let pos=0;
                var old_elm;


                function selectAndAnimateItem(){
                    if(old_elm!=undefined){
                        old_elm.css("display","none");
                       
                    }
                    let _item=$(_container).eq(pos);
                        _item.css({display:"inline-block",opacity:0}).animate({opacity:1},1500);
                        old_elm=_item;
                        pos++;
                        if(pos>=_items){pos=0;}
                }
                selectAndAnimateItem();
                setInterval(selectAndAnimateItem,3000);
            }

            customCarousel();

        });

            