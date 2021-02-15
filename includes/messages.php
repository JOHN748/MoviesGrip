<!-- Notification Message -->

<?php if (isset($_SESSION['message'])) : ?>
    <script>
        Swal.fire({
          position: 'center',
          icon: 'success',
          title : '<h1 style="color:#ff8080; font-family: lemonjelly; font-size: 2em;"><?php echo $_SESSION['message']; ?></h1>',
          html: '<h4 style="color: #333300;">Welcome to HeapShop!<h4>',
          background: 'url(assets/images/assets/trees.png)',
          width: 700,
          padding: '1em',
          showConfirmButton: false,
          timer: 4000
        })
    </script>
    <?php unset($_SESSION['message']); ?>
<?php endif ?>

<!-- Success Message -->

<?php if (isset($_SESSION['success'])) : ?>
    <script>
        const Toast = Swal.mixin({
          toast: true,
          position: 'top',
          showConfirmButton: false,
          timer: 3500,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })
         
        Toast.fire({
          icon: 'success',
          title: '<?php echo $_SESSION['success']; ?>'
        })
    </script>
    <?php unset($_SESSION['success']); ?>
<?php endif ?>

<!-- Error Message -->

<?php if (isset($_SESSION['error'])) : ?>
    <script>
        const Toast = Swal.mixin({
          toast: true,
          position: 'top',
          showConfirmButton: false,
          timer: 3500,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })
         
        Toast.fire({
          icon: 'error',
          title: '<?php echo $_SESSION['error']; ?>'
        })
    </script>
    <?php unset($_SESSION['error']); ?>
<?php endif ?>