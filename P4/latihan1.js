// Demonstrasi Variabel
function demonstrasiVariabel() {
  const output = document.getElementById("output-variabel");

  let nama = "Nazriel Rahman Al'afath";
  const umur = 25;
  var aktif = true;

  let result = `
                <strong>Hasil Demo Variabel:</strong><br>
                Nama: ${nama} (tipe: ${typeof nama})<br>
                Umur: ${umur} (tipe: ${typeof umur})<br>
                Status: ${aktif} (tipe: ${typeof aktif})
            `;

  output.innerHTML = result;
  output.style.display = "block";

  // Output ke console juga
  console.log("=== Demo Variabel ===");
  console.log("Nama:", nama);
  console.log("Umur:", umur);
  console.log("Status:", aktif);
}

// Demonstrasi Tipe Data
function demonstrasiTipeData() {
  const output = document.getElementById("output-tipedata");

  let pesan = "Selamat belajar JavaScript!";
  let angka = 42;
  let desimal = 3.14;
  let benar = true;
  let buah = ["apel", "jeruk", "mangga"];
  let siswa = {
    nama: "Nazriel Rahman Al'afath",
    umur: 20,
    jurusan: "Informatika",
  };

  let result = `
                <strong>Hasil Demo Tipe Data:</strong><br>
                String: "${pesan}"<br>
                Number: ${angka}<br>
                Decimal: ${desimal}<br>
                Boolean: ${benar}<br>
                Array: [${buah.join(", ")}]<br>
                Object: ${JSON.stringify(siswa)}
            `;

  output.innerHTML = result;
  output.style.display = "block";

  console.log("=== Demo Tipe Data ===");
  console.log("String:", pesan);
  console.log("Number:", angka);
  console.log("Array:", buah);
  console.log("Object:", siswa);
}

// Demonstrasi Operator
function demonstrasiOperator() {
  const output = document.getElementById("output-operator");

  let a = 10;
  let b = 3;

  let result = `
                <strong>Hasil Demo Operator (a=${a}, b=${b}):</strong><br>
                Penjumlahan: ${a} + ${b} = ${a + b}<br>
                Pengurangan: ${a} - ${b} = ${a - b}<br>
                Perkalian: ${a} × ${b} = ${a * b}<br>
                Pembagian: ${a} ÷ ${b} = ${a / b}<br>
                Modulus: ${a} % ${b} = ${a % b}<br>
                <br><strong>Perbandingan:</strong><br>
                ${a} == ${b}: ${a == b}<br>
                ${a} > ${b}: ${a > b}<br>
                ${a} <= ${b}: ${a <= b}
            `;

  output.innerHTML = result;
  output.style.display = "block";

  console.log("=== Demo Operator ===");
  console.log("Penjumlahan:", a + b);
  console.log("a > b:", a > b);
}

// Demonstrasi Fungsi
function demonstrasiFungsi() {
  const output = document.getElementById("output-fungsi");

  // Function declaration
  function sapa(nama) {
    return "Halo, " + nama + "!";
  }

  // Function expression
  const perkalian = function (a, b) {
    return a * b;
  };

  // Arrow function
  const tambah = (a, b) => a + b;
  const kuadrat = (x) => x * x;

  let result = `
                <strong>Hasil Demo Fungsi:</strong><br>
                Function Declaration: ${sapa("Nazriel Rahman Al'afath")}<br>
                Function Expression: 5 × 3 = ${perkalian(5, 3)}<br>
                Arrow Function: 8 + 7 = ${tambah(8, 7)}<br>
                Arrow Function: 6² = ${kuadrat(6)}
            `;

  output.innerHTML = result;
  output.style.display = "block";

  console.log("=== Demo Fungsi ===");
  console.log("Sapa:", sapa("Nazriel Rahman Al'afath"));
  console.log("Perkalian:", perkalian(4, 5));
}

// Demonstrasi Kondisi
function demonstrasiKondisi() {
  const output = document.getElementById("output-kondisi");

  let nilai1 = 85;
  let nilai2 = 65;
  let nilai3 = 95;

  function getGrade(nilai) {
    if (nilai >= 90) {
      return "A";
    } else if (nilai >= 80) {
      return "B";
    } else if (nilai >= 70) {
      return "C";
    } else {
      return "D";
    }
  }

  function getStatus(nilai) {
    return nilai >= 75 ? "Lulus" : "Tidak Lulus";
  }

  let result = `
                <strong>Hasil Demo Kondisi:</strong><br>
                Nilai ${nilai1}: Grade ${getGrade(nilai1)} - ${getStatus(
    nilai1
  )}<br>
                Nilai ${nilai2}: Grade ${getGrade(nilai2)} - ${getStatus(
    nilai2
  )}<br>
                Nilai ${nilai3}: Grade ${getGrade(nilai3)} - ${getStatus(
    nilai3
  )}
            `;

  output.innerHTML = result;
  output.style.display = "block";

  console.log("=== Demo Kondisi ===");
  console.log(`Nilai ${nilai1}: Grade ${getGrade(nilai1)}`);
}

// Demonstrasi Loop
function demonstrasiLoop() {
  const output = document.getElementById("output-loop");

  let results = [];

  // For loop
  results.push("<strong>For Loop:</strong>");
  for (let i = 1; i <= 3; i++) {
    results.push(`Iterasi ke-${i}`);
  }

  // For...of
  results.push("<br><strong>For...of Loop:</strong>");
  let buah = ["apel", "jeruk", "mangga"];
  for (let item of buah) {
    results.push(`Buah: ${item}`);
  }

  // While loop
  results.push("<br><strong>While Loop:</strong>");
  let counter = 1;
  while (counter <= 3) {
    results.push(`Counter: ${counter}`);
    counter++;
  }

  output.innerHTML = results.join("<br>");
  output.style.display = "block";

  console.log("=== Demo Loop ===");
  console.log("For loop dan while loop telah dijalankan");
}

// Demonstrasi Array
function demonstrasiArray() {
  const output = document.getElementById("output-array");

  let numbers = [1, 2, 3, 4, 5];

  // Map
  let doubled = numbers.map((num) => num * 2);

  // Filter
  let evenNumbers = numbers.filter((num) => num % 2 === 0);

  // Reduce
  let sum = numbers.reduce((total, num) => total + num, 0);

  let result = `
                <strong>Hasil Demo Array Methods:</strong><br>
                Original: [${numbers.join(", ")}]<br>
                Doubled (map): [${doubled.join(", ")}]<br>
                Even numbers (filter): [${evenNumbers.join(", ")}]<br>
                Sum (reduce): ${sum}
            `;

  output.innerHTML = result;
  output.style.display = "block";

  console.log("=== Demo Array ===");
  console.log("Original:", numbers);
  console.log("Doubled:", doubled);
  console.log("Even:", evenNumbers);
  console.log("Sum:", sum);
}

// Demonstrasi Object
function demonstrasiObject() {
  const output = document.getElementById("output-object");

  let mahasiswa = {
    nama: "Ahmad Budi",
    nim: "12345678",
    jurusan: "Teknik Informatika",
    ipk: 3.75,
    aktif: true,

    perkenalan: function () {
      return `Halo, saya ${this.nama} dari ${this.jurusan}`;
    },
  };

  let jsonString = JSON.stringify({
    nama: mahasiswa.nama,
    nim: mahasiswa.nim,
    jurusan: mahasiswa.jurusan,
    ipk: mahasiswa.ipk,
  });

  let result = `
                <strong>Hasil Demo Object & JSON:</strong><br>
                Nama: ${mahasiswa.nama}<br>
                NIM: ${mahasiswa["nim"]}<br>
                Perkenalan: ${mahasiswa.perkenalan()}<br>
                <br><strong>JSON String:</strong><br>
                ${jsonString}
            `;

  output.innerHTML = result;
  output.style.display = "block";

  console.log("=== Demo Object ===");
  console.log("Mahasiswa:", mahasiswa);
  console.log("JSON:", jsonString);
}

// Demonstrasi Console
function demonstrasiConsole() {
  console.clear(); // Clear console

  console.log("=== Demo Console Methods ===");
  console.log("Pesan biasa dengan console.log()");
  console.warn("⚠️ Ini adalah warning!");
  console.error("❌ Ini adalah error message!");
  console.info("ℹ️ Ini adalah informasi");

  // Console dengan styling
  console.log(
    "%cTeks dengan styling!",
    "color: red; font-size: 18px; font-weight: bold;"
  );
  console.log(
    "%cTeks biru",
    "color: blue;",
    "%cdan teks hijau",
    "color: green;"
  );

  // Console table
  let data = [
    { nama: "Ahmad", umur: 25, jurusan: "Informatika" },
    { nama: "Budi", umur: 23, jurusan: "Sistem Informasi" },
    { nama: "Citra", umur: 24, jurusan: "Teknik Komputer" },
  ];
  console.table(data);

  // Console group
  console.group("📚 Data Mahasiswa");
  console.log("Nama: Ahmad");
  console.log("Jurusan: Informatika");
  console.log("Semester: 6");
  console.groupEnd();

  // Console time
  console.time("Timer Test");
  for (let i = 0; i < 1000; i++) {
    // Simulasi operasi
  }
  console.timeEnd("Timer Test");

  alert(
    "Console methods telah dijalankan! Buka Developer Tools (F12) → Console untuk melihat hasilnya."
  );
}

// Log saat halaman dimuat
console.log("📖 Halaman Pengenalan JavaScript telah dimuat!");
console.log(
  "Silakan klik tombol-tombol demo untuk melihat JavaScript beraksi!"
);
