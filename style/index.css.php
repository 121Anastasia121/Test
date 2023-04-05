<?php
  header('content-type: text/css');
?>

#wrapper {
  font-family: 'Inter';
}

.burger-btn {
display: none;
width: 60px;
height: 60px;
background-color: #012D5C;
border: none;
border-radius: 4px;
transition: transform .5s, opacity .5s, background-color .5s;
}

.burger-btn span {
position: absolute;
height: 3px;
width: 40px;
background-color:white;
left: 10px;
}

.burger-btn span:nth-child(1) {
transform: translateY(-15px);
}

.burger-btn span:nth-child(3) {
transform: translateY(15px);
}

.header-site.open .burger-btn span:nth-child(1) {
transform: translateY(0) rotate(-45deg);
}


.header-site.open .burger-btn span:nth-child(2) {
opacity: 0;
}


.header-site.open .burger-btn span:nth-child(3) {
transform: translateY(0) rotate(45deg);
}

/* .header-site.open .burger-btn span {
background-color: #F41C31;
} */

.header-l1 {
display: flex;
border-bottom: 3px solid #f0f0f0;
}

.container {
margin: 0 auto;
height: 100%;
max-width: 1212px;
padding: 0 15px;
}

.header-l1-in {
display: flex;
align-items: center;
}

.logo {
width: 237px;
height: 92px;
}

.site-description {
width: 285px;
font-weight: 400;
font-size: 16px;
line-height: 20px;
color: #012D5C;
font-family: 'Inter';
margin-left: 64px;
margin-right: 391px;
}

.header-branding-tel {
display: flex;
justify-content: flex-end;
}

.img-tel {
margin-right: 8px;
}

.number-tel {
font-family: 'Inter';
font-style: normal;
font-weight: 700;
font-size: 20px;
line-height: 24px;
color: #012D5C;
text-decoration: none;
padding-bottom: 4px;
}
  
.link-tel {
position: absolute;
font-family: 'Inter';
font-style: normal;
font-weight: 400;
line-height: 60px;
color: red;
top: 34px;
}

.header-navigation {
display: flex;
justify-content: center;
margin-top: 24px;
margin-bottom: 24px;
}

.nav-pills{
display: flex;
}

.header-navigation li {
list-style: none;
position: relative;
padding: 0px 167px 0px 0px;
}

#last-link {
padding: 0px;
}

.nav-pills a {
text-decoration: none;
display: block;
text-align: center;
line-height: 20px;
font-family: 'Inter';
font-weight: 700;
color: #012D5C;
transition: all 0.3s;
}

.nav-pills a:hover {
color: red;
}

.nav-pills ul {
background: #ffffff;
position: absolute;
left: 0;
top: 100%;
display: none;
padding: 0;
}

.nav-pills li:hover > ul {
display: block;
}


/*----MAIN BLOCK----*/

.main-block {
background-image: url(../main_img.jpg);
background-size: cover;
display: flex;
justify-content: center;
}

.wrapper-block {
display: flex;
align-items: center;
}

.mone-in {
margin: 130px 0px 112px 0px;
}

.mone-img img {
height: 484px;
width: 618px;
}

.block-topic {
font-family: 'Inter';
font-style: normal;
font-weight: 700;
font-size: 40px;
line-height: 48px;
color: #FFFFFF;
margin-bottom: 32px;
}

.block-list li {
color: white;
font-family: 'Inter';
font-size: 18px;
line-height: 26px;
font-weight: 400;
margin-bottom: 12px;
}

.block-list li::before {
content: url(../img/icon.png);
padding-right: 12px;
}

.pum-trigger {
font-family: 'Inter';
font-weight: 500;
color: white;
display: flex;
justify-content: center;
align-items: center;
width: 205px;
height: 56px;
background: #F41C31;
border-radius: 4px;
border: red;
margin-top: 28px;
font-size: 16px;
}

.block-list img {
margin-right: 20px;
}


/*-------Second Section-------*/

.second-sect {
background-image: url(../first_banner.png);
background-size: cover;
display: flex;
}

.title-m {
  font-size: 32px;
  line-height: 40px;
  margin-bottom: 48px;
  margin-top: 80px;
  text-align: center;
  color: #FFFFFF;
}

.title-m span {
  font-weight: 700;
  display: block;
}

.list-carousel {
  display: flex;
  margin-bottom: 124px;
  align-items: center;
  max-width: 1253px;
  position: relative;
  left: 0px;
  transition: all 1s ease 0s;
}

.carousel-inner {
  display: flex;
  position: relative;
  left: 0;
  transition: all ease 2s;
}

.draggable {
  overflow: hidden;
}

.carousel-item {
  width: 183px;
  height: 220px;
  background: #FFFFFF;
  border-radius: 8px;
  text-align: center;
  margin: 0px 10px;
}

.carousel-item img{
  padding-top: 11px;
}

.carousel-item p{
  font-weight: 500;
    font-size: 16px;
    line-height: 22px;
    display: flex;
    align-items: center;
    text-align: center;
    color: #1D2936;
    padding-left: 18px;
    padding-right: 18px;
    margin-top: 18px;
    justify-content: center;
    min-height: 44px;
}

.slick-track div {
  margin-left: 10px;
  margin-right: 10px;
}

.carousel-item img{
  margin: 0px auto;
}

.sprite-prev {
  position: absolute;
  margin-left: -64px;
  margin-top: 90px;
}

.sprite-next {
  position: absolute;
  margin: -104.7px 0px 0px 1236px;
}

.slick-arrow {
  cursor: pointer;
}


/*-------Third Section-------*/

.third-sect {
  background-image: url(http://test/first_banner.png);
  display: flex;
  background-size: cover;
}

.title-second {
  margin-top: 166px;
}

.list-carousel_block_third {
  margin-bottom: 159px;
}

.sprite-left {
  position: absolute;
  margin-left: -64px;
  margin-top: 100px;
}

.sprite-right {
  position: absolute;
  margin: -109px 0px 0px 1236px;
}


/*----media----*/

@media (max-width:1300px) {
  .header-l1 {
    display: block;
  }

  .header-l1-in {
    justify-content: space-between;
  }

  .site-description {
    margin-right: auto;
  }

  .header-navigation {
    display: block;
  }

  .nav-pills {
    justify-content: space-between;
  }

  .nav-pills li {
    padding: 0px;
  }

  .slick-track div {
    width: 177px;
  }
}

@media (max-width:992px) {
  .header-site.open .header-navigation {
    transform: translateX(100%);
  }

  .header-site {
    display: flex;
  }
  
  .header-branding {
    margin: 0px;
  }

  .site-branding {
    display: flex;
    align-items: center;
  }
  
  .burger-btn {
    display: block;
    position: relative;
    z-index: 3;
    margin-right: 10px;
  }
  
  .header-navigation {
    position: absolute;
    left: -336px;
    top: 0px;
    padding: 116px 132px 77px 132px;
    background-color: #012D5C;
    border-radius: 4px;
    margin: 0px 53px;
    width: 13px;
    transition: transform .5s;
    height: 100%;
    display: flex;
    z-index: 2;
  }
  
  .header-navigation li {
    padding: 0px;
  }
  
  .nav-pills {
    display: block;
  
  }
  
  .nav-pills a {
    color: white;
    font-size: 20px;
    padding: 10px 0px;
  }

  .site-branding img {
    width: 200px;
    height: 80px;
  }
  
  .site-description {
    margin-left: 20px;
    margin-right: 58px;
  }
  
  .container {
    max-width: 844px;
  }
  
  .mone-in {
    margin: 75px 0px 80px 0px;
  }
  
  .block-topic {
    font-size: 37px;
    line-height: 30px;
  }
  
  .mone-img img {
    width: 503px;
    height: 352px;
  }

  .title-m {
    font-size: 25px;
  }
}

@media (max-width:926px) {
  .site-description {
    margin-right:auto;
  }
}

@media (max-width:875px) {
  .header-site {
    display: block;
  }

  .site-description {
    display: none;
  }

  .mone-img img {
    width: 355px;
    height: 280px;
  }

  .container {
    max-width: 780px;
  }
}

@media (max-width:720px) {
  .mone-img img {
    display: none;
  }

  .block-topic {
    font-size: 30px;
  }

  .title-m {
    font-size: 20px;
  }
  .container {
    max-width: 500px;
  }
}

@media (max-width:533px) {
  .site-branding img {
    width: 88px;
    height: 38px;
  }

  .header-branding-tel img {
    display: none;
  }

  .number-tel {
    font-size: 14px;
  }

  .link-tel {
    font-size: 14px;
    top: 14px;
  }

  .container {
    max-width: 400px;
  }
}

@media (max-width:325px) {
  .header-l1-in {
    display: block;
  }

  .header-branding-tel {
    padding-bottom: 10px;
  }

  .link-tel {
    position: absolute;
    top: 0px;
  }

  .container {
    max-width: 300px;
  }
}
