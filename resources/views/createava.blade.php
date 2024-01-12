@extends('layouts.main')

@section('container')

<head>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
* Template Name: Mentor - v4.0.1
* Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
======================================================== -->
</head>
<body>


 <main role="main">

   <div id="" class="" data-ride="">

<!-- Indicators -->


<!-- The slideshow -->
<div class="carousel-inner">
 <div class="carousel-item active">
   <img src="assets/img/bg.png" alt="" width="" height="">
   <div class="carousel-caption">
     <h3>Pick Your character here!!!</h3>
     <p>Temui lah karakter anda di dalam kubus Kala</p>
                   <div>
                     <label for="fname">Isi Nama Kamu</label><br>
                     <input type="text" id="fname" name="fname"><br>
                     <label for="fcontent"></label>
                     Tempat:<br>
                     <textarea placeholder="Type your name" id="fcontent" name="w3review" rows="1" cols="21" >Kala Kini Nanti</textarea>
                     <br>
                     <button id="create">Submit</button>
                     <button type="button" class="btn btn-sm btn-outline-danger" >
                     <a download="info.txt" id="downloadlink" style="display: none">Send Your Name</a></button>
                   </div>
   </div>
  </div>
 </div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
 <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
 <span class="carousel-control-next-icon"></span>
</a>
</div>

 <div class="container post">
       <div class="row">
         <div class="col-md-4">
           <div class="card mb-4 box-shadow">
           <div class="photo" onclick="" style="cursor: pointer;">
             <img class="card-img-top" src="assets/img/testing.png" alt="Card image cap">
             </div>
             <div class="card-body">
               <p class="card-text">Unarmed Walk Forward</p><div class="d-flex justify-content-between align-items-center">
                 <div class="btn-group">
                   <button type="button" class="btn btn-sm btn-outline-secondary" >
                   <a href="assets/fbx/Unarmed Walk Forward.fbx" download="Kala.fbx">Pick Avatar</a>
                   </button>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <div class="col-md-4">
           <div class="card mb-4 box-shadow">
           <div class="photo" onclick="" style="cursor: pointer;">
             <img class="card-img-top" src="assets/img/testing2.png" alt="Card image cap">
             </div>
             <div class="card-body">
               <p class="card-text">Breakdance Uprock Var 2</p>
               <div class="d-flex justify-content-between align-items-center">
                 <div class="btn-group">
                   <button type="button" class="btn btn-sm btn-outline-secondary" >
                   <a href="assets/fbx/Breakdance Uprock Var 2.fbx" download="Kala.fbx">Pick Avatar</a>
                   </button>
                 </div>
                 
               </div>
             </div>
           </div>
         </div>
         <div class="col-md-4">
           <div class="card mb-4 box-shadow">
           <div class="photo" onclick="" style="cursor: pointer;">
             <img class="card-img-top" src="assets/img/testing2.png" alt="Card image cap">
             </div>
             <div class="card-body">
               <p class="card-text">Breakdance Uprock Var 2</p>
               <div class="d-flex justify-content-between align-items-center">
                 <div class="btn-group">
                   <button type="button" class="btn btn-sm btn-outline-secondary" >
                   <a href="assets/fbx/Breakdance Uprock Var 2.fbx" download="Kala.fbx">Pick Avatar</a>
                   </button>
                 </div>
                 
               </div>
             </div>
           </div>
         </div>            
     </div>
     </div>
     </main>


   


   <!-- FOOTER -->
   <footer class="container">
     <p style="text-align: center;">&copy; Kala.Kini.Nanti 2022 </p>
   </footer>

   <script type="text/javascript">
(function() {
 var textFile = null,
     makeTextFile = function(text) {
         var data = new Blob([text], {
             type: 'text/plain'
         });

         if (textFile !== null) {
             window.URL.revokeObjectURL(textFile);
         }

         textFile = window.URL.createObjectURL(data);

         return textFile;
     };


 var create = document.getElementById('create');
 var fileContent = document.getElementById("fcontent");

 create.addEventListener('click', function() {
     const fileName = document.getElementById("fname").value;
     document.getElementById("downloadlink").setAttribute("download", fileName);
     var link = document.getElementById('downloadlink');
     link.href = makeTextFile(fileContent.value);
     link.style.display = 'block';
 }, false);
})();
</script>
</body>
@endsection
