// CRUD TAMBAH & SHOw
$(document).ready(function(){
    showUser();
    $(document).on('click', '#addnew', function(){
        if ($('#nama').val()=="" || $('#pesan').val()==""){
            alert('Please input data first');
        }
        else{
        $nama=$('#nama').val();
        $pesan=$('#pesan').val();             
            $.ajax({
                type: "POST",
                url: "create.php",
                data: {
                    nama: $nama,
                    pesan: $pesan,
                    add: 1,

                },
                success: function(){
                    $("#form")[0].reset();
                    alert ('Terimakasih atas doa & ucapan. Semoga doanya bisa berbalik kepada pemberinya.')
                    showUser();
                }
            });
        }
    });
});

function showUser(){
    $.ajax({
        url: 'show.php',
        type: 'POST',
        async: false,
        data:{
            show: 1
        },
        success: function(response){
            $('#userTable').html(response);
        }
    });
}


$(document).ready(function(){
    showUser();
    $(document).on('click', '#send', function(){
        if ($('#namaLengkap').val()==""){
            alert('Please input data first');
        }
        else{
        namaLengkap=$('#namaLengkap').val();
        konfir = $("input[type='radio']:checked").val();            
            $.ajax({
                type: "POST",
                url: "add.php",
                data: {
                    namaLengkap: namaLengkap,
                    konfir: konfir,
                    add: 1,

                },
                success: function(){
                    $("#add")[0].reset();
                    alert ('Terimakasih atas konfirmasi anda, besar harapan anda bisa hadir ke acara special kami.')
                }
            });
        }
    });
});