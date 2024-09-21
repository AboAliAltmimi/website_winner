<?php
include './inc/db.php';
include  './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>

<?php include_once './parts/header.php';?>


<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto">
      <img src="./images/winerr.jpg" alt="">
      <h1 class="display-4 fw-normal">اربح معنا</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <h3 id="countdown"></h3>
      <p class="lead fw-normal">للسحب على نسخة مجانية من برنامج</p>
    </div>

    <div class="container">
      <h3>للدخول في السحب اتبع مايلي :</h3>
    <ul  class="list-group list-group-flush">
  <li class="list-group-item">متابعة البث المباشر على صفحتي على فيسبوك بالتواريخ المذكور أعلاه</li>
  <li class="list-group-item">سأقوم ببث مباشر لمدة ساعة من أسئلة وأجوبة حرة للجميع</li>
  <li class="list-group-item">للدخول للفترة العامة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك وإيميلك</li>
  <li class="list-group-item">في نهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
  <li class="list-group-item">الرابح سيحصل على نسخة مجانية من برنامج كامتازيا</li>
</ul>
    </div>
  </div>


<div class="container">
  

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
<form class="mt-5" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" >
  <h3>ارجاء ادخل  معلوماتك</h3>

  


  <div class="mb-3">
    <label for="firstName" class="form-label">الأسم الأول</label>
    <input type="text" name="firstName" class="form-control" id="firstName"  value="<?php echo $firstName ?>" >
    <div  class="form-text error"><?php echo $errors['firstNameError']?> 
  </div>
  </div>

  <div class="mb-3">
    <label for="lastName" class="form-label">اسم العائلة</label>
    <input type="text " name="lastName" class="form-control" id="lastName"  value="<?php echo $lastName ?>" >
    <div  class="form-text"><?php echo $errors['lastNameError']?></div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">البريد الألكتروني</label>
    <input type="text" name="email" class="form-control" id="email"  value="<?php echo $email ?>" >
    <div  class="form-text"><?php echo $errors['emailError']?></div>
  </div>
  
  <button type="submit"  name="submit" class="btn btn-primary">ارسل المعلومات</button>
</form>
</div>
</div>

</div>
<div class="loader-con">
<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>

<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
<button id="winner" type="button" class="btn btn-primary" >
اختيار الرابح
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">الرابح في المسابقة</h5>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user): ?>
      <h1 class="display-3   text-center modal-title" ><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']) ; ?> </h1>
      <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>









<?php include_once './parts/footer.php'; ?>