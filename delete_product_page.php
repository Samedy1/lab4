<!DOCTYPE html>
<html lang="en">
<head>
   <!-- limonte-sweetalert2 -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.min.css" integrity="sha512-cyIcYOviYhF0bHIhzXWJQ/7xnaBuIIOecYoPZBgJHQKFPo+TOBA+BY1EnTpmM8yKDU4ZdI3UGccNGCEUdfbBqw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.all.min.js" integrity="sha512-IZ95TbsPTDl3eT5GwqTJH/14xZ2feLEGJRbII6bRKtE/HC6x3N4cHye7yyikadgAsuiddCY2+6gMntpVHL1gHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<!-- You have to put the sweetalert2 script inside the body tag  -->
<body>
    <?php
        $id = $_GET['id'];
    ?>
    <script>
        $id = <?php echo $id ?>;
        Swal.fire({  
            title: 'Do you want to save the changes?',  
            showDenyButton: true,
            confirmButtonText: `Save`,  
            denyButtonText: `Don't save`,
            }).then((result) => {  
                /* Read more about isConfirmed, isDenied below */  
                if (result.isConfirmed) {    
                    // Swal.fire('Saved!', '', 'success');
                    window.open('delete_product_logic.php?id='+$id, '_self');
                } else if (result.isDenied) {    
                    // Swal.fire('Changes are not saved', '', 'info');
                    window.history.back();
                }
            });
    </script>
</body>
</html>

