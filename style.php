<style type="text/css">

html{
    scroll-behavior: smooth;
}

*{
    padding: 0px;
    margin:0px;
    box-sizing: border-box;
    font-family: 'Caladea';
}

.row{
    margin-left: 0!important; 
    margin-right: 0!important;
}

.main-header{
    width: 100%;
    height: 450px;
}

.navbar_style{
    background-color: #43DFC1 ;
}

.navbar_style a{
    color: #090A0A ;
}

.left-img img{
    animation : heartbeat 5s linear infinte;
}

@keyframes heartbeat{
   0%{
       transform: scale(.75);
   }
   20%{
       transform: scale(1);
   }
   40%{
       transform: scale(.75);
   }
   60%{
       transform: scale(1);
   }
   80%{
       transform: scale(.75);
   }
   100%{
       transform: scale(1);
   }
}


.corona-update{
    margin: 10px 0 30px 0;
}

.corona-update h1{
    color: #ff7675;
}

.sub-section{
    background-color: #fbfafd;
}

.footer-style{
    background-color: #43DFC1!important;
}

.footer-style p{
    margin-bottom: 0!important;
}

#myBtn{
    display: none;
    position: fixed;
    bottom: 30px;
    right: 40px;
    z-index: 99;
    border: none;
    outline: none;
    color: white;
    background-color: #00A8FF;
    cursor: pointer;
    padding: 10px;
    border-radius: 10px;
}

#myBtn:hover {
    background: #606060;
}

.about-res{
    margin-left: 0!important;
}

</style>