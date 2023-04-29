// ======================== Biodata Wisatawan =====================
const biodata_wisatawan = document.querySelectorAll(".biodata_wisatawan"),
    button_pesan = document.querySelectorAll(".button-pesan"),
    biodata_close = document.querySelectorAll(".biodata_wisatawan-close")


let modal = function(click){
    biodata_wisatawan[click].classList.add("biodata-active")
}

button_pesan.forEach((button, i) => {
    button.addEventListener("click", () => {
        modal(i)
    })
})

biodata_close.forEach((close) => {
    close.addEventListener("click", ()=>{
        biodata_wisatawan.forEach((biodata_wisatawan_view) => {
            biodata_wisatawan_view.classList.remove("biodata-active")
        })
    })
})

const inputUmur = document.querySelector('input[name="umur"]');

// Umur tidak bisa diinput kurang dari 0
inputUmur.addEventListener('change', function() {
  if (this.value <= 0) {
    this.value = 1;
  }
});
