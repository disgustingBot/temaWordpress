<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php wp_head(); ?>
  <link href="https://fonts.googleapis.com/css?family=Bitter|Raleway:300,400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
  <script async src="https://cse.google.com/cse.js?cx=012193554652871164598:n4tjkqqjkvp"></script>
</head>
<body>
  <!-- <div class="circle"></div> -->
  <!-- <view id="load" class="load">
    <svg class="circle" width="84.631px" height="85.165px" viewBox="0 0 84.631 85.165">
      <path fill="#FFFFFF" d="M43.67,37.389h29.396l-10.28,10.779c-0.481,0-19.195,0-19.115,0C43.67,47.204,43.67,37.389,43.67,37.389z"/>
      <path fill="#BF9E57" d="M73.146,48.088c3.854,0,7.63,0,11.404,0C83.186,64.256,68.888,83.803,44.874,85.09
      	C21.341,86.458,2.386,68.842,0.218,46.961C-2.191,22.75,15.639,2.479,38.128,0.226c24.737-2.494,44.254,16.087,46.503,37.164
      	c-1.928,0-3.854,0-5.702,0c-1.928,0-3.854,0-5.782,0c-1.606-8.125-5.542-14.801-12.208-19.707c-6.666-4.907-14.137-7-22.328-5.873
      	c-15.902,2.252-26.825,14.962-27.066,30.083c-0.322,15.445,10.681,28.638,25.54,31.293C52.666,76,70.014,65.866,73.146,48.088z"/>
    </svg>
  </view> -->















  <header class="header loading" id="header">



    <div id="lupa">
      <svg width="20" height="20" viewBox="0 0 13 13" fill="currentColor"><title>buscar</title><path d="m4.8495 7.8226c0.82666 0 1.5262-0.29146 2.0985-0.87438 0.57232-0.58292 0.86378-1.2877 0.87438-2.1144 0.010599-0.82666-0.28086-1.5262-0.87438-2.0985-0.59352-0.57232-1.293-0.86378-2.0985-0.87438-0.8055-0.010599-1.5103 0.28086-2.1144 0.87438-0.60414 0.59352-0.8956 1.293-0.87438 2.0985 0.021197 0.8055 0.31266 1.5103 0.87438 2.1144 0.56172 0.60414 1.2665 0.8956 2.1144 0.87438zm4.4695 0.2115 3.681 3.6819-1.259 1.284-3.6817-3.7 0.0019784-0.69479-0.090043-0.098846c-0.87973 0.76087-1.92 1.1413-3.1207 1.1413-1.3553 0-2.5025-0.46363-3.4417-1.3909s-1.4088-2.0686-1.4088-3.4239c0-1.3553 0.4696-2.4966 1.4088-3.4239 0.9392-0.92727 2.0864-1.3969 3.4417-1.4088 1.3553-0.011889 2.4906 0.45771 3.406 1.4088 0.9154 0.95107 1.379 2.0924 1.3909 3.4239 0 1.2126-0.38043 2.2588-1.1413 3.1385l0.098834 0.090049z"></path></svg>
    </div>
    <div id="buscador">
      <div class="gcse-search"></div>
    </div>




    <nav class="navCategories">
      <a class="navCategoriesLink subrayable<?php if(is_category("marketing-estrategia")){echo ' subrayado"';} ?>" href="<?php echo site_url('/marketing-estrategia'); ?>">Marketing Strategy</a>
      <a class="navCategoriesLink subrayable<?php if(is_category("salud-digital")){echo ' subrayado"';} ?>" href="<?php echo site_url('/salud-digital'); ?>">Digital Health</a>
      <a class="navCategoriesLink subrayable<?php if(is_category("canal-digital")){echo ' subrayado"';} ?>" href="<?php echo site_url('/canal-digital'); ?>">Tech Channel</a>
      <a class="navCategoriesLink subrayable<?php if(is_category("seo-contenidos")){echo ' subrayado"';} ?>" href="<?php echo site_url('/seo-contenidos'); ?>">Cool Content</a>
      <a class="navCategoriesLink subrayable<?php if(is_category("events")){echo ' subrayado"';} ?>" href="<?php echo site_url('/events'); ?>">Events</a>
    </nav>


    <nav class="socialCont">
      <a href="https://www.facebook.com/GaeaPeople/" target="_blank">
        <svg class="socialLink" id="footerFacebook" viewBox="0 0 200 200"><path d="M79.078,54.665c0,3.989,0,21.764,0,21.764H63.137v26.586h15.941v72.939h32.699v-72.939h21.953c0,0,2.086-12.744,3.08-26.699c-2.861,0-24.908,0-24.908,0s0-15.469,0-18.176c0-2.72,3.605-6.372,7.145-6.372c3.506,0,10.93,0,17.816,0c0-3.642,0-16.148,0-27.722c-9.197,0-19.643,0-24.252,0C78.286,24.046,79.078,50.68,79.078,54.665z"></path></svg>
      </a>
      <a href="https://twitter.com/GaeaPeople" target="_blank">
        <svg class="socialLink" id="footerTwitter" viewBox="0 0 200 200"><path d="M179.5,50.682c-5.859,2.595-12.137,4.367-18.754,5.155c6.762-4.045,11.934-10.423,14.351-18.073c-6.307,3.753-13.293,6.492-20.723,7.906c-5.924-6.301-14.409-10.257-23.794-10.257c-17.987,0-32.618,14.582-32.618,32.607c0,2.577,0.28,5.036,0.811,7.429c-27.069-1.367-51.096-14.338-67.208-34.086c-2.784,4.821-4.401,10.399-4.401,16.401c0,11.325,5.758,21.283,14.528,27.148c-5.358-0.172-10.417-1.647-14.803-4.045c0,0.137,0,0.256,0,0.392c0,15.789,11.253,28.974,26.151,31.958c-2.703,0.764-5.597,1.168-8.587,1.168c-2.051,0-4.157-0.214-6.125-0.596c4.152,12.936,16.187,22.385,30.47,22.612c-11.163,8.794-25.232,13.973-40.512,13.973c-2.637,0-5.232-0.129-7.786-0.441c14.445,9.283,31.61,14.654,50.004,14.654c59.981,0,92.821-49.682,92.821-92.784c0-1.438-0.065-2.834-0.114-4.217C169.559,62.984,175.126,57.244,179.5,50.682z"></path></svg>
      </a>
      <a href="https://www.linkedin.com/company/omnigaea-s-l-/" target="_blank">
        <svg class="socialLink" id="footerLinkedIn" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path></svg>
      </a>
      <a href="https://www.instagram.com/gaeapeople/" target="_blank">
        <svg class="socialLink"  id="footerInstagram" viewBox="0 0 200 200"><path d="M100,30.441c22.65,0,25.34,0.095,34.277,0.497c8.281,0.39,12.762,1.761,15.758,2.932c3.967,1.537,6.779,3.369,9.748,6.337c2.979,2.979,4.811,5.792,6.336,9.753c1.17,3.002,2.553,7.482,2.938,15.74c0.391,8.955,0.502,11.65,0.502,34.295c0,22.657-0.111,25.329-0.502,34.278c-0.385,8.273-1.768,12.768-2.938,15.758c-1.525,3.947-3.357,6.785-6.336,9.746c-2.969,2.986-5.781,4.807-9.748,6.344c-2.996,1.17-7.477,2.541-15.758,2.932c-8.938,0.389-11.627,0.496-34.277,0.496c-22.662,0-25.346-0.107-34.295-0.496c-8.263-0.391-12.744-1.762-15.74-2.932c-3.955-1.537-6.78-3.357-9.747-6.344c-2.979-2.961-4.806-5.799-6.342-9.746c-1.165-2.99-2.542-7.484-2.938-15.758c-0.402-8.949-0.491-11.621-0.491-34.278c0-22.645,0.089-25.34,0.491-34.295c0.396-8.258,1.773-12.738,2.938-15.74c1.537-3.961,3.363-6.774,6.342-9.753c2.967-2.968,5.792-4.8,9.747-6.337c2.997-1.17,7.477-2.542,15.74-2.932C74.654,30.536,77.338,30.441,100,30.441 M100,15.167c-23.052,0-25.925,0.106-34.98,0.508c-9.032,0.425-15.203,1.844-20.582,3.937c-5.58,2.175-10.32,5.095-15.037,9.782c-4.693,4.711-7.613,9.464-9.777,15.043c-2.11,5.373-3.523,11.55-3.948,20.582c-0.402,9.056-0.508,11.928-0.508,34.975c0,23.034,0.106,25.931,0.508,34.976c0.425,9.043,1.838,15.189,3.948,20.58c2.164,5.592,5.083,10.322,9.777,15.039c4.717,4.691,9.457,7.6,15.037,9.775c5.379,2.105,11.55,3.523,20.582,3.949c9.056,0.402,11.928,0.52,34.98,0.52c23.047,0,25.92-0.117,34.975-0.52c9.031-0.426,15.191-1.844,20.582-3.949c5.586-2.176,10.32-5.084,15.037-9.775c4.711-4.717,7.607-9.447,9.789-15.039c2.098-5.391,3.521-11.537,3.941-20.58c0.426-9.045,0.508-11.941,0.508-34.976c0-23.047-0.082-25.919-0.508-34.975c-0.42-9.032-1.844-15.209-3.941-20.582c-2.182-5.579-5.078-10.332-9.789-15.043c-4.717-4.687-9.451-7.607-15.037-9.782c-5.391-2.093-11.551-3.511-20.582-3.937C125.92,15.273,123.047,15.167,100,15.167L100,15.167z"></path><path  d="M100,56.425c-24.057,0-43.569,19.506-43.569,43.569c0,24.052,19.512,43.569,43.569,43.569c24.057,0,43.563-19.518,43.563-43.569C143.563,75.931,124.057,56.425,100,56.425z M100,128.278c-15.616,0-28.289-12.674-28.289-28.284S84.384,71.723,100,71.723c15.611,0,28.277,12.661,28.277,28.271S115.611,128.278,100,128.278z"></path><path  d="M155.473,54.723c0,5.627-4.586,10.167-10.207,10.167c-5.615,0-10.154-4.54-10.154-10.167s4.539-10.202,10.154-10.202C150.887,44.521,155.473,49.096,155.473,54.723z"></path></svg>
      </a>
      <a href="https://www.youtube.com/user/omnigaea" target="_blank">
        <svg class="socialLink" id="footerYouTube" viewBox="0 0 200 200"><path d="M189.853,56c-2.27-9.9-10.379-17.2-20.119-18.294c-23.082-2.571-46.448-2.595-69.695-2.571c-23.26-0.024-46.631,0-69.713,2.571C20.584,38.8,12.48,46.1,10.217,56C6.972,70.098,6.936,85.49,6.936,99.995c0,14.529,0,29.908,3.245,44.006c2.276,9.889,10.362,17.207,20.115,18.289c23.076,2.576,46.436,2.588,69.701,2.576c23.265,0.012,46.619,0,69.7-2.576c9.742-1.082,17.846-8.4,20.121-18.289c3.246-14.098,3.246-29.477,3.246-44.006C193.063,85.49,193.099,70.098,189.853,56z M75.981,128.894c0-20.594,0-40.969,0-61.567c19.725,10.29,39.332,20.522,59.179,30.884C115.371,108.478,95.765,118.632,75.981,128.894z"></path></svg>
      </a>
    </nav>







    <nav class="navConocenos">
      <h4 class="navConocenosTitle">CONÓCENOS</h4>
      <a class="navConocenosLink" href="https://nosotros.gaeapeople.com/#about" target="_blank">Sobre nosotros</a>
      <a class="navConocenosLink" href="https://nosotros.gaeapeople.com/#about/team" target="_blank">Nuestro equipo</a>
      <a class="navConocenosLink" href="https://nosotros.gaeapeople.com/#about/testimonials" target="_blank">Testimonios</a>
      <a class="navConocenosLink" href="https://nosotros.gaeapeople.com/legal" target="_blank">Aviso Legal</a>
      <a class="navConocenosLink" href="https://nosotros.gaeapeople.com/terms" target="_blank">Términos y condiciones</a>
      <a class="navConocenosLink" href="https://nosotros.gaeapeople.com/legal" target="_blank">Política de cookies</a>
      <a class="navConocenosLink" href="https://nosotros.gaeapeople.com/#contact" target="_blank">Contacta</a>
    </nav>






    <ul class="navFavoritos">
      <h4 class="navFavoritosTitle">PRODUCTOS FAVORITOS</h4>

      <li class="navFavoritosItem">
        <a href="https://gaeasmartdata.com/" target="_blank">
          <h6 class="navFavoritosItemTitle">GAEA SMART DATA</h6>
          <p class="navFavoritosItemTxt">Tus decisiones serán más CERTERAS</p>
        </a>
      </li>

      <li class="navFavoritosItem">
        <a href="https://and7dclubs.com/" target="_blank">
          <h6 class="navFavoritosItemTitle">&7DCLUBS</h6>
          <p class="navFavoritosItemTxt">Tu PROPIA Herramienta de COMUNIDAD</p>
        </a>
      </li>

      <li class="navFavoritosItem">
        <a href="https://gaealearning.com/" target="_blank">
          <h6 class="navFavoritosItemTitle">GAEALEARNING</h6>
          <p class="navFavoritosItemTxt">Formación para tu adaptación DIGITAL</p>
        </a>
      </li>

      <li class="navFavoritosItem">
        <a href="https://aproposito.de/" target="_blank">
          <h6 class="navFavoritosItemTitle">APROPOSITO.DE</h6>
          <p class="navFavoritosItemTxt">Tu tarjeta digital para sincronizar todo tu iUniverso</p>
        </a>
      </li>

      <li class="navFavoritosItem">
        <a href="https://nosotros.gaeapeople.com/#contact" target="_blank">
          <h6 class="navFavoritosItemTitle">GP+ ACTIVO WIFI</h6>
          <p class="navFavoritosItemTxt">¿Tienes un HOTSPOT? Conoce a tu audiencia</p>
        </a>
      </li>

      <li class="navFavoritosItem">
        <a href="http://nosotros.gaeapeople.com/" target="_blank">
          <h6 class="navFavoritosItemTitle">CONTENT MARKETING</h6>
          <p class="navFavoritosItemTxt">Creamos tu contenido SEO</p>
        </a>
      </li>

      <li class="navFavoritosItem">
        <a href="http://saludenlared.com/" target="_blank">
          <h6 class="navFavoritosItemTitle">MEDICAL CONFERENCES CALENDAR</h6>
          <p class="navFavoritosItemTxt">La APP de agenda de eventos médicos que se conecta a tus webs</p>
        </a>
      </li>

      <li class="navFavoritosItem">
        <a href="http://nosotros.gaeapeople.com/" target="_blank">
          <h6 class="navFavoritosItemTitle">CREADORES DE IDEAS</h6>
          <p class="navFavoritosItemTxt">El espacio privado en tu web para ayudar a tu gente a INVENTAR</p>
        </a>
      </li>
    </ul>




    <a class="isologoCont loadingVisible" href="<?php echo site_url(''); ?>">
      <svg class="iso loadingVisible" viewBox="0 0 84.631 85.165">
        <path class="isoSquar loadingVisible" fill="currentColor" d="M43.67,37.389h29.396l-10.28,10.779c-0.481,0-19.195,0-19.115,0C43.67,47.204,43.67,37.389,43.67,37.389z"/>
        <path class="isoCircl loadingVisible" fill="currentColor" d="M73.146,48.088c3.854,0,7.63,0,11.404,0C83.186,64.256,68.888,83.803,44.874,85.09
        	C21.341,86.458,2.386,68.842,0.218,46.961C-2.191,22.75,15.639,2.479,38.128,0.226c24.737-2.494,44.254,16.087,46.503,37.164
        	c-1.928,0-3.854,0-5.702,0c-1.928,0-3.854,0-5.782,0c-1.606-8.125-5.542-14.801-12.208-19.707c-6.666-4.907-14.137-7-22.328-5.873
        	c-15.902,2.252-26.825,14.962-27.066,30.083c-0.322,15.445,10.681,28.638,25.54,31.293C52.666,76,70.014,65.866,73.146,48.088z"/>
      </svg>
      <svg class="logo" x="0px" y="0px" viewBox="8.892 28.215 350.399 85.164" enable-background="new 8.892 28.215 350.399 85.164">
        <!-- <g class="iso">
          <path class="isoCircl" fill="currentColor" d="M82.037,76.303c3.855,0,7.63,0,11.405,0c-1.365,16.168-15.662,35.715-39.677,37.002c-23.532,1.368-42.487-16.248-44.655-38.129C6.7,50.964,24.531,30.693,47.02,28.44c24.737-2.494,44.254,16.088,46.503,37.164c-1.928,0-3.855,0-5.702,0c-1.928,0-3.855,0-5.783,0c-1.606-8.125-5.542-14.801-12.208-19.708s-14.136-6.999-22.328-5.872c-15.902,2.252-26.825,14.962-27.066,30.084C20.114,85.553,31.116,98.745,45.976,101.4C61.557,104.215,78.906,94.08,82.037,76.303z"/>
          <path class="isoSquar" fill="currentColor" d="M52.562,65.604h29.396l-10.28,10.779c-0.481,0-19.195,0-19.115,0C52.562,75.418,52.562,65.604,52.562,65.604z"/>
        </g> -->
        <g class="logoGaea">
          <path data-letter="G" fill="currentColor" d="M136.894,56.997c-1.205,0-2.249,0-3.293,0c-1.124-2.413-2.811-4.344-5.06-5.792c-8.272-5.309-21.043-1.609-23.292,9.894c-1.124,5.711,0.241,10.86,4.498,14.961c2.569,2.494,5.703,3.701,9.155,4.022c4.017,0.402,7.871-0.321,11.084-2.896c3.133-2.494,4.258-5.792,3.936-9.814c-4.337,0-8.674,0-13.011,0c0-0.965,0-1.931,0-2.896c5.381,0,10.682,0,16.063,0c0,6.274,0,12.468,0,18.823c-0.963,0-1.927,0-2.971,0c0-1.85,0-3.7,0-5.791c-0.321,0.24-0.482,0.401-0.644,0.563c-3.052,3.379-6.986,4.826-11.404,5.067c-4.658,0.241-8.915-0.724-12.771-3.458c-4.498-3.299-6.988-7.803-7.47-13.354c-0.563-6.113,1.205-11.342,5.623-15.686c3.052-3.057,6.907-4.666,11.164-4.987c5.863-0.483,11.003,1.287,15.019,5.631c1.205,1.367,2.088,3.057,3.052,4.666C136.734,56.273,136.814,56.595,136.894,56.997z"/>
          <path data-letter="a" fill="currentColor" d="M158.821,68.821c0-1.608,0.16-3.217,0-4.746c-0.481-4.183-4.016-5.551-7.229-5.229c-1.526,0.161-2.972,0.644-4.176,1.77c-1.045,1.045-1.446,2.333-1.607,3.7c-1.044,0-1.927,0-3.052,0c-0.08-2.172,0.643-4.022,2.169-5.631c2.168-2.333,5.06-3.137,8.112-2.976c3.212,0.161,6.023,1.367,7.63,4.263c0.723,1.287,1.285,2.815,1.365,4.263c0.16,6.274,0.08,12.469,0.08,18.742c0,0.161,0,0.242-0.08,0.402c-0.965,0-1.928,0-2.972,0c0-0.805,0-1.527,0-2.413c-0.241,0.161-0.401,0.161-0.563,0.322c-3.855,2.493-7.871,2.735-12.047,0.965c-3.373-1.448-4.819-4.344-4.739-7.562c0.08-3.539,2.088-6.274,5.381-7.48C151.271,65.765,155.206,66.167,158.821,68.821zM144.845,74.773c0,2.253,0.884,3.861,2.972,4.746c2.973,1.287,6.024,1.127,8.835-0.482c2.973-1.77,3.133-6.354,0.161-8.205c-2.892-1.85-6.104-1.931-9.155-0.563C145.809,71.074,144.926,72.683,144.845,74.773z"/>
          <path data-letter="e" fill="currentColor" d="M189.582,75.98c1.044,0,2.169,0,3.374,0c-0.241,0.482-0.322,0.965-0.563,1.367c-2.008,3.54-5.14,5.391-9.075,5.873s-7.711-0.322-10.763-2.977c-2.49-2.172-3.935-4.987-4.337-8.285c-0.563-4.103,0.08-8.044,2.811-11.342c2.893-3.62,6.827-5.068,11.405-4.746c6.506,0.402,11.164,5.953,11.566,12.549c0.08,0.885,0,1.77,0,2.735c-7.55,0-15.021,0-22.489,0c-0.321,3.218,2.49,7.159,6.184,8.527C181.31,80.968,186.932,80.404,189.582,75.98z M171.27,68.098c6.506,0,13.011,0,19.518,0c-0.644-5.711-4.578-9.492-9.879-9.331C175.607,58.847,171.511,62.869,171.27,68.098z"/>
          <path data-letter="a" fill="currentColor" d="M218.497,83.462c-0.964,0-1.929,0-2.973,0c0-0.805,0-1.528,0-2.574c-1.687,1.367-3.373,2.091-5.301,2.333c-3.454,0.402-6.827,0.16-9.558-2.414c-4.337-4.183-2.892-11.422,2.811-13.514c4.177-1.528,8.193-1.045,11.968,1.609c-0.081-2.091,0.241-4.183-0.481-6.194c-1.125-3.218-4.177-4.103-6.907-3.861c-0.884,0.081-1.687,0.322-2.49,0.644c-2.089,0.885-3.133,2.574-3.293,4.827c-0.964,0-1.928,0-3.052,0c0-0.563,0-1.046,0.08-1.609c0.723-3.7,3.695-6.355,7.55-6.837c2.971-0.402,5.783,0,8.272,1.931c2.089,1.609,3.213,3.861,3.293,6.516c0.161,6.274,0.081,12.548,0.081,18.823C218.577,83.14,218.497,83.221,218.497,83.462z M201.389,74.533c0,2.493,0.964,4.102,2.892,4.986c3.053,1.287,6.104,1.207,8.995-0.482c2.973-1.689,3.053-6.354,0.161-8.205c-2.811-1.77-5.943-1.85-8.996-0.644C202.353,70.993,201.309,72.683,201.389,74.533z"/>
        </g>
        <g class="logoPeople">
          <path data-letter="P" fill="currentColor" d="M225.403,68.982c0,4.906,0,9.652,0,14.398c-0.562,0-1.124,0-1.686,0c0-11.181,0-22.442,0-33.704c0.321,0,0.642-0.081,0.883-0.081c3.293,0,6.586,0,9.96,0c5.3,0,9.558,4.344,9.558,9.653s-4.258,9.653-9.558,9.653C231.508,68.982,228.536,68.982,225.403,68.982z M225.564,51.366c0,5.309,0,10.618,0,15.927c0.321,0,0.644,0,0.964,0c2.812,0,5.622,0.081,8.354,0c4.176-0.161,7.389-3.62,7.469-7.722c0.081-4.424-2.971-7.963-7.228-8.125C231.909,51.205,228.696,51.366,225.564,51.366z"/>
          <path data-letter="e" fill="currentColor" d="M265.802,76.945c0.562,0,1.125,0,1.848,0c-0.481,1.609-1.365,2.816-2.57,3.781c-3.775,3.057-8.031,3.459-12.449,1.77c-4.257-1.608-6.505-5.067-7.148-9.492c-0.481-3.7,0.161-7.159,2.57-10.135c2.892-3.54,6.747-4.746,11.084-4.022c4.498,0.724,7.228,3.62,8.674,7.803c0.563,1.689,0.724,3.379,0.563,5.229c-3.614,0-7.148,0-10.683,0s-7.067,0-10.602,0c0.241,4.263,2.571,8.043,6.827,9.411C257.69,82.416,263.232,81.854,265.802,76.945zM266.766,70.27c-0.08-5.872-4.337-10.055-10.12-9.975c-5.22,0.081-9.638,4.666-9.558,9.975C253.755,70.27,260.26,70.27,266.766,70.27z"/>
          <path data-letter="o" fill="currentColor" d="M296.966,71.074c0,6.918-5.381,12.388-12.289,12.388c-6.907,0-12.368-5.47-12.368-12.469c0-6.917,5.461-12.307,12.368-12.307C291.665,58.686,296.966,64.076,296.966,71.074z M284.677,81.772c6.024,0,10.602-4.665,10.602-10.779c0-6.033-4.657-10.698-10.521-10.698c-5.944,0-10.682,4.666-10.682,10.698C274.076,77.026,278.734,81.772,284.677,81.772z"/>
          <path data-letter="p" fill="currentColor" d="M302.908,65.282c4.177-5.953,8.995-7.883,14.617-6.033c5.221,1.77,8.514,6.516,8.435,12.308c-0.081,5.229-3.695,9.895-8.675,11.342c-4.738,1.367-10.763,0.161-14.217-6.033c0,5.148,0,10.217,0,15.284c-0.562,0-1.124,0-1.686,0c0-11.101,0-22.282,0-33.463c0.481,0,0.964,0,1.605,0C302.908,60.697,302.908,62.869,302.908,65.282zM313.591,81.772c6.023,0,10.602-4.665,10.682-10.699c0-5.953-4.658-10.779-10.521-10.779c-6.024,0-10.764,4.746-10.684,10.779C302.989,77.026,307.647,81.772,313.591,81.772z"/>
          <path data-letter="l" fill="currentColor" d="M330.056,48.953c0.562,0,1.044,0,1.605,0c0,11.503,0,23.006,0,34.509c-0.481,0-1.044,0-1.605,0C330.056,71.959,330.056,60.456,330.056,48.953z"/>
          <path data-letter="e" fill="currentColor" d="M359.291,71.879c-7.148,0-14.216,0-21.283,0c-0.482,3.539,2.73,7.963,6.586,9.33c3.613,1.287,9.477,0.725,11.967-4.264c0.562,0,1.124,0,1.847,0c-0.16,0.483-0.32,0.886-0.562,1.287c-2.41,4.022-6.185,5.391-10.683,5.148c-7.711-0.482-11.646-6.998-10.923-13.675c0.482-4.746,2.65-8.446,7.229-10.135c8.674-3.298,15.582,2.896,15.822,10.699C359.291,70.752,359.291,71.235,359.291,71.879z M357.525,70.27c0.08-5.229-4.096-9.894-9.076-9.975c-5.943-0.161-10.44,4.022-10.521,9.975C344.513,70.27,351.019,70.27,357.525,70.27z"/>
        </g>
      </svg>
    </a>

    <nav class="smallNav">
      <a class="smallNavLink" href="#footer">Productos Favoritos</a>
      <span> / </span>
      <a class="smallNavLink" href="https://www.gaeapeople.com" target="_blank">Sobre Nosotros</a>
    </nav>

    <div class="suscriptions">
      <a href="">Canal RSS</a>
      <a href="">+ Subscribeme</a>
    </div>


    <?php $args = array(
    	'smallest'                  => 10,
    	'largest'                   => 10,
    	'unit'                      => 'pt',
    	'number'                    => 4,
    	'format'                    => 'flat',
      'separator'                 => " / ",
    	'orderby'                   => 'name',
    	'order'                     => 'ASC',
    	'exclude'                   => null,
    	'include'                   => null,
    	'link'                      => 'view',
    	'taxonomy'                  => 'post_tag',
    	'echo'                      => true,
    	'show_count'                  => 0,
    	'child_of'                  => null, // see Note!
    ); ?>
    <div class="nubeEtiq">
      <h5 class="nubeEtiqTitle">KWORDS</h5>
      <?php wp_tag_cloud( $args ); ?>
    </div>






    <!-- <script async src="https://cse.google.com/cse.js?cx=012193554652871164598:n4tjkqqjkvp"></script>
<div class="gcse-search"></div> -->





    <button class="burger" onclick="alternateNavBar()">
      <div class="burgerBar"></div>
      <div class="burgerBar"></div>
      <div class="burgerBar"></div>
    </button>
  </header>


  <nav class="navBarTop">
    <a class="navBarTopLink subrayable<?php if(is_category("marketing-estrategia")){echo ' subrayado"';} ?>" href="<?php echo site_url('/marketing-estrategia'); ?>">Marketing Strategy</a>
    <a class="navBarTopLink subrayable<?php if(is_category("salud-digital")){echo ' subrayado"';} ?>" href="<?php echo site_url('/salud-digital'); ?>">Digital Health</a>
    <a class="navBarTopLink subrayable<?php if(is_category("canal-digital")){echo ' subrayado"';} ?>" href="<?php echo site_url('/canal-digital'); ?>">Tech Channel</a>
    <a class="navBarTopLink subrayable<?php if(is_category("seo-contenidos")){echo ' subrayado"';} ?>" href="<?php echo site_url('/seo-contenidos'); ?>">Cool Content</a>
    <a class="navBarTopLink subrayable<?php if(is_category("events")){echo ' subrayado"';} ?>" href="<?php echo site_url('/events'); ?>">Events</a>
  </nav>
