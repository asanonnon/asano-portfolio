window.onload = function(){
    control.menu();
    control.about();
    control.blog();
}

let menuBarAction = true; //menuボタンのon/off



let control = {
    menu:function(){
        //画面サイズが小さい時のmenuバーのanimete
        const menuIcon = document.querySelector('.menu-bar');
        const menu = document.querySelector('.menu');
        if(menu != null){
            menuIcon.addEventListener('click',function(){action.menu(menu)});
        }
        },
    about:function(){
        //aboutページの切り替えボタン
        let items = {
            toggleArea: document.querySelectorAll(".toggle"),
            btn: document.querySelectorAll(".toggle-btn"),
        }
        if(items.btn != null){
            items.btn.forEach(element=>{
                console.log(element);
                element.addEventListener('click',function(){
                action.about(this,items)});
            });
            }
        },
    blog:function(){
        //ブログページのサイドバーのスクロールanimate
        const sideBar = document.querySelector('.side-bar');
        let windowSize = window.innerWidth;
        if(sideBar != null && windowSize >= 1000){
            action.blog(sideBar);
        }
    }
}




let action = {
    menu:function(dom){
        console.log("action");
        if(menuBarAction){
            gsap.to(dom,{
                xPercent:-100,
                duration:0.5,
                ease: Power4.easeInOut
            })
            menuBarAction = false;
        }else{
            gsap.to(dom,{
                xPercent:0,
                duration:0.5,
                ease: Power4.easeInOut
            })
            menuBarAction = true;
        }
    },

    about:function(name,items){
        //表示切り替え
        items.toggleArea.forEach(element => {
            if(element.classList.contains(name.name)){
                element.classList.add("active");
                element.classList.remove("possive");
            }else{
                element.classList.remove("active");
                element.classList.add("possive");
            }
        });
        //bottonの切り替え
        items.btn.forEach(element=>{
            if(name == element){
                element.style.boxShadow = "inset 3px 3px 5px #41414149,inset -3px -3px 5px #ffffff89";
            }else{
                element.style.boxShadow = "3px 3px 5px #41414149, -3px -3px 5px #ffffff89";
            }
        })
    },
    blog:function(sideBar){
        gsap.to(sideBar,{
            scrollTrigger:{
                trigger:sideBar,
                start:"top 100px",
                end:"bottom 70%",
                pin:true,
            }
        })
    }
}




