<?php
function change($hora){
    if (($hora >= 0) and ($hora <= 12)){
        echo "<div id='um' style='flex-grow: 100'>
                <h1>BOM DIA</h1>
                <br>
                <iframe width='560' height='315' src='https://www.youtube.com/embed/Zwmxy5VllpE?autoplay=1' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen ></iframe>
                <div id='image-area'>
                    <a href='#image' id='ented_image'>icon com qualidade melhor</a>
                    <img id='image' src='../assets/dia.png' style='margin-top: 60px' width='300px' height='auto'>
                </div>
              </div>";
    } elseif(($hora >= 13) and ($hora < 18)) {
        echo "<div id='dois' style='flex-grow: 100'>
                <h1>BOA TARDE</h1>
                <br>
                <iframe width='560' height='315' src='https://www.youtube.com/embed/gbRSTz4o3sA?autoplay=1' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                <div id='image-area'>
                    <a href='#image' id='ented_image_t'>icon com qualidade melhor</a>
                    <img id='image' src='../assets/tarde.png' style='margin-top: 60px' width='300px' height='auto'>
                </div>
               </div>";
    } elseif (($hora >= 18) and ($hora <= 23)){
        echo "<div id='tres' style='flex-grow: 100'>
                <h1>BOA NOITE</h1>
                <br>
                <iframe width='560' height='315' src='https://www.youtube.com/embed/IOQo9ywxRCo?autoplay=1' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe> 
                <div id='image-area'>
                    <a href='#image' id='ented_image_t'>icon com qualidade melhor</a>
                    <img id='image' src='../assets/noite.png' style='margin-top: 60px' width='300px' height='auto'>
                </div>
               </div>";
    } elseif ($hora == null){
        echo "<div id='image-area'>
                    <a href='#image' id='ented_image'>icon com qualidade melhor</a>
                    <img id='image' src='../assets/index.png' style='margin-top: 60px' width='300px' height='auto'>
              </div>";
    }
}
?>