<?php
    header('Content-type: text/css; charset:UTF-8');
?>

@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,600);

body {
    background-image("/images/gallery/bg.jpg");
    font-size: 100%;
    padding: 3em 0;
}
.promos {
    max-width: 1140px;
    margin: 0 auto;
     display: flex;
     padding-top: 200px;
     padding-bottom: 200px;
}
.promo {
    margin: 1em .5em 1.625em;
    padding: .25em 0 2em;
    background: #2c3e50;
    font-family: 'Open Sans', sans-serif;
    font-weight: 400; 
    line-height: 1.625;
    color: white;
    text-align: center;
  width: 100%;
   border-radius: 10px 10px 10px 10px;
    -moz-border-radius: 10px 10px 10px 10px;
    -webkit-border-radius: 10px 10px 10px 10px;
    border: 0px solid #000000;
  
}

    h4 {
        margin: .25em 0 0;
        font-size: 170%;
        font-weight: normal;
    }
    .features {
        margin: 0;
        padding: 0;
        list-style-type: none;
        color: body-color;
    }
    li {
        padding: .25em 0;
    }
    .brief { 
        color: #7f8c8d;
    }
    .price {
        margin: .5em 0;
        padding: .25em 0;
        background: #ecf0f1;
        font-size: 250%;
        color: #bdc3c7;
    }
    
.promo first {
  float: left;
  width: 25%;
}

.promo second {
  float: left;
  width: 50%;
}

.promo third scale {
  float: left;
  width: 25%;
}

