// ================ Pada Gambar Hotel ======================
var swiper = new Swiper('.swiper-container', {
  pagination: {
      el: '.swiper-pagination',
      clickable: true,
  },
  navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
  },
});


// ====================== Pada Beranda (Landing Page) ===========================
var mySwiper = new Swiper('.swiper-containers', {
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  loop: true,
  pagination: {
    el: '.swiper-pagination',
  },
});

// ============ Agar ketika nav diklik muncul sub menu ==========================
const galeri = document.querySelector('.nav_item:nth-of-type(3)');
const submenugaleri = galeri.querySelector('.submenugaleri');
galeri.addEventListener('click', function() {
    submenugaleri.classList.toggle('active');
    submenuwisata.classList.remove('active');
    submenupemandu.classList.remove('active');
    submenupengguna.classList.remove('active');
});

const wisataBandaAceh = document.querySelector('.nav_item:nth-of-type(4)');
const submenuwisata = wisataBandaAceh.querySelector('.submenuwisata');
wisataBandaAceh.addEventListener('click', function() {
    submenuwisata.classList.toggle('active');
    submenugaleri.classList.remove('active');
    submenupemandu.classList.remove('active');
    submenupengguna.classList.remove('active');
});

const pemanduWisata = document.querySelector('.nav_item:nth-of-type(5)');
const submenupemandu = pemanduWisata.querySelector('.submenupemandu');
pemanduWisata.addEventListener('click', function() {
    submenupemandu.classList.toggle('active');
    submenugaleri.classList.remove('active');
    submenuwisata.classList.remove('active');
    submenupengguna.classList.remove('active');
});

const userImg = document.querySelector('.img_pengguna');
const submenupengguna = document.querySelector('.submenupengguna');

userImg.addEventListener('click', function() {
    submenupengguna.classList.toggle('active');
    submenugaleri.classList.remove('active');
    submenuwisata.classList.remove('active');
    submenupemandu.classList.remove('active');
});

const menuWisata = document.querySelector('.nav_item--wisata');
const submenuWisata = document.querySelector('.submenu--wisata');
const content = document.querySelector('.header_content');

menuWisata.addEventListener('click', () => {
  const isOpen = submenuWisata.classList.contains('submenu--open');

  if (isOpen) {
    submenuWisata.classList.remove('submenu--open');
    content.style.maxHeight = 'none';
  } else {
    submenuWisata.classList.add('submenu--open');
    content.style.maxHeight = `${content.scrollHeight}px`;
  }
});

// =================== Map Banda Aceh =====================
function initMap() {
  // koordinat Banda Aceh
  var bandaAceh = {lat: 5.5560, lng: 95.3227};

  // buat peta dan tampilkan di elemen dengan id "map"
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 12,
    center: bandaAceh
  });

  // tambahkan marker di Banda Aceh
  var marker = new google.maps.Marker({
    position: bandaAceh,
    map: map
  });
}

// =================== Dashboard ===============================
/* globals Chart:false, feather:false */

(() => {
  'use strict'

  feather.replace({ 'aria-hidden': 'true' })

  // Graphs
  const ctx = document.getElementById('myChart')
  // eslint-disable-next-line no-unused-vars
  const myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [
        'Sunday',
        'Monday',
        'Tuesday',
        'Wednesday',
        'Thursday',
        'Friday',
        'Saturday'
      ],
      datasets: [{
        data: [
          15339,
          21345,
          18483,
          24003,
          23489,
          24092,
          12034
        ],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#007bff',
        borderWidth: 4,
        pointBackgroundColor: '#007bff'
      }]
    },
    options: {
      plugins: {
        legend: {
          display: false
        },
        tooltip: {
          boxPadding: 3
        }
      }
    }
  })
})()

