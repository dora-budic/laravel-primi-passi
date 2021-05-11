<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
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

      ul.menu > li > a {
        text-decoration: none;
      }

      div {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 40px;
      }
      span {
        text-transform: uppercase;
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
      <span class="section-intro">introduction video</span>
      <h1>Advisory Performance</h1>
      <p>Financial executives need to review their strategies, operating models and capabilities
        so that their areas can generate sound information for better decision making.</p>
    </div>
  </body>
</html>
