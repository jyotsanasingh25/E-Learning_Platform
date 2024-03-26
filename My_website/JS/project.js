<<<<<<< HEAD:My_website/JS/project.js
//header section starts
var menuBtn=document.querySelector('.navbar.menu-btn');
var menuList=document.querySelector('.navbar.nav-list');
var menuListItems=document.querySelector('.nav-list li a');

menuBtn.addEventListener('click',function(){
    menuBtn.classList.toggle('active');
    menuList.classList.toggle('actie');
});

for(var i=0; i<menuListItems.clientHeight;i++){
    menuListItems[i].addEventListener('click',menuItemsClicked);
}

function menuItemsClicked(){
    menuBtn.classList.remove('avtive');
    menuBtn.classList.remove('active');
}

// partners-slider section

$('.partners-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
=======
//header section starts
var menuBtn=document.querySelector('.navbar.menu-btn');
var menuList=document.querySelector('.navbar.nav-list');
var menuListItems=document.querySelector('.nav-list li a');

menuBtn.addEventListener('click',function(){
    menuBtn.classList.toggle('active');
    menuList.classList.toggle('actie');
});

for(var i=0; i<menuListItems.clientHeight;i++){
    menuListItems[i].addEventListener('click',menuItemsClicked);
}

function menuItemsClicked(){
    menuBtn.classList.remove('avtive');
    menuBtn.classList.remove('active');
}

//partners-slider section//

$('.partners-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<i class='fa-solid fa-arrow-left'></i>",
            "<i class='fa-solid fa-arrow-rig'></i>"],                                      ]
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
>>>>>>> upstream/main:My_website/project.js
