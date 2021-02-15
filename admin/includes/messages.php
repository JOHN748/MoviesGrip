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