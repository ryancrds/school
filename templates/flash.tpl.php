Swal.fire({
  position: 'top-end',
  icon: '<?php echo $data['type'] ?>',
  title: '<?php echo $data['message'] ?>',
  showConfirmButton: false,
  timer: 1500
});