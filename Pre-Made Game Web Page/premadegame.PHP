<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="buzz_css.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="https://cdn.firebase.com/js/client/2.2.7/firebase.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BUZZWORD BINGO</title>
</head>


<body><section id="lab">
<div id="sectionheader"> <img src="buzzword_logo.png"> </div>
    <!-- <table style= "width: 80%">
       <tr>
       <td > <div class='square' id="square-16">
                <div style="background-color: #F78462",>
              </div>
             </div>
         </div>
     </div> </td>
       <td> <div class='square' id="square-1">
                <div style="background-color: #F78462"
             </div>
         </div>
         </div> </td>
       <td> <div class='square' id="square-2">
                <div style="background-color: #f4e26d"
             </div>
         </div>
         </div>
     </td>
     <td> <div class='square' id="square-3">
                <div style="background-color: #F78462"
             </div>
         </div>
         </div> </td>
     </tr>
    <tr>
        <td>
        <div class='square' id="square-4">
                <div style="background-color: #F78462"
            </div>
         </div>
         </div>
            </td>
           <td> <div class='square' id="square-5">
                <div style="background-color: #F78462"
             </div>
         </div>
         </div>
     </td>
          <td> <div class='square' id="square-6">
                <div style="background-color: #F78462"
             </div>
         </div>
         </div>
            </td>
         <td>  <div class='square' id="square-7">
                <div style="background-color: #F78462"
             </div>
         </div>
         </div> </td>
     </tr>
             <tr>
                <td> <div class='square' id="square-8">
                <div style="background-color: #F78462"
             </div>
         </div>
         </div> </td>
    <td> <div class='square' id="square-9">
                <div style="background-color: #F78462"
             </div>
         </div>
         </div> </td>
    <td> <div class='square' id="square-10">
                <div style="background-color: #F78462"
             </div>
         </div>
         </div> </td>
        <td> <div class='square' id="square-11">
                <div style="background-color: #F78462"
             </div>
         </div>
         </div> </td>
     </tr>
  <td> <div class='square' id="square-12">
                <div style="background-color: #F78462"
             </div>
         </div>
         </div> </td>
            <td><div class='square' id="square-13">
                <div style="background-color: #F78462"
             </div>
         </div>
         </div> </td>
       <td> <div class='square' id="square-14">
                <div style="background-color: #F78462"
             </div>
         </div>
         </div> </td>
     <td><div class='square' id="square-15">
                <div style="background-color: #F78462"
              </div>
             </div>
         </div>
         </div>
     </td>
 </tr>
 -->
<div class='img-container'>
	<a href="index.html">
		<button class="home-page">Home Page</button>
	</a>
	<button id="make-new-board">New Game</button>
	</a>
	<h1 align="center">
		<font face="Calibri" color="#000" size="4">
			Get 4 in a row to win and discreetly signal BINGO
		</font>
	</h1>
 <table>
<tr>
<td id="square-0"></td>
<td id="square-1"></td>
<td id="square-2"></td>
<td id="square-3"></td>
</tr>
<tr>
<td id="square-4"></td>
<td id="square-5"></td>
<td id="square-6"></td>
<td id="square-7"></td>
</tr>
<tr>
<td id="square-8"></td>
<td id="square-9"></td>
<td id="square-10"></td>
<td id="square-11"></td>
</tr>
<tr>
<td id="square-12"></td>
<td id="square-13"></td>
<td id="square-14"></td>
<td id="square-15"></td>
</tr>
</table>
</div>
</section>
    <script src="bingo.js"></script>
</body>
</html>