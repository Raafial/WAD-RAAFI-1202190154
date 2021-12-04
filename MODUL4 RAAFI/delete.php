<<<<<<< HEAD
<?php
require 'connect.php';

$id = $_GET['id'];

if( delete($id) > 0 ) {
    echo " 
    <script>
        alert('berhasil dihapus');
        document.location.href = 'bookings.php'; 
    </script> " ;
    
} else {
    echo "
    <script>
        alert('gagal dihapus');
        document.location.href = 'bookings.php'; 
    </script> " ;
}

=======
<?php
require 'connect.php';

$id = $_GET['id'];

if( delete($id) > 0 ) {
    echo " 
    <script>
        alert('berhasil dihapus');
        document.location.href = 'bookings.php'; 
    </script> " ;
    
} else {
    echo "
    <script>
        alert('gagal dihapus');
        document.location.href = 'bookings.php'; 
    </script> " ;
}

>>>>>>> 1519c09688e498bffc0c3dc6cc1bb7fae4a5ef26
?>