console.log("script pratikum dijalankan");

const elNama = document.getElementById("nama-mhs");
const elNilai = document.getElementById("nilai-mhs");
const elStatus = document.getElementById("status-kelulusan");

const inputNama = document.getElementById("input-nama");
const inputNilai = document.getElementById("input-nilai");

document.getElementById("submit-btn").addEventListener("click", function () {
  const nama = inputNama.value;
  const nilai = parseInt(inputNilai.value);

  elNama.textContent = nama;
  elNilai.textContent = nilai;

  let pesanStatus = "";
  let isLulus;

  if (nilai >= 75) {
    pesanStatus = "Selamat, Anda Lulus!";
    isLulus = true;
  } else {
    pesanStatus = "Maaf, Anda Tidak Lulus.";
    isLulus = false;
  }

  elStatus.textContent = pesanStatus;

  if (isLulus === true) {
    elStatus.style.color = "green";
    elStatus.style.fontWeight = "bold";
    } else {
    elStatus.style.color = "red";
    elStatus.style.fontWeight = "bold";
  }
});