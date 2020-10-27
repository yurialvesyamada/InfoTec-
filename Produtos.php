<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <title>Produtos InfoTec</title>
      <link rel="stylesheet" type="text/css" href="./Styles/Estilos.css">
      <script src="./JS/Produtos.js"></script>
</head>
<body>
   <!-- Inicio do menu --> 
     <nav class="menu">
      <a href="index.html"> <img src="./img/Logo2.png" alt="InfoTec" width="100px"> </a>
      <a href="Produtos.php">Produtos:</a>  
      <a href="Loja.html">Nossa Loja:</a>
      <a href="Contato.html">Contato:</a>
        <img class="car" src="./img/carrinho de compras.png " onmouseout="zoom(this)" onmousemove="normal1(this)" title="Carrinho de Compras">
      </nav>
   <!-- Fim do menu --> 
    
   <header>   
         <div class="titulos_paginas"><h2>Produtos</h2></div>
   </header> 
   <hr id="style_hr">
     <main>
      <div id="principal">
     <section class="list_categorias">
     <div class="filtro">   
       <ul>
               <h3>Categorias:</h3> 
               <li onclick="exibir_todos()">Todos (16)</li>
               <li onclick="exibir_Categoria('notebook')">Notebooks (8)</li>
               <li onclick="exibir_Categoria('placa_de_video')">Placa de Vídeo (4)</li>
               <li onclick="exibir_Categoria('processadores')">Processadores (2)</li>
               <li onclick="exibir_Categoria('memoria_ram')">Memória RAM (1)</li>
               <li onclick="exibir_Categoria('monitor')">Monitor (1)</li>
      </ul> 
     </div>
      </section>   
      <br><br>
        
     <section class="produtos"> 
     
      <div class="box_produtos" id="notebook" style="display:table;">
           <img src="img/Notebook-Acer.png"  title="Notebook Acer 15,6 A315-54-53M1 i5-10ª 8GB 1TB+128SSD Linux" onmouseout="destaque(this)" onmousemove="normal(this)">
           <br> 
           <img id="stars" src="./img/stars1.png">
           <p class="descricao_dos_produtos">Notebook Acer 15,6 - <br> A315-54-53M1 <br> i5- 10ª Gen 8GB  1TB+128SSD <br> Linux </p> 
           <hr id="style_hr">
           <p class="descricao_dos_produtos"><strike>R$4.793,24</strike></p>
           <p class="preco">R$4.218,29</p>
           
     </div> 
         
     <div class="box_produtos" id="notebook" style="display:table;">
           <img src="img/Notebook-Dell.png" title="Notebook Dell Inspiron i15-3584-DS50P 8ª Geração Intel Core i3 4GB 256GB SSD Tela LED 15.6" onmouseout="destaque(this)" onmousemove="normal(this)">
           <br> 
           <img id="stars" src="./img/stars1.png">
           <p class="descricao_dos_produtos">Notebook Dell Inspiron i15-3584-DS50P 8ª Geração Intel Core i3 4GB 256GB SSD Tela LED 15.6</p>
           <hr id="style_hr">
           <p class="descricao_dos_produtos"><strike>R$3.502,32</strike></p>
           <p class="preco">R$3.323,63</p>
     </div> 
        
     <div class="box_produtos" id="notebook" style="display:table;">
           <img src="img/Notebook-Lenovo.png" title="Notebook Lenovo Ultrafino ideapad S145 i3 - 8130U 4GB 1TB Windows 10 15.6, Prata" onmouseout="destaque(this)" onmousemove="normal(this)">
           <br> 
           <img id="stars" src="./img/stars1.png">
           <p class="descricao_dos_produtos">Notebook Lenovo Ultrafino ideapad S145 <br> i3 8130U <br> 4GB 1TB  Windows 10 15.6, Prata</p>
           <hr id="style_hr">
           <p class="descricao_dos_produtos"><strike>R$2.999,00</strike></p>
           <p class="preco">R$2.754,00</p>
     </div> 
           
     <div class="box_produtos" id="notebook" style="display:table;">
            
           <img src="img/notebook_samsung_new.jpg" width="120px" title="Notebook S51  NP730XBE-KP1BR Windows 10 Home Intel® Core™ i3-4GB-256GB de SSD-Tela 13.3" onmouseout="destaque(this)" onmousemove="normal(this)">
           <br>
           <img id="stars" src="./img/stars1.png">
           <p class="descricao_dos_produtos">Notebook S51  NP730XBE-KP1BR Windows 10 Home Intel® Core™ i3-4GB-256GB de SSD-Tela 13.3</p>
           <hr id="style_hr">
           <p class="descricao_dos_produtos"><strike>R$5.349,00</strike></p>
           <p class="preco">R$4.814,10</p> 
     </div>

     <div class="box_produtos" id="notebook" style="display:table;">
           <img src="img/Notebook-Samsung-e30.png" width="120px" title="Notebook Samsung Book E30 Intel Core i3-10110U 10ª Geração 4GB 1TB 15.6'' Windows 10 Home NP550XCJ-KT1BR - Prata" onmouseout="destaque(this)" onmousemove="normal(this)">
           <br> 
           <img id="stars" src="./img/stars1.png">
           <p class="descricao_dos_produtos">Notebook Samsung Book E30 Intel Core i3-10110U 10ª Geração 4GB 1TB 15.6'' Windows 10</p>
           <hr id="style_hr">
           <p class="descricao_dos_produtos"><strike>R$3.299,00</strike></p>
           <p class="preco">R$3.099,00</p>
     </div>
          
     <div class="box_produtos" id="notebook" style="display:table;">
           <img src="img/notebook_acer_gamer.jpg" width="120px" title="Notebook Gamer Acer NVIDIA GeForce GTX 1650 Core i5-9300H 8GB 1TB 128GB SSD Tela Full HD 15.6 Windows 10 Aspire Nitro 5 AN515-54-528V" onmouseout="destaque(this)" onmousemove="normal(this)">
           <br>  
           <img id="stars" src="./img/stars1.png">
           <p class="descricao_dos_produtos">Notebook Gamer Acer NVIDIA GeForce GTX 1650 Core i5-9300H 8GB 1TB 128GB</p>
           <hr id="style_hr">
           <p class="descricao_dos_produtos"><strike>R$5.999,00</strike></p>
           <p class="preco">R$ 5.599,00</p>
     </div>
            
     <div class="box_produtos" id="notebook" style="display:table;">
           <img src="img/notebook-sony1.jpg" width="120px" title="Notebook Vaio FE15, Intel Core i5, 8GB RAM, HD - 1TB 128GB SSD Tela Full HD 15.6 Windows 10 Aspire Nitro 5 AN515-54-528V Chumbo Escuro" onmouseout="destaque(this)" onmousemove="normal(this)">
           <br> 
           <img id="stars" src="./img/stars1.png">
           <p class="descricao_dos_produtos">Notebook Vaio FE15, Intel Core i5, 8GB RAM, HD 1TB, Tela LCD 15.6" HD, Windows 10</p>
           <hr id="style_hr">
           <p class="descricao_dos_produtos"><strike>R$4.128,00</strike></p>
           <p class="preco">R$3.849,00</p>
     </div>
      
     <div class="box_produtos" id="notebook" style="display:table;">
           <img src="img/Notebook-Samsung-x50.png" width="120px" title="Notebook Samsung Book X50 Intel Core i7-10510U 10ª Geração 8GB, 1TB Placa de Vídeo 2GB, 15.6'' Windows 10 Home NP550XCJ-XS1BR - Prata" onmouseout="destaque(this)" onmousemove="normal(this)">
           <br> 
           <img id="stars" src="./img/stars1.png">
           <p class="descricao_dos_produtos">Notebook Samsung Book X50 Intel Core i7-10510U 10ª Geração 8GB, 1TB, Placa de Vídeo 2GB</p>
           <hr id="style_hr">
           <p class="descricao_dos_produtos"><strike>R$5.899,00</strike></p>
           <p class="preco">R$4.999,00</p>
     </div>
          
     <div class="box_produtos" id="processadores" style="display:table;">
           <img src="img/core-i9.jpg" width="120px" title="Processador Intel Core i9-9900k Coffee Lake Refresh 9a Geração, Cache 16MB, 3.6GHz (5.0GHz Max Turbo), LGA 1151 - BX80684I99900K" onmouseout="destaque(this)" onmousemove="normal(this)">
           <br> 
           <img id="stars" src="./img/stars1.png">
           <p class="descricao_dos_produtos">Processador Intel Core i9-9900k Coffee Lake Refresh 9a Geração, 3.6GHz</p>
           <hr id="style_hr">
           <p class="descricao_dos_produtos"><strike>R$ 4.235,18</strike></p>
           <p class="preco">R$ 3.882,24</p>
     </div>      
            
     <div class="box_produtos" id="processadores" style="display:table;">
           <img src="img/ryzen-7.jpg" width="120px" title="Processador AMD Ryzen 7 3800X Cache 32MB 3.9GHz (4.5GHz Max Turbo) AMD4 - 100-100000025BOX" onmouseout="destaque(this)" onmousemove="normal(this)">
           <br> 
           <img id="stars" src="./img/stars1.png">
           <p class="descricao_dos_produtos">Processador AMD Ryzen 7 3800X Cache 32MB 3.9GHz (4.5GHz Max Turbo)</p>
           <hr id="style_hr">
           <p class="descricao_dos_produtos"><strike>R$ 2.999,88</strike></p>
           <p class="preco">R$ 2.549,90</p>
     </div> 
            
     <div class="box_produtos" id="placa_de_video" style="display:table;">
           <img src="img/placa-de-video-gtx.jpg" width="120px" title="Placa de Vídeo Gigabyte GTX 1660 Super OC NVIDIA Geforce 6G, GDDR6 - GV-N166SOC-6GD" onmouseout="destaque(this)" onmousemove="normal(this)">
           <br> 
           <img id="stars" src="./img/stars1.png">
           <p class="descricao_dos_produtos">Placa de Vídeo Gigabyte GTX 1660 Super OC NVIDIA Geforce 6G, GDDR6</p>
           <hr id="style_hr">
           <p class="descricao_dos_produtos"><strike>R$ 2.352,82</strike></p>
           <p class="preco">R$ 1.882,24</p>
     </div> 
          
     <div class="box_produtos" id="placa_de_video" style="display:table;">
           <img src="img/gtx1660.jpg" width="120px" title="Placa de Vídeo Gigabyte NVIDIA GeForce RTX 2060 OC, 6GB, GDDR6, REV 2.0 - GV-N2060OC-6GD" onmouseout="destaque(this)" onmousemove="normal(this)">
           <br> 
           <img id="stars" src="./img/stars1.png">
           <p class="descricao_dos_produtos">Placa de Vídeo Gigabyte NVIDIA GeForce RTX 2060 OC, 6GB, GDDR6, REV 2.0</p>
           <hr id="style_hr">
           <p class="descricao_dos_produtos"><strike>R$ 3.411,65</strike></p>
           <p class="preco">R$ 2.470,47</p>
     </div>

     <div class="box_produtos" id="placa_de_video" style="display:table;">
           <img src="img/amd-radeon.jpg" width="120px" title="Placa de Vídeo Gigabyte AMD Radeon RX 580 Gaming, 8GB, GDDR5, REV 2.0 - GV-RX580GAMING-8GD REV2.0" onmouseout="destaque(this)" onmousemove="normal(this)">
           <br> 
           <img id="stars" src="./img/stars1.png">
           <p class="descricao_dos_produtos">Placa de Vídeo Gigabyte AMD Radeon RX 580 Gaming, 8GB, GDDR5</p>
           <hr id="style_hr">
           <p class="descricao_dos_produtos"><strike>R$ 1.882,24</strike></p>
           <p class="preco">R$ 1.481,18</p>
     </div>
            
     <div class="box_produtos" id="placa_de_video" style="display:table;">
           <img src="img/radeon-rx.jpg" width="120px" title="Placa de Vídeo Gigabyte AMD Radeon RX 5600 XT Gaming OC, 6GB, GDDR6 - GV-R56XTGAMING OC-6GD" onmouseout="destaque(this)" onmousemove="normal(this)">
           <br> 
           <img id="stars" src="./img/stars1.png">
           <p class="descricao_dos_produtos">Placa de Vídeo Gigabyte AMD Radeon RX 5600 XT Gaming OC, 6GB, GDDR6</p>
           <hr id="style_hr">
           <p class="descricao_dos_produtos"><strike>R$ 2.482,24</strike></p>
           <p class="preco">R$ 2.109,90</p>
     </div>
                          
     <div class="box_produtos" id="memoria_ram" style="display:table;">
           <img src="img/memoria-ram.jpg" width="120px" title="Memória HyperX Predator RGB, 16GB (2x8GB), 2933MHz, DDR4, CL15, Preto - HX429C15PB3AK2/16" onmouseout="destaque(this)" onmousemove="normal(this)">
           <br> 
           <img id="stars" src="./img/stars1.png">
           <p class="descricao_dos_produtos">Memória HyperX Predator RGB, 16GB (2x8GB), 2933MHz, DDR4, CL15</p>
           <hr id="style_hr">
           <p class="descricao_dos_produtos"><strike>R$ 1.035,18</strike></p>
           <p class="preco">R$ 879,90</p>
     </div>
       
     <div class="box_produtos" id="monitor" style="display:table;">
           <img src="img/monitor_novo.png" width="120px" title="Monitor Gamer Curvo G-sync 34 Alienware AW3420DW 34 polegadas com cores completas oferecidas pela tecnologia IPS Nano Color" onmouseout="destaque(this)" onmousemove="normal(this)">
           <br>
           <img id="stars" src="./img/stars1.png">
           <p class="descricao_dos_produtos">Monitor Gamer Curvo G-sync 34" Alienware AW3420DW</p>
           <hr id="style_hr">
           <p class="descricao_dos_produtos"><strike>R$ 9.769,00</strike></p>
           <p class="preco">R$ 9.089,00</p>
     </div>
         
       </section> 
       </div>
             
             <hr class="linhas2">
             <div id="posicao_videos">
             <div>
              <h2 id="titulos_dos_videos"> Intel 10th Gen CPU: Official Trailer </h2>
              <video controls class="video_intel">
                   <source src="./img/Videos/Intel 10th Gen CPU- Official Trailer.mp4" type="video/mp4">
                   <source src="./img/Videos/Intel 10th Gen CPU- Official Trailer.mp4" type="video/ogg">
             </video> 
             </div>
       
             <hr class="linhas2">
        
             <h2 id="titulos_dos_videos"> 3rd Gen AMD Ryzen™ Technology</h2>
               <video controls class="video_intel">
          <source src="./img/Videos/3rd Gen AMD Ryzen Technology.mp4" type="video/mp4">
          <source src="./img/Videos/3rd Gen AMD Ryzen Technology.mp4" type="video/ogg">
        </video>
        
       <hr class="linhas2">
       </main>
       </div>
            <img src="./img/i9 back.jpg"width= 100%>
        
       <footer id="rodapé">
            <p id="pagamento">Formas de Pagamento: </p>
            <img src="./img/Pagamento.png" width="30%"> 
            <p id="InfoTec"> &copy; InfoTec </p> 
       </footer>
       
       <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "infotec";
            $conn = mysqli_connect($servername, $username, $password, $database);
            if (!$conn)
            die (“Falha na conexão com o BD " . mysqli_connect_errno());
            else
            echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL.“;
            mysqli_close($conn);
       ?>

      


    </body>



    </html>





