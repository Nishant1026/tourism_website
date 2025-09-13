
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .gallery-section {
        /* background: url('./bg2.jpg'); */
        background-size: contain;
        background-repeat: no-repeat;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }

    .box {
       
        background-color: #eeeeeee3;
        width: 33%;
        height: 20%;
        /*margin-top: 10px; */
        border-radius: 5px;
        border: 2px;
        padding: 10px 0px 10px;
    }

      .box:hover {
        
          border: 3px solid rgb(195, 226, 17);
        background-color: #46474581; 
        /* transform: scale(1.3);
        z-index: 2; */
    }
     

    .box-img {
        
        margin-left: 2rem;
        margin-right: 2rem;
        margin-bottom: -1rem;
        height: 300px;
        width: 300px;
        background-size: 100%;
        background-repeat: no-repeat;
    }

    .box-content {
        margin-left: 1rem;
        margin-right: 1rem;
    }

    .box-content p {
        color: #007185;
    }
</style>

<body>
    <div class="gallery-section">
        <div class="box1 box ">
            <div class="box-content">
                <h2>DEWRI MANDIR</h2>
                <div class="box-img" id="zoom" style="background-image:url('dewri.jpg') ;"></div>
            </div>
        </div>
        <div class="box2 box ">
            <div class="box-content">
                <h2>HIGH COURT</h2>
                <div class="box-img" id="zoom" style="background-image:url('highcourt.jpg') ;"></div>
            
            </div>
        </div>
        <div class="box3 box ">
            <div class="box-content">
                <h2>DHURWA DAM</h2>
                <div class="box-img" id="zoom" style="background-image:url('dhurwadam.jpg') ;"></div>
            
            </div>
        </div>
        <div class="box4 box ">
            <div class="box-content">
                <h2>KANKE DAM</h2>
                <div class="box-img" style="background-image:url('kankedam.jpg') ;"></div>
            
            </div>
        </div>
        <div class="box5 box ">
            <div class="box-content">
                <h2>JAGARNATH MANDIR</h2>
                <div class="box-img" style="background-image:url('jagarnath2.jpg') ;"></div>
            
            </div>
        </div>
        <div class="box6 box ">
            <div class="box-content">
                <h2>JONHA FALL</h2>
                <div class="box-img" style="background-image:url('jonha-falls.jpg') ;"></div>
            
            </div>
        </div>
        <div class="box7 box ">
            <div class="box-content">
                <h2>PATRATU VALLEY</h2>
                <div class="box-img" style="background-image:url('patratu2.jpg') ;"></div>
            
            </div>
        </div>
        <div class="box8 box ">
            <div class="box-content">
                <h2>STADIUM </h2>
                <div class="box-img" style="background-image:url('stadium.jpg') ;"></div>
            
            </div>
        </div>
        <div class="box9 box ">
            <div class="box-content">
                <h2>TAGOR HILL </h2>
                <div class="box-img" style="background-image:url('tagorhill.jpg') ;"></div>
            
            </div>
        </div>
        <div class="box10 box ">
            <div class="box-content">
                <h2>SURYA MANDIR </h2>
                <div class="box-img" style="background-image:url('suryamandir.jpg') ;"></div>
            
            </div>
        </div>
        <div class="box11 box ">
            <div class="box-content">
                <h2>VIDHAN SABHA </h2>
                <div class="box-img" style="background-image:url('vidhan.jpg') ;"></div>
            
            </div>
        </div>
        <div class="box12 box ">
            <div class="box-content">
                <h2>SWAMI VIVEKANAND STATUES </h2>
                <div class="box-img" style="background-image:url('vivekanand.jpg');"></div>
            </div>
        </div>

    </div>

</body>

</html>