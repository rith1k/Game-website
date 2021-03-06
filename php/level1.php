<?php
//Include the PHP functions to be used on the page 
include('common.php');
outputHeader('Level1');
//Output header and navigation 
outputBannerNavigation("Game");
?>
<style>
    .imgArray {
        margin-top: 0;
        height: 80px;
        width: 100%;
        background: white;

    }

    .imgArray1 {
        height: 80px;
        background: white;
        margin: 5px;

    }

    .img-item {
        padding-right: 90px;
        padding-left: 40px;
        object-fit: cover;
        height: 70px;

    }

    .img-item2 {
        object-fit: cover;
        height: 70px;

    }


    .gridArea {
        margin-top: 1%;
        animation: fadeIn 3s;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-rows: 50px 50px 50px;
        grid-template-areas:
            "leftCol1 midTop leftCol4 midTop"
            "  midTop  leftCol2  midTop  leftCol5"

            "leftCol17 midTop leftCol3 leftCol6";
        grid-gap: 5px;

    }

    .leftCol1 {
        margin-top: 300px;
        grid-area: leftCol1;
        width: 8%;

    }

    .leftCol2 {
        margin-left: 300px;

        grid-area: leftCol2;
        width: 8%;
    }

    .level1border {
        margin-top: 0.00001%;
        animation: fadeInLeft 3s;
        width: 100%;
        animation: fadeIn 3s;
        border: solid 2px;
        border-radius: 4px;
        -webkit-box-shadow: 0px 0px 5px 7px rgba(150, 196, 98, 1);
        -moz-box-shadow: 0px 0px 5px 7px rgba(150, 196, 98, 1);
        box-shadow: 0px 0px 5px 7px white;
        background: url(../images/level11.jpg);
        background-size: cover;

        margin-top: 4%;
        width: 75%;
        height: 800px;
        display: inline-block
    }

    .leftCol3 {
        margin-bottom: 120px;
        margin-left: 400px;

        grid-area: leftCol3;
        width: 8%;
    }

    .leftCol4 {
        margin-right: 300px;
        margin-top: 120px;

        grid-area: leftCol4;
        width: 8%;

    }

    .leftCol5 {
        grid-area: leftCol5;
        width: 8%;
    }

    .leftCol6 {
        grid-area: leftCol6;
        width: 8%;
    }

    .leftCol7 {
        grid-area: leftCol7;
        width: 8%;
    }

    .scoretxt {

        font-size: 60px;
        top: 0;
        color: orange;


    }

    #tmr {
        font-size: 60px;
        top: 0;
        color: orange;

    }

    .tct {

        border: 0;
        border-bottom: 2px solid orange;
        font-size: 30px;
        line-height: 35px;
        height: 70px;
        color: white;
        text-align: center;

        background: transparent;
    }

    .tct.shake {
        animation-name: shaker;
        animation-duration: 200ms;
        animation-timing-function: ease-in-out;
        animation-delay: 0s;
    }

    .tct:focus {
        outline: 0;
        color: #BBDEFB;
    }

    .tct::placeholder {
        color: orange;
    }

    #bat,
    #broom,
    #pirate,
    #pumpkin,
    #skull,
    #spider,
    #scarecrow {
        visibility: visible;
        animation-name: zoomOut;
        animation-play-state: paused;
        position: relative;

        animation-duration: 6s;
    }

    @keyframes zoomOut {
        from {
            opacity: 1;
        }

        50% {
            opacity: 0;
            -webkit-transform: scale3d(0.3, 0.3, 0.3);
            transform: scale3d(0.3, 0.3, 0.3);
        }

        to {
            opacity: 0;
        }
    }

    #bat1,
    #broom1,
    #pirate1,
    #pumpkin1,
    #skull1,
    #spider1,
    #scarecrow1 {
        filter: brightness(0%);
    }

    .scrarea>p {
        font-size: 60px;
        top: 0;
        color: orange;
    }

    .scrarea {
        border: solid 2px;
        border-radius: 4px;
        -webkit-box-shadow: 0px 0px 5px 7px rgba(150, 196, 98, 1);
        -moz-box-shadow: 0px 0px 5px 7px rgba(150, 196, 98, 1);
        box-shadow: 0px 0px 5px 7px orange;
        float: right;
        left: 30%;
        top: 0;
        margin-top: 6%;
        margin-right: 33px;
        font-size: 30px;
        line-height: 35px;
        height: auto;
        color: white;
        text-align: center;

        background: transparent;
    }
</style>

<body class="level1">
    <div class="level1Bord">
        <div class="level1border" style="display: inline-block;" alt="">
            <div class="imgArray">
                <img class="img-item" id="bat1" src="../images/bat.png" alt="">
                <img class="img-item" id="broom1" src="../images/broom.png" alt="">
                <img class="img-item" id="pirate1" src="../images/pirate.png" alt="">
                <img class="img-item" id="pumpkin1" src="../images/pumpkin.png" alt="">
                <img class="img-item" id="skull1" src="../images/skull.png" alt="">
                <img class="img-item" id="spider1" src="../images/spider.png" alt="">
                <img class="img-item" id="scarecrow1" src="../images/scarecrow.png" alt="">

            </div>
            <div class="objct">

                <div class="gridArea">
                    <img src="../images/bat.png" id="bat" class="leftCol1" alt="">
                    <img class="leftCol2" src="../images/broom.png" id="broom" alt="">
                    <img class="leftCol3" src="../images/pirate.png" alt="" id="pirate">
                    <img src="../images/pumpkin.png" class="leftCo4" alt="" id="pumpkin">
                    <img class="leftCol2" src="../images/skull.png" alt="" id="skull">
                    <img class="leftCol3" src="../images/spider.png" alt="" id="spider">
                    <img src="../images/scarecrow.png" class="leftCol7" alt="" id="scarecrow">

                </div>

            </div>


        </div>
        <div class="scrarea">

            <div class="imgArray1">
                <img class="img-item2" id="life1" src="../images/redh.png" alt="">
                <img class="img-item2" id="life2" src="../images/redh.png" alt="">
                <img class="img-item2" id="life3" src="../images/redh.png" alt="">
                <img class="img-item2" id="life4" src="../images/redh.png" alt="">
                <img class="img-item2" id="life5" src="../images/redh.png" alt="">

            </div>
            <input class="tct" type="text" id='chck' name="namername" onclick="hello()" placeholder="Make Guess">
            <p class="scoretxt"> Score: <span id='scr'>0</span></p>

            <p> Time: <span id="tmr">0</span></p>
            <input type="submit" name="hell0" id="myBtn" value="Enter" style="display:none;" onclick=" checkScore()">
        </div>

    </div>

    <script src="../js/level1.js"></script>
    </script>
    <!-- Contents of the page -->
    <?php
    //Output the footer
    outputFooter();


    ?>