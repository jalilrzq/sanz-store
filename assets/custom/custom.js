var swiper = new Swiper(".mySwiperNew", {
  grabCursor: true,
  spaceBetween: 20,
  centeredSlides: false,
  slidesPerView: "auto",
  pagination: {
    el: ".swiper-pagination",
  },
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
});

// Untuk menampilkan harga sesuai dengan pilihan ukuran pada Form Order
function pilihUkuran(){
  let harga_ukuran = document.getElementById("ukuran").value;

  if (harga_ukuran=="20X30")
  {
    document.getElementById("harga-produk").value=45000;
  }
  else if (harga_ukuran=="30X40")
  {
    document.getElementById("harga-produk").value=75000;
  }
}

window.addEventListener('DOMContentLoaded', event => {

  // Toggle the side navigation
  const sidebarToggle = document.body.querySelector('#sidebarToggle');
  if (sidebarToggle) {
      // Uncomment Below to persist sidebar toggle between refreshes
      // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
      //     document.body.classList.toggle('sb-sidenav-toggled');
      // }
      sidebarToggle.addEventListener('click', event => {
          event.preventDefault();
          document.body.classList.toggle('sb-sidenav-toggled');
          localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
      });
  }

});

window.addEventListener('DOMContentLoaded', event => {
  // Simple-DataTables
  // https://github.com/fiduswriter/Simple-DataTables/wiki

  const datatablesSimple = document.getElementById('datatablesSimple');
  if (datatablesSimple) {
      new simpleDatatables.DataTable(datatablesSimple);
  }
});