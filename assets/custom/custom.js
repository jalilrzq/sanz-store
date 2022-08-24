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