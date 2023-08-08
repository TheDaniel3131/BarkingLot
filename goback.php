<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="tabicon/icon.webp">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Denied</title>
</head>
<style>
		/* importing google fonts css*/
		@import url('https://fonts.googleapis.com/css2?family=Anek+Latin:wght@100;200;300;400;500;600;700;800&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito+Sans:wght@700&family=Poppins:wght@600&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:wght@600&family=Staatliches&family=Ubuntu&display=swap');

    html { box-sizing: border-box; }

    *,
    *::before,
    *::after { box-sizing: inherit; }
    
    body * {
      margin: 0;
      padding: 0;
    }
    
    body {
      font: normal 100%/1.15 "Poppins";
      background: white repeat 0 0;
/*      color: #fff;*/
    }
    
    /* https://www.vecteezy.com/vector-art/87721-wood-fence-vectors */
    .wrapper {
      position: relative;
      max-width: 1500px;
/*      height: auto;*/
/*      height: 750px;*/
      justify-content: center;
      align-items: center;
      margin: 2em auto 0 auto;
/*      background: transparent url("https://www.dropbox.com/s/qq5n8w99q40wtrg/wood-fence.png?raw=1") no-repeat center    top 24em;*/
/*      background: transparent url("img/woodfence.png") no-repeat center top 24em;*/
    }
    
    .image{
    	position: absolute;
    	margin-top: 185px;
    	margin-left: 475px;
    }
    /* https://www.vecteezy.com/vector-art/237238-dog-family-colored-doodle-drawing */
    .box {
      max-width: 70%;
      height: 150px;
      min-height: 100px;
      margin: 0 auto;
      padding: 1em 1em;
      text-align: center;
/*      background: transparent url("https://www.dropbox.com/s/ft9vhk6720t1k86/dog-family-colored-doodle-drawing.jpg?raw=1") no-repeat top 10em center;*/
    }
    
    h1 {
      margin: 0 0 1rem 0;
      font-size: 8em;
/*      text-shadow: 0 0 6px #8b4d1a;*/
      font-weight: 900;
      text-align: center;
      margin-left: -25px;
    }
    
    p {
/*      margin-top: -250px;*/
      font-size: 1.75em;
      color: #ea8a1a;
    } 
    
    p:first-of-type {
      margin-top: 10em;
      text-shadow: none;
      line-height: 2.0;
    }
    
    p > a {
      border-bottom: 1px dashed #837256;
      font-style: italic;
      text-decoration: none;
      color: #837256;
    }
    
    p > a:hover { text-shadow: 0 0 3px #8b4d1a; }
    
    p img { vertical-align: bottom; }
    
    @media screen and (max-width: 600px) {
      .wrapper {
        background-size: 300px 114px;
        background-position: center top 22em;
        }
    
      .box {
        max-width: 100%;
        margin: 0 auto;
        padding: 0;
        background-size: 320px 185px;
      }
    
      p:first-of-type { margin-top: 12em; }
    }

</style>
<body>

    <div class="wrapper">
     <div class="image">
    	<img src="img/woodfence.png" alt="wood">
    </div>
	    <div class="box">
		    <h1>404</h1>
		    <p>You are not allowed to be here. Please return back!</p>
		    <p><a href="#">Please, go back this way.</a></p>
	    </div>
    </div>

</body>
</html>