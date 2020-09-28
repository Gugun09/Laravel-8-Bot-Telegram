<div class="col-md-12">
    <div class="card mt-5 animate__animated animate__fadeInDown">
        <div class="card-body">
            <h5 class="card-title">
                <div class="float-right" id="clock"></div>
                <div class="" id="tanggaljs"></div>
            </h5>
            {{-- <p class="card-text text-center">belajar Laravel 8</p> --}}
            <p id="lihat_waktu" class="card-text text-center"></p>
        </div>
    </div>
</div>

{{-- <script type="text/javascript">
    function showTime() {
        var a_p = "";
        var m_p = "";
        var today = new Date();
        var curr_hour = today.getHours();
        var curr_minute = today.getMinutes();
        var curr_second = today.getSeconds();
        if (curr_hour < 12) {
            a_p = "AM";
        } else {
            a_p = "PM";
        }
        if ((curr_hour >= 6) && (curr_hour <= 11)) {
            m_l = "Selamat Pagi";
        } else if((curr_hour >=11) && (curr_hour <= 15)){
            m_l = "Selamat Siang";
        } else if((curr_hour > 15) && (curr_hour <= 18)){
            m_l = "Selamat Sore";
        } else{
            m_l = "Selamat Malam";
        }
        if (curr_hour == 0) {
            curr_hour = 12;
        }
        if (curr_hour > 12) {
            curr_hour = curr_hour - 12;
        }
        curr_hour = checkTime(curr_hour);
        curr_minute = checkTime(curr_minute);
        curr_second = checkTime(curr_second);
     document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
     document.getElementById('lihat_waktu').innerHTML=m_l;
        }

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }
    setInterval(showTime, 500);
    </script>

    <!-- Menampilkan Hari, Bulan dan Tahun -->
    <br>
    <script type='text/javascript'>
        var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        var date = new Date();
        var day = date.getDate();
        var month = date.getMonth();
        var thisDay = date.getDay(),
            thisDay = myDays[thisDay];
        var yy = date.getYear();
        var year = (yy < 1000) ? yy + 1900 : yy;
        document.getElementById('tanggaljs').innerHTML=thisDay + ', ' + day + ' ' + months[month] + ' ' + year;
        // document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
    </script> --}}
