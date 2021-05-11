<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <style media="screen">
      ul.menu {
        list-style: none;
        display: flex;
        text-transform: uppercase;
        justify-content: center;
        padding: 0;
      }

      ul.menu > li {
        margin: 0 20px;
      }

      ul > li > a {
        text-decoration: none;
      }

      div {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 40px;
      }
      ul {
        list-style: none;
      }

      ul > li {
        margin: 5px 0;
      }
      
      ul > li > a > i {
        margin-right: 10px;
      }
    </style>
  </head>

  <body>
    <ul class="menu">
      <li><a href="/">Home</a></li>
      <li><a href="/about">About</a></li>
      <li><a href="/services">Services</a></li>
      <li><a href="/team">Team</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="/contacts">Contacts</a></li>
    </ul>
    <div>
      <p class="subtitle">Example Inc.</p>
      <p class="p-font">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <p class="p-font">Praesent diam lacus, dapibus sed imperdiet consectetur.</p>
      <ul>
        <li><a href="#"><i class="fas fa-phone-alt"></i>+1 (305) 1234-5678</a></li>
        <li><a href="#"><i class="fas fa-envelope"></i>hello@example.com</a></li>
        <li><a href="#"><i class="fas fa-map-marker-alt"></i>Main Avenue, 987</a></li>
      </ul>
    </div>
  </body>
</html>
